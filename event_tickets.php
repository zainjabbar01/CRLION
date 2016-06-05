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
.hr-line-dashed {
	/*
	margin-bottom: 8px;
	margin-top: 3px;
	*/
}
</style>
<div class="row">
    <div class="col-xs-12 col-sm-7">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Badges<? #$event_array[0]['event_name']?></h5>
                <span class="pull-right"><span class="fa fa-ticket"></span> <?=$_POST['no_of_tickets']?> Booked Ticket(s) </span>
            </div>
            <div class="ibox-content" style="min-height: 340px;">
                <div class="table-responsive">
                <table class="table table-bordered1">
                <?
				/*
                <thead>
                <tr>
                	<th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Cost</th>
                </tr>
                </thead>
                */
                ?>
                <tbody>
				<?
				$singe_booking_fee = 0;
				$selected_activity_list = explode(",",$_POST['activity_id']);
				//echo "<pre>" . $_POST['activity_id'] . '__' ; print_r($singe_booking_fee); echo "</pre>";
				for($i=0; $i<count($activityData); $i++) {
					if(in_array($activityData[$i]['activity_id'], $selected_activity_list) ) 
						$singe_booking_fee = $singe_booking_fee + $activityData[$i]['fee'];
				}
				$extra_tickets_total = 0;
				for($i=0; $i<$_POST['no_of_tickets']; $i++) {
					$extra_tickets_total = $extra_tickets_total + $singe_booking_fee;
				?>
					<tr>
                    	<td style="padding-top: 14px;"><span class="fa fa-tag"></span></td>
                    	<td><input type="text" maxlength="40" placeholder="Name" class="form-control" name="ticket_name[]" /></td>
                        <td><input type="email" maxlength="40" placeholder="Email" class="form-control" name="ticket_email[]" /></td>
                        <td class="no_of_tickets text-right" style="padding-top: 14px;">$<?=$singe_booking_fee?>.00</td>
                    </tr>
				<?
				}
				?>
                	<tr>
                    	<td colspan="3" class="">Total</td>
                        <td class="no_of_tickets_total text-right">$<?=$extra_tickets_total?>.00</td>
                    </tr>
                </tbody>
                </table>
                </div>
                <? /*
                <div class="row">
                	<? /*
                    <div class="col-sm-5 text-center">
                        <img src="<?=PROJECT_PATH?>assets/template<?=$event_array[0]['template_id']?>/template<?=$event_array[0]['template_id']?>.jpg?id=<?=time()?>" width="80%" class="img-rounded" alt="image">
                    </div>
					* / ?>
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
                </div>*/ ?>
            </div>
        </div>
    
    </div>
    <div class="col-xs-12 col-sm-5">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="pull-left fa fa-shopping-cart" style="font-size:18px;"></span>
                <h5>EVENT BOOKINGS</h5>
            </div>
            <div class="ibox-content" style="min-height: 340px;">
                <?
                for($i=0; $i<count($activityData); $i++) {
					if(in_array($activityData[$i]['activity_id'], $selected_activity_list) ) {
					?>
                	<div class="row">
                        <div class="col-sm-9"><?=$activityData[$i]['activity_name']?></div>
                        <div class="col-sm-2 text-right">$<?=$activityData[$i]['fee']?>.00</div>
                    </div>
                	<?	
					}
				}				
				?>
                <div class="row m-t-md">
                    <div class="col-sm-9">Extra Tickets Price</div>
                    <div class="col-sm-2 text-right">$<span id="extra_tickets_total"><?=$extra_tickets_total?></span>.00</span></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="row">
                    <div class="col-sm-9"><b>TOTAL</b></div>
                    <div class="col-sm-2 text-right">$<span id="tickets_total"><?=$singe_booking_fee + ($singe_booking_fee * $_POST['no_of_tickets'])?></span>.00</div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="row m-t-md">
                	<div class="col-sm-12">
                    	<table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Activity Name</th>
                            <th>Cost</th>
                            <th>&nbsp;</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?
						for($i=0; $i<count($activityData); $i++) {
							$selected = '';
							if(in_array($activityData[$i]['activity_id'], $selected_activity_list) ) 
								$selected = ' checked="checked" ';
							?>
							<tr>
								<td><?=$activityData[$i]['activity_name'] ?></td>
								<td class="col-sm-2 text-right">$<?=$activityData[$i]['fee']?>.00</td>
                                <td>
                                	<input type="checkbox" value="<?=$activityData[$i]['fee']?>" name="chk_activity[]" onclick="update_fee()" <?=$selected?> />
                                    <input type="hidden" name="ticket_activity[]" value="<?=$activityData[$i]['activity_id']?>" />
                                </td>
							</tr>
							<?	
						}				
						?>
                        </tbody>
                        </table>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="row">
                    <div class="col-sm-4"><h3>Payment Option</h3></div>
                	<div class="col-sm-8">
                    	<input type="radio" name="payment_option" <? if($_POST['pay_by_cheque'] == '' || $_POST['pay_by_cheque'] == 'N') echo ' checked="checked" '; ?> onclick="$('#payment_address').css('display','none')" />
                        Credit Card &nbsp;&nbsp;
                    	<input type="radio" name="payment_option" <? if($_POST['pay_by_cheque'] == 'Y') echo ' checked="checked" '; ?> onclick="$('#payment_address').css('display','')" />
                    	Pay By Cheque    
					</div>
                </div>
                <div class="row" id="payment_address" <? if($_POST['pay_by_cheque'] == '' || $_POST['pay_by_cheque'] == 'N') echo ' style="display:none" '; ?>>
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
								#			'<span class="label label-success" style="min-width:80px;">Registered</span>'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
