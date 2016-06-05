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

<div class="wrapper wrapper-content">
    <div class="row" style="display:none;">
        <div class="col-lg-4"><h3>Meeting Requests</h3></div>
        <div class="col-lg-4">
            <div class="pull-left" style="visibility:hidden">
                <i class="fa fa-chevron-circle-left direction"></i>
            </div>
            <div class="pull-left" style="margin:8px 10px;">
                <? # =$activity_detail[0]['activity_date']?>
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
                                            <div class="col-lg-1" style="display:none">
                                                <a href="#collapseOne_<?=$activity_detail[$i]['activity_id']?>" data-parent="#accordion" data-toggle="collapse" aria-expanded="true">
                                                    <i class="fa fa-chevron-down"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="collapseOne_<?=$activity_detail[$i]['activity_id']?>" class="panel-collapse collapse in">
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
											foreach ($activity_session[$activity_detail[$i]['activity_id']] as &$session_val_th) {
											?>
												<th style="width:200px; padding:5px; text-align:center">
													<?=$session_val_th['start_time'] . ' - ' . $session_val_th['end_time'] ;#. "_" . $activity_detail[$i]['activity_id'] . "_" .  $activity_detail[$i]['activity_detail_id'] ?>
												</th>
											<?
											} ?>
                                            </tr>
                                            <tr>
                                            <? 
											foreach ($activity_session[$activity_detail[$i]['activity_id']] as &$session_val) {
											?>
												<td style="width:200px; padding:5px;" id="row_<?=$activity_detail[$i]['activity_id'].'_'.$session_val['activity_detail_id']?>">
														<? 
														foreach($session_applications[$session_val['activity_detail_id']] as $session_apps) {
															
															$checked = "";
															if($session_apps['match_status'] == 2)
																$checked = ' checked="checked" ';
															
															echo '<div>' .$session_apps['user_name'];
															
															/*
															1  REQUEST PENDING
															2 CONFIRMED
															3 REJECTED
															4 CANCELLED
															*/
															echo '<div class="pull-right" id="select_' . $session_apps['user_id'] . '_' . $activity_detail[$i]['activity_id'] .'_'.$session_val['activity_detail_id'] . '">';
															if($session_apps['match_status'] == 2)
																echo '<i class="fa fa-check pull-right"></i>';
															else if($session_apps['match_status'] == 3)
																echo '<i class="fa fa-times pull-right"></i>';
															else {		
																if($activity_detail[$i]['activity_type_id'] == 2)
																	echo '<input type="radio" ' . $checked . ' class="pull-right" onClick="make_booking(' . $session_apps['event_id'] . ', ' . $activity_detail[$i]['activity_id'] . ', ' . $session_val['activity_detail_id'] . ', ' . $session_apps['user_id'] . ', ' . $activity_detail[$i]['activity_type_id'] . ', this)"> ';
																else
																	echo '<input type="checkbox" ' . $checked . ' class="pull-right"  onClick="make_booking(' . $session_apps['event_id'] . ', ' . $activity_detail[$i]['activity_id'] . ', ' .  $session_val['activity_detail_id'] . ', ' . $session_apps['user_id'] . ', ' . $activity_detail[$i]['activity_type_id'] . ', this)" >';
															}
                                                            echo '</div>';
															
															echo '</div><div style="clear:fix"></div>';
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