<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Event | Contact Profile </title>

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
		.events_attend{
			list-style:none;
			padding:0px;
		}
		.events_attend i{
			width:20px;
		}
		.well{			
			float: left;
			margin-bottom: 8px;
			margin-right:5px;
			padding: 5px;
			
		}
		.nav > li.active{
			background:none;
			border:none;
		}
		.nav-pills > li > a{
			border-radius:35%;
			background:none;
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
                	<div class="col-lg-9">
                    	<div class="ibox">
                        	<div class="ibox-content">
                            	<div class="row">
                                	<div class="col-lg-4">
                                    	<div class="text-center">
                                            <div class="avatar-container p-90"><img alt="image" width="100" class="avatar m-t-xs img-responsive" src="http://<?=$_SERVER['HTTP_HOST']?>/matchmaking/uploads/6_2.jpg"></div>
                                            
                                            <div class="percent_complete btn btn-rounded btn-outline btn-default" style="margin-top:-10px;">90%</div>
                                            <div class="row">
                                            	<div class="col-lg-12">
                                                	STATUS
                                                </div>
                                                <div class="col-lg12">
                                                	Available For Next 10 Days
                                                </div>
                                                <div class="col-lg-6">
                                                	<span>
                                                        11 Yrs<br />
                                                        <small>IN BUSINESS</small>
                                                	</span>
                                                </div>
                                                <div class="col-lg-6">
                                                	<span>
                                                        Arizona<br />
                                                        <small>UNITED STATES</small>
                                                	</span>
                                                </div>
                                            </div>
                                         </div>
                                    </div>
                                    <div class="col-lg-8">
                                    	<div class="row">
                                        	<div class="col-lg-12">
                                            	<h1>Hamish Mckenzie</h1>
                                                <h3>Administration for Native Americans</h3>
                                                <h5>Hamish.mckenzie@fireeye.com</h5>
                                            </div>
                                        </div>
                                        <div class="row">
                                        	<div class="col-lg-12">
                                            	<li class="symbol"><i class="fa fa-phone"></i><span>Call Hamish</span></li>
                                                <li class="symbol"><i class="fa fa-phone"></i><span>Message Hamish</span></li>
                                                <li class="symbol"><i class="fa fa-calendar"></i><span>Meetup with Hamish</span></li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                	<div class="col-lg-12">
                                    	<hr />
                                    </div>
                                </div>
                                <div class="row" style="height:100px;">
                                    <div class="col-lg-6">
                                    	Branch
                                        <h5 class="no-margins">Wisconsin</h5>
                                    </div>
                                    <div class="col-lg-6">
                                    	Role
                                        <h5 class="no-margins">Procurement decision maker</h5>
                                    </div>
                                </div>
                                <div class="row" style="height:100px;">
                                    <div class="col-lg-6">
                                    	Location
                                        <h5 class="no-margins">Arizona</h5>
                                    </div>
                                    <div class="col-lg-6">
                                    	Address
                                        <h5 class="no-margins">Arizona</h5>
                                    </div>
                                </div>
                                <div class="row">
                                	<div class="col-lg-12">
                                    	<hr />
                                    </div>
                                </div>
                                <div class="row">
                                	<div class="col-lg-12">
                                    	<h5>BIO</h5>
                                        <p>
                                        	Dr. Gil Nonato C. Santos is a Full Professor and Chairman of the De La Salle University Physics Department. He has an undergraduate and graduate degree in Physics at De La Salle University and University of the Philippines and a Doctorate degree in Materials Science and Engineering at the University of the Philippines Diliman National Institute of Physics.
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                	<div class="col-lg-12">
                                    	<hr />
                                    </div>
                                </div>
                                <div class="row">
                                	<div class="col-lg-12">
                                    	<h5>RESPONSIBILITIES</h5>
                                        <ul>
                                        	<li>
                                            	Lead the UX Strategy and Planning group on LinkedIn
                                            </li>
                                            <li>
                                            	Host UX STRAT, an international UX Strategy Conference
                                            </li>
                                            <li>
                                            	Host UX STRAT Masterclasses in select cities
                                            </li>
                                            <li>
                                            	Conduct UX Strategy workshops for companies and creative agencies that take UX seriously
                                            </li>
                                            <li>
                                            	Co-authoring a book on UX Strategy for Elsevier / Morgan Kaufmann
                                            </li>
                                            <li>
                                            	I lead a team of UX strategy consultants who help companies formulate a UX strategy for their products, projects and programs
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row">
                                	<div class="col-lg-12">
                                    	<hr />
                                    </div>
                                </div>
                                <div class="row">
                                	<div class="col-md-12">
                                    	<h5>EVENTS ATTENDING BY HAMISH</h5>
                                        <div class="row">
                                        	<div class="col-md-4">
                                            	<div class="ibox ">
                                                	<div class="ibox-content mine-ibox">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <img width="200" src="http://localhost/matchmaking/uploads/utah_videos.png" class="m-t-md img-responsive" alt="image">
                                                            </div>
                                                            <div class="col-md-12">
                                                            	<ul class="events_attend">
                                                                	<li>
                                                                    	<i class="fa fa-calendar"></i>
                                                                        <span><small>07 May 2015 to 07 May 2015</small></span>
                                                                    </li>
                                                                    <li>
                                                                    	<i class="fa fa-calendar"></i>
                                                                        <span><small>Salt Lake Community College 9750 South 300 West, Sandy City, Utah, United States</small></span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-6">
                                                            	<button class="btn btn-default" type="button">Register</button>
                                                            </div>
                                                            <div class="col-md-6">
                                                            	<button class="btn btn-default btn-outline" type="button">Details</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                            	<div class="ibox ">
                                                	<div class="ibox-content mine-ibox">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <img width="200" src="http://localhost/matchmaking/uploads/utah_videos.png" class="m-t-md img-responsive" alt="image">
                                                            </div>
                                                            <div class="col-md-12">
                                                            	<ul class="events_attend">
                                                                	<li>
                                                                    	<i class="fa fa-calendar"></i>
                                                                        <span><small>07 May 2015 to 07 May 2015</small></span>
                                                                    </li>
                                                                    <li>
                                                                    	<i class="fa fa-calendar"></i>
                                                                        <span><small>Salt Lake Community College 9750 South 300 West, Sandy City, Utah, United States</small></span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-6">
                                                            	<button class="btn btn-default" type="button">Register</button>
                                                            </div>
                                                            <div class="col-md-6">
                                                            	<button class="btn btn-default btn-outline" type="button">Details</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4">
                                            	<div class="ibox ">
                                                	<div class="ibox-content mine-ibox">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <img width="200" src="http://localhost/matchmaking/uploads/utah_videos.png" class="m-t-md img-responsive" alt="image">
                                                            </div>
                                                            <div class="col-md-12">
                                                            	<ul class="events_attend">
                                                                	<li>
                                                                    	<i class="fa fa-calendar"></i>
                                                                        <span><small>07 May 2015 to 07 May 2015</small></span>
                                                                    </li>
                                                                    <li>
                                                                    	<i class="fa fa-calendar"></i>
                                                                        <span><small>Salt Lake Community College 9750 South 300 West, Sandy City, Utah, United States</small></span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-md-6">
                                                            	<button class="btn btn-default" type="button">Register</button>
                                                            </div>
                                                            <div class="col-md-6">
                                                            	<button class="btn btn-default btn-outline" type="button">Details</button>
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
                                    	<hr />
                                    </div>
                                </div>
                                <div class="row">
                                	<div class="col-lg-12">
                                    	<h4>HAMISH's SCHEDULE</h4>
                                    </div>
                                </div>
                                <div class="row">
                                	<div class="col-lg-6">
                                    	<div class="text-center"></div>                                        
                                    </div>
                                    <div class="col-lg-6">
                                    	Registered Events
                                    </div>
                                </div>
                                <div class="row">
                                	<div class="col-lg-6">
                                    	<div id="calendar"></div>
                                    </div>
                                    <div class="col-lg-6">
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
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                    	<div class="ibox">
                        	<div class="ibox-content">
                            	<div class="row">
                                	<div class="col-lg-12">
                                    	<h5>PRODUCTS/SERVICES</h5>
                                    </div>
                                    <div class="col-lg-12">
                                    	<div class="well">SAP</div>
                                        <div class="well">Java</div>
                                        <div class="well">Implementation</div>
                                        <div class="well">Testing</div>
                                        <div class="well">Consulting</div>
                                        <div class="well">Quality Assessment</div>
                                        <div class="well">Testing</div>
                                        <div class="well">Consulting</div>
                                        <div class="well">Quality Assessment</div>
                                        <div class="well">Testing</div>
                                        <div class="well">Consulting</div>
                                        <div class="well">Quality Assessment</div>                                         
                                    </div>
                                    <div class="col-lg-12" style="margin-bottom:20px;">
                                    	<a class="pull-right" href="#">View All...</a>
                                    </div>
                                </div>                                
                                <div class="row">
                                	<div class="col-lg-12">
                                    	<h5>HAMISH'S CONNECTIONS</h5>
                                    </div>
                                    <div class="col-lg-12">
                                    	<div class="tabs-container">
                                        	<ul class="nav nav-pills">
                                              <li class="active"><a data-toggle="tab"  href="#tab-1">Buyers</a></li>
                                              <li><a data-toggle="tab" href="#tab-2">Sellers</a></li>
                                        	</ul>
                                        	<div class="tab-content">
                                                <div id="tab-1" class="tab-pane active">
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
                                                <div id="tab-2" class="tab-pane">
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
                                    	<!--<div class="btn-group pull-left">
                                            <button class="btn btn-default btn-rounded" type="button">Buyers</button>                                            
                                            <button class="btn btn-default btn-rounded btn-outline" type="button">Sellers</button>
                                        </div>-->                                        
                                    </div>
                                    <div class="col-lg-12 m-b-s" style="margin-bottom:20px;">
                                    	
                                    </div>
                                </div>
                                <div class="row">
                                	<div class="col-lg-12">
                                    	<h5>NAICS CODE</h5>
                                    </div>
                                    <div class="col-lg-12">
                                    	<div class="well">441222  - Boat Dealers</div>
                                        <div class="well">441228  -  Motorcycle, ATV, and All Other Motor Vehicle Dealers</div>
                                        <div class="well">442299  -  All Other Home Furnishings Stores</div>
                                        <div class="well">444190  -  Other Building Material Dealers</div>
                                    </div>
                                    <div class="col-lg-12" style="margin-bottom:20px;">
                                    	<a href="#" class="pull-right">View all</a>
                                    </div>
                                </div>
                                <div class="row">
                                	<div class="col-lg-12">
                                    	<h5>SIC CODE</h5>
                                    </div>
                                    <div class="col-lg-12">
                                    	<div class="well">10110100   -   Iron ore mining</div>
                                        <div class="well">2611  -   Pulp Mills</div>
                                        <div class="well">31110101    -   Bridle leather</div>
                                        <div class="well">65120101  -  Bank building operation</div>
                                    </div>
                                    <div class="col-lg-12" style="margin-bottom:20px;">
                                    	<a href="#" class="pull-right">View all</a>
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
		
		 /* initialize the calendar
         -----------------------------------------------------------------*/
        var date = new Date();
        var d = date.getDate();
        var m = date.getMonth();
        var y = date.getFullYear();

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar
            drop: function() {
                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }
            },
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
	});
	</script>
</body>
</html>
