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
</style>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Match Making | Event Management</h2>
        <ol class="breadcrumb">
            <li>Event</li>
            <li class="active">
                <strong>Accept Reject Meeting</strong>
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
                <?=$activity_detail[0]['activity_date']?>
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
	?> 
    <div class="row" style="margin-top:50px;">
        <div class="col-lg-12">
            <h3><?=$activity_detail[$i]['activity_type_name']?></h3>
        </div>
    </div>
    
    <?  
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
                                <img src="<?=ADMIN_PROJECT_PATH?>assets/img/<? if($activityData[$i]['activity_type_id'] == 1) echo 'table_meeting.png'; else if($activityData[$i]['activity_type_id'] == 2) echo 'hand_shake.png'; else echo 'workshop.png'; ?>" style="height:33px; width:50px; margin-right:20px;" class="pull-left" />
                             </div>
                             <div style="float:left;">
                                <ul>
                                    <li><h4><?=$activity_detail[$i]['activity_name']; ?></h4></li>
                                    <?
									$activity_type_title_desc = 'Workshop';
									$activity_type_title_desc1 = 'One - Many Sessions';
									if($activity_detail[$i]['activity_type_id'] == 2) {
										$activity_type_title_desc = 'One - One Session & Non Strategic Matchmaking'; 
										$activity_type_title_desc1 = 'Max of 1 User/Session';
									} 
									else if($activity_detail[$i]['activity_type_id'] == 1) { 
										$activity_type_title_desc = 'One - Many Sessions & Strategic Matchmaking'; 
										$activity_type_title_desc1 = 'One - Many Sessions';
									}
									?>
                                    <li><i class="fa fa-eraser"></i><small><?=$activity_type_title_desc; ?></small></li>
                                    <li><i class="fa fa-user"></i><small><?=$activity_type_title_desc1; ?></small></li>
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
                                            <div class="col-lg-8">
                                                <?=$activity_detail[$i]['act_start_time'] . ' to ' . $activity_detail[$i]['act_end_time'] ?>
                                            </div>
                                            <div class="col-lg-2" style="visibility:hidden">
                                                5 SESSIONS
                                            </div>
                                            <div class="col-lg-1">
                                                <a href="#collapseOne" data-parent="#accordion" data-toggle="collapse" aria-expanded="true">
                                                    <i class="fa fa-chevron-down"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                        	<div class="table-responsive" style="display:none1;">
                                            <? 
											$style_width = '';
											$table_class = ' table ';
											if(count($activity_session[$activity_detail[$i]['activity_id']]) > 5)  {
												$style_width = 'style="width:' . (count($activity_session[$activity_detail[$i]['activity_id']])*150) . 'px; padding:5px;" ' ;
												$table_class = '';
											}
											?>
                                            <table class="<?=$table_class?> table-striped table-bordered" <?=$style_width?> >
                                            <tr>
											<? 
											foreach ($activity_session[$activity_detail[$i]['activity_id']] as &$session_val) {
											?>
												<th style="width:200px; padding:5px; text-align:center">
													<?=$session_val['start_time'] . ' - ' . $session_val['end_time'] ?>
												</th>
											<?
											} ?>
                                            </tr>
                                            <tr>
                                            <? 
											foreach ($activity_session[$activity_detail[$i]['activity_id']] as &$session_val) {
											?>
												<td style="width:200px; padding:5px;">
														<? 
														$act = $session_val['activity_detail_id'];
														foreach($session_applications[$act] as $session_apps) {
															
															$checked = "";
															if($session_apps['match_status'] == 2)
																$checked = ' checked="checked" ';
															
															echo $session_apps['user_name'];
															
															/*
															1  REQUEST PENDING
															2 CONFIRMED
															3 REJECTED
															4 CANCELLED
															*/
															if($session_apps['match_status'] == 2)
																echo '<i class="fa fa-check pull-right"></i>';
															else if($session_apps['match_status'] == 3)
																echo '<i class="fa fa-times pull-right"></i>';
															else {		
																if($activity_detail[$i]['activity_type_id'] == 2)
																	echo '<input type="radio" ' . $checked . ' class="pull-right" onClick="make_booking(' . $session_apps['event_id'] . ', ' . $session_apps['activity_id'] . ', ' . $act . ', ' . $session_apps['user_id'] . ', this)"> ';
																else
																	echo '<input type="checkbox" ' . $checked . ' class="pull-right"  onClick="make_booking(' . $session_apps['event_id'] . ', ' . $session_apps['activity_id'] . ', ' .  $act . ', ' . $session_apps['user_id'] . ', this)" >';
															}
                                                            
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
    <? } /* ?>
    <div class="row" style="margin-top:50px;">
        <div class="col-lg-12">
            <h3>Activity 2</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div style="float:left;">
                                <img alt="image" class="m-t-xs img-responsive" src="http://<?=$_SERVER['HTTP_HOST']?>/matchmaking/uploads/round_table.png" />
                             </div>
                             <div style="float:left;">
                                <ul>
                                    <li><h4>Networking Round Table</h4></li>
                                    <li><i class="fa fa-eraser"></i><small>One - One Sessions</small></li>
                                    <li><i class="fa fa-user"></i><small>Max of 1 User/Session</small></li>
                                </ul>
                             </div>
                        </div>                                
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="accordion1" class="panel-group">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-lg-1">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <div class="col-lg-8">
                                                10.00 AM to 11.15 AM
                                            </div>
                                            <div class="col-lg-2">
                                                5 SESSIONS
                                            </div>
                                            <div class="col-lg-1">
                                                <a href="#collapseSix" data-parent="#accordion1" data-toggle="collapse" aria-expanded="true">
                                                    <i class="fa fa-chevron-down"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseSix" class="panel-collapse collapse in">
                                        <div class="panel-body">
                                            <div class="table">
                                                <div class="row_table">
                                                    <div class="cell">
                                                        10.00 AM - 10.15 AM
                                                    </div>
                                                    <div class="cell">
                                                        10.50 AM - 11.00 AM
                                                    </div>
                                                    <div class="cell">
                                                        11.05 AM - 11.15 AM
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table">
                                                <div class="row_table">
                                                    <div class="cell">
                                                        <ul>
                                                            <li>Amanda Fasting</li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>                                                                    
                                                        </ul>
                                                    </div>
                                                    <div class="cell">
                                                        <ul>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="cell">
                                                        <ul>
                                                            <li>Amanda Fasting</li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>                                                                    <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-lg-1">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <div class="col-lg-8">
                                                10.00 AM to 11.15 AM
                                            </div>
                                            <div class="col-lg-2">
                                                5 SESSIONS
                                            </div>
                                            <div class="col-lg-1">
                                                <a href="#collapseSeven" data-parent="#accordion1" data-toggle="collapse" aria-expanded="true">
                                                    <i class="fa fa-chevron-down"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseSeven" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="table">
                                                <div class="row_table">
                                                    <div class="cell">
                                                        10.00 AM - 10.15 AM
                                                    </div>
                                                    <div class="cell">
                                                        10.50 AM - 11.00 AM
                                                    </div>
                                                    <div class="cell">
                                                        11.05 AM - 11.15 AM
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table">
                                                <div class="row_table">
                                                    <div class="cell">
                                                        <ul>
                                                            <li>Amanda Fasting</li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>                                                                    
                                                        </ul>
                                                    </div>
                                                    <div class="cell">
                                                        <ul>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="cell">
                                                        <ul>
                                                            <li>Amanda Fasting</li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>                                                                    <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-lg-1">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <div class="col-lg-8">
                                                10.00 AM to 11.15 AM
                                            </div>
                                            <div class="col-lg-2">
                                                5 SESSIONS
                                            </div>
                                            <div class="col-lg-1">
                                                <a href="#collapseEight" data-parent="#accordion1" data-toggle="collapse" aria-expanded="true">
                                                    <i class="fa fa-chevron-down"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseEight" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="table">
                                                <div class="row_table">
                                                    <div class="cell">
                                                        10.00 AM - 10.15 AM
                                                    </div>
                                                    <div class="cell">
                                                        10.50 AM - 11.00 AM
                                                    </div>
                                                    <div class="cell">
                                                        11.05 AM - 11.15 AM
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table">
                                                <div class="row_table">
                                                    <div class="cell">
                                                        <ul>
                                                            <li>Amanda Fasting</li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>                                                                    
                                                        </ul>
                                                    </div>
                                                    <div class="cell">
                                                        <ul>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="cell">
                                                        <ul>
                                                            <li>Amanda Fasting</li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>                                                                    <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-lg-1">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <div class="col-lg-8">
                                                10.00 AM to 11.15 AM
                                            </div>
                                            <div class="col-lg-2">
                                                5 SESSIONS
                                            </div>
                                            <div class="col-lg-1">
                                                <a href="#collapseNine" data-parent="#accordion1" data-toggle="collapse" aria-expanded="true">
                                                    <i class="fa fa-chevron-down"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseNine" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="table">
                                                <div class="row_table">
                                                    <div class="cell">
                                                        10.00 AM - 10.15 AM
                                                    </div>
                                                    <div class="cell">
                                                        10.50 AM - 11.00 AM
                                                    </div>
                                                    <div class="cell">
                                                        11.05 AM - 11.15 AM
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table">
                                                <div class="row_table">
                                                    <div class="cell">
                                                        <ul>
                                                            <li>Amanda Fasting</li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>                                                                    
                                                        </ul>
                                                    </div>
                                                    <div class="cell">
                                                        <ul>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="cell">
                                                        <ul>
                                                            <li>Amanda Fasting</li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>                                                                    <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-lg-1">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <div class="col-lg-8">
                                                10.00 AM to 11.15 AM
                                            </div>
                                            <div class="col-lg-2">
                                                5 SESSIONS
                                            </div>
                                            <div class="col-lg-1">
                                                <a href="#collapseTen" data-parent="#accordion1" data-toggle="collapse" aria-expanded="true">
                                                    <i class="fa fa-chevron-down"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseTen" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <div class="table">
                                                <div class="row_table">
                                                    <div class="cell">
                                                        10.00 AM - 10.15 AM
                                                    </div>
                                                    <div class="cell">
                                                        10.50 AM - 11.00 AM
                                                    </div>
                                                    <div class="cell">
                                                        11.05 AM - 11.15 AM
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table">
                                                <div class="row_table">
                                                    <div class="cell">
                                                        <ul>
                                                            <li>Amanda Fasting</li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>                                                                    
                                                        </ul>
                                                    </div>
                                                    <div class="cell">
                                                        <ul>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                        </ul>
                                                    </div>
                                                    <div class="cell">
                                                        <ul>
                                                            <li>Amanda Fasting</li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>                                                                    <li>Amanda Fasting<i class="fa fa-check pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                            <li>Amanda Fasting<i class="fa fa-times pull-right"></i></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>
                    </div>
                    <div class="row">
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
	*/
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
  	<div class="col-xs-4"><button class="btn btn-success btn-lg" id="btn_accept" onClick="accept_meeting('Y')">Accept</button></div>
    <div class="col-xs-4"><button class="btn btn-warning btn-lg" id="btn_reject" onClick="accept_meeting('N')">Reject</button></div>
    <div class="col-xs-4"><button class="btn btn-default btn-lg" onClick="close_accept_mmeting()">Cancel</button></div>
  </div>
  <br>
  <input type="hidden" id="event_id" />
  <input type="hidden" id="activity_id" />
  <input type="hidden" id="activity_detail_id" />
  <input type="hidden" id="user_id" />
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

function make_booking(event_id, activity_id, activity_detail_id, user_id, obj) {
	document.getElementById("event_id").value = event_id;
	document.getElementById("activity_id").value = activity_id;
	document.getElementById("activity_detail_id").value = activity_detail_id;
	document.getElementById("user_id").value = user_id;
	if(obj.checked)
		document.getElementById("is_selected").value = 'Y';
	else
		document.getElementById("is_selected").value = 'N';
	
	$('[data-remodal-id=modal]').remodal().open();

}


function accept_meeting(status) {

	$("#btn_accept").html('...');
	$("#btn_reject").html('...');
	
	$.ajax({
		url: '<?=PROJECT_PATH ?>meeting/accept_status',
		method: "POST",
		data: { 
			'accept_status' : 'Y', 
			'action':status, 
			'user_id':document.getElementById("user_id").value, 
			'event_id':document.getElementById("event_id").value, 
			'activity_id':document.getElementById("activity_id").value, 
			'activity_detail_id': document.getElementById("activity_detail_id").value
		},
		dataType: "json",	
		complete: function(response, status) {

			if(status == 'success') { 	
				var json = response.responseJSON;
				
				$("#btn_accept").html('Accept');
				$("#btn_reject").html('Reject');
						
				if(json.status.toLowerCase() == "success") {
					$('[data-remodal-id=modal]').remodal().close();	
					swal(json.status, json.statusMessage, json.status.toLowerCase());
					location.reload();
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


function close_accept_meeting() {
	
	$('[data-remodal-id=modal]').remodal().close();	
}
</script>
