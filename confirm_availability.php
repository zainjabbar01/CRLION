<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Match Making | Event Management</h2>
        <ol class="breadcrumb">
            <li>Event</li>
            <li><?=$event_name?></li>
            <li class="active">
                <strong>Session Availability</strong>
            </li>
        </ol>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeIn">
<div class="row">
	<div class="col-sm-12">
    	<h2>Confirm your availability</h2>
    	<p>For a non strategic matchmaking activity, you have flexibility to confirm session timings and choose whom you want to meet in the each activities and sessions. </p>
    </div>
</div>
<div class="ibox">
	<div class="ibox-title">
        <div class="pull-left"><img src="<?=ADMIN_PROJECT_PATH?>assets/img/templates/<? if($template_pic != '') echo $template_pic; else echo 'no-pic.jpg';?>" class="img-rounded" style="width: 40px; margin-right: 15px;"></div>
        <h5><?=$event_name?></h5>
        <?
        $total_accepted = 0;
		$total_rejected = 0;
        for($i=0; $i<count($activity_detail); $i++) {
			if($activity_detail[$i]['available'] == 'Y') 
				$total_accepted++;
			else if($activity_detail[$i]['available'] == 'N') 
				$total_rejected++;	
		}
		?>
        <div class="pull-right text-center m-r-xl"><? echo '<b>' . $total_rejected . '</b><br>Rejected '; ?></div>
        <div class="pull-right text-center m-r-xl"><? echo '<b>' . $total_accepted . '</b><br>Accepted'; ?></div>
        <div class="clearfix"></div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12">
    	<div class="ibox feed-activity-list">
		<?
		$activity_type_name = '';
		$activity_id = '';
        for($i=0; $i<count($activity_detail); $i++) {
			if($activity_type_name == '' || $activity_type_name != $activity_detail[$i]['activity_type_name']) { 
				if($activity_type_name != '') {
					echo '</div>';					
				}
				
				$activity_type_title_desc = 'Workshop';
				if($activity_detail[$i]['activity_type_id'] == 2) $activity_type_title_desc = 'One - One Session & Non Strategic Matchmaking'; 
				else if($activity_detail[$i]['activity_type_id'] == 1) $activity_type_title_desc = 'One - Many Sessions & Strategic Matchmaking';
									
				echo '<div class="ibox-title m-t-md">
							<div class="row"><div class="col-xs-12"><h5>' . $activity_detail[$i]['activity_type_name'] . '</h5></div></div>
							<div class="row"><div class="col-xs-12"><i class="fa fa-eraser"></i> &nbsp;' .$activity_type_title_desc . '</div></div>
						</div>
						<div class="ibox-content">
							<div class="row">
								<div class="col-xs-12"><small>SESSION SCHEDULE</small></div>
							</div>
						'; 
						
				$activity_type_name = $activity_detail[$i]['activity_type_name'];
            }
			
			if($activity_id == '' || $activity_id != $activity_detail[$i]['activity_id']) {
				echo '<div class="row">
								<div class="col-xs-12 m-b-md">
									<h2>' . $activity_detail[$i]['activity_name'] . '</h2>
								</div>
							</div> ';
				$counter = 1;
				$activity_id = $activity_detail[$i]['activity_id'];	
			}
			
            ?>
            
                <div class="row feed-element">
                	<div class="col-xs-3"><?=$activity_detail[$i]['start_time'] . ' - ' . $activity_detail[$i]['end_time']; ?></div>
                    <div class="col-xs-5"><?=$activity_detail[$i]['activity_name'] . ' ' . $counter; ?></div>
                    <div class="col-xs-2"><button type="button" class="btn btn-gray <? if($activity_detail[$i]['available'] == 'Y') echo ' btn-success'; ?>" id="btn-<?=$activity_detail[$i]['activity_detail_id']?>-1" onclick="make_availablity(<?=$event_id . ", " . $activity_detail[$i]['activity_id'] . ", " . $activity_detail[$i]['activity_detail_id'] . ", 'Y' " ?>, this)">I am Available</button></div>
                    <div class="col-xs-2"><button type="button" class="btn btn-gray <? if($activity_detail[$i]['available'] == 'N') echo ' btn-success'; ?>" id="btn-<?=$activity_detail[$i]['activity_detail_id']?>-2" onclick="make_availablity(<?=$event_id . ", " . $activity_detail[$i]['activity_id'] . ", " . $activity_detail[$i]['activity_detail_id']. ", 'N' "  ?>, this)">Not Available</button></div>
                </div>
		<?
			$counter++;
		}
		if(count($activity_detail) > 0)
			echo '</div>';
		?>
        </div>
    </div>
</div>
<div class="row">
	<div class="col-sm-12 m-b-md">
    	<button class="btn btn-success pull-right" onclick="location.href='<?=PROJECT_PATH?>event/availability_finish/<?=$event_id?>'">Confirm your availability</button>
    </div>
</div>

</div>
<script language="javascript">
function make_availablity(event_id, activity_id, activity_detail_id, availability, obj) {
	obj.disabled = true;
	obj.value = '';
	
	$("#btn-"+activity_detail_id+"-1").removeClass('btn-success');
	$("#btn-"+activity_detail_id+"-2").removeClass('btn-success');
	
	$("#btn-"+activity_detail_id+"-1").html('...');
	$("#btn-"+activity_detail_id+"-2").html('...');
	
	$.ajax({
		url: '<?=PROJECT_PATH ?>event/activity_detail_register',
		method: "POST",
		data: { 'register_activity' : 'Y', 'event_id' : event_id, 'activity_id':activity_id, 'activity_detail_id': activity_detail_id, 'availability':availability},
		dataType: "json",	
		complete: function(response, status) {
			obj.disabled = false;
			if(status == 'success') { 	
				var json = response.responseJSON;

				if(json.status.toLowerCase() == "success") {
					if(availability == 'Y') {
						$("#btn-"+activity_detail_id+"-1").addClass('btn-success');
						$("#btn-"+activity_detail_id+"-1").html('I am Available <fa class="fa fa-check"></fa>');
						$("#btn-"+activity_detail_id+"-2").html('Not Available');
					} else {
						$("#btn-"+activity_detail_id+"-2").addClass('btn-success');
						$("#btn-"+activity_detail_id+"-1").html('I am Available');
						$("#btn-"+activity_detail_id+"-2").html('Not Available <fa class="fa fa-check"></fa>');
					}
							
				} else {
					swal(json.status, json.statusMessage, json.status.toLowerCase());
					
					if(availability == 'Y') 
						$("#btn-"+activity_detail_id+"-2").addClass('btn-success');
					else
						$("#btn-"+activity_detail_id+"-1").addClass('btn-success');
							
					$("#btn-"+activity_detail_id+"-1").html('I am Available');
					$("#btn-"+activity_detail_id+"-2").html('Not Available');
				}
				
			}	// End if status == success 		
		}
	}).fail(function( jqXHR, textStatus ) {
		
		if(availability == 'Y') 
			$("#btn-"+activity_detail_id+"-2").addClass('btn-success');
		else
			$("#btn-"+activity_detail_id+"-1").addClass('btn-success');
			
		$("#btn-"+activity_detail_id+"-1").html('I am Available');
		$("#btn-"+activity_detail_id+"-2").html('Not Available');
						
		if(jqXHR.status == 404)
			alert( "page not found" );
		else	
			alert( "Request failed: " + textStatus );
	});	
}
</script>