<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>EventGo One Page Event Landing Page</title>
<meta name="keywords" content="HTML5,CSS3,HTML,Template,Event Template,Freelancer Events,Awsome Event Template,Events Theme Template, One Page Events" >
<meta name="description" content="EventGo One Page Event Landing Page" >

<!--Main-->
<link rel="stylesheet" type="text/css" href="<?=PROJECT_TEMPLATE?>rs-plugin/css/settings.css" media="screen" >
<link href="<?=PROJECT_TEMPLATE?>css/style.css" rel="stylesheet" type="text/css">
<link href="<?=PROJECT_TEMPLATE?>css/responsive.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" id="color" href="<?=PROJECT_TEMPLATE?>css/colors/default.css">
<link href="<?=PROJECT_PATH?>assets/css/plugins/jQueryUI/jquery-ui-1.11.4.css" rel="stylesheet">

<link href="<?=PROJECT_PATH?>assets/css/plugins/sweetalert/sweetalert.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
<!--[if IE]>
      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <style type="text/css">
 <?php
 	if(count($options)>0){
		foreach($options as $part_key=>$part_arr){
			foreach($part_arr as $opt_key=>$opt_arr){					
				echo $opt_key;
				?>
				{
					<?=$opt_arr['property']?>:<?=$selected_options[$part_key][$opt_key][$opt_arr['property']]?> !important;
				}
				<?php
				
			}	
		}
	}
 ?>  
</style>
<? #<script src="<?=PROJECT_TEMPLATE? >js/jquery-1.9.1.min.js"></script>  ?>
<script src="<?=PROJECT_PATH?>assets/js/jquery-2.1.1.js"></script>
<script src="<?=PROJECT_PATH?>assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?=PROJECT_TEMPLATE?>js/wow.min.js"></script> 
<script src="<?=PROJECT_TEMPLATE?>js/bootstrap.min.js"></script> 
<script src="<?=PROJECT_TEMPLATE?>js/owl.carousel.min.js"></script> 
<script src="<?=PROJECT_TEMPLATE?>js/jquery.prettyPhoto.js"></script> 
<script src="<?=PROJECT_TEMPLATE?>js/smooth-scroll.js"></script> 
<script src="<?=PROJECT_TEMPLATE?>js/jquery.sticky.js"></script> 
<script src="<?=PROJECT_TEMPLATE?>js/jquery.easing.1.3.js"></script> 
<script src="<?=PROJECT_TEMPLATE?>js/jquery.downCount.js"></script> 
<!-- SLIDER REVOLUTION 4.x SCRIPTS --> 
<script type="text/javascript" src="<?=PROJECT_TEMPLATE?>rs-plugin/js/jquery.themepunch.plugins.min.js"></script> 
<script type="text/javascript" src="<?=PROJECT_TEMPLATE?>rs-plugin/js/jquery.themepunch.revolution.min.js"></script> 
<script src="<?=PROJECT_TEMPLATE?>js/color-switcher.js"></script> 
<script src="<?=PROJECT_TEMPLATE?>js/main.js"></script>

<script type="text/javascript" src="<?=PROJECT_PATH?>assets/js/plugins/sweetalert/sweetalert.min.js"></script> 
<? 
/*
<!--Fonts Online-->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
*/
?>
</head>
<body>

<!--LOADER===========================================--> 
<!--<div id="page-loader">
  <div class="loader7"><img src="<?=PROJECT_TEMPLATE?>images/Preloader.gif" alt="">
  <h1>Loading.....</h1>
  </div>
</div>--> 

