<?
/*
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Event | Dashboard </title>

    <link href="<?=PROJECT_PATH?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=PROJECT_PATH?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="<?=PROJECT_PATH?>assets/css/plugins/morris/morris-0.4.3.min.css" rel="stylesheet">
    <!--<link href="<?=PROJECT_PATH?>assets/css/plugins/round-avatar/normalize.css" rel="stylesheet">-->
    <link href="<?=PROJECT_PATH?>assets/css/plugins/round-avatar/style.css" rel="stylesheet">
    <link href="<?=PROJECT_PATH?>assets/css/animate.css" rel="stylesheet">
    <link href="<?=PROJECT_PATH?>assets/css/style.css" rel="stylesheet">
*/ ?>
<style type="text/css">
	.panel-heading {
		padding:5px 15px;
	}
	.panel-body h2{
		margin-bottom:0px;
		margin-top:12px;
	}
	.panel-body h4{
		margin-bottom:0px;
	}
	.col-lg-2{
		text-align:center;
	}
	.ibox{
		margin-bottom:0px;
	}
	.ibox-title{
		padding-bottom:0px;
		min-height:39px;
	}
	.ibox-title h5{
		font-weight:normal;
	}
	.ibox-content{
		border:none;
		padding-top:0px;
		padding-left:15px;
		
	}
	.ibox-content h2{
		#000;
		font-weight:bold;
	}
	.ibox-content h3{
		margin-bottom:0px;			
	}
	.percent{
		width:60px;
		text-align:right;
	}
	.percent_complete{
		border-radius:18%;
	}
	.ticker{
		padding:5px;
	}
	.profile_dtl{
		margin-top:15px;
	}
	.profile_dtl small{
		font-size:7px;
	}
	.text-center img{
		margin-left:18px;
	}
	.table { 			
		display: table;
		padding-bottom: 0px;
		margin-bottom: 0px; 
	}
	.row_table { display: table-row; }
	.cell { display: table-cell; width:20%;border: 1px solid #ccc; padding:3px; }		
	ul{
		padding-left:10px;
	}
	ul li{
		list-style:none;
	}
	ul li > i{
		margin-right:10px;
	}
	#accordion .panel-heading .fa-clock-o , #accordion1 .panel-heading .fa-clock-o{
		font-size:33px;
	}
	#accordion .panel-heading .col-lg-1 , #accordion .panel-heading .col-lg-8 , #accordion .panel-heading .col-lg-2 , #accordion1 .panel-heading .col-lg-1 , #accordion1 .panel-heading .col-lg-8 , #accordion1 .panel-heading .col-lg-2{
		line-height:33px;
	}
	.cell ul{
		padding-left:0px;
	}
	#accordion .cell , #accordion1 .cell{
		padding:0px;
	}
	.cell li{
		background:#F5F5F5;
		border-bottom:1px solid #ccc;
		margin-bottom: 0px;
		padding: 3px;
		padding-left:20px;						
	}
	.direction{
		font-size:30px;
	}



	
	
	.remodal {
		max-width: 450px;
	}
	
	a.my_tooltip {outline:none; }
	a.my_tooltip strong {line-height:30px;}
	a.my_tooltip:hover {text-decoration:none;} 
	a.my_tooltip div {
		z-index:10;display:none; padding:14px 20px;
		margin-left: -202px;    	
		width:300px;
	}
	a.my_tooltip:hover div{
		display:inline; position:absolute; color:#111; bottom: 84px;
		border:1px solid #DCA; background:#fffAF0;}
	.callout {z-index:20;position:absolute;bottom:-17px;border:0;left:144px; transform: rotate(270deg);}
		
	/*CSS3 extras*/
	a.my_tooltip div
	{
		border-radius:4px;
		box-shadow: 5px 5px 8px #CCC;
	}
	
.btn-white {
    border: 1px solid #e7eaec;
}

.btn-white:hover, .btn-white:focus, .btn-white:active {
    border: 1px solid #e7eaec;
	background:none;
}

.btn-disabled {
	cursor:text;
	color:#cecece;	
}
</style>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Match Making | Event Management</h2>
        <ol class="breadcrumb">
            <li>Event</li>
            <li class="active">
                <strong>Accept / Reject Meeting</strong>
            </li>
        </ol>
    </div>
</div>



<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-lg-4"><h3>Meeting Requests</h3></div>
        <div class="col-lg-4">
            <div class="pull-left" style="visibility:hidden">
                <i class="fa fa-chevron-circle-left direction"></i>
            </div>
            <div class="pull-left" style="margin:8px 10px;">
                <?
                //$activity_detail[0]['activity_date']
				for($i=0; $i<count($activity_date_array); $i++) {
					if($activity_detail[0]['activity_date'] == $activity_date_array[$i]) 
						echo $activity_date_display_array[$i] . ' &nbsp; ';
					else 
						echo '<a href="' . PROJECT_PATH . 'meeting/accept_reject_meeting/' . $event_id . '/' . $activity_date_array[$i] . '" style="margin:5px;">' . $activity_date_display_array[$i] .'</a> &nbsp;';
				}
				?>
            </div>
            <div class="pull-left" style="visibility:hidden">
                <i class="fa fa-chevron-circle-right direction"></i>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="btn-group pull-right" style="display:none">
                <button type="button" class="btn btn-default btn-rounded">Hourly</button>
                <button type="button" class="btn btn-default">Weekly</button>
                <button type="button" class="btn btn-default btn-rounded">Monthly</button>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top:10px;">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-10">
                            <div style="float:left;">
                                <img src="<?=ADMIN_PROJECT_PATH?>assets/img/templates/<? if($template_pic != '') echo $template_pic; else echo 'no-pic.jpg';?>" class="img-rounded" style="width: 40px; margin-right: 15px;">
                            </div>
                            <div style="float:left; margin-left:10px;">
                                <h2><?=$event_name?></h2>
                                <i class="fa fa-clock-o"></i><small>&nbsp;<?=$start_date . ' to ' . $end_date?></small>
                            </div>
                        </div>
                        <div class="col-lg-2" style="visibility:hidden">
                            <div style="margin-top:28px;">5 Days to go</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <? 
	$activity_type_name = '';
	$activity_id = '';;
	for ($i=0; $i<count($activity_detail); $i++) { 
		if($activity_type_name == '' || $activity_type_name != $activity_detail[$i]['activity_type_name']) { 
				if($activity_type_name != '') {
					echo '
							';					
				}
	/*
	?> 
    <div class="row" style="margin-top:5px;">
        <div class="col-lg-12">
            <h3><?=$activity_detail[$i]['activity_type_name']?></h3>
        </div>
    </div>
    <?
	*/  
			$activity_type_name = $activity_detail[$i]['activity_type_name'];
		} 
			
	?>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div style="float:left;">
                                <img src="<?=ADMIN_PROJECT_PATH?>assets/img/<? if($activity_detail[$i]['activity_type_id'] == 1) echo 'table_meeting.png'; else if($activity_detail[$i]['activity_type_id'] == 2) echo 'hand_shake.png'; else echo 'workshop.png'; ?>" style="height:33px; width:50px; margin-right:20px;" class="pull-left" />
                             </div>
                             <div style="float:left;">
                                <ul>
                                    <li><h4><?=$activity_detail[$i]['activity_name']; ?></h4></li>
                                    <?
									$activity_type_title_desc = 'Workshop';
									$activity_type_title_desc1 = 'One - Many Sessions';
									if($activity_detail[$i]['activity_type_id'] == 2) {
										//$activity_type_title_desc = 'One - One Session & Non Strategic Matchmaking'; 
										//$activity_type_title_desc1 = 'Max of 1 User/Session';
										
										$activity_type_title_desc = 'Non Strategic Matchmaking'; 
										$activity_type_title_desc1 = '';
										
									} 
									else if($activity_detail[$i]['activity_type_id'] == 1) { 
										//$activity_type_title_desc = 'One - Many Sessions & Strategic Matchmaking'; 
										//$activity_type_title_desc1 = 'One - Many Sessions';
										
										$activity_type_title_desc = 'Strategic Matchmaking'; 
										$activity_type_title_desc1 = '';
									}
									?>
                                    <li><i class="fa fa-eraser"></i><small><?=$activity_type_title_desc; ?></small></li>
                                    <li style="display:none;"><i class="fa fa-user"></i><small><?=$activity_type_title_desc1; ?></small></li>
                                </ul>
                             </div>
                        </div>                                
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="accordion" class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-lg-1">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <div class="col-lg-10">
                                                <?=$activity_detail[$i]['act_start_time'] . ' to ' . $activity_detail[$i]['act_end_time'] ?>
                                            </div>
                                            <div class="col-lg-1">
                                                <a href="#collapseOne_<?=$activity_detail[$i]['activity_id']?>" data-parent="#accordion" data-toggle="collapse" aria-expanded="true">
                                                    <i class="fa fa-chevron-down"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseOne_<?=$activity_detail[$i]['activity_id']?>" class="panel-collapse collapse in">
                                        <div class="panel-body" style="padding:0px;">
                                        	<div class="table-responsive" style="display:none1;">
                                            <? 
											$style_width = '';
											$table_class = ' table ';
											if(count($activity_session[$activity_detail[$i]['activity_id']]) > 4)  {
												$style_width = 'style="width:' . (count($activity_session[$activity_detail[$i]['activity_id']])*250) . 'px; padding:5px;" ' ;
												$table_class = '';
											}
											?>
                                            <table class="<?=$table_class?> table-striped table-bordered" <?=$style_width?> >
                                            <tr>
											<? 
											foreach ($activity_session[$activity_detail[$i]['activity_id']] as &$session_val_th) {
											?>
												<th style="min-width:250px; padding:5px; text-align:center">
													<?=$session_val_th['start_time'] . ' - ' . $session_val_th['end_time'] ;#. "_" . $activity_detail[$i]['activity_id'] . "_" .  $activity_detail[$i]['activity_detail_id'] ?>
												</th>
											<?
											} ?>
                                            </tr>
                                            <tr>
                                            <? 
											foreach ($activity_session[$activity_detail[$i]['activity_id']] as &$session_val) {
											?>
												<td style="padding:5px;" id="row_<?=$activity_detail[$i]['activity_id'].'_'.$session_val['activity_detail_id']?>">
														<? 
														foreach($session_applications[$session_val['activity_detail_id']] as $session_apps) {
															
															$checked = "";
															if($session_apps['match_status'] == 2)
																$checked = ' checked="checked" ';
															
															echo '<div class="row" style="padding: 5px; margin: 0px;">';
															echo '		<div class="pull-left" style="margin-right:5px;"><img src="'.$session_apps['image_src'].'" class="img-circle" width="40" /></div>
																		<div class="pull-left"><a href="'.PROJECT_PATH.'profile1/viewProfile/'.$session_apps['user_id'].'">' .$session_apps['user_name'] . '<br>' . $session_apps['company_name'] .'</a></div>
																		<div class="pull-left" style="margin-left:3px;">
																			<a class="my_tooltip" href="#" style="margin-left:1px;" onmouseover="ViewMessage('.$session_apps['activity_id'].' , '.$session_apps['activity_detail_id']. ', ' . $session_apps['user_id'] . ', this);"><i class="fa fa-comment-o"></i></a>
																		</div><br>
																	';
															
															/*
															1  REQUEST PENDING
															2 CONFIRMED
															3 REJECTED
															4 CANCELLED
															*/
															$style = "";
															if($session_apps['match_status'] == 2)
																$style = ' style="cursor:pointer;  color:green;" onclick="change_booking(' . $session_apps['event_id'] . ', ' . $activity_detail[$i]['activity_id'] . ', ' . $session_val['activity_detail_id'] . ', ' . $session_apps['user_id'] . ', ' . $activity_detail[$i]['activity_type_id'] . ', \'N\')" ';
															else if($session_apps['match_status'] == 3)
																$style = ' style="cursor:pointer;  color:red;" onclick="change_booking(' . $session_apps['event_id'] . ', ' . $activity_detail[$i]['activity_id'] . ', ' . $session_val['activity_detail_id'] . ', ' . $session_apps['user_id'] . ', ' . $activity_detail[$i]['activity_type_id'] . ', \'Y\')" ';
																
															echo '<div class="pull-right" id="select_' . $session_apps['user_id'] . '_' . $activity_detail[$i]['activity_id'] .'_'.$session_val['activity_detail_id'] . '">';
															if($session_apps['match_status'] == 2)
																echo '<i class="fa fa-check pull-right" ' . $style . '></i></a>';
															else if($session_apps['match_status'] == 3)
																echo '<i class="fa fa-times pull-right" ' . $style . '></i></a>';
															else {		
																//echo $activity_detail[$i]['seats'];
																/*
																if($activity_detail[$i]['seats'] == 1) {  //if($activity_detail[$i]['activity_type_id'] == 1)
																	echo '<input type="radio" ' . $checked . ' class="pull-right" onClick="make_booking(' . $session_apps['event_id'] . ', ' . $activity_detail[$i]['activity_id'] . ', ' . $session_val['activity_detail_id'] . ', ' . $session_apps['user_id'] . ', ' . $activity_detail[$i]['activity_type_id'] . ', this)"> ';
																} else {
																	echo '<input type="checkbox" ' . $checked . ' class="pull-right"  onClick="make_booking(' . $session_apps['event_id'] . ', ' . $activity_detail[$i]['activity_id'] . ', ' .  $session_val['activity_detail_id'] . ', ' . $session_apps['user_id'] . ', ' . $activity_detail[$i]['activity_type_id'] . ', this)" >';
																}
																*/
																echo '<span class="label label-success">P</span>';
															}
															echo '</div>';
															
															
															$style_accept = ' style="cursor:pointer" onclick="make_booking(' . $session_apps['event_id'] . ', ' . $activity_detail[$i]['activity_id'] . ', ' . $session_val['activity_detail_id'] . ', ' . $session_apps['user_id'] . ', ' . $activity_detail[$i]['activity_type_id'] . ', \'Y\', this)" ';
															$style_reject = ' style="cursor:pointer" onclick="make_booking(' . $session_apps['event_id'] . ', ' . $activity_detail[$i]['activity_id'] . ', ' . $session_val['activity_detail_id'] . ', ' . $session_apps['user_id'] . ', ' . $activity_detail[$i]['activity_type_id'] . ', \'N\', this)" ';
															
															$accept_id =  ' id="btn_accept_' . $session_apps['user_id'] . '_' . $activity_detail[$i]['activity_id'] .'_'.$session_val['activity_detail_id'] . '" ';
															$reject_id =  ' id="btn_reject_' . $session_apps['user_id'] . '_' . $activity_detail[$i]['activity_id'] .'_'.$session_val['activity_detail_id'] . '" ';
															
															echo '<div class="pull-left">';															
															if($session_apps['match_status'] == 2) {
																echo '				<a class="btn btn-xs btn-white btn-disabled" ' . $style_accept . $accept_id .'><i class="fa fa-check"></i> Accept</a>';
																echo '				<a class="btn btn-xs btn-white" ' . $style_reject . $reject_id . '><i class="fa fa-times"></i> Decline </a>';
															}
															else if($session_apps['match_status'] == 3) {
																echo '				<a class="btn btn-xs btn-white" ' . $style_accept . $accept_id . '><i class="fa fa-check"></i> Accept</a>';
																echo '				<a class="btn btn-xs btn-white btn-disabled" ' . $style_reject . $reject_id . '><i class="fa fa-times"></i> Decline </a>';
															} else {
																echo '				<a class="btn btn-xs btn-white" ' . $style_accept . $accept_id . '><i class="fa fa-check"></i> Accept</a>';
																echo '				<a class="btn btn-xs btn-white" ' . $style_reject . $reject_id . '><i class="fa fa-times"></i> Decline </a>';
															}
															echo '			</div>';
                                                            
															echo '</div>';
															//echo '</div><div style="clear:fix"></div>';
														} ?>
												</td>
											<?
											} 
											?>
                                            </tr>
                                            </table>
                                            </div>
                                            <div class="table" style="display:none;">
                                                <div class="row_table">
                                                	<? 
													foreach ($activity_session[$activity_detail[$i]['activity_id']] as &$session_val) {
													?>
                                                    	<div class="cell" style="width:150px;">
                                                            <?=$session_val['start_time'] . ' - ' . $session_val['end_time'] . ' - ' . $session_val['activity_detail_id'] ?>
                                                        </div>
                                                    <?
														$value = $value * 2;
													} ?>
                                                </div>
                                            </div>
                                            <div class="table" style="display:none;">
                                                <div class="row_table">
                                                    <? 
													foreach ($activity_session[$activity_detail[$i]['activity_id']] as &$session_val) {
													?>
                                                    	<div class="cell">
                                                            <ul>
                                                            	<? 
																$act = $session_val['activity_detail_id'];
																foreach($session_applications[$act] as $session_apps) {
																?>
                                                                	<li><?=$session_apps['user_name']?> <i class="fa fa-check pull-right"></i></li>
                                                                <? } ?>
                                                            </ul>
                                                        </div>
                                                    <?
													} 
													?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
								</div>
                             </div>
                        </div>
                    </div>
                    <div class="row" style="display:none;">
                        <div class="col-lg-12">
                            <div class="pull-right">
                                <input type="checkbox" />
                                <label style="font-weight:normal;">Show Only Accepted</label>
                            </div>
                        </div>
                    </div>
				</div>
            </div>
        </div>
    </div>            
    <? } 
	?>
</div>


<div class="remodal" data-remodal-id="modal" role="dialog" aria-labelledby="modal1Title" aria-describedby="modal1Desc">
  <div class="pull-right">
  	<button data-remodal-action="close" class="remodal-close" aria-label="Close" style="position: relative;"></button>
  </div>
  <div class="row" style="text-align:left">
    <div class="col-xs-8">
	    <h2 id="modal1Title">Save Status </h2>
        <p id="modalDesig">Please select your action</p>
    </div>
  </div>
  <div class="row" style="padding-top:15px;">
  	<div class="col-xs-4"><button class="btn btn-success btn-lg" id="btn_accept" onClick="accept_meeting('Y')">Available</button></div>
    <div class="col-xs-4"><button class="btn btn-warning btn-lg" id="btn_reject" onClick="accept_meeting('N')">Unavailable</button></div>
    <div class="col-xs-4"><button class="btn btn-default btn-lg" onClick="close_accept_meeting()">Cancel</button></div>
  </div>
  <br>
  <input type="hidden" id="event_id" />
  <input type="hidden" id="activity_id" />
  <input type="hidden" id="activity_detail_id" />
  <input type="hidden" id="user_id" />
  <input type="hidden" id="activity_type_id" />
  <input type="hidden" id="is_selected" />
  <button data-remodal-action="cancel" class="remodal-cancel" style="display:none">Cancel</button>
  <button data-remodal-action="confirm" class="remodal-confirm"  style="display:none">OK</button>
</div>        

	<? /*
    <!-- Mainly scripts -->
    <script src="<?=PROJECT_PATH?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?=PROJECT_PATH?>assets/js/bootstrap.min.js"></script>
    <script src="<?=PROJECT_PATH?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?=PROJECT_PATH?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?=PROJECT_PATH?>assets/js/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="<?=PROJECT_PATH?>assets/js/plugins/morris/morris.js"></script>
        <!-- Custom and plugin javascript -->
    <script src="<?=PROJECT_PATH?>assets/js/inspinia.js"></script>
    <script src="<?=PROJECT_PATH?>assets/js/plugins/pace/pace.min.js"></script>    
    <script src="<?=PROJECT_PATH?>assets/js/plugins/round-avatar/prefixfree.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?=PROJECT_PATH?>assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>
    */ ?>
<script type="text/javascript">
$(document).ready(function(){
	$(".collapse").on("show.bs.collapse",function(){
		//console.log($(this));
		var collapse_id	= $(this).attr('id');
		$("[href='#"+collapse_id+"'").find('i').removeClass('fa-chevron-up');
		$("[href='#"+collapse_id+"'").find('i').addClass('fa-chevron-down');
	});
	
	$(".collapse").on("hide.bs.collapse",function(){
		//console.log($(this));
		var collapse_id	= $(this).attr('id');
		$("[href='#"+collapse_id+"'").find('i').removeClass('fa-chevron-down');
		$("[href='#"+collapse_id+"'").find('i').addClass('fa-chevron-up');
	});
	
	
	
	$(document).on('opened', '.remodal', function (e) {
		if(document.getElementById('activity_detail_id').value == '') {
			var inst = jQuery('[data-remodal-id=modal]').remodal();	
			inst.close();
		}
	});

});

function ViewMessage(activity_id, activity_detail_id, user_id, obj){
	//console.log($(obj).find('img'));
	if(!$(obj).find('img').length){
		$.ajax({
		url: "<?= base_url() ?>Meeting/GetMessage",
		//data:{remoteText:$(this).val()} ,
		data:{'activity_id' : activity_id , 'activity_detail_id' : activity_detail_id, 'user_id': user_id},
		type: "POST"
		}).done(function(response){
			$(response).insertBefore($(obj).find('i'));
		});
	}
}

function make_booking(event_id, activity_id, activity_detail_id, user_id, activity_type_id, action, obj) {
	
	if($(obj).hasClass('btn-disabled'))
		return false;
	
	document.getElementById("event_id").value = event_id;
	document.getElementById("activity_id").value = activity_id;
	document.getElementById("activity_detail_id").value = activity_detail_id;
	document.getElementById("user_id").value = user_id;
	document.getElementById("activity_type_id").value = activity_type_id;
	
	/*
	if(obj.checked)
		document.getElementById("is_selected").value = 'Y';
	else
		document.getElementById("is_selected").value = 'N';
	
	$('[data-remodal-id=modal]').remodal().open();
	*/
	
	document.getElementById("is_selected").value = action;
	accept_meeting(action);
	
}


function accept_meeting(status) {
	
	$('body').fadeTo('fast', '.4');
	$('body').css('pointer-events', 'none');
	
	$("#btn_accept").html('...');
	$("#btn_reject").html('...');
	
	var action = status;
	
	$.ajax({
		url: '<?=PROJECT_PATH ?>meeting/accept_status',
		method: "POST",
		data: { 
			'accept_status' : 'Y', 
			'action':action, 
			'user_id':document.getElementById("user_id").value, 
			'event_id':document.getElementById("event_id").value, 
			'activity_id':document.getElementById("activity_id").value, 
			'activity_detail_id': document.getElementById("activity_detail_id").value,
			'activity_type_id': document.getElementById("activity_type_id").value
		},
		dataType: "json",	
		complete: function(response, status) {

			if(status == 'success') { 	
				var json = response.responseJSON;
				
				$("#btn_accept").html('Accept');
				$("#btn_reject").html('Reject');
						
				if(json.status.toLowerCase() == "success") {
					$('[data-remodal-id=modal]').remodal().close();	
					swal('', json.statusMessage, json.status.toLowerCase());
					
					user_id = document.getElementById("user_id").value;
					event_id = document.getElementById("event_id").value;
					activity_id = document.getElementById("activity_id").value;
					activity_detail_id = document.getElementById("activity_detail_id").value;
					activity_type_id = document.getElementById("activity_type_id").value;
					

					var styleClickAccept = 'style="cursor:pointer; color:green;" onClick="change_booking(' + event_id + ', ' + activity_id + ', ' + activity_detail_id + ', ' + user_id + ', ' + activity_type_id + ', \'N\') " ';
					var	styleClickReject = 'style="cursor:pointer; color:red;" onClick="change_booking(' + event_id + ', ' + activity_id + ', ' + activity_detail_id + ', ' + user_id + ', ' + activity_type_id + ', \'Y\') " ';
					
					if(action == 'Y') {
						$('#select_'+user_id+'_'+activity_id+'_'+activity_detail_id).html('<i class="fa fa-check" ' + styleClickAccept + '>');

						$('#btn_accept_'+user_id+'_'+activity_id+'_'+activity_detail_id).addClass('btn-disabled');
						$('#btn_reject_'+user_id+'_'+activity_id+'_'+activity_detail_id).removeClass('btn-disabled');
						
						$('#btn_accept_'+user_id+'_'+activity_id+'_'+activity_detail_id).css('cursor', 'text');
						$('#btn_reject_'+user_id+'_'+activity_id+'_'+activity_detail_id).css('cursor', 'pointer');
						
						if(document.getElementById("activity_type_id").value == 2) {
							$("#row_"+activity_id+'_'+activity_detail_id+" input:radio").each(function() { 
								$(this).parent().html('<i class="fa fa-times" ' + styleClickReject + '>'); 
							});
						}
					}
					else {
						$('#select_'+user_id+'_'+activity_id+'_'+activity_detail_id).html('<i class="fa fa-times" ' + styleClickReject + '>');

						$('#btn_accept_'+user_id+'_'+activity_id+'_'+activity_detail_id).removeClass('btn-disabled');
						$('#btn_reject_'+user_id+'_'+activity_id+'_'+activity_detail_id).addClass('btn-disabled');	
						
						$('#btn_accept_'+user_id+'_'+activity_id+'_'+activity_detail_id).css('cursor', 'pointer');
						$('#btn_reject_'+user_id+'_'+activity_id+'_'+activity_detail_id).css('cursor', 'text');
						
					}
							
				} else {
					swal('Alert', json.statusMessage, json.status.toLowerCase());
				}
				
			}	// End if status == success 		
			
			$('body').fadeTo('fast', '1');
			$('body').css('pointer-events', 'auto');
		}
	}).fail(function( jqXHR, textStatus ) {
		$('body').fadeTo('fast', '1');
		$('body').css('pointer-events', 'auto');
			
		if(jqXHR.status == 404)
			alert( "page not found" );
		else	
			alert( "Request failed: " + textStatus );
	});	
}


function close_accept_meeting() {
	
	$('[data-remodal-id=modal]').remodal().close();	
}

function change_booking(event_id, activity_id, activity_detail_id, user_id, activity_type_id, action) {
	
	if(action == 'N')
		message = 'You want to cancel this session?';
	else
		message = 'You want to accept this session?';
			
	swal({
        title: "Are you sure?",
        text: message,
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, do it!",
        closeOnConfirm: false
    }, function () {
        //swal("Done!", "Under development", "success");
		document.getElementById("event_id").value = event_id;
		document.getElementById("activity_id").value = activity_id;
		document.getElementById("activity_detail_id").value = activity_detail_id;
		document.getElementById("user_id").value = user_id;
		document.getElementById("activity_type_id").value = activity_type_id;
		
		document.getElementById("is_selected").value = action;
		
			
		accept_meeting(action)	
    });
	
}
</script>
