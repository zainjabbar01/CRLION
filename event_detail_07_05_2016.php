<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Event Management</h2>
        <ol class="breadcrumb">
            <li><a href="<?=PROJECT_PATH?>event/event_detail/<?=$event_array[0]['event_id']?>">Event</a></li>
            <li class="active">
                <strong><?=$event_array[0]['event_name']?></strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>

<div class="wrapper wrapper-content animated fadeIn">
<style type="text/css">
.events_attend i {
    float: left;
    margin-top: 5px;
    width: 20px;
	list-style:none;
}
</style>
<div class="row">
    <div class="col-xs-12 col-sm-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5><?=$event_array[0]['event_name']?></h5>
            </div>
            <div class="ibox-content" style="min-height: 340px;">
                <div class="row">
                	<? /*
                    <div class="col-sm-5 text-center">
                        <img src="<?=PROJECT_PATH?>assets/template<?=$event_array[0]['template_id']?>/template<?=$event_array[0]['template_id']?>.jpg?id=<?=time()?>" width="80%" class="img-rounded" alt="image">
                    </div>
					*/ ?>
                    <div class="col-sm-12">
                        <h3><?=$event_array[0]['event_name']?></h3>
                        <p></p>
                        <div class="row1">
                            <span class="fa fa-map-marker"></span>
                            <?=$event_array[0]['location']; ?> <br />
                            <?=$event_array[0]['city_name'] . ' ' . $event_array[0]['state_name']; ?>
                        </div>
                        <p></p>
                        <div class="row1">
                            <span class="fa fa-calendar"></span>
                            <small class="text-muted">On <?=$event_array[0]['event_start_date']?> at <?=$event_array[0]['event_start_time']?></small>
                        </div>
                    </div>
                </div>
                <div class="row" style="min-height:30px;"></div>
                <div class="row">
                	<div class="col-xs-12"><h2>DESCRIPTION</h2></div>
                </div>
                <div class="row" style="min-height:130px;">
                	<div class="col-xs-12"><?=$event_array[0]['event_desc']?></div>
                </div>
            </div>
        </div>
    
    </div>
    <div class="col-xs-12 col-sm-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="pull-left fa fa-shopping-cart" style="font-size:18px;"></span>
                <h5>EVENT CART</h5>
                <span class="pull-right">
                	<span class="fa fa-download"></span>
                    &nbsp; 
                	<a href="<?=PROJECT_PATH?>event/eventDownload/<?=$event_array[0]['event_id']?>" target="_blank">Download</a>
                </span>
            </div>
            <div class="ibox-content" style="min-height: 340px;">
                <div class="row">
                    <div class="col-sm-8">Activity Fee</div>
                    <div class="col-sm-3 text-right"><b>$<span id="activity_fee"><? echo 0.00; # $event_array[0]['activity_fee']?>.00</span></b></div>
                </div>
                <div class="row">
                    <div class="col-sm-8">Workshop Fee</div>
                    <div class="col-sm-3 text-right"><b>$<span id="workshop_fee"><? echo 0.00; # $event_array[0]['workshop_fee']?>.00</span></b></div>
                </div>
                <div class="row">
                	<div class="col-sm-8">Sponsor Level Fee</div>
                    <div class="col-sm-3 text-right"><b>$<span id="sponsor_level_fee"><? echo 0.00; # if($event_array[0]['sponsor_level_fee'] == '') echo 0; else echo $event_array[0]['sponsor_level_fee']; ?>.00</span></b></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="row">
                    <div class="col-sm-8"><b>TOTAL</b></div>
                    <div class="col-sm-3 text-right"><b>$<span id="total_fee"><? echo 0.00; # if($event_registered == 'N') echo 0; else { if($event_paid_fee > 0) echo $event_paid_fee; else echo ($event_array[0]['activity_fee'] + $event_array[0]['workshop_fee']); } ?>.00</span></b></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="row">
                    <div class="col-sm-4"><h3>Extra Tickets</h3></div>
                	<div class="col-sm-1"><input type="checkbox" id="extra_ticket" onclick="$('#no_of_tickets').toggle();" /></div>
                    <div class="col-sm-6"><input type="text" class="form-control" id="no_of_tickets" placeholder="Number of Tickets" style="display:none" maxlength="5" onkeyup="validateFieldLength(this, 2, 5)" /></div>
                </div>    
                <div class="hr-line-dashed"></div>
                <div class="row">
                    <div class="col-sm-4"><h3>Payment Option</h3></div>
                	<div class="col-sm-6">
                    	<input type="radio" name="payment_option" checked="checked" onclick="$('#payment_address').css('display','none')" />
                        Credit Card &nbsp;&nbsp;
                    	<input type="radio" name="payment_option" onclick="$('#payment_address').css('display','')" />
                    	Pay By Cheque    
					</div>
                </div>
                <div class="row" id="payment_address" style="display:none">
                    <div class="col-sm-4"><h3>Payment Address</h3></div>
                	<div class="col-sm-6"><?=$event_array[0]['payment_address']?></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="row">
                	<div class="col-sm-12">
                    	<div id="event-register-option" class="pull-right" style="font-weight:bold">
                        	<? #if($event_registered == 'N') { ?>
                            	<button type="button" class="btn btn-block btn-primary" onclick="register_event()">Register</button>
                            <? #} else echo //'<button type="button" class="btn btn-block btn-primary" onclick="register_event()">Register</button>'; //.
										#	'<span class="label label-success" style="min-width:80px;">Registered</span>'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<div class="row m-b-md">
	<div class="col-lg-<? if($invited_by == '') echo 6; else echo 12; ?>">
		<div class="ibox">
        	<div class="ibox-title">
            	<h5>ACTIVITIES</h5>
            </div>
            <div class="ibox-content" id="activity_level_grid">
				<div class="row">
                <? 
				//echo "<pre>"; print_r($activityData); echo "</pre>";
                for($i=0; $i<count($activityData); $i++) 
                { 
                    //if($i % 2 == 0) {
                        if($invite_id != '') echo '</div><div class="row">';	
                    //}
                ?>
                <div class="col-lg-<? if($invited_by != '')  echo 6; else echo 12;?>">
                    <div class="ibox" style="border:1px solid #cecece">
                        <div class="ibox-content" style="padding-top:15px;">
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="<?=ADMIN_PROJECT_PATH?>assets/img/<? if($activityData[$i]['activity_type_id'] == 1) echo 'table_meeting.png'; else if($activityData[$i]['activity_type_id'] == 2) echo 'hand_shake.png'; else echo 'workshop.png'; ?>" style="height:33px; width:50px; margin-right:20px;" class="pull-left" />
                                </div>
                                <div class="col-sm-7">
                                    <h5><?=$activityData[$i]['activity_name']?></h5>
                                </div>
                                <div class="col-sm-3">
                                	<?
                                    	$activity_fee = $activityData[$i]['fee'];
										if(in_array($activityData[$i]['activity_id'], $event_free_activities)) {
											$activity_fee = 0;	
										}
									?>
                                    <? if($activityData[$i]['user_type_id'] != '' ) { #&& $activityData[$i]['fee'] != 0 ?>
                                    <span class="label label-success">$<?=$activity_fee ?></span>
                                    <button class="btn btn-default btn-block" style="display:none">$<?=$activity_fee ?></button>
                                    <? } ?>
                                    <?
									if($activityData[$i]['user_registered_in_activity'])
                                    	echo '<span class="label label-success" style="min-width:80px;">Registered</span>';
									?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul class="events_attend">
                                        <li>
                                            <i class="fa fa-clock-o pull-left"></i>
                                            <div><small><?=' On ' . $activityData[$i]['activity_date'] . ' from ' .  $activityData[$i]['start_time'] . ' to ' . $activityData[$i]['end_time']; ?></small></div>
                                        </li>
                                        <li>
                                            <i class="fa fa-eraser"></i>
                                            <div><small>
                                                <? 
                                                if($activityData[$i]['activity_type_id'] == 2) echo 'One - One Session & Non Strategic Matchmaking'; 
                                                else if($activityData[$i]['activity_type_id'] == 1) echo 'One - Many Sessions & Strategic Matchmaking'; 										
                                                ?>
                                            </small></div>
                                        </li>
                                        <li style="display:none">
                                            <i class="fa fa-tint"></i>
                                            <div><small>Table 2</small></div>
                                        </li>
                                    </ul>
                                    <p>
                                        <?=$activityData[$i]['activity_desc']; ?>
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12"><hr /></div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8"></div>
                                <div class="col-lg-4">
                                    <? 
									//if($event_registered == 'N' && ($activityData[$i]['seats'] - $mm_event_activity_register[$activityData[$i]['activity_id']]) > 0 ) 
									if(!$activityData[$i]['user_registered_in_activity'] && ($activityData[$i]['seats'] - $mm_event_activity_register[$activityData[$i]['activity_id']]) > 0 ) { 
									?>
                                    <button class="btn btn-success btn-block" id="btn-<?=$activityData[$i]['activity_id']?>-1" onclick="book_activity(<?=$activityData[$i]['activity_id'] . ", '" . $activity_fee . "', " . $i . ", " ?> 'Y'); make_availablity(<?=$activityData[$i]['event_id'] . ", " . $activityData[$i]['activity_id'] . ", 'Y', " ; ?> this)">Join</button>
                                    <button class="btn btn-success btn-block" id="btn-<?=$activityData[$i]['activity_id']?>-2" onclick="book_activity(<?=$activityData[$i]['activity_id'] . ", '" . $activity_fee . "', " . $i . ", " ?> 'N'); make_availablity(<?=$activityData[$i]['event_id'] . ", " . $activityData[$i]['activity_id'] . ", 'N', " ; ?> this)" style="display:none">Withdrawal</button>
                                    <? } ?>
                                    <input type="hidden" name="hd_activity_id[]" />
                                    <input type="hidden" name="hd_activity_fee[]" />
                                    <input type="hidden" name="hd_activity_type_id[]" value="<?=$activityData[$i]['activity_type_id']?>" />
                                    
                                </div>
                                <p class="text-center">
                                	<? 
									if($activityData[$i]['user_type_id'] != '') {  #&& $activityData[$i]['fee'] != 0
									
									if($mm_event_activity_register[$activityData[$i]['activity_id']] != '') 
										$remaining_seats = ($activityData[$i]['seats'] - $mm_event_activity_register[$activityData[$i]['activity_id']]); 
									else 
										$remaining_seats = $activityData[$i]['seats'];
									
									$style = '';
									if($remaining_seats <= 0)
										$style = ' style="color:red; font-weight:bold;" ';
									?>
                                    <small <?=$style?>>
										<? #if($mm_event_activity_register[$activityData[$i]['activity_id']] != '') echo ($activityData[$i]['seats'] - $mm_event_activity_register[$activityData[$i]['activity_id']]); else echo $activityData[$i]['seats']; ?> 
                                        <? echo $remaining_seats; ?>
                                        <? # 'of '. $activityData[$i]['seats']; ?> 
                                        seat(s) available</small>
                                    <? } ?>
                                </p>
                            </div>
                        </div>
                    </div>
                    <? /*
                    <div class="ibox float-e-margins">
                        <div class="ibox-content">
                            <div class="row">
                                <div class="col-xs-4 col-sm-4" style="border-right:1px solid #ccc; vertical-align:middle; display: table;  height:150px;">
                                    <div style="display: table-cell;  vertical-align: middle;">
                                        <img src="<?=ADMIN_PROJECT_PATH?>assets/img/<? if($activityData[$i]['activity_type_id'] == 1) echo 'table_meeting.png'; else if($activityData[$i]['activity_type_id'] == 2) echo 'hand_shake.png'; else echo 'workshop.png'; ?>" style="height:33px; width:50px; margin-right:20px;" class="pull-left" />
                                        &nbsp;
                                        <span class="pull-left col-xs-9"><?=$activityData[$i]['activity_name']?></span>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-6" style="display:table; height:150px;">
                                    <div style="display: table-cell;  vertical-align: middle;">
                                        <span class="fa fa-clock-o"></span>
                                         &nbsp; 
                                        <?=' On ' . $activityData[$i]['activity_date'] . ' from ' .  $activityData[$i]['start_time'] . ' to ' . $activityData[$i]['end_time']; ?>
                                        <br  /><br  />
                                        <?
                                            for($j=0; $j<count($activityData[$i]['participants']); $j++) {
                                                echo '<b>' . $activityData[$i]['participants'][$j]['user_type_title'] . '</b> &nbsp; 
                                                        Fee: <b>'.  $activityData[$i]['participants'][$j]['fee'] . '</b>
                                                        Seats: <b>'.  $activityData[$i]['participants'][$j]['seats'] . '</b><br />';	
                                            }
                                        ?>
                                        <p></p>
                                        <p>
                                        <span class="fa fa-money"></span> &nbsp; 
                                        <? 
                                            echo '<b>' . $activityData[$i]['no_sessions'] . '</b> sessions for duration of <b>' . $activityData[$i]['session_duration'] . '</b> minutes each';
                                        ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-xs-2 col-sm-2" style="display:table; height:100px;">
                                    <div style="display: table-cell;  vertical-align: middle;">
                                        <p align="center">
                                            <? if($activityData[$i]['image_name'] != '') echo '<img style="width:100px; height:100px;" src="' . ADMIN_PROJECT_PATH . 'uploads/activities/' . $activityData[$i]['image_name'] . '" class="img-responsive1 img-circle" > '; ?>
                                        </p>
                                        <p></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    */ ?>
                </div>
                <? } ?>
            </div>
            </div>
        </div>
        
    </div>
    <? if($invited_by == '') { ?>
    <div class="col-lg-6">
    	<div class="ibox">
        	<div class="ibox-title">
            	<h5>SPONSOR LEVELS</h5>
            </div>
            <div class="ibox-content" id="sponsor_level_grid">
    			<div class="panel-group" id="accordion">
                <? 
                for($i=0; $i<count($mm_sponsor_level); $i++) 
                { 
                ?>
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                            <? 
							if(!$user_registered_in_sponsor_level) { 
							?>
                            <input type="radio" name="sponsor" class="i-checks" value="<?=$mm_sponsor_level[$i]['level_id']?>" price_value="<?=$mm_sponsor_level[$i]['price']; ?>" onclick="book_sponsor_level()" /> &nbsp;
                            <? 
							}
							
							if($user_registered_in_sponsor_level_id ==  $mm_sponsor_level[$i]['level_id'])
								echo '<span class="fa fa-check" style="font-size:16px;"></span>';
							?>
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse_<?=$i?>" style="font-size: 15px;"><?=strtoupper($mm_sponsor_level[$i]['level_name']) . ' &nbsp; $' . $mm_sponsor_level[$i]['price']; ?></a>
                        </h5>
                    </div>
                    <div id="collapse_<?=$i?>" class="panel-collapse collapse in123">
                        <div class="panel-body">
                            <h4>Total Available: <?=($mm_sponsor_level[$i]['number_of_tickets'] - $mm_event_activity_level_register[$mm_sponsor_level[$i]['level_id']])?></h4>
                            <hr />
                            <?=$mm_sponsor_level[$i]['level_desc']?>
                        </div>
                    </div>
                </div>
                <?
                }
                ?>
                </div>
            </div>
        </div>
    </div>
    <? }?>
