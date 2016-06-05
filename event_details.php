<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Event | Event Details </title>

    <link href="<?=PROJECT_PATH?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=PROJECT_PATH?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="<?=PROJECT_PATH?>assets/css/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
    <!--<link href="<?=PROJECT_PATH?>assets/css/plugins/round-avatar/normalize.css" rel="stylesheet">-->
    <link href="<?=PROJECT_PATH?>assets/css/plugins/round-avatar/style.css" rel="stylesheet">
    <link href="<?=PROJECT_PATH?>assets/css/animate.css" rel="stylesheet">
    <link href="<?=PROJECT_PATH?>assets/css/style.css" rel="stylesheet">
    <style type="text/css">
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
		/*.ibox-content h2{
			#000;
			font-weight:bold;
		}*/
		.ibox-content h3{
			margin-bottom:0px;			
		}
		.percent{
			width:60px;
			text-align:right;
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
		.avatar-container {
			margin-bottom:0px;
		}
		.percent_complete{
			line-height:15px;
		}
		.symbol{
			list-style:none;
			line-height:40px;
			border-bottom:1px solid #CCC;
			font-size:16px;			
		}
		.symbol i{
			width:30px;
		}
		.mine-ibox{
			background:#F3F3F4;
		}
		ul{
			padding-left:10px;
		}
		.events_attend{
			list-style:none;
			padding:0px;
		}
		.events_attend i{
			width:20px;
			float:left;
			margin-top:5px;
		}
		.events_attend div{
			float:left;
			width:92%;
		}
		.well{			
			float: left;
			margin-bottom: 8px;
			margin-right:5px;
			padding: 5px;
			
		}
		
		.connections{
			list-style:none;
			padding-left:0px;
		}
		.connections li{
			margin-bottom:20px;
		}
		.connections li div{
			float:left;
			margin-bottom:20px;
		}
		.connections li div:first-child{
			width:20%;
		}
		.connections li div:nth-child(2){
			width:80%;
		}
		.table { 			
			display: table;
			padding-bottom: 0px;
			margin-bottom: 0px; 
		}
		.row_table { display: table-row; }
		.cell { display: table-cell; padding:3px; }
		.cell:first-child{
			width:90%;
		}
		.cell:nth-child(even) {
			text-align:right;
		}
		.row_table:last-child {
			font-weight:bold;
			font-size:16px;
			
		}
		.row_table:last-child .cell{
			border-top:1px solid #CCC;
			padding-top:10px;
		}
		
		#vertical-timeline{
			font-size:9px !important;
		}
		.vertical-timeline-content .vertical-date {
			position:absolute;
			top:15%;
			right:119%;
		}
		.dark-timeline .vertical-timeline-content, .dark-timeline.center-orientation .vertical-timeline-content {
			background:none;
			margin-left:40px;
		}
		.vertical-timeline-content {
			padding:1px;
		}
		.vertical-timeline-content h2{
			font-size:12px;
		}
		.vertical-timeline-icon{
			left:8px;
			width:25px;
			height:25px;
		}
		.tabs-container{
			padding-top:10px;
		}
		.tabs-container .nav-tabs li a{
			font-size:11px;
		}
		.join_now{
			position:relative;
		}
		.join_now .ibox:first-child , .join_now .ibox:nth-child(2){
			border: 1px solid;
			display: none;
			/*left: -400px;*/
			position: absolute;
			z-index: 2147483647;
		}
		.close_get_insights{
			border-bottom:1px solid #CCC;
			padding-bottom:25px;
			margin-bottom:10px;
			width:100%;
		}
		
	</style>