<?
/*
<div class="row m-b-md">
	<div class="col-lg-<? if($invited_by == '') echo 6; else echo 12; ?>">
		<div class="ibox">
        	<div class="ibox-title">
            	<h5>ACTIVITIES</h5>
            </div>
            <div class="ibox-content" id="activity_level_grid">
				<div class="row">
                <? 
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
                                    <span class="label label-success">$<?=$activity_fee ?></span>
                                    <button class="btn btn-default btn-block" style="display:none">$<?=$activity_fee ?></button>
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
                                <? /* <p class="text-center">
                                    <small>
                                        Before joining in this activity, you can get a deeper insights on your likely matchmakers
                                    </small>
                                </p> * / ?>
                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <button class="btn btn-default btn-block btn-outline get_insights" style="display:none;">Get insights</button>
                                </div>
                                <div class="col-lg-4">
                                    <? if($event_registered == 'N' && ($activityData[$i]['seats'] - $mm_event_activity_register[$activityData[$i]['activity_id']]) > 0 ) { ?>
                                    <button class="btn btn-success btn-block" id="btn-<?=$activityData[$i]['activity_id']?>-1" onclick="book_activity(<?=$activityData[$i]['activity_id'] . ", '" . $activity_fee . "', " . $i . ", " ?> 'Y'); make_availablity(<?=$activityData[$i]['event_id'] . ", " . $activityData[$i]['activity_id'] . ", 'Y', " ; ?> this)">Join</button>
                                    <button class="btn btn-success btn-block" id="btn-<?=$activityData[$i]['activity_id']?>-2" onclick="book_activity(<?=$activityData[$i]['activity_id'] . ", '" . $activity_fee . "', " . $i . ", " ?> 'N'); make_availablity(<?=$activityData[$i]['event_id'] . ", " . $activityData[$i]['activity_id'] . ", 'N', " ; ?> this)" style="display:none">Withdrawal</button>
                                    <? } ?>
                                    <input type="hidden" name="hd_activity_id[]" />
                                    <input type="hidden" name="hd_activity_fee[]" />
                                    <input type="hidden" name="hd_activity_type_id[]" value="<?=$activityData[$i]['activity_type_id']?>" />
                                </div>
                                <p class="text-center">
                                    <small><? if($mm_event_activity_register[$activityData[$i]['activity_id']] != '') echo ($activityData[$i]['seats'] - $mm_event_activity_register[$activityData[$i]['activity_id']]); else echo $activityData[$i]['seats']; ?> of <?=$activityData[$i]['seats']; ?> seats available</small>
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
                    * / ?>
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
                            <? if($event_registered == 'N') { ?>
                            <input type="radio" name="sponsor" class="i-checks" value="<?=$mm_sponsor_level[$i]['level_id']?>" price_value="<?=$mm_sponsor_level[$i]['price']; ?>" onclick="book_sponsor_level()" /> &nbsp;
                            <? } ?>
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
            <? /* <a href="<?=$event_speakers[$i]['profile_url']?>" target="_blank">  * / ?>
                <img src="<?=ADMIN_PROJECT_PATH?>uploads/speakers/<?=$event_speakers[$i]['image_name']?>" alt="<?=$event_speakers[$i]['speaker_name']?>">
            <? /* </a> * / ?>
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
            <? /* <a href="<?=$event_sponsors[$i]['profile_url']?>" target="_blank"> * / ?>
                <img src="<?=ADMIN_PROJECT_PATH?>uploads/speakers/<?=$event_sponsors[$i]['image_name']?>" alt="<?=$event_sponsors[$i]['speaker_name']?>">
            <? /* </a> * / ?>
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
            <? /* <a href="<?=$event_exhibitors[$i]['profile_url']?>" target="_blank">  * / ?>
                <img src="<?=ADMIN_PROJECT_PATH?>uploads/speakers/<?=$event_exhibitors[$i]['image_name']?>" alt="<?=$event_exhibitors[$i]['speaker_name']?>">
            <? /* </a> * / ?>
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
*/
?>
<form method="post" name="myform_payment" action="<?=PROJECT_PATH?>event/process_payment/<?=$event_array[0]['event_id']?>">
<input type="hidden" name="event_id" value="<?=$event_array[0]['event_id']?>" />
</form>
</div>


