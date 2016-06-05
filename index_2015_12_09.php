<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>EventGo One Page Event Landing Page</title>
<meta name="keywords" content="HTML5,CSS3,HTML,Template,Event Template,Freelancer Events,Awsome Event Template,Events Theme Template, One Page Events" >
<meta name="description" content="EventGo One Page Event Landing Page" >
<meta name="author" content="M_Adnan">

<!--Fonts Online-->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

<!--Main-->
<link rel="stylesheet" type="text/css" href="<?=PROJECT_PATH?>assets/customer_events/template1/rs-plugin/css/settings.css" media="screen" >
<link href="<?=PROJECT_PATH?>assets/customer_events/template1/css/style.css" rel="stylesheet" type="text/css">
<link href="<?=PROJECT_PATH?>assets/customer_events/template1/css/responsive.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" id="color" href="<?=PROJECT_PATH?>assets/customer_events/template1/css/colors/default.css">
<link href="<?=PROJECT_PATH?>assets/css/plugins/jQueryUI/jquery-ui-1.11.4.css" rel="stylesheet">
<link rel="stylesheet" href="<?=PROJECT_PATH?>assets/css/plugins/sweetalert/sweetalert.css" media="all" /> 

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
<!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

<? /* <script src="<?=PROJECT_PATH?>assets/customer_events/template1/js/jquery-1.9.1.min.js"></script>  */ ?>
<script type="text/javascript" src="<?=PROJECT_PATH?>assets/customer_events/template1/js/jquery-2.1.0.min.js?ver=1"></script>
</head>
<body>

<!--LOADER===========================================--> 
<!--<div id="page-loader">
  <div class="loader7"><img src="images/Preloader.gif" alt="">
  <h1>Loading.....</h1>
  </div>
</div>--> 