</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    
                </ul>
            </div>
        </nav>
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" action="search_results.html">
                            <div class="form-group">
                                <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">                
                        <li>
                            <a class="right-sidebar-toggle">
                                <i class="fa fa-tasks"></i>
                            </a>
                        </li>
                    </ul>
        
                </nav>
        	</div>
            <div class="wrapper wrapper-content">
            	<div class="row">
                	<div class="col-lg-8">
                    	<div class="row">
                        	<div class="col-lg-6">
                            	<div class="ibox">
                                	<div class="ibox-content">
                                    	<div class="row">
                                        	<div class="col-lg-6">
                                            	<img width="200" src="http://localhost/matchmaking/uploads/utah_videos.png" class="m-t-md img-responsive" alt="image">
                                            </div>
                                            <div class="col-lg-6 m-t-lg">
                                            	<h3>Utah VetBOS</h3>
                                            </div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-12">
                                            	<ul class="events_attend">
                                                    <li>
                                                        <i class="fa fa-calendar"></i>
                                                        <div><small>Salt Lake Community College 9750 South 300 West, Sandy City, Utah, United States</small></div>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-calendar"></i>
                                                        <div><small>07 May 2015 to 07 May 2015</small></div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-6 m-t-md">
                                            	<button type="button" class="btn btn-default btn-block">Register</button>
                                            </div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-12 m-t-lg">
                                            	<h5>DESCRIPTION</h5>
                                                <small>
                                                    <p>
                                                        A VetBOS is a structured, screened and periodic event where procurement decision makers (PDMs) from federal and state agencies engage directly with Veteran-owned and other small businesses that provide specific products or services.
                                                    </p>
                                                    <p>
                                                        The VetBOS will consist of two sessions:
                                                    </p>
                                                    <ul>
                                                        <li>Business Opportunity Session: Open to all small businesses who are interested in learning more about specific business opportunities.</li>
                                                        <li>Networking Session: Small businesses who provide specific products or services, discuss their capabilities directly with a PDM. Networking Sessions are by invitation/appointment and participation in the Business Opportunity Session is required.</li>
                                                    </ul>
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                            	<div class="row">
                                	<div class="col-lg-12">
                                    	<div class="ibox">
                                			<div class="ibox-content">
                                            	<h3 style="padding-top:20px; padding-bottom:20px;">
                                                	<i class="fa fa-shopping-cart" style="width:40px;font-size:24px;"></i><span>EVENT CART</span>
                                                </h3>
                                                <div class="table">
                                                	<div class="row_table">
                                                    	<div class="cell">
                                                        	<small>ACTIVITIES COST</small>
                                                        </div>
                                                        <div class="cell">
                                                        	<b>$210.00</b>
                                                        </div>
                                                    </div>
                                                    <div class="row_table">
                                                    	<div class="cell">
                                                        	<small>WORKSHOP COST</small>
                                                        </div>
                                                        <div class="cell">
                                                        	<b>$210.00</b>
                                                        </div>
                                                    </div>
                                                    <div class="row_table">
                                                    	<div class="cell">
                                                        	<small>REGISTRATION FEE</small>
                                                        </div>
                                                        <div class="cell">
                                                        	<b>$99.99</b>
                                                        </div>
                                                    </div>
                                                    <div class="row_table">
                                                    	<div class="cell">
                                                        	TOTAL
                                                        </div>
                                                        <div class="cell">
                                                        	$521.00
                                                        </div>
                                                    </div>
                                                </div>
                                    		</div>
                                		</div>
                                    </div>
                                </div>
                                <div class="row">
                                	<div class="col-lg-12 m-t-xs">
                                    	<div class="ibox">
                                			<div class="ibox-content">
                                            	<h4 style="padding-top:10px; padding-bottom:5px;">
                                                	AGENDA
                                                </h4>
                                               	<div id="vertical-timeline" class="vertical-container dark-timeline center-orientation11">
        											<div class="vertical-timeline-block">
                                                    	<div class="vertical-timeline-icon white-bg">
                                                        </div>
                                                        <div class="vertical-timeline-content">
                                                            <h2>Meeting</h2>
                                                            <span class="vertical-date">
                                                                9.00 AM
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-block">
                                                    	<div class="vertical-timeline-icon white-bg">
                                                        </div>
                                                        <div class="vertical-timeline-content">
                                                            <h2>Business opportunity session</h2>
                                                            <span class="vertical-date">
                                                                10.00 AM
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-block">
                                                    	<div class="vertical-timeline-icon white-bg">
                                                        </div>
                                                        <div class="vertical-timeline-content">
                                                            <h2>Networking round table</h2>
                                                            <span class="vertical-date">
                                                                11.00 AM
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-block">
                                                    	<div class="vertical-timeline-icon white-bg">
                                                        </div>
                                                        <div class="vertical-timeline-content">
                                                            <h2>Lunch</h2>
                                                            <span class="vertical-date">
                                                                12.00 AM
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-block">
                                                    	<div class="vertical-timeline-icon white-bg">
                                                        </div>
                                                        <div class="vertical-timeline-content">
                                                            <h2>Workshop 1</h2>
                                                            <span class="vertical-date">
                                                                13.00 AM
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-block">
                                                    	<div class="vertical-timeline-icon white-bg">
                                                        </div>
                                                        <div class="vertical-timeline-content">
                                                            <h2>Workshop 2</h2>
                                                            <span class="vertical-date">
                                                                14.00 AM
                                                            </span>
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
                        	<div class="col-lg-12 m-t-lg">
                            	<h4>ACTIVITIES</h4>
                                <small>
                                	<div class="row">
                                        <div class="col-lg-3">
                                            # OF ACTIVITIES: 10
                                        </div>
                                        <div class="col-lg-3">
                                            # OF ACTIVITIES JOINED: 1
                                        </div>
                                        <div class="col-lg-3">
                                            TOTAL ACTIVITY COST : $420.00
                                        </div>
                                        <div class="col-lg-3">
                                            AMOUNT PAYABLE : $420.00
                                        </div>
                                	</div>
                                </small>
                            </div>
                        </div>
                        <div class="row">                        	
                        	<div class="col-lg-6 join_now" >
                            	<div class="ibox">
                                	<div class="ibox-content" style="padding-top:15px;">
                                    	<div class="row">
                                            <div class="col-sm-2">
                                                <img class="pull-left" style="height:33px; width:50px; margin-right:20px;" src="/matchmaking/assets/img/hand_shake.png">
                                            </div>
                                            <div class="col-sm-7">
                                            	<h5>BUSINESS OPPORTUNITY SESSION</h5>
                                            </div>
                                            <div class="col-sm-3">
                                            	<button class="btn btn-default btn-block">212$</button>
                                            </div>
                                		</div>
                                        <div class="row">
                                        	<div class="col-sm-12">
                                            	<ul class="events_attend">
                                                    <li>
                                                        <i class="fa fa-clock-o"></i>
                                                        <div><small>9.00 AM to 10.00 AM</small></div>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-eraser"></i>
                                                        <div><small>One - One Session & Non Strategic Matchmaking</small></div>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-tint"></i>
                                                        <div><small>Table 2</small></div>
                                                    </li>
                                                </ul>
                                                <p>
                                                	Prosthetics NRT - Four to five small businesses who provide specific products or services, discuss their capabilities directly with a PDM. <a href="#">Read more...</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-12"><hr /></div>
                                            <p class="text-center">
                                            	<small>
                                                	Before joining in this activity, you can get a deeper insights on your likely matchmakers
                                                </small>
                                            </p>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-6">
                                            	<button class="btn btn-default btn-block btn-outline get_insights">Get insights</button>
                                            </div>
                                            <div class="col-lg-6">
                                            	<button class="btn btn-default btn-block">Withdrawals</button>
                                            </div>
                                            <p class="text-center">
                                            	<small>0 of 20 seats available</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ibox">
                                	<div class="ibox-content" style="padding-top:15px;">
                                    	<div class="row">
                                        	<div class="col-lg-12">
                                            	<div class="close_get_insights"><a class="pull-right">X</a></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-12">                                            	
                                                <div id="flot-pie-chart" class="flot-chart-pie-content"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ibox">
                                	<div class="ibox-content" style="padding-top:15px;">
                                    	<div class="row">
                                            <div class="col-lg-2">
                                                <img class="pull-left" style="height:33px; width:50px; margin-right:20px;" src="/matchmaking/assets/img/hand_shake.png">
                                            </div>
                                            <div class="col-lg-7">
                                            	<h5>BUSINESS OPPORTUNITY SESSION</h5>
                                            </div>
                                            <div class="col-lg-3">
                                            	<button class="btn btn-default btn-block">212$</button>
                                            </div>
                                		</div>
                                        <div class="row">
                                        	<div class="col-lg-12">
                                            	<ul class="events_attend">
                                                    <li>
                                                        <i class="fa fa-clock-o"></i>
                                                        <div><small>9.00 AM to 10.00 AM</small></div>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-eraser"></i>
                                                        <div><small>One - One Session & Non Strategic Matchmaking</small></div>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-tint"></i>
                                                        <div><small>Table 2</small></div>
                                                    </li>
                                                </ul>
                                                <p>
                                                	Prosthetics NRT - Four to five small businesses who provide specific products or services, discuss their capabilities directly with a PDM. <a href="#">Read more...</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-12"><hr /></div>
                                            <p class="text-center">
                                            	<small>
                                                	Before joining in this activity, you can get a deeper insights on your likely matchmakers
                                                </small>
                                            </p>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-6">
                                            	<button class="btn btn-default btn-block btn-outline get_insights">Get insights</button>
                                            </div>
                                            <div class="col-lg-6">
                                            	<button class="btn btn-default btn-block join_now_call">Join Now</button>
                                            </div>
                                            <p class="text-center">
                                            	<small>0 of 20 seats available</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 join_now" >
                            	<div class="ibox">
                                	<div class="ibox-content" style="padding-top:15px;">
                                    	<div class="row">
                                            <div class="col-sm-2">
                                                <img class="pull-left" style="height:33px; width:50px; margin-right:20px;" src="/matchmaking/assets/img/hand_shake.png">
                                            </div>
                                            <div class="col-sm-7">
                                            	<h5>BUSINESS OPPORTUNITY SESSION</h5>
                                            </div>
                                            <div class="col-sm-3">
                                            	<button class="btn btn-default btn-block">212$</button>
                                            </div>
                                		</div>
                                        <div class="row">
                                        	<div class="col-sm-12">
                                            	<ul class="events_attend">
                                                    <li>
                                                        <i class="fa fa-clock-o"></i>
                                                        <div><small>9.00 AM to 10.00 AM</small></div>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-eraser"></i>
                                                        <div><small>One - One Session & Non Strategic Matchmaking</small></div>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-tint"></i>
                                                        <div><small>Table 2</small></div>
                                                    </li>
                                                </ul>
                                                <p>
                                                	Prosthetics NRT - Four to five small businesses who provide specific products or services, discuss their capabilities directly with a PDM. <a href="#">Read more...</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-12"><hr /></div>
                                            <p class="text-center">
                                            	<small>
                                                	Before joining in this activity, you can get a deeper insights on your likely matchmakers
                                                </small>
                                            </p>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-6">
                                            	<button class="btn btn-default btn-block btn-outline get_insights">Get insights</button>
                                            </div>
                                            <div class="col-lg-6">
                                            	<button class="btn btn-default btn-block">Withdrawals</button>
                                            </div>
                                            <p class="text-center">
                                            	<small>0 of 20 seats available</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ibox">
                                	<div class="ibox-content" style="padding-top:15px;">
                                    	<div class="row">
                                        	<div class="col-lg-12">
                                            	<div class="close_get_insights"><a class="pull-right">X</a></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-12">                                            	
                                                <div id="flot-pie-chart1" class="flot-chart-pie-content"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ibox">
                                	<div class="ibox-content" style="padding-top:15px;">
                                    	<div class="row">
                                            <div class="col-lg-2">
                                                <img class="pull-left" style="height:33px; width:50px; margin-right:20px;" src="/matchmaking/assets/img/hand_shake.png">
                                            </div>
                                            <div class="col-lg-7">
                                            	<h5>BUSINESS OPPORTUNITY SESSION</h5>
                                            </div>
                                            <div class="col-lg-3">
                                            	<button class="btn btn-default btn-block">212$</button>
                                            </div>
                                		</div>
                                        <div class="row">
                                        	<div class="col-lg-12">
                                            	<ul class="events_attend">
                                                    <li>
                                                        <i class="fa fa-clock-o"></i>
                                                        <div><small>9.00 AM to 10.00 AM</small></div>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-eraser"></i>
                                                        <div><small>One - One Session & Non Strategic Matchmaking</small></div>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-tint"></i>
                                                        <div><small>Table 2</small></div>
                                                    </li>
                                                </ul>
                                                <p>
                                                	Prosthetics NRT - Four to five small businesses who provide specific products or services, discuss their capabilities directly with a PDM. <a href="#">Read more...</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-12"><hr /></div>
                                            <p class="text-center">
                                            	<small>
                                                	Before joining in this activity, you can get a deeper insights on your likely matchmakers
                                                </small>
                                            </p>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-6">
                                            	<button class="btn btn-default btn-block btn-outline get_insights">Get insights</button>
                                            </div>
                                            <div class="col-lg-6">
                                            	<button class="btn btn-default btn-block join_now_call">Join Now</button>
                                            </div>
                                            <p class="text-center">
                                            	<small>0 of 20 seats available</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        	<div class="col-lg-12 m-t-lg">
                            	<h4>WORKSHOPS</h4>
                                <small>
                                	<div class="row">
                                        <div class="col-lg-3">
                                            # OF WORKSHOPS: 10
                                        </div>
                                        <div class="col-lg-3">
                                            # OF WORKSHOPS JOINED: 1
                                        </div>
                                        <div class="col-lg-3">
                                            TOTAL WORKSHOPS COST : $420.00
                                        </div>
                                        <div class="col-lg-3">
                                            AMOUNT PAYABLE : $420.00
                                        </div>
                                	</div>
                                </small>
                            </div>
                        </div>
                        <div class="row">
                        	<div class="col-lg-6">
                            	<div class="ibox">
                                	<div class="ibox-content" style="padding-top:15px;">
                                    	<div class="row">
                                            <div class="col-lg-2">
                                                <img class="pull-left" style="height:33px; width:50px; margin-right:20px;" src="/matchmaking/assets/img/workshop.png">
                                            </div>
                                            <div class="col-lg-7">
                                            	<h5>DC PTAC & PTAP</h5>
                                            </div>
                                            <div class="col-lg-3">
                                            	<button class="btn btn-default btn-block">212$</button>
                                            </div>
                                		</div>
                                        <div class="row">
                                        	<div class="col-lg-12">
                                            	<ul class="events_attend">
                                                    <li>
                                                        <i class="fa fa-clock-o"></i>
                                                        <div><small>9.00 AM to 10.00 AM</small></div>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-eraser"></i>
                                                        <div><small>One - One Session & Non Strategic Matchmaking</small></div>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-tint"></i>
                                                        <div><small>Table 2</small></div>
                                                    </li>
                                                </ul>
                                                <p>
                                                	Prosthetics NRT - Four to five small businesses who provide specific products or services, discuss their capabilities directly with a PDM. <a href="#">Read more...</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-12"><hr /></div>
                                            <p class="text-center">
                                            	<small>
                                                	Before joining in this activity, you can get a deeper insights on your likely matchmakers
                                                </small>
                                            </p>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-6">
                                            	<button class="btn btn-default btn-block btn-outline">Get insights</button>
                                            </div>
                                            <div class="col-lg-6">
                                            	<button class="btn btn-default btn-block">Join Now</button>
                                            </div>
                                            <p class="text-center">
                                            	<small>0 of 20 seats available</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                            	<div class="ibox">
                                	<div class="ibox-content" style="padding-top:15px;">
                                    	<div class="row">
                                            <div class="col-lg-2">
                                                <img class="pull-left" style="height:33px; width:50px; margin-right:20px;" src="/matchmaking/assets/img/workshop.png">
                                            </div>
                                            <div class="col-lg-7">
                                            	<h5>DC PTAC & PTAP</h5>
                                            </div>
                                            <div class="col-lg-3">
                                            	<button class="btn btn-default btn-block">212$</button>
                                            </div>
                                		</div>
                                        <div class="row">
                                        	<div class="col-lg-12">
                                            	<ul class="events_attend">
                                                    <li>
                                                        <i class="fa fa-clock-o"></i>
                                                        <div><small>9.00 AM to 10.00 AM</small></div>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-eraser"></i>
                                                        <div><small>One - One Session & Non Strategic Matchmaking</small></div>
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-tint"></i>
                                                        <div><small>Table 2</small></div>
                                                    </li>
                                                </ul>
                                                <p>
                                                	Prosthetics NRT - Four to five small businesses who provide specific products or services, discuss their capabilities directly with a PDM. <a href="#">Read more...</a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-12"><hr /></div>
                                            <p class="text-center">
                                            	<small>
                                                	Before joining in this activity, you can get a deeper insights on your likely matchmakers
                                                </small>
                                            </p>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-6">
                                            	<button class="btn btn-default btn-block btn-outline">Get insights</button>
                                            </div>
                                            <div class="col-lg-6">
                                            	<button class="btn btn-default btn-block">Join Now</button>
                                            </div>
                                            <p class="text-center">
                                            	<small>0 of 20 seats available</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        	<div class="col-lg-12">
                            	<h4>SPONSORS</h4>
                            </div>
                        </div>
                        <div class="row">
                        	<div class="col-lg-12">
                            	<div class="ibox">
                                	<div class="ibox-content">
                                    	logos
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                    	<!--<div class="ibox">
                        	<div class="ibox-content">
                            	
                            </div>
                        </div>-->
                        <div class="tabs-container">
                            <ul class="nav nav-tabs">
                                <li class="text-center active">
                                    <a data-toggle="tab"  href="#tab-1">
                                        <div class="cr-tab-icon"><i class="fa fa-file-text-o fa-2x"></i></div>
                                        ACTIVITY
                                    </a>
                                </li>
                                <li class="text-center">
                                    <a data-toggle="tab"  href="#tab-2">
                                        <div class="cr-tab-icon"><i class="fa fa-calendar fa-2x"></i></div>
                                        SCHEDULE
                                    </a>
                                </li>
                                <li class="text-center">
                                    <a data-toggle="tab"  href="#tab-3">
                                        <div class="cr-tab-icon"><i class="fa fa-share-alt fa-2x"></i></div>
                                        ROLODEX
                                    </a>
                                </li>                                        
                            </ul>
                            <div class="tab-content">
                                <div id="tab-1" class="tab-pane active">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div id="vertical-timeline" class="vertical-container dark-timeline center-orientation11">
                                                    <div class="vertical-timeline-block">
                                                        <div class="vertical-timeline-icon white-bg">
                                                        </div>
                                                        <div class="vertical-timeline-content">
                                                            <h2>Meeting</h2>
                                                            <span class="vertical-date">
                                                                9.00 AM
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-block">
                                                        <div class="vertical-timeline-icon white-bg">
                                                        </div>
                                                        <div class="vertical-timeline-content">
                                                            <h2>Business opportunity session</h2>
                                                            <span class="vertical-date">
                                                                10.00 AM
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-block">
                                                        <div class="vertical-timeline-icon white-bg">
                                                        </div>
                                                        <div class="vertical-timeline-content">
                                                            <h2>Networking round table</h2>
                                                            <span class="vertical-date">
                                                                11.00 AM
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-block">
                                                        <div class="vertical-timeline-icon white-bg">
                                                        </div>
                                                        <div class="vertical-timeline-content">
                                                            <h2>Lunch</h2>
                                                            <span class="vertical-date">
                                                                12.00 AM
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-block">
                                                        <div class="vertical-timeline-icon white-bg">
                                                        </div>
                                                        <div class="vertical-timeline-content">
                                                            <h2>Workshop 1</h2>
                                                            <span class="vertical-date">
                                                                13.00 AM
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-block">
                                                        <div class="vertical-timeline-icon white-bg">
                                                        </div>
                                                        <div class="vertical-timeline-content">
                                                            <h2>Workshop 2</h2>
                                                            <span class="vertical-date">
                                                                14.00 AM
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <button class="btn btn-default btn-block m-t-lg">Earlier</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-2" class="tab-pane">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div id="calendar1"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 m-t-lg">
                                                   Upcoming events
                                            </div>
                                            <div class="col-lg-12">
                                                <ul class="todo-list m-t ui-sortable">
                                                    <li>
                                                        <small>17 May 2015</small>
                                                        <p class="no-margins">
                                                            5th Annual SBA Southern California 8(a) & Small Business Conference
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <small>17 May 2015</small>
                                                        <p class="no-margins">
                                                            5th Annual SBA Southern California 8(a) & Small Business Conference
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-12 text-center">
                                            	<i class="fa fa-chevron-left"></i>
                                                	1 of 4
                                                <i class="fa fa-chevron-right"></i>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 m-t-lg">
                                                   Upcoming events
                                            </div>
                                            <div class="col-lg-12">
                                                <ul class="todo-list m-t ui-sortable">
                                                    <li>
                                                        <small>17 May 2015</small>
                                                        <p class="no-margins">
                                                            5th Annual SBA Southern California 8(a) & Small Business Conference
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <small>17 May 2015</small>
                                                        <p class="no-margins">
                                                            5th Annual SBA Southern California 8(a) & Small Business Conference
                                                        </p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-lg-12 text-center">
                                            	<i class="fa fa-chevron-left"></i>
                                                	1 of 4
                                                <i class="fa fa-chevron-right"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab-3" class="tab-pane">
                                    <div class="panel-body">
                                        <ul class="connections">
                                                    <li>
                                                        <div>
                                                            <img alt="image" width="30" class="img-circle img-responsive" src="http://<?=$_SERVER['HTTP_HOST']?>/matchmaking/uploads/6_2.jpg">
                                                        </div>
                                                        <div>
                                                            <h5 class="no-margins">Eddie Lobanovskiy</h5>
                                                            <small>SAP Specialist, KEN Systems</small>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <img alt="image" width="30" class="img-circle img-responsive" src="http://<?=$_SERVER['HTTP_HOST']?>/matchmaking/uploads/6_2.jpg">
                                                        </div>
                                                        <div>
                                                            <h5 class="no-margins">Eddie Lobanovskiy</h5>
                                                            <small>SAP Specialist, KEN Systems</small>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <img alt="image" width="30" class="img-circle img-responsive" src="http://<?=$_SERVER['HTTP_HOST']?>/matchmaking/uploads/6_2.jpg">
                                                        </div>
                                                        <div>
                                                            <h5 class="no-margins">Eddie Lobanovskiy</h5>
                                                            <small>SAP Specialist, KEN Systems</small>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <img alt="image" width="30" class="img-circle img-responsive" src="http://<?=$_SERVER['HTTP_HOST']?>/matchmaking/uploads/6_2.jpg">
                                                        </div>
                                                        <div>
                                                            <h5 class="no-margins">Eddie Lobanovskiy</h5>
                                                            <small>SAP Specialist, KEN Systems</small>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <img alt="image" width="30" class="img-circle img-responsive" src="http://<?=$_SERVER['HTTP_HOST']?>/matchmaking/uploads/6_2.jpg">
                                                        </div>
                                                        <div>
                                                            <h5 class="no-margins">Eddie Lobanovskiy</h5>
                                                            <small>SAP Specialist, KEN Systems</small>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <img alt="image" width="30" class="img-circle img-responsive" src="http://<?=$_SERVER['HTTP_HOST']?>/matchmaking/uploads/6_2.jpg">
                                                        </div>
                                                        <div>
                                                            <h5 class="no-margins">Eddie Lobanovskiy</h5>
                                                            <small>SAP Specialist, KEN Systems</small>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div>
                                                            <img alt="image" width="30" class="img-circle img-responsive" src="http://<?=$_SERVER['HTTP_HOST']?>/matchmaking/uploads/6_2.jpg">
                                                        </div>
                                                        <div>
                                                            <h5 class="no-margins">Eddie Lobanovskiy</h5>
                                                            <small>SAP Specialist, KEN Systems</small>
                                                        </div>
                                                    </li>
                                                </ul>
                                    </div>
                                </div>
                            </div>
                    	</div>
                    </div>
                    
                </div>
            </div>
            <div class="footer">
                    <div class="pull-right">
                        .
                    </div>
                    <div>
                        <strong>Copyright</strong>  Company &copy; 2014-2015
                    </div>
             </div>
        </div>
  	</div>

    <!-- Mainly scripts -->
    <script src="<?=PROJECT_PATH?>assets/js/jquery-2.1.1.js"></script>
    <script src="<?=PROJECT_PATH?>assets/js/bootstrap.min.js"></script>
    <script src="<?=PROJECT_PATH?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?=PROJECT_PATH?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    
    <script src="<?=PROJECT_PATH?>assets/js/plugins/fullcalendar/moment.min.js"></script>
	<script src="<?=PROJECT_PATH?>assets/js/plugins/fullcalendar/fullcalendar.min.js"></script>
    
    <script src="<?=PROJECT_PATH?>assets/js/plugins/flot/jquery.flot.js"></script>
    <script src="<?=PROJECT_PATH?>assets/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="<?=PROJECT_PATH?>assets/js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="<?=PROJECT_PATH?>assets/js/plugins/flot/jquery.flot.pie.js"></script>
    <script src="<?=PROJECT_PATH?>assets/js/plugins/flot/jquery.flot.time.js"></script>
        <!-- Custom and plugin javascript -->
    <script src="<?=PROJECT_PATH?>assets/js/inspinia.js"></script>
    <script src="<?=PROJECT_PATH?>assets/js/plugins/pace/pace.min.js"></script>    
    <script src="<?=PROJECT_PATH?>assets/js/plugins/round-avatar/prefixfree.min.js"></script>

    <!-- jQuery UI -->
    <script src="<?=PROJECT_PATH?>assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script type="text/javascript">
	$().ready(function(){
		$('.avatar-container').on('click',function(){
		  if ($(this).find('.info').length <= 0) {
			$(this).append('<div class="info"><div class="info-inner"></div></div>');
		  }
		  
		  var $info = $(this).find('.info'),
			  $inner= $(this).find('.info-inner'),
			  $p    = $(this).attr("class").match(/p-\w+/).toString().substring(2);
		  
		  $inner.text($p+'%');
		  $info.toggleClass('js-active');
		});
		
		$(".join_now_call").on('click',function(){
			//alert('join now');
			console.log($(this).closest('.join_now'));
			$($(this).closest('.join_now').find('.ibox:nth-child(2)')).hide();
			$($(this).closest('.join_now').find('.ibox:first-child')).show();
		});
		
		$(".get_insights").on('click',function(){
			//alert('join now');
			console.log($(this).closest('.join_now'));
			$($(this).closest('.join_now').find('.ibox:first-child')).hide();
			$($(this).closest('.join_now').find('.ibox:nth-child(2)')).show();
		});
		
		$(".close_get_insights>a").on('click',function(){
			$(this).closest('.ibox').hide();
		});
		
		 /* initialize the calendar
         -----------------------------------------------------------------*/
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        $('#calendar1').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            editable: true,            
            events: [
                {
                    title: 'All Day Event',
                    start: new Date(y, m, 1)
                },
                {
                    title: 'Long Event',
                    start: new Date(y, m, d-5),
                    end: new Date(y, m, d-2)
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: new Date(y, m, d-3, 16, 0),
                    allDay: false
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: new Date(y, m, d+4, 16, 0),
                    allDay: false
                },
                {
                    title: 'Meeting',
                    start: new Date(y, m, d, 10, 30),
                    allDay: false
                },
                {
                    title: 'Lunch',
                    start: new Date(y, m, d, 12, 0),
                    end: new Date(y, m, d, 14, 0),
                    allDay: false
                },
                {
                    title: 'Birthday Party',
                    start: new Date(y, m, d+1, 19, 0),
                    end: new Date(y, m, d+1, 22, 30),
                    allDay: false
                },
                {
                    title: 'Click for Google',
                    start: new Date(y, m, 28),
                    end: new Date(y, m, 29),
                    url: 'http://google.com/'
                }
            ]
        });
		ShowPieChart();
	});
	
	function ShowPieChart(){
		var data = [{
        label: "Sales 1",
        data: 21,
        color: "#d3d3d3",
    }, {
        label: "Sales 2",
        data: 3,
        color: "#bababa",
    }, {
        label: "Sales 3",
        data: 15,
        color: "#79d2c0",
    }, {
        label: "Sales 4",
        data: 52,
        color: "#1ab394",
    }];

		var plotObj = $.plot($("#flot-pie-chart"), data, {
			series: {
				pie: {
					show: true
				}
			},
			grid: {
				hoverable: true
			},
			tooltip: true,
			tooltipOpts: {
				content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
				shifts: {
					x: 20,
					y: 0
				},
				defaultTheme: false
			}
		});
		var plotObj1 = $.plot($("#flot-pie-chart1"), data, {
			series: {
				pie: {
					show: true
				}
			},
			grid: {
				hoverable: true
			},
			tooltip: true,
			tooltipOpts: {
				content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
				shifts: {
					x: 20,
					y: 0
				},
				defaultTheme: false
			}
		});
	}
	</script>
</body>
</html>