<!-- Page Wrap ===========================================-->
<div id="wrap"> 
  
  <!--======= HEADER =========-->
  <header id="header" class="sticky">
    <div class="container">
      <div class="menu">
        <div class="logo"> <a href="#wrap"> <img width="126" src="<?=$home_data['image_site'].$home_data['logo']?>" alt=""> </a> </div>
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
                  <li><a href="#register">REGISTER </a></li>
                  <?php
				  if(count($links)>0){					  
					  foreach($links as $link_key=>$link_arr){
						  ?>
                          	<li><a href="#page_<?=$link_arr['page_id']?>"><?=$link_arr['page_title']?></a></li>
                          <?php
					  }
				  }
				  ?>
                  <li><a href="#login">Login</a></li>
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
  <?php
  	if(count($slider_data)>0){
		//echo '<pre>';print_r($sider_data);exit;
	?>
  		<div id="banner">
            <div id="carousel-wrapper">
              <div id="home-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                <div class="carousel-inner">
                <?php
					foreach($slider_data as $slider_key=>$slider_arr){
					$dec_class	= ($slider_key==0)?'active':'';
				?>
                      <div class="item <?=$dec_class?>" style="background-image: url(<?=$home_data['image_site'].$slider_arr['slider_image']?>);">
                        <div class="carousel-caption container">
                            <?=$slider_arr['slider_content']?>
                        </div>
                      </div> 
                  <?php
					}
					?>
                </div>
                <div class="carousel-arrows"><a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="ion-chevron-left"></i></a> <a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="ion-chevron-right"></i></a> </div>
                
                <!--/#brand-promotion--> 
              </div>
              <!--/#home-carousel--> 
            </div>
    
  </div>
  <?php
	}
	?>
  
  <!--======= CONTENT START =========-->
  <div id="content">
  		<?php
		  if(count($links)>0){
			  foreach($links as $link_key=>$link_arr){
				  ?>
					<div id="page_<?=$link_arr['page_id']?>">
                    	<div class="container">
                        	<div data-wow-delay="800ms" data-wow-duration="1s" class="tittle wow flipInX animated" style="visibility: visible; animation-duration: 1s; animation-delay: 800ms; animation-name: flipInX;">
                            	<h2><?=$link_arr['page_title']?></h2>
								<?=$link_arr['page_content']?>
                             </div>
                             <hr style="width:100%;padding-top:20px;"/>
                        </div>
                        
                    </div>
				  <?php
			  }
		  }
		  if(!empty($home_data['video_info'])){
		  ?>
    		<section id="vedio">
      <div class="container">
        <div class="vedio_bg">
          <?=$home_data['video_info']->html?>
        </div>
        <div class="clearfix"></div>
        <div class="icon-main wow flipInX" data-wow-duration="1s" data-wow-delay="600ms"> <i class="ion-ios7-videocam-outline"></i> </div>
        
        <!--=======  Heading Tittle =========-->
        <div class="tittle wow flipInX" data-wow-duration="1s" data-wow-delay="800ms">
          <h2><?=$home_data['video_info']->title?></h2>
          <p><?=$home_data['video_info']->description?> </p>
        </div>
      </div>
    </section>
    	<?php
		  }
		  ?>
    <div class="clearfix"></div>
    <? require("registeration.php") ?>
    <? require_once("login.php"); ?>    
    
    <!-- Start Google Map -->
    <div id="map">
      <?php if(!empty($home_data['map_info'])){echo $home_data['map_info']->html;}?>
    <!-- End Google Map --> 
    
    <!--======= Social Icons  =========-->
    <div class="social_icons">
      <div class="container">
        <ul>
          <li class="facebook wow fadeInUpBig" data-wow-delay="100ms" style="dispaly:<?=($home_data['facebook'])?'':":none"?>"> <a href="<?=$home_data['facebook']?>"><i class="ion-social-facebook"></i> </a> </li>
          <li class="twitter wow fadeInUpBig" data-wow-delay="200ms" style="dispaly:<?=($home_data['twitter'])?'':":none"?>"> <a href="#."><i class="ion-social-twitter"></i> </a> </li>
          <li class="dribbble wow fadeInUpBig" data-wow-delay="300ms" style="dispaly:<?=($home_data['pinterest'])?'':":none"?>"> <a href="#."><i class="ion-social-dribbble"></i> </a> </li>
          <li class="googleplus wow fadeInUpBig" data-wow-delay="400ms" style="dispaly:<?=($home_data['googleplus'])?'':":none"?>"> <a href="#."><i class="ion-social-googleplus"></i> </a> </li>
          <li class="linkedin wow fadeInUpBig" data-wow-delay="500ms" style="dispaly:<?=($home_data['linkedin'])?'':":none"?>"> <a href="#."><i class="ion-social-linkedin"></i> </a> </li>
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

</body>
</html>