<!-- Page Wrap ===========================================-->
<div id="wrap"> 
  
  <!--======= HEADER =========-->
  <header id="header" class="sticky">
    <div class="container">
      <div class="menu">
        <div class="logo"> <a href="#wrap"> <img src="<?=PROJECT_PATH?>assets/customer_events/template1/images/logo.png" alt=""> </a> </div>
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="ion-navicon-round"></span> </button>
        </div>
        
        <!--======= NAV START =========-->
        <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid"> 
            <!-- Brand and toggle get grouped for better mobile display -->
            
            <div class="container-fluid">
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                  <li><a href="#banner">HOME</a></li>
                  <li><a href="#event_time">SCHEDULE</a></li>
                  <? /* <li><a href="#gallery">GALLERY </a></li>  */ ?>
                  <li><a href="#register">REGISTER </a></li>
                  <? /* <li><a href="#news">SUBSCRIBE </a></li> */ ?>
                  <li><a href="#member">SPEAKERS </a></li>
                  <li><a href="#sponsors">SPONSORS </a></li>
                  <li><a href="#partner">EXHIBITORS </a></li>
                  <li><a href="#price_table">PRICING TABLES </a></li>
                </ul>
              </div>
              <!-- /.navbar-collapse --> 
            </div>
            <!-- /.container-fluid --> 
          </div>
        </nav>
      </div>
    </div>
  </header>
  
  <!--======= BANNER =========-->
  <div id="banner">
    <div id="carousel-wrapper">
      <div id="home-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
          <div class="item active" style="background-image: url(<?=PROJECT_PATH?>assets/customer_events/template1/images/bg_slider_1.jpg);">
            <div class="carousel-caption container">
              <p class="wow rotateInUpLeft" data-wow-delay="200ms"><span>NEW</span>. - <?=$eventData['event_start_date']?></p>
              <h1 class="wow rotateInUpLeft" data-wow-delay="400ms"><?=$eventData['event_name']?> <? /* <span><br>Best Seller Conferance...</span> */ ?> </h1>
              <h3 class="wow rotateInUpLeft" data-wow-delay="600ms"><? if(strlen($eventData['event_desc']) > 500) echo strip_tags(substr($eventData['event_desc'],0, 500)) . '...'; else echo strip_tags($eventData['event_name']); ?></h3>
              	
              	<a class="largeredbtn wow fadeInUpBig" data-wow-delay="800ms" href="#">WATCH VIDEO</a> 
               	<a class="largeredbtn wow fadeInUpBig" data-wow-delay="1000ms" href="#" data-toggle="modal" data-target="#loginRegModal">Register</a>
                
                <a href="#" data-toggle="modal" data-target="#regModal" class="btn btn-sm btn-default" style="width:180px; display:none;">Register</a>
                <a href="#login" data-toggle="modal" data-target="#loginModal" class="btn btn-sm btn-default" style="width:180px; display:none;">Login</a>
             </div>
          </div>
          <?
		  /*
          <div class="item" style="background-image: url(images/bg_slider_2.jpg)">
            <div class="carousel-caption container">
              <div class="map-img wow fadeInLeftBig" data-wow-duration="1.7s" data-wow-delay="200ms"><img src="images/map-icon-banner.png" alt=""> </div>
              <div class="text-bnr">
                <h1 class="wow rotateInUpLeft" data-wow-duration="1.7s" data-wow-delay="200ms" >Corporate Freelancer Events </h1>
                <h3 class="wow rotateInUpLeft" data-wow-duration="1.7s" data-wow-delay="400ms">Popular Business Ceo Conferance</h3>
                <a class="largeredbtn wow fadeInUpBig" data-wow-duration="1.7s" data-wow-delay="400ms" href="#.">Register</a> <a class="largeredbtn wow fadeInUpBig" data-wow-duration="1.7s" data-wow-delay="400ms" href="#.">LEARN MORE</a> </div>
            </div>
          </div>
          */
          ?>
        </div>
        <? /*<div class="carousel-arrows"><a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="ion-chevron-left"></i></a> <a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="ion-chevron-right"></i></a> </div> */ ?>
        
        <!--/#brand-promotion--> 
      </div>
      <!--/#home-carousel--> 
    </div>
  </div>
  
  <!--======= CONTENT START =========-->
  <div id="content"> 
    
    <!--======= Event Time =========-->
    <div id="event_time">
      <div class="container">
        <ul>
          
          <!--======= Event Time =========-->
          <li> <span class="top-25"><? $temp = explode(" ", $eventData['event_start_date1']); echo $temp[0] . ' ' . $temp[1];  ?></span> <br>
            <span class="big"><? echo $temp[2]; ?></span> </li>
          
          <!--======= Event Time =========-->
          <li class="icon"> <i class="ion-ios7-clock-outline"></i> </li>
          
          <!--======= Event Time =========-->
          <li> <span class="top-25">Events Time</span><br>
            <span class="big"><?=$eventData['event_start_time'];?></span> </li>
        </ul>
      </div>
    </div>
    
    <!--======= Menage Singer =========-->
    <div class="manage">
      <div class="container">
        <ul class="row">
          
          <!--======= France =========-->
          <li class="col-md-3 wow rotateInUpLeft" data-wow-duration="1s" data-wow-delay="200ms">
            <div class="icon"> <i class="ion-ios7-location-outline"></i> </div>
            <h2><?=$eventData['city_name'];?></h2>
            <p><?=$eventData['location'];?></p>
          </li>
          
          <!--======= Speakers =========-->
          <li class="col-md-3 wow rotateInUpLeft" data-wow-duration="1s" data-wow-delay="400ms">
            <div class="icon" > <i class="ion-ios7-mic-outline"></i> </div>
            <h2><?=count($event_speakers); ?> Speakers</h2>
            <p>Best specialists.</p>
          </li>
          
          <!--======= Sponsor =========-->
          <li class="col-md-3 wow rotateInUpLeft" data-wow-duration="1s" data-wow-delay="600ms">
            <div class="icon"> <i class="ion-ios7-people-outline"></i> </div>
            <h2><?=count($event_sponsors); ?> Sponsor</h2>
            <p>Silver, Gold and Platin</p>
          </li>
          
          <!--======= Seats  =========-->
          <li class="col-md-3 wow rotateInUpLeft" data-wow-duration="1s" data-wow-delay="800ms">
            <div class="icon"> <i class="ion-ios7-person-outline"></i> </div>
            <h2><?=$totalSeats?> Seats</h2>
            <p>Hurry up, register!</p>
          </li>
        </ul>
      </div>
    </div>
    
    <!--======= Event Days =========-->
    <div class="container">
      <div class="row">
        <div class="col-md-7">
          <div class="days wow bounceIn" data-wow-duration="1s" data-wow-delay="300ms"> 
            
            <!-- Nav tabs -->
            <nav>
              <ul class="nav nav-tabs nav-pills" role="tablist">
                <li class="active"><a href="#Day-1" role="tab" data-toggle="tab">Day 1</a></li>
                <?
				/*
                <li><a href="#Day-2" role="tab" data-toggle="tab">Day 2</a></li>
                <li><a href="#Day-3" role="tab" data-toggle="tab">Day 3</a></li>
				*/
				?>
              </ul>
            </nav>
            <!-- Tab panes -->
            <div class="tab-content"> 
              
              <!--==========Days 1 Start==========-->
              <div class="tab-pane fade in active" id="Day-1">
                <p>Activity Detail.</p>
                <div class="panel-group" id="accordion">
                  <? 
				  /*
                  <div class="panel panel-default">
                    <div class="panel-heading"> 
                      <!--=======  Panel Details =========-->
                      <div class="panel-title">
                        <div class="e-time"><i class="ion-ios7-clock"></i> 09:30 </div>
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                        <p>Lorem Ipsum is simply dummy text.</p>
                        </a> </div>
                    </div>
                    <!--=======  collapseOne =========-->
                    <div id="collapseOne" class="panel-collapse collapse in">
                      <div class="panel-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
                          <br>
                          It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                      </div>
                    </div>
                  </div>
                  */
				  ?>
                  <!--=======  Panel Details =========-->
                  <? for($i=0; $i<count($activityData); $i++) { ?>
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <div class="panel-title">
                        <div class="e-time"><i class="ion-ios7-clock"></i> <?=$activityData[$i]['start_time']?> </div>
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse<?=$i?>" class="collapsed">
                        <p><?=$activityData[$i]['activity_name']?></p>
                        </a> </div>
                    </div>
                    <!--=======  collapseTwo =========-->
                    <div id="collapse<?=$i?>" class="panel-collapse collapse <? if($i==0) echo 'in';?>">
                      <div class="panel-body">
                        <p><?=$activityData[$i]['activity_desc']?></p>
                      </div>
                    </div>
                  </div>
                  <? } ?>
                  <?
				  /*
                  <!--=======  Panel Details =========-->
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <div class="panel-title">
                        <div class="e-time"><i class="ion-ios7-clock"></i> 13:00 </div>
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" class="collapsed">
                        <p>Lorem Ipsum is simply dummy text.</p>
                        </a> </div>
                    </div>
                    
                    <!--=======  collapseThree =========-->
                    <div id="collapseThree" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
                          <br>
                          It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                      </div>
                    </div>
                  </div>
                  
                  <!--=======  Panel Details =========-->
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <div class="panel-title">
                        <div class="e-time"><i class="ion-ios7-clock"></i> 14:20 </div>
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapsefour" class="collapsed">
                        <p>Lorem Ipsum is simply dummy text.</p>
                        </a> </div>
                    </div>
                    
                    <!--=======  collapsefour =========-->
                    <div id="collapsefour" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
                          <br>
                          It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                      </div>
                    </div>
                  </div>
                  */
                  ?>
                </div>
              </div>
              <?
			  /*
              <!--==========Days 2 Start==========-->
              <div class="tab-pane fade" id="Day-2">
                <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                <div class="panel-group" id="accordion1">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <div class="panel-title">
                        <div class="e-time"><i class="ion-ios7-clock"></i> 10:30 </div>
                        <a data-toggle="collapse" data-parent="#accordion1" href="#collapseFive">
                        <p>Lorem Ipsum is simply dummy text.</p>
                        </a> </div>
                    </div>
                    
                    <!--=======  collapseFive =========-->
                    <div id="collapseFive" class="panel-collapse collapse in">
                      <div class="panel-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
                          <br>
                          It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                      </div>
                    </div>
                  </div>
                  
                  <!--=======  Panel Details =========-->
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <div class="panel-title">
                        <div class="e-time"><i class="ion-ios7-clock"></i> 12:20 </div>
                        <a data-toggle="collapse" data-parent="#accordion1" href="#collapseSix" class="collapsed">
                        <p>Lorem Ipsum is simply dummy text.</p>
                        </a> </div>
                    </div>
                    
                    <!--=======  collapseSix =========-->
                    <div id="collapseSix" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
                          <br>
                          It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                      </div>
                    </div>
                  </div>
                  
                  <!--=======  Panel Details =========-->
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <div class="panel-title">
                        <div class="e-time"><i class="ion-ios7-clock"></i> 14:00 </div>
                        <a data-toggle="collapse" data-parent="#accordion1" href="#collapseSeven" class="collapsed">
                        <p>Lorem Ipsum is simply dummy text.</p>
                        </a> </div>
                    </div>
                    
                    <!--=======  collapseSeven =========-->
                    <div id="collapseSeven" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
                          <br>
                          It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                      </div>
                    </div>
                  </div>
                  
                  <!--=======  Panel Details =========-->
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <div class="panel-title">
                        <div class="e-time"><i class="ion-ios7-clock"></i> 15:20 </div>
                        <a data-toggle="collapse" data-parent="#accordion1" href="#collapseEight" class="collapsed">
                        <p>Lorem Ipsum is simply dummy text.</p>
                        </a> </div>
                    </div>
                    
                    <!--=======  collapseEight =========-->
                    <div id="collapseEight" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
                          <br>
                          It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              
              <!--==========Days 3 Start==========-->
              <div class="tab-pane fade" id="Day-3">
                <p>It is a long established fact that a reader will be distracted by the readable content.</p>
                <div class="panel-group" id="accordion2">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <div class="panel-title">
                        <div class="e-time"><i class="ion-ios7-clock"></i> 16:30 </div>
                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseNine">
                        <p>Lorem Ipsum is simply dummy text.</p>
                        </a> </div>
                    </div>
                    
                    <!--=======  collapseNine =========-->
                    <div id="collapseNine" class="panel-collapse collapse in">
                      <div class="panel-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
                          <br>
                          It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                      </div>
                    </div>
                  </div>
                  
                  <!--=======  Panel Details =========-->
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <div class="panel-title">
                        <div class="e-time"><i class="ion-ios7-clock"></i> 17:20 </div>
                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTen" class="collapsed">
                        <p>Lorem Ipsum is simply dummy text.</p>
                        </a> </div>
                    </div>
                    
                    <!--=======  collapseTen =========-->
                    <div id="collapseTen" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
                          <br>
                          It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                      </div>
                    </div>
                  </div>
                  
                  <!--=======  Panel Details =========-->
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <div class="panel-title">
                        <div class="e-time"><i class="ion-ios7-clock"></i> 18:00 </div>
                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseEleven" class="collapsed">
                        <p>Lorem Ipsum is simply dummy text.</p>
                        </a> </div>
                    </div>
                    
                    <!--=======  collapseEleven =========-->
                    <div id="collapseEleven" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
                          <br>
                          It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                      </div>
                    </div>
                  </div>
                  
                  <!--=======  Panel Details =========-->
                  <div class="panel panel-default">
                    <div class="panel-heading">
                      <div class="panel-title">
                        <div class="e-time"><i class="ion-ios7-clock"></i> 19:20 </div>
                        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseTwelve" class="collapsed">
                        <p>Lorem Ipsum is simply dummy text.</p>
                        </a> </div>
                    </div>
                    
                    <!--=======  collapseTwelve =========-->
                    <div id="collapseTwelve" class="panel-collapse collapse">
                      <div class="panel-body">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
                          <br>
                          It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              */
              ?>
            </div>
          </div>
        </div>
        
        <!--======= Event Testimonals =========-->
        <? /*
        <div class="col-md-5">
          <div id="owl-testi"> 
            
            <!--======= Testimonals 1=========-->
            <div class="testi">
              <h5>Event Testimonals</h5>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
              <p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing. </p>
              <p> Lorem Ipsum passages, and more recently.</p>
              <div class="author-name">
                <h3><em>Quen Gourde</em></h3>
                <p>Alluguitar Music Store , Ceo</p>
              </div>
              <div class="author-pic"> <img src="images/testi-img-1.png" alt="" > </div>
            </div>
            
            <!--======= Testimonals 2 =========-->
            <div class="testi">
              <h5>Event Testimonals</h5>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
              <p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing. </p>
              <p> Lorem Ipsum passages, and more recently.</p>
              <div class="author-name">
                <h3><em>Quen Gourde</em></h3>
                <p>Alluguitar Music Store , Ceo</p>
              </div>
              <div class="author-pic"> <img src="images/testi-img-2.png" alt="" > </div>
            </div>
            
            <!--======= Testimonals 3 =========-->
            <div class="testi">
              <h5>Event Testimonals</h5>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
              <p> It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing. </p>
              <p> Lorem Ipsum passages, and more recently.</p>
              <div class="author-name">
                <h3><em>Quen Gourde</em></h3>
                <p>Alluguitar Music Store , Ceo</p>
              </div>
              <div class="author-pic"> <img src="images/testi-img-3.png" alt="" > </div>
            </div>
          </div>
        </div>
      	*/
        ?>
      </div>
    </div>
    
    <!--======= Vedio Section =========-->
    <?
	/*
    <section id="vedio">
      <div class="container">
        <div class="vedio_bg">
          <iframe src="http://player.vimeo.com/video/25541923?color=c9161f"></iframe>
        </div>
        <div class="clearfix"></div>
        <div class="icon-main wow flipInX" data-wow-duration="1s" data-wow-delay="600ms"> <i class="ion-ios7-videocam-outline"></i> </div>
        
        <!--=======  Heading Tittle =========-->
        <div class="tittle wow flipInX" data-wow-duration="1s" data-wow-delay="800ms">
          <h2>EventGO! <span>Startup Video</span></h2>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy<br>
            text ever since the 1500s, when an.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse est odioconvallis. </p>
        </div>
      </div>
    </section>
    */
    ?>
    <div class="clearfix"></div>
    
    <!--======= Gallery Section =========-->
    <?
	/*
    <div id="gallery">
      <div class="container">
        <div class="row"> 
          
          <!--======= Large Image =========-->
          <ul class="col-md-6 posts">
            <li><span class="img"> <img src="images/img_1.jpg" alt=""></span>
              <div class="over">
                <div class="icon"><i class="ion-ios7-photos-outline"></i></div>
                
                <!--=======  Heading Tittle =========-->
                <div class="tittle">
                  <h2>EventGO! <span>Startup Photo Gallery</span></h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse est odioconvallis. </p>
                </div>
              </div>
            </li>
          </ul>
          
          <!--======= Large Image =========-->
          <ul class="col-md-6 posts">
            <li><span class="img"> <img src="images/img_2.jpg" alt=""></span>
              <div class="over">
                <div class="icon"><i class="ion-ios7-photos-outline"></i></div>
                
                <!--=======  Heading Tittle =========-->
                <div class="tittle">
                  <h2>EventGO! <span>Startup Photo Gallery</span></h2>
                  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse est odioconvallis. </p>
                </div>
              </div>
            </li>
          </ul>
          
          <!--======= Small Images =========-->
          <div class="col-md-6">
            <ul class="row gallery-thump posts">
              <li class="col-xs-4">
                <div class="inner-thump"> <span class="img"> <img src="images/img_3.jpg" alt=""></span>
                  <div class="over"> <a href="images/img_3.jpg" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-ios7-search-strong"></i></a> </div>
                </div>
              </li>
              <li class="col-xs-4">
                <div class="inner-thump"> <span class="img"> <img src="images/img_5.jpg" alt=""></span>
                  <div class="over"> <a href="images/img_3.jpg" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-ios7-search-strong"></i></a> </div>
                </div>
              </li>
              <li class="col-xs-4">
                <div class="inner-thump"> <span class="img"> <img src="images/img_6.jpg" alt=""></span>
                  <div class="over"> <a href="images/img_3.jpg" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-ios7-search-strong"></i></a> </div>
                </div>
              </li>
            </ul>
          </div>
          
          <!--======= Small Images =========-->
          <div class="col-md-6">
            <ul class="row gallery-thump posts">
              <li class="col-xs-4">
                <div class="inner-thump"> <span class="img"> <img src="images/img_3.jpg" alt=""></span>
                  <div class="over"> <a href="images/img_3.jpg" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-ios7-search-strong"></i></a> </div>
                </div>
              </li>
              <li class="col-xs-4">
                <div class="inner-thump"> <span class="img"> <img src="images/img_5.jpg" alt=""></span>
                  <div class="over"> <a href="images/img_3.jpg" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-ios7-search-strong"></i></a> </div>
                </div>
              </li>
              <li class="col-xs-4">
                <div class="inner-thump"> <span class="img"> <img src="images/img_6.jpg" alt=""></span>
                  <div class="over"> <a href="images/img_3.jpg" data-rel="prettyPhoto" class="prettyPhoto lightzoom zoom"><i class="ion-ios7-search-strong"></i></a> </div>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    */
    ?>
    <!--======= Event Register =========-->
    
    <div id="register">
      <div class="overlay">
        <div class="icon-main wow flipInX" data-wow-duration="1s" data-wow-delay="600ms"> <i class="ion-ios7-personadd-outline"></i> </div>
        
        <!--=======  Heading Tittle =========-->
        <div class="tittle wow flipInX" data-wow-duration="1s" data-wow-delay="800ms">
          <h2><span>Register</span></h2>
        </div>
      </div>
    </div>
    <div class="container">
      <? require_once('registeration.php'); ?>
    </div>

    <!--======= Newsletter =========-->
    <?
	/*
    <div id="news">
      <div class="container">
        <div class="icon-main wow flipInX" data-wow-duration="1s" data-wow-delay="600ms"> <i class="ion-ios7-email-outline"></i> </div>
        
        <!--=======  Heading Tittle =========-->
        <div class="tittle wow flipInX" data-wow-duration="1s" data-wow-delay="800ms">
          <h2>EventGO! <span>Startup Newsletter</span></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit eaque dolorem fugiat ullam ea! Perspiciatis, ipsum ea possimus voluptatem sequi 
            amet harum dolores commodi eveniet earum est expedita error ab.</p>
        </div>
        <div class="input-news">
          <div class="form-group">
            <input type="email" class="form-control" placeholder="" value="E-mail address ..">
            <input name="submit" type="submit" value="SUBSCRIBE"/>
          </div>
        </div>
      </div>
    </div>
    */
    ?>
    <!--======= Counter Timer =========-->
    <div id="timer">
      <div class="container">
        <div class="time"> 
          
          <!-- Countdown-->
          <ul class="row countdown">
            <?
			/*
            <!--======= Days =========-->
            <li class="col-sm-3"> <span class="days">1</span>
              <p class="days_ref">day</p>
            </li>
            */
			?>
            <!--======= Houre =========-->
            <li class="col-sm-3 ">
              <div class="round-back"> <span class="hours"><?=round($eventData['event_duration']*24)?></span>
                <p class="hours_ref">hours</p>
              </div>
            </li>
            <? /*
            <!--======= Mintes =========-->
            <li class="col-sm-3"> <span class="minutes"><?=round($eventData['event_duration']*24*60,2)?></span>
              <p class="minutes_ref">minutes</p>
            </li>
            
            <!--======= Seconds =========-->
            <li class="col-sm-3"> <span class="seconds"><?=round($eventData['event_duration']*24*60*60,2)?></span>
              <p class="seconds_ref">seconds</p>
            </li>
			*/
			?>
          </ul>
          <!-- Countdown end--> 
        </div>
      </div>
    </div>
    
    <!--=======  Member Startup Speakers =========-->
    <div id="member">
      <div class="container">
        <div class="icon-main wow flipInX" data-wow-duration="1s" data-wow-delay="600ms"> <i class="ion-ios7-people-outline"></i> </div>
        
        <!--=======  Heading Tittle =========-->
        <div class="tittle wow flipInX" data-wow-duration="1s" data-wow-delay="800ms">
          <h2>Speakers</h2>
          <p>.</p>
        </div>
        
        <!--=======  Team Members =========-->
        <div class="team">
          <ul class="row grid">
            
            <!--=======  Member 1 =========-->
            <? for($i=0;$i<count($event_speakers); $i++) { ?>
            <li class="col-md-4">
              <div class="figure effect-oscar"> <img src="<?=ADMIN_PROJECT_PATH?>uploads/speakers/<?=$event_speakers[$i]['image_name']; ?>" style="height:160px;width:180px;" class="img-responsive1 img-circle1" alt="speaker-1" />
                <div class="figcaption">
                  <p> <a href="#." class="fb"> <span class="ion-social-facebook"></span></a> <a href="#." class="tw"> <span class="ion-social-twitter"></span></a> <a href="#." class="linkedin"> <span class="ion-social-linkedin-outline"></span> </a></p>
                </div>
                
                <!--=======  Member Name Details =========-->
                <div class="mem-detail">
                  <div class="icon"> <i class="ion-ios7-mic-outline"></i> </div>
                  <h4><?=$event_speakers[$i]['speaker_name']?></h4>
                  <p><?=$event_speakers[$i]['designation']?></p>
                </div>
              </div>
            </li>
            <? } ?>
          </ul>
          <!--=======  End =========--> 
        </div>
      </div>
    </div>
    
    <!--=======  Faqs =========-->
    <? /*
    <div id="faqs">
      <div class="container">
        <div class="icon-main wow flipInX" data-wow-duration="1s" data-wow-delay="600ms"> <i class="ion-ios7-help-outline"></i> </div>
        
        <!--=======  Heading Tittle =========-->
        <div class="tittle wow flipInX" data-wow-duration="1s" data-wow-delay="800ms">
          <h2>EventGO! <span>Startup Speakers</span></h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit eaque dolorem fugiat ullam ea! Perspiciatis, ipsum ea possimus voluptatem sequi 
            amet harum dolores commodi eveniet earum est expedita error ab.</p>
        </div>
        
        <!--=======  Faqs =========-->
        <div class="faqs wow bounceIn" data-wow-duration="1s" data-wow-delay="600ms">
          <div class="row">
            <div class="col-md-6"> 
              
              <!--=======  Section 1 =========-->
              <div class="panel-group" id="accordion3">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="panel-title"> <a data-toggle="collapse" data-parent="#accordion2" href="#collapsethirten">
                      <p>Lorem Ipsum is simply dummy text.</p>
                      </a> </div>
                  </div>
                  
                  <!--=======  Section 1 =========-->
                  <div id="collapsethirten" class="panel-collapse collapse in">
                    <div class="panel-body">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
                        <br>
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                    </div>
                  </div>
                </div>
                
                <!--=======  Section =========-->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="panel-title"> <a data-toggle="collapse" data-parent="#accordion3" href="#collapsefoteen" class="collapsed">
                      <p>Lorem Ipsum is simply dummy text.</p>
                      </a> </div>
                  </div>
                  
                  <!--=======  Section =========-->
                  <div id="collapsefoteen" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
                        <br>
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                    </div>
                  </div>
                </div>
                
                <!--=======  Section =========-->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="panel-title"> <a data-toggle="collapse" data-parent="#accordion3" href="#collapsefifteen" class="collapsed">
                      <p>Lorem Ipsum is simply dummy text.</p>
                      </a> </div>
                  </div>
                  
                  <!--=======  Section =========-->
                  <div id="collapsefifteen" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
                        <br>
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                    </div>
                  </div>
                </div>
                
                <!--=======  Section =========-->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="panel-title"> <a data-toggle="collapse" data-parent="#accordion3" href="#collapsesixteen" class="collapsed">
                      <p>Lorem Ipsum is simply dummy text.</p>
                      </a> </div>
                  </div>
                  
                  <!--=======  Section =========-->
                  <div id="collapsesixteen" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
                        <br>
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!--=======  Section =========-->
            <div class="col-md-6">
              <div class="panel-group" id="accordion4">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="panel-title"> <a data-toggle="collapse" data-parent="#accordion4" href="#collapsesaventen">
                      <p>Lorem Ipsum is simply dummy text.</p>
                      </a> </div>
                  </div>
                  
                  <!--=======  Section =========-->
                  <div id="collapsesaventen" class="panel-collapse collapse in">
                    <div class="panel-body">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
                        <br>
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                    </div>
                  </div>
                </div>
                
                <!--=======  Section =========-->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="panel-title"> <a data-toggle="collapse" data-parent="#accordion4" href="#collapseeighteen" class="collapsed">
                      <p>Lorem Ipsum is simply dummy text.</p>
                      </a> </div>
                  </div>
                  
                  <!--=======  Section =========-->
                  <div id="collapseeighteen" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
                        <br>
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                    </div>
                  </div>
                </div>
                
                <!--=======  Section =========-->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="panel-title"> <a data-toggle="collapse" data-parent="#accordion4" href="#collapsenineteen" class="collapsed">
                      <p>Lorem Ipsum is simply dummy text.</p>
                      </a> </div>
                  </div>
                  
                  <!--=======  Section =========-->
                  <div id="collapsenineteen" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
                        <br>
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                    </div>
                  </div>
                </div>
                
                <!--=======  Section =========-->
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <div class="panel-title"> <a data-toggle="collapse" data-parent="#accordion4" href="#collapsetwenteen" class="collapsed">
                      <p>Lorem Ipsum is simply dummy text.</p>
                      </a> </div>
                  </div>
                  
                  <!--=======  Section =========-->
                  <div id="collapsetwenteen" class="panel-collapse collapse">
                    <div class="panel-body">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. <br>
                        <br>
                        It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                    </div>
                  </div>
                  
                  <!--=======  Section End =========--> 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    */ ?>
    
    <!--=======  Sponsors =========-->
    <div id="sponsors">
      <div class="container">
        <div class="icon-main wow flipInX" data-wow-duration="1s" data-wow-delay="600ms"> <i class="ion-ios7-help-outline"></i> </div>
        
        <!--=======  Heading Tittle =========-->
        <div class="tittle wow flipInX" data-wow-duration="1s" data-wow-delay="800ms">
          <h2>Sponsors</span></h2>
          <p></p>
        </div>        
        <!--=======  Faqs =========-->
        <div class="faqs wow bounceIn" data-wow-duration="1s" data-wow-delay="600ms">
          <? require("sponsors.php"); ?>
        </div>
      </div>
    </div>
    
    <!--======= Events Partner =========-->
    <div id="partner">
      <div class="overlay">
        <div class="container">
          <div class="icon-main wow flipInX" data-wow-duration="1s" data-wow-delay="600ms"> <i class="ion-ios7-people-outline"></i> </div>
          
          <!--=======  Heading Tittle =========-->
          <div class="tittle wow flipInX" data-wow-duration="1s" data-wow-delay="800ms">
            <h2>Exhibitors</span></h2>
            <p></p>
            <? require("exhibitors.php"); ?>
          </div>
        </div>
      </div>
      <?
      /*
      <!--======= Events Partner =========-->
      <div class="partner">
        <div class="container"> 
          
        </div>
      </div>
      */
      ?>
    </div>
    
    <!--======= Price Table =========-->
    <? require("price_table.php"); ?>
    
    
    <!-- Start Google Map -->
    <div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.0424143658906!2d144.953892!3d-37.81247549999982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d48de42c403%3A0xf7e95c9095fac225!2sKing+St%2C+Melbourne+VIC%2C+Australia!5e0!3m2!1sen!2s!4v1405448972057"></iframe>
    </div>
    <!-- End Google Map --> 
    
    <!--======= Social Icons  =========-->
    <div class="social_icons">
      <div class="container">
        <ul>
          <li class="facebook wow fadeInUpBig" data-wow-delay="100ms"> <a href="#."><i class="ion-social-facebook"></i> </a> </li>
          <li class="twitter wow fadeInUpBig" data-wow-delay="200ms"> <a href="#."><i class="ion-social-twitter"></i> </a> </li>
          <li class="dribbble wow fadeInUpBig" data-wow-delay="300ms"> <a href="#."><i class="ion-social-dribbble"></i> </a> </li>
          <li class="googleplus wow fadeInUpBig" data-wow-delay="400ms"> <a href="#."><i class="ion-social-googleplus"></i> </a> </li>
          <li class="linkedin wow fadeInUpBig" data-wow-delay="500ms"> <a href="#."><i class="ion-social-linkedin"></i> </a> </li>
        </ul>
      </div>
    </div>
    <!--======= Social Icons  =========--> 
    
    <!--======= Rights  =========-->
    <div class="rights">
      <div class="container">
        <div class="row">
          <div class="col-xs-6">
            <p>EventGo! Landing Page Designed by <strong>GokhanKara</strong></p>
          </div>
          <div class="col-xs-6">
            <p class="align-right">All Rights Reserved. © 2014</p>
          </div>
        </div>
      </div>
    </div>
    
    <!--======= Content End  =========--> 
  </div>