<script language="javascript">
$(document).ready(function() {
	/*
	var max_height = parseInt($('#activity_level_grid').height());
	if(parseInt($('#sponsor_level_grid').height()) > max_height) {
		//max_height = parseInt($('#sponsor_level_grid').height());
		$('#activity_level_grid').height($('#sponsor_level_grid').height());
	} else {
		$('#sponsor_level_grid').height($('#activity_level_grid').height());
	}
	*/	
});

function register_event() {
	var hd_activity_id = [];
	for(i=0; i<document.getElementsByName('chk_activity[]').length; i++) {
		if(document.getElementsByName('chk_activity[]')[i].checked)
			hd_activity_id.push(document.getElementsByName('ticket_activity[]')[i].value);
	}	
	
	var pay_by_cheque = 'N';
	if(document.getElementsByName('payment_option')[1].checked) 
		pay_by_cheque = 'Y';
		
	if(hd_activity_id.length == 0) {
		swal('Please select atleast one activity');
		return false;	
	}
	
	var ticket_name = [];
	for(i=0; i<document.getElementsByName('ticket_name[]').length; i++) {
		ticket_name.push(document.getElementsByName('ticket_name[]')[i].value);
	}
	var ticket_email = [];
	for(i=0; i<document.getElementsByName('ticket_email[]').length; i++) {
		ticket_email.push(document.getElementsByName('ticket_email[]')[i].value);
	}

	
	$('#event-register-option button').attr('disabled', 'true');
	$.ajax({
		url: '<?=PROJECT_PATH ?>event/register',
		method: "POST",
		data: { 'register_event' : 'Y', 'event_id' : '<?=$event_array[0]['event_id']?>', 'activity_id': '<?=$_POST['activity_id']?>', 'ticket_activity':hd_activity_id.join(), 'ticket_name' : ticket_name, 'ticket_email':ticket_email, 'no_of_tickets':'<?=$_POST['no_of_tickets']?>', 'pay_by_cheque': pay_by_cheque},
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



function update_fee() { 
	var total_records = document.getElementsByName("chk_activity[]").length;
	var new_fee = 0;
	for(var i=0; i<total_records; i++) {
		if(document.getElementsByName("chk_activity[]")[i].checked) {
			new_fee	= new_fee + parseInt(document.getElementsByName("chk_activity[]")[i].value);
		}
	}
	
	$(".no_of_tickets").html('$' + new_fee + '.00');
	$(".no_of_tickets_total").html('$' + new_fee * <?=$_POST['no_of_tickets']?> + '.00');
	
	$("#tickets_total").html(new_fee * <?=$_POST['no_of_tickets']?> + <?=$singe_booking_fee?>);
	$("#extra_tickets_total").html(new_fee * <?=$_POST['no_of_tickets']?>)
	
}
</script>