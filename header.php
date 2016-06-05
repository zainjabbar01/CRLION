<div class="row border-bottom">
<? //if($this->session->userdata('boarding_status') > 5) 
	//$this->load->helper('message_helper');
	$messages	= getMessages();
	$invitations	= getInvitations();	
	$messages_count	= get_messages_count();
	$connections	= getConnections();	
{ ?>
<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
        <!--<form role="search" class="navbar-form-custom" action="search_results.html">
            <div class="form-group">
                <input type="text" placeholder="SEARCH EVENTS, USERS " class="form-control" name="top-search" id="top-search">
            </div>
        </form>-->
    </div>
    <ul class="nav navbar-top-links navbar-right" style="margin-right:20px;">
        <li>
            <span class="m-r-sm text-muted welcome-message"></span>
        </li>
        <li class="dropdown">
            <a class="count-info right-sidebar" href="#"  onclick="$('#right-sidebar').addClass('sidebar-open');$('[href=\'#tab-side-2\']').trigger('click');">
                <i class="fa fa-envelope"></i>  <span class="label label-warning"><?=$messages_count;?></span>
            </a>
           <?php if(count($messages)){
			   ?>
            <ul class="dropdown-menu dropdown-messages">
                <?php foreach($messages as $message){?>
                <li>
                    <div class="dropdown-messages-box">
                        <a href="<?=base_url()?>message1/view/<?=$message['message_id']?>" class="pull-left">
                            <img alt="image" class="img-circle" src="<? if($message['image_name'] != ''){echo file_exists(PROJECT_PATH.'uploads/profile/'. $message['image_name'])? PROJECT_PATH.'uploads/profile/'. $message['image_name'] .'?id='.time():(file_exists(base_url().'matchmaking/uploads/profile/'. $message['image_name'])?base_url().'matchmaking/uploads/profile/'. $message['image_name'].'?id='.time():PROJECT_PATH.'assets/img/profile_small.jpg');} else  echo PROJECT_PATH.'assets/img/profile_small.jpg'; ?>">
                        </a>
                        <div class="media-body">
                            <small class="pull-right"><?=$message['diff_time']?>h ago</small>
                            <strong><?=$message['send_name']?></strong>.<br>
                            <strong><a href="<?=base_url()?>message1/view/<?=$message['message_id']?>" style="padding-left:0px;"><?=$message['subject']?></a></strong>.<br>
                            <small class="text-muted"><?=$message['diff_days']?> days ago at <?=$message['deliver_at']?> - <?=$message['delivery_date']?></small>
                         </div>
                    </div>
                </li>
                <li class="divider"></li>
				<?php } ?>
                <li>
                    <div class="text-center link-block">
                        <a href="<?=base_url()?>message1/index">
                            <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                        </a>
                    </div>
                </li>
            </ul>
            <?php } ?>
        </li>
        <li class="dropdown">
            <a class="count-info right-sidebar" href="#" onclick="$('#right-sidebar').addClass('sidebar-open');$('[href=\'#tab-side-1\']').trigger('click');" >
                <i class="fa fa-bell"></i>  <span class="label label-info"><?=get_invitations_count();?></span>
            </a>
           <?php if(count($invitations)){
			   ?>
            <ul class="dropdown-menu dropdown-messages">
                <?php foreach($invitations as $invitation){?>
                <li>
                    <div class="dropdown-messages-box">
                        <a href="#" class="pull-left">
                            <img alt="image" class="img-circle" src="<? if($invitation['image_name'] != '') echo PROJECT_PATH.'uploads/profile/'. $invitation['image_name'] .  '?id='.time(); else  echo PROJECT_PATH.'assets/img/profile_small.jpg'; ?>">
                        </a>
                        <div class="media-body">
                            <small class="pull-right"><?=$invitation['diff_time']?>h ago</small>
                            <strong><?=$invitation['send_name']?></strong>.<br>
                            <strong><?=$invitation['subject']?></strong>.<br>
                            <small class="text-muted"><?=$invitation['diff_days']?> days ago at <?=$invitation['deliver_at']?> - <?=$invitation['delivery_date']?></small>
                         </div>
                    </div>
                </li>
                <li class="divider"></li>
				<?php } ?>
                <li>
                    <div class="text-center link-block">
                        <a href="#">
                            <i class="fa fa-bell"></i> <strong><a href="<?=base_url().'meeting/accept_reject_meeting/'.getSessionDomainEvent()?>">See All Invitations</a></strong>
                        </a>
                    </div>
                </li>
            </ul>
            <?php } ?>
        </li>
        <li>
            <a class="right-sidebar-toggle">
                <i class="fa fa-tasks"></i>
            </a>
        </li>

        <li style="display:none;">
            <a href="<?=PROJECT_PATH?>logout">
                <i class="fa fa-sign-out"></i> Log out
            </a>
        </li>
    </ul>

</nav>
<? } ?>
</div>


