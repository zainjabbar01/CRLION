<?php
$this->load->helper('favourite_helper');
?>
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header" style="padding: 10px 17px;">
                <div class="dropdown profile-element"> 
                    <?
					/*
                    <span class="m-t-xs" style="color:#fff; display:flex;"> 
                    	<div class="pull-left" style="width:50px;"><i class="fa fa-puzzle-piece" style="font-size:36px"></i></div>
                        <div class="font-bold pull-left">CONNECTION REVOLUTION</div>
                    </span>
                    
					*/ ?>
                    <br />
                    <div class="row">
                    	<div class="pull-left" style="padding-left: 25px; width: 68px;"><img alt="image" class="img-circle" src="<? if(@$this->session->userdata('image_name') != '' ) echo PROJECT_PATH.'uploads/profile/'. $this->session->userdata('image_name') . '?id='.time(); else  echo PROJECT_PATH.'assets/img/profile_small.jpg'; ?>" style="width:50px;" /></div>
                    </div>
                    <div class="row">
                        <div class="pull-left text-white1111" style="padding-left: 28px; padding-top:5px;">
                        	Welcome,
                    		<a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear"> 
                                    <span class="text-muted text-xs block"><?php echo $this->session->userdata('user_name');?> <b class="caret"></b></span>
                                    <span><?php echo $this->session->userdata('user_type_title');?></span>
                                </span> 
                           	</a>
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
								<li><a href="<?=PROJECT_PATH?>profile/viewProfile">My Profile</a></li>
								<li><a href="<?=PROJECT_PATH?>welcome/changePassword">Change Password</a></li>
                                <? /* 
								<li><a href="#">Billing Info.</a></li>								
                                <li class="divider"></li>
                                <li><a href="#">Help and FAQs</a></li>
                                <li><a href="#">Support</a></li>
                                <li><a href="#">Videos</a></li>
                                */
								?>
                                <li class="divider"></li>
								<li><a href="<?=PROJECT_PATH?>logout">Logout</a></li>
                            </ul>
						</div>
                    </div>    
                </div>
                <div class="logo-element">
                    MM+
                </div>
            </li>
            <li class="cr-sidenav-name"><span class="nav-label">MAIN MENU</span></li>
            <? if(@$boardingFinished || $this->session->userdata("boardingFinished") == 1 || 1==1) { 
			?>
            <li class="">
                <a href="#"><i class="fa fa-user"></i> <span class="nav-label">PROFILE</span></a>
                <ul class="nav nav-second-level collapse">
                	<? /* for($i =0; $i<count($mm_profile_group); $i++) { ?>
                    <li><a href="<?=PROJECT_PATH. 'profile/' .$mm_profile_group[$i]['pageName']?>"><?=$mm_profile_group[$i]['profile_group_name']?></a></li>
                    <? } */?>
                    <li><a href="<?=PROJECT_PATH. 'profile/'?>aboutme">Personal</a></li>
                    <li><a href="<?=PROJECT_PATH. 'profile/'?>youragency">Your Organization</a></li>
                    <li><a href="<?=PROJECT_PATH. 'profile/'?>createopportunity">Product and Services</a></li>
                	<li><a href="<?=PROJECT_PATH?>profile1/viewProfile">View Profile</a></li>
                </ul>
            </li>
            <li class=""><a href="<?=PROJECT_PATH?>message1/index"><i class="fa fa-envelope-o"></i> <span class="nav-label">Messages</span></a></li>
            <li class=""><a href="<?=PROJECT_PATH?>event/my_events"><i class="fa fa-calendar"></i> <span class="nav-label">My Events</span></a></li>
			<li class=""><a href="<?=PROJECT_PATH?>rolodex/index"><i class="fa fa-th-large"></i> <span class="nav-label">Rolodex</span></a></li>
            
			<li class=""><a href="<?=PROJECT_PATH?>event/confirm_availability/<?=$this->session->userdata("domain_event_id")?>"><i class="fa fa-thumbs-o-up"></i> <span class="nav-label">Confirm Availability</span></a></li>
			<?
			/*
			1	Buyer
			2	Supplyer
			3	Other
			*/
            if($this->session->userdata("client_type_id_ref") == 1 || $this->session->userdata("client_type_id_ref") == 2) {
			?>
			<li class=""><a href="<?=PROJECT_PATH?>meeting/accept_reject_meeting/<?=$this->session->userdata("domain_event_id")?>"><i class="fa fa-check-square-o"></i> <span class="nav-label">Accept / Reject Meeting</span></a></li>
            <li class=""><a href="<?=PROJECT_PATH?>meeting/meeting_status_view/<?=$this->session->userdata("domain_event_id")?>"><i class="fa fa-calendar-o"></i> <span class="nav-label">View Schedule</span></a></li>
			<? 
			} 
			if($this->session->userdata("client_type_id_ref") == 2 && 1==2) { //hidden as w use rolodex 
			?>
			<li class=""><a href="<?=PROJECT_PATH?>RequestMeeting/index/<?=$this->session->userdata("domain_event_id")?>"><i class="fa fa-th-large"></i> <span class="nav-label">Request Meeting</span></a></li>
			<? 
			} 
			?>
            
            
			<?php
			if(get_favourites_count()>0)
			{?>
            <li class=""><a href="<?=PROJECT_PATH?>rolodex/index/Y"><i class="fa fa-star-o"></i> <span class="nav-label">Favorites</span></a></li>
            <?php
			}?>
            <?php
            if( $this->session->userdata("sponsorRegistered") == 'Y') {
			?>
            <li>
            	<a href="#"><i class="fa fa-sun-o"></i> <span class="nav-label">Sponsors</span></a>
                <ul class="nav nav-second-level collapse">
                    <li><a href="<?=PROJECT_PATH?>sponsor/newtype/2">Sponsor Information</a></li>
                    <li><a href="<?=PROJECT_PATH?>Scheduler/index/<?=$this->session->userdata("domain_event_id")?>">Invite Users</a></li>                    
            	</ul>
            </li>
            <? } ?>
            
			<?
			/*?>
            <li class="active"><a href="<?=PROJECT_PATH?>dashboard/"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboard</span></a></li>
            <li><a href=""><i class="fa fa-calendar-o"></i> <span class="nav-label">Events</span></a></li><? #<?=PROJECT_PATH? >event/?>
            <li>
                <a href="#"><i class="fa fa-area-chart"></i> <span class="nav-label">Analytics</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-calendar"></i> <span class="nav-label">Calender</span></a>
            </li>
			<li>
                <a href="<?=PROJECT_PATH?>user/index"><i class="fa fa-user"></i> <span class="nav-label">User</span></a>
            </li>
            <li class="cr-sidenav-name">
                <span class="nav-label">TOOLS</span>
            </li>
            <li>
                <a href="#"><i class="fa fa-envelope"></i> <span class="nav-label">Email Campaign</span></a>
            </li>
            
            <li class="cr-sidenav-name">
                <span class="nav-label">MORE</span>
            </li>
            <li>
                <a href="#"><i class="fa fa-files-o"></i> <span class="nav-label">Templates</span></a>
            </li>
            <li>
                <a href="/matchmaking/admin/typedetail/1"><i class="fa fa-microphone"></i> <span class="nav-label">Speakers</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-money"></i> <span class="nav-label">Payment Gateways</span></a>
            </li>
            <li>
                <a href="/matchmaking/admin/typedetail/2"><i class="fa fa-user"></i> <span class="nav-label">Sponsors</span></a>
            </li>
            <li>
                <a href="/matchmaking/admin/typedetail/3"><i class="fa fa-th-large"></i> <span class="nav-label">Exhibitions</span></a>
            </li>            
            <? */ } else { ?>
            <li class="active"><a href="<?=PROJECT_PATH.DEFAULT_FIRST_LOGIN_SCREEN?>"><i class="fa fa-th-large"></i> <span class="nav-label">Create Profile</span></a></li>
            <? } ?>
        </ul>

    </div>
</nav>