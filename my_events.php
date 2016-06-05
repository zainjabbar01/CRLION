<div class="wrapper wrapper-content animated fadeIn">

<div class="row">
    <div class="col-xs-12 col-sm-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h2>Events</h2>
            </div>
            <div class="ibox-content">
                <div class="row">
                	<div class="col-xs-12">
                	<? # START TABS ?>
                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <? /*
							<li class=""><a data-toggle="tab" href="#tab-1"><i class="fa fa-calendar"></i>  Registered</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-2"><i class="fa fa-check"></i> Completed</a></li>
							*/ ?>
                            <li class="active"><a data-toggle="tab" href="#tab-3"><i class="fa fa-check"></i>Events</a></li>
                        </ul>
                        <div class="tab-content">
                            <? /*
                            <div id="tab-1" class="tab-pane">
                                <div class="panel-body">
                                	<div class="ibox">
                                    	<? for($i=0; $i<count($registered_events); $i++) { ?>
                                    		<div class="ibox-content" style="border:1px solid #e7eaec; margin:5px;">
                                            	<div class="row">
                                                	<div class="col-xs-2"><img src="<?=ADMIN_PROJECT_PATH?>assets/img/templates/template<?=$registered_events[$i]['template_id']?>.jpg" /></div>
                                                    <div class="col-xs-4 m-t-sm">
                                                    	<?='On ' . $registered_events[$i]['start_date'] . ' (' . $registered_events[$i]['event_days_left'] . ' days to go) ' ;?>
                                                        <br />
                                                        <?='<a href="' . PROJECT_PATH . 'event/event_detail/' . $registered_events[$i]['event_id'] . '">'.$registered_events[$i]['event_name'].'</a>'; ?>
                                                    </div>
                                                    <div class="col-xs-3 m-t-md">
                                                    	<img src="<?=ADMIN_PROJECT_PATH?>assets/img/table_meeting.png" class="pull-left" style="width: 60px;" /> 
                                                        <div class="pull-left m-l-sm m-t-lg" style="font-weight:bold;"><?=$registered_events[$i]['meeting']?> ONGOING MEETING</div>
                                                    </div>
                                                    <div class="col-xs-3 m-t-md">
                                                    	<img src="<?=ADMIN_PROJECT_PATH?>assets/img/hand_shake.png" class="pull-left m-t-md" style="width: 60px;" /> 
                                                        <div class="pull-left m-l-sm m-t-lg" style="font-weight:bold;"><?=$registered_events[$i]['workshop']?> ONGOING MEETING</div>
                                                    </div>
                                                </div>
                                            </div>
                                        <? } ?>
									</div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane">
                                <div class="panel-body">
                                    <div class="ibox">
                                        <? for($i=0; $i<count($registered_events); $i++) { ?>
                                            <div class="ibox-content" style="border:1px solid #e7eaec; margin:5px;">
                                                <div class="row">
                                                    <div class="col-xs-2"><img src="<?=ADMIN_PROJECT_PATH?>assets/img/templates/template<?=$registered_events[$i]['template_id']?>.jpg" /></div>
                                                    <div class="col-xs-4 m-t-sm">
                                                        <?='On ' . $registered_events[$i]['start_date'] . ' (' . $registered_events[$i]['event_days_left'] . ' days to go) ' ;?>
                                                        <br />
                                                        <?=$registered_events[$i]['event_name']; ?>
                                                    </div>
                                                    <div class="col-xs-3 m-t-md">
                                                        <img src="<?=ADMIN_PROJECT_PATH?>assets/img/table_meeting.png" class="pull-left" style="width: 60px;" /> 
                                                        <div class="pull-left m-l-sm m-t-lg" style="font-weight:bold;"><?=$registered_events[$i]['meeting']?> ONGOING MEETING</div>
                                                    </div>
                                                    <div class="col-xs-3 m-t-md">
                                                        <img src="<?=ADMIN_PROJECT_PATH?>assets/img/hand_shake.png" class="pull-left m-t-md" style="width: 60px;" /> 
                                                        <div class="pull-left m-l-sm m-t-lg" style="font-weight:bold;"><?=$registered_events[$i]['workshop']?> ONGOING MEETING</div>
                                                    </div>
                                                </div>
                                            </div>
                                        <? } ?>
                                    </div>
                                </div>
                            </div>
                            */ ?>
                            <div id="tab-3" class="tab-pane active">
                                <div class="panel-body">
                                    <div class="ibox">
                                        <? for($i=0; $i<count($all_events); $i++) { ?>
                                            <div class="ibox-content" style="border:1px solid #e7eaec; margin:5px;">
                                                <div class="row">
                                                    <div class="col-xs-2"><img src="<?=PROJECT_PATH?>assets/template<?=$all_events[$i]['template_id']?>/template<?=$all_events[$i]['template_id']?>.jpg?id=<?=time()?>" width="80%" /></div>
                                                    <div class="col-xs-6 m-t-sm">
                                                        <?='On ' . $all_events[$i]['start_date'] . ' (' . $all_events[$i]['event_days_left'] . ' days to go) ' ;?>
                                                        <br />
                                                        <a href="<?=base_url()?>event/event_detail/<?=$all_events[$i]['event_id']?>"><?=$all_events[$i]['event_name']; #'<a href="' . PROJECT_PATH . 'event/event_detail/' . $all_events[$i]['event_id'] . '">' . $all_events[$i]['event_name'] . '</a>'; ?></a>
                                                    </div>
                                                    <div class="col-xs-3 m-t-md">
                                                    	<? /*
                                                        <select onchange="event_detail(this, <?=$all_events[$i]['event_id']?>)">
                                                        <option value="">With Event go to </option>
                                                        <option value="1">Request Meeting</option>
                                                        <option value="2">Accept / Reject Meeting</option>
                                                        </select>
														*/ ?>
                                                    </div>
                                                    <? /*
                                                    <div class="col-xs-3 m-t-md">
                                                        <img src="<?=ADMIN_PROJECT_PATH?>assets/img/table_meeting.png" class="pull-left" style="width: 60px;" /> 
                                                        <div class="pull-left m-l-sm m-t-lg" style="font-weight:bold;"><?=$all_events[$i]['meeting']?> ONGOING MEETING</div>
                                                    </div>
                                                    <div class="col-xs-3 m-t-md">
                                                        <img src="<?=ADMIN_PROJECT_PATH?>assets/img/hand_shake.png" class="pull-left m-t-md" style="width: 60px;" /> 
                                                        <div class="pull-left m-l-sm m-t-lg" style="font-weight:bold;"><?=$all_events[$i]['workshop']?> ONGOING MEETING</div>
                                                    </div>
													*/ ?>
                                                </div>
                                            </div>
                                        <? } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <? # END TABS ?> 
                    </div>
                </div>
              
            </div>
        </div>
    
    </div>
    