<div id="right-sidebar">
            <div class="sidebar-container">

                <ul class="nav nav-tabs navs-3">
                    <li>
						<a data-toggle="tab" href="#tab-side-2">
							<i class="fa fa-envelope"></i>
						</a>
					</li>
                    <li class="active">
						<a data-toggle="tab" href="#tab-side-1">
							<i class="fa fa-bell"></i>
						</a>
					</li>
                    <li>
						<a data-toggle="tab" href="#tab-side-3">
							<i class="fa fa-share-alt"></i>
						</a>
					</li>
                </ul>

                <div class="tab-content">
                    <div id="tab-side-1" class="tab-pane active">

                        <div class="sidebar-title">
                            <h3 class="pull-left">Latest Activities</h3>
                            <div class="pull-right m-t-xs"><a href="<?=base_url()?>meeting/accept_reject_meeting/<?=getSessionDomainEvent()?>">See All</a></div>
                            <div style="clear:both;"></div>
                        </div>
						<?php if(count($invitations)){
			   			?>
                        <div class="inspinia-timeline ibox-content">
							<?php foreach($invitations as $invitation){?>
                            <div class="timeline-item">
								<div class="row">
									<div class="col-xs-2 date">
										<i class="fa <?=$invitation['icon']?>"></i>
									</div>
									<div class="col-xs-10 content no-top-border">
										<a href="#" class="pull-left">
											<img alt="image" class="img-circle" src="<? if($invitation['image_name'] != '') echo PROJECT_PATH.'uploads/profile/'. $invitation['image_name'] .  '?id='.time(); else  echo PROJECT_PATH.'assets/img/profile_small.jpg'; ?>">
										</a>
                                        <small class="text-muted"><?=$invitation['delivery_at']." ".$invitation['delivery_abbr']?></small>
                                        <small class="pull-right"><?=$invitation['diff_time']?>h ago</small>
										<p><?=$invitation['status']?></p>
                                        
									</div>
								</div>
							</div>
                            <?php } ?>
                   	 </div>
                     <?php } 
					 	else{
							
						}
					 ?>
                     
					</div>
                    <div id="tab-side-2" class="tab-pane">

                        <div class="sidebar-title">
                            <h3 class="pull-left">Messages</h3>
                            <div class="pull-right m-t-xs"><a href="<?=base_url()?>message1/index">See All</a></div>
                            <div style="clear:both;"></div>
                        </div>
                        <ul class="sidebar-list">
                            <?php
								if(count($messages)<=0){
									?>
                                    	<li class="content no-top-border">
                                        	You have no new messages
                                        </li>
                                    <?php
								}
							?>
							<?php foreach($messages as $message){?>
                            <li class="content no-top-border">
                                <a href="#" class="pull-left">
											<img style="max-width:42px;" alt="image" class="img-circle" src="<? if($message['image_name'] != ''){echo file_exists(PROJECT_PATH.'uploads/profile/'. $message['image_name'])? PROJECT_PATH.'uploads/profile/'. $message['image_name'] .'?id='.time():(file_exists(base_url().'matchmaking/uploads/profile/'. $message['image_name'])?base_url().'matchmaking/uploads/profile/'. $message['image_name'].'?id='.time():PROJECT_PATH.'assets/img/profile_small.jpg');} else  echo PROJECT_PATH.'assets/img/profile_small.jpg'; ?>">
								</a>
                                <a href="<?=base_url()?>message1/view/<?=$message['message_id']?>">
                                    <h4><?=$message['subject']?></h4>
                                    <div class="small text-muted m-t-xs"><?=$message['delivery_date']?></div>
                                </a>
                            </li>
                            <?php } ?>
                        </ul>

                    </div>

                    <div id="tab-side-3" class="tab-pane">

                        <div class="sidebar-title">
                            <h3>ROLODEX</h3>
                        </div>
                        <div class="inspinia-timeline ibox-content">
							<?php foreach($connections as $connection){?>
                            <div class="timeline-item">
								<div class="row">
									<div class="col-xs-12 content no-top-border">
										<a href="#" class="pull-left">
											<img alt="image" class="img-circle" src="<? if($connection['image_name'] != '') echo PROJECT_PATH.'uploads/profile/'. $connection['image_name'] .  '?id='.time(); else  echo PROJECT_PATH.'assets/img/profile_small.jpg'; ?>">
										</a>
										<p><a href="<?=base_url().'profile1/viewProfile/'.$connection['user_id']?>"><b><?=$connection['send_name']?></b></a>
										 <br />
										 <small class="text-muted"><?=$connection['your_role']?> , <?=$connection['organization']?></small>
										</p>
									</div>
								</div>
							</div>
                            <?php } ?>
						</div>
                    </div>
                </div>

            </div>
        </div>