</div>


<div class="row">
`	<div class="col-lg-12">
        <div class="ibox-title">
            <span class="pull-left fa fa-shopping-cart" style="font-size:18px;"></span>
            <h5>AGENDA</h5>
        </div>
        <div class="ibox-content">
            <? 
            for($i=0; $i<count($activityData); $i++) {
                echo '<div class="row" style="margin-top:10px;">
                        <div class="col-xs-12">
                        ' .$activityData[$i]['start_time'] . ' &nbsp; <span class="fa fa-circle-thin"> &nbsp; ' . $activityData[$i]['activity_name'] . 
                        '
                        </div>
                    </div>
                        ';
            }
            ?>
        </div>
    </div>
</div>


<div class="row">
	<div class="col-xs-12">
    	<h2>SPEAKERS</h2>
    </div>
</div>

<div class="row">
    <div id="owl-speakers">
    <? for($i=0;$i<count($event_speakers);$i++) { ?>
        <div class="item">
            <? /* <a href="<?=$event_speakers[$i]['profile_url']?>" target="_blank">  */ ?>
                <img src="<?=ADMIN_PROJECT_PATH?>uploads/speakers/<?=$event_speakers[$i]['image_name']?>" alt="<?=$event_speakers[$i]['speaker_name']?>">
            <? /* </a> */ ?>
        </div>
    <? } ?>
    </div>
    <style type="text/css">
    #owl-speakers .item{
      margin: 3px;
    }
    #owl-speakers .item img{
      display: block;
      width: 200px;
      height: 200px;
    }
    </style>
</div>

<div class="row">
	<div class="col-xs-12">
    	<h2>SPONSORS</h2>
    </div>
</div>

<div class="row">
    <div id="owl-sponsors">
    <? for($i=0;$i<count($event_sponsors);$i++) { ?>
        <div class="item">
            <? /* <a href="<?=$event_sponsors[$i]['profile_url']?>" target="_blank"> */ ?>
                <img src="<?=ADMIN_PROJECT_PATH?>uploads/speakers/<?=$event_sponsors[$i]['image_name']?>" alt="<?=$event_sponsors[$i]['speaker_name']?>">
            <? /* </a> */ ?>
        </div>
    <? } ?>
    </div>
    <style type="text/css">
    #owl-sponsors .item{
      margin: 3px;
    }
    #owl-sponsors .item img{
      display: block;
      width: 200px;
      height: 200px;
    }
    </style>
</div>

<div class="row">
	<div class="col-xs-12">
    	<h2>EXHIBITORS</h2>
    </div>
</div>

<div class="row">
    <div id="owl-exhibitors">
    <? for($i=0;$i<count($event_exhibitors);$i++) { ?>
        <div class="item">
            <? /* <a href="<?=$event_exhibitors[$i]['profile_url']?>" target="_blank">  */ ?>
                <img src="<?=ADMIN_PROJECT_PATH?>uploads/speakers/<?=$event_exhibitors[$i]['image_name']?>" alt="<?=$event_exhibitors[$i]['speaker_name']?>">
            <? /* </a> */ ?>
        </div>
    <? } ?>
    </div>
    <style type="text/css">
    #owl-exhibitors .item{
      margin: 3px;
    }
    #owl-exhibitors .item img{
      display: block;
      width: 200px;
      height: 200px;
    }
    </style>
</div>        

<form method="post" name="myform_payment" action="<?=PROJECT_PATH?>event/process_payment/<?=$event_array[0]['event_id']?>">
<input type="hidden" name="event_id" value="<?=$event_array[0]['event_id']?>" />
</form>

<form method="post" name="myform_tickets" action="<?=PROJECT_PATH?>event/event_tickets/<?=$event_array[0]['event_id']?>">
<input type="hidden" name="event_id" value="<?=$event_array[0]['event_id']?>" />
<input type="hidden" name="activity_id" />
<input type="hidden" name="no_of_tickets" />
<input type="hidden" name="pay_by_cheque" />
</form>

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
	
	$('.i-checks').iCheck({
		checkboxClass: 'icheckbox_square-green',
		radioClass: 'iradio_square-green',
	});
	
	$('.i-checks').on('ifChecked', function(event){
		
		for(i=0; i<document.getElementsByName('hd_activity_fee[]').length; i++) {
					
			$("#btn-"+document.getElementsByName('hd_activity_id[]')[i].value+"-1").css('display', '');
			$("#btn-"+document.getElementsByName('hd_activity_id[]')[i].value+"-2").css('display', 'none');
			
			document.getElementsByName('hd_activity_id[]')[i].value = '';
			document.getElementsByName('hd_activity_fee[]')[i].value = '';		
		}
		$("#total_fee").html(0);
		$("#activity_fee").html(0);
		$("#workshop_fee").html(0);
		
		$('.i-checks').each(function(index, obj) { 
			if(obj.checked) {
				$("#sponsor_level_fee").html( $(obj).attr('price_value') );
				$("#total_fee").html( $(obj).attr('price_value') );
			} 
		});
		
		
	});
	
	var max_height = parseInt($('#activity_level_grid').height());
	if(parseInt($('#sponsor_level_grid').height()) > max_height) {
		//max_height = parseInt($('#sponsor_level_grid').height());
		$('#activity_level_grid').height($('#sponsor_level_grid').height());
	} else {
		$('#sponsor_level_grid').height($('#activity_level_grid').height());
	}
	
	
});

function register_event() {
	var hd_activity_id = [];
	for(i=0; i<document.getElementsByName('hd_activity_id[]').length; i++) {
		if(document.getElementsByName('hd_activity_id[]')[i].value != '')
			hd_activity_id.push(document.getElementsByName('hd_activity_id[]')[i].value);
	}
	
	var pay_by_cheque = 'N';
	if(document.getElementsByName('payment_option')[1].checked) 
		pay_by_cheque = 'Y';
		
	if(document.getElementById("extra_ticket").checked) {
		if(document.getElementById("no_of_tickets").value == '') {
			swal('Please enter number of extra tickets');
			return false;	
		}
		if(isNaN(document.getElementById("no_of_tickets").value)) {
			swal('Please enter valid number of extra tickets');
			return false;	
		}
		if(hd_activity_id.length == 0) {
			swal('Please select atleast one activity');
			return false;	
		}
		document.myform_tickets.activity_id.value = hd_activity_id.join();
		document.myform_tickets.no_of_tickets.value = document.getElementById("no_of_tickets").value;
		document.myform_tickets.pay_by_cheque.value = pay_by_cheque;
		document.myform_tickets.submit(); 
		return true;
	}
	
	var level_id = '';
	$('.i-checks').each(function(index, obj) { 
		if(obj.checked) {
			level_id = obj.value; //$(obj).attr('price_value');
		} 
	});
	
	if(hd_activity_id.length == 0 && level_id == '') {
		swal('Please select atleast one activity / level');
		return false;	
	}
	
	
	$('#event-register-option button').attr('disabled', 'true');
		
	$.ajax({
		url: '<?=PROJECT_PATH ?>event/register',
		method: "POST",
		data: { 'register_event' : 'Y', 'event_id' : '<?=$event_array[0]['event_id']?>', 'activity_id': hd_activity_id.join(), 'level_id' : level_id, 'pay_by_cheque': pay_by_cheque},
		dataType: "json",	
		complete: function(response, status) {
			if(status == 'success') { 	
				var json = response.responseJSON;

				if(json.status.toLowerCase() == "success") {
					//swal(json.status, json.statusMessage, json.status.toLowerCase());
					$('#event-register-option').html('<span class="label label-success" style="min-width:80px;">Registered</span>')	;
					document.myform_payment.submit();				
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

function book_activity(activity_id, fee, index, status) {
	
	$('.i-checks').iCheck('uncheck', true)
	$("#sponsor_level_fee").html(0);
	
	if(status == 'Y') {
		document.getElementsByName('hd_activity_id[]')[index].value = activity_id;
		document.getElementsByName('hd_activity_fee[]')[index].value = fee;
		$("#btn-"+activity_id+"-1").css('display', 'none');
		$("#btn-"+activity_id+"-2").css('display', '');
	} else {
		document.getElementsByName('hd_activity_id[]')[index].value = '';
		document.getElementsByName('hd_activity_fee[]')[index].value = ''
		$("#btn-"+activity_id+"-1").css('display', '');
		$("#btn-"+activity_id+"-2").css('display', 'none');
	}
	
	var total_amount = 0;
	var activity_fee = 0;
	var workshop_fee = 0;
	for(i=0; i<document.getElementsByName('hd_activity_fee[]').length; i++) {
		if(document.getElementsByName('hd_activity_fee[]')[i].value != '') {
			total_amount = total_amount + parseInt(document.getElementsByName('hd_activity_fee[]')[i].value);
			if(document.getElementsByName('hd_activity_type_id[]')[i].value == 1 || document.getElementsByName('hd_activity_type_id[]')[i].value == 2)
				activity_fee = activity_fee + parseInt(document.getElementsByName('hd_activity_fee[]')[i].value);
			else
				workshop_fee = workshop_fee + parseInt(document.getElementsByName('hd_activity_fee[]')[i].value);
		}
	}
	$("#total_fee").html(total_amount);
	$("#activity_fee").html(activity_fee);
	$("#workshop_fee").html(workshop_fee);
}

function make_availablity(event_id, activity_id, availability, obj) {
	return true;
	obj.disabled = true;
	obj.value = '';
	
	$("#btn-"+activity_id+"-1").removeClass('btn-success');
	$("#btn-"+activity_id+"-2").removeClass('btn-success');
	
	$("#btn-"+activity_id+"-1").html('...');
	$("#btn-"+activity_id+"-2").html('...');

	
	$.ajax({
		url: '<?=PROJECT_PATH ?>event/activity_register',
		method: "POST",
		data: { 'register_activity' : 'Y', 'event_id' : event_id, 'activity_id':activity_id, 'availability':availability},
		dataType: "json",	
		complete: function(response, status) {
			obj.disabled = false;
			if(status == 'success') { 	
				var json = response.responseJSON;

				if(json.status.toLowerCase() == "success") {
					if(availability == 'Y') {
						$("#btn-"+activity_id+"-1").addClass('btn-success');
						$("#btn-"+activity_id+"-1").html('Join <fa class="fa fa-check"></fa>');
						$("#btn-"+activity_id+"-2").html('Withdrawal');
						
						$("#btn-"+activity_id+"-1").css('display', 'none');
						$("#btn-"+activity_id+"-2").css('display', '');
					} else {
						$("#btn-"+activity_id+"-2").addClass('btn-success');
						$("#btn-"+activity_id+"-1").html('Join ');
						$("#btn-"+activity_id+"-2").html('Withdrawal <fa class="fa fa-check"></fa>');
						
						$("#btn-"+activity_id+"-1").css('display', '');
						$("#btn-"+activity_id+"-2").css('display', 'none');
					}
							
				} else {
					swal(json.status, json.statusMessage, json.status.toLowerCase());
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

function validateFieldLength(field, type, maxLength) {
	field.value = field.value.substr(0, maxLength);
	
	if(type == 2) { // Numeric
		/*if(isNaN(field.value)) {
			field.value = '';
			swal('Please enter numeric value');	
		}*/
		if (/\D/g.test(field.value)) field.value = field.value.replace(/\D/g,'')
	}
}
</script>