</div>        

</div>


<script language="javascript">
$(document).ready(function() {
  
	$("#owl-speakers").owlCarousel({
	
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		
		items : 4,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,3]
	
	});
	
	$("#owl-sponsors").owlCarousel({
	
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		
		items : 4,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,3]
	
	});
	
	$("#owl-exhibitors").owlCarousel({
	
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		
		items : 4,
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [979,3]
	
	});

});

function event_detail(obj, event_id) {
	if(obj.value == 1) 
		location.href = '<?=PROJECT_PATH?>RequestMeeting/index/' + event_id;
	else if(obj.value == 2) 
		location.href = '<?=PROJECT_PATH?>meeting/accept_reject_meeting/' + event_id;
}

function register_event() {
	$('#event-register-option button').attr('disabled', 'true');
	$.ajax({
		url: '<?=PROJECT_PATH ?>event/register',
		method: "POST",
		data: { 'register_event' : 'Y', 'event_id' : '<?=$event_array[0]['event_id']?>'},
		dataType: "json",	
		complete: function(response, status) {
			if(status == 'success') { 	
				var json = response.responseJSON;

				if(json.status.toLowerCase() == "success") {
					$('#event-register-option').html('<span class="label label-success" style="min-width:80px;">Registered</span>')					
				} else {
					swal(json.status, json.statusMessage, json.status.toLowerCase());
					$('#event-register-option button').removeAttr('disabled');
				}
				
			}	// End if status == success 		
		}
	}).fail(function( jqXHR, textStatus ) {
		if(jqXHR.status == 404)
			alert( "page not found" );
		else	
			alert( "Request failed: " + textStatus );
	});	
}
</script>