</div>

<script src="<?=PROJECT_PATH?>assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>

<script src="<?=PROJECT_PATH?>assets/customer_events/template1/js/wow.min.js"></script> 
<script src="<?=PROJECT_PATH?>assets/customer_events/template1/js/bootstrap.min.js"></script> 
<script src="<?=PROJECT_PATH?>assets/customer_events/template1/js/owl.carousel.min.js"></script> 
<script src="<?=PROJECT_PATH?>assets/customer_events/template1/js/jquery.prettyPhoto.js"></script> 
<script src="<?=PROJECT_PATH?>assets/customer_events/template1/js/smooth-scroll.js"></script> 
<script src="<?=PROJECT_PATH?>assets/customer_events/template1/js/jquery.sticky.js"></script> 
<script src="<?=PROJECT_PATH?>assets/customer_events/template1/js/jquery.easing.1.3.js"></script> 
<script src="<?=PROJECT_PATH?>assets/customer_events/template1/js/jquery.downCount.js"></script> 
<!-- SLIDER REVOLUTION 4.x SCRIPTS --> 
<script type="text/javascript" src="<?=PROJECT_PATH?>assets/customer_events/template1/rs-plugin/js/jquery.themepunch.plugins.min.js"></script> 
<script type="text/javascript" src="<?=PROJECT_PATH?>assets/customer_events/template1/rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
<script src="<?=PROJECT_PATH?>assets/customer_events/template1/js/color-switcher.js"></script> 
<script src="<?=PROJECT_PATH?>assets/customer_events/template1/js/main.js"></script>

<script type="text/javascript" src="<?=PROJECT_PATH?>assets/js/plugins/sweetalert/sweetalert.min.js"></script>
<script language="javascript">
$(document).ready(function() {
	//$("#header-sticky-wrapper").css('height', '67px');
	//$("#bs-example-navbar-collapse-1").css('background', '#212121 none repeat scroll 0 0');
	//$(".navbar").css('border', '0px'); // navbar-default
}); 
</script>
</body>
</html>