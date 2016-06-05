<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?=$page['page_title']?></title>
<meta name="keywords" content="<?=$page['page_keywords']?>" >
<meta name="description" content="<?=$page['page_description']?>" >
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
<style type="text/css">
header .menu {
	padding:0px;
}
</style>
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
        <div class="logo" style="margin-left:5px;"> <a href="#wrap"> <img src="<?=$home_data['image_site'].$home_data['logo'].'?id='.rand(0,10)?>" alt=""> </a> </div>
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
                  <li><a href="<?=base_url()?>CustomerEvent/index/<?=$userid?>/<?=$template_id?>/<?=$event_id?>" >Home</a></li>
                  <?php
				  	echo $pages;
					?>
                  <li><a href="<?=base_url()?>CustomerEvent/index/<?=$userid?>/<?=$template_id?>/<?=$event_id?>#event_time">SCHEDULE</a></li>                 
                  <li><a href="<?=base_url()?>CustomerEvent/index/<?=$userid?>/<?=$template_id?>/<?=$event_id?>#member">SPEAKERS </a></li>
                  <li><a href="<?=base_url()?>CustomerEvent/index/<?=$userid?>/<?=$template_id?>/<?=$event_id?>#sponsors">SPONSORS </a></li>
                  <li><a href="<?=base_url()?>CustomerEvent/index/<?=$userid?>/<?=$template_id?>/<?=$event_id?>#partner">EXHIBITORS </a></li>
                  <li><a href="<?=base_url()?>CustomerEvent/index/<?=$userid?>/<?=$template_id?>/<?=$event_id?>#price_table">PRICING TABLES </a></li>
                  <li><a href="#map" >Contact</a></li><? //base_url() CustomerEventPage/index/0/<?=$event_id?>
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
  
  
  <!--======= CONTENT START =========-->
  <div id="content" style="padding-top:15px;">
    <!--=======  Sponsors =========-->
    <?php
	if(count($page)>0){
		?> 
    <div id="sponsors">
      <div class="container">
        <div class="icon-main wow flipInX" data-wow-duration="1s" data-wow-delay="600ms"> <i class="ion-ios7-help-outline"></i> </div>
        
        <!--=======  Heading Tittle =========-->
        <div class="tittle wow flipInX" data-wow-duration="1s" data-wow-delay="800ms">
          <h2><?=$page['page_title']?></span></h2>
          <p></p>
        </div>        
        <!--=======  Faqs =========-->
        <div class="faqs wow bounceIn" data-wow-duration="1s" data-wow-delay="600ms">
          <?=$page['page_content']?>
        </div>
      </div>
    </div>
     <?php
	}
	?>
    
    <div class="ibox" style="width:80%; margin:20px auto">
        <div class="ibox-title" style="padding-top:30px;">
            <h2>SPONSOR</h2>
        </div>
        <div class="ibox-content" style="margin-top:25px;">
            <? 
            for($i=0; $i<count($mm_sponsor_level); $i++) 
            { 
            ?>
            <div class="ibox">
	            <div class="ibox-title"><h5><?=strtoupper($mm_sponsor_level[$i]['level_name']); ?></h5></div>
            	<div class="ibox-content" style="margin-top:15px;margin-bottom:35px;">
                    <? 
					//echo "<pre>"; print_r($mm_sponsor_level[$i]['sponsors_array'][0]); echo count($mm_sponsor_level[$i]['sponsors_array']) . "</pre>";
					if(empty($mm_sponsor_level[$i]['sponsors_array']))
						echo "No one registered yet. Contact for registrations. ";
					for($j=0; $j<count($mm_sponsor_level[$i]['sponsors_array']); $j++) { 
						if($mm_sponsor_level[$i]['display_logo'] == 'Y') {
							echo '<div style="border:1px solid #cecece; padding:5px; max-width:225px;"> <img src="' . PROJECT_PATH . 'uploads/speakers/'. $mm_sponsor_level[$i]['sponsors_array'][$j]['image_name'] . '" title="' . $mm_sponsor_level[$i]['sponsors_array'][$j]['speaker_name'] . '" style="width:210px;"></div> ';
						} else
							echo $mm_sponsor_level[$i]['sponsors_array'][$j]['speaker_name'];
					} ?>
                </div>
            </div>
            <? /* ?>
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h5 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_<?=$i?>" style="font-size: 15px;"><?=strtoupper($mm_sponsor_level[$i]['level_name']); ?></a>
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
			<? */ ?>
            <?
            }
            ?>
        </div>
    </div>
        
    <!-- Start Google Map -->
    <div id="map">
    	<?=isset($home_data['map_info']->html)?$home_data['map_info']->html:$home_data['map_info'];?>
    </div>
    <!-- End Google Map --> 
    
    <!--======= Social Icons  =========-->
    <div class="social_icons">
      <div class="container">
        <ul>
          <li class="facebook wow fadeInUpBig" data-wow-delay="100ms" style="display:<?=($home_data['facebook'])?'':"none"?>"> <a href="<?=$home_data['facebook']?>" target="_blank"><i class="ion-social-facebook"></i> </a> </li>
          <li class="twitter wow fadeInUpBig" data-wow-delay="200ms" style="display:<?=($home_data['twitter'])?'':"none"?>"> <a target="_blank" href="<?=$home_data['twitter']?>"><i class="ion-social-twitter"></i> </a> </li>
          <li class="dribbble wow fadeInUpBig" data-wow-delay="300ms" style="display:<?=($home_data['pinterest'])?'':"none"?>"> <a target="_blank" href="<?=$home_data['pinterest']?>"><i class="ion-social-dribbble"></i> </a> </li>
          <li class="googleplus wow fadeInUpBig" data-wow-delay="400ms" style="display:<?=($home_data['googleplus'])?'':"none"?>"> <a target="_blank" href="<?=$home_data['googleplus']?>"><i class="ion-social-googleplus"></i> </a> </li>
          <li class="linkedin wow fadeInUpBig" data-wow-delay="500ms" style="display:<?=($home_data['linkedin'])?'':"none"?>"> <a target="_blank" href="<?=$home_data['linkedin']?>"><i class="ion-social-linkedin"></i> </a> </li>
        </ul>
      </div>
    </div>
    <!--======= Social Icons  =========--> 
    
    <!--======= Rights  =========-->
    <div class="rights">
      <div class="container">
        <div class="row">
          <div class="col-xs-6">
            <p></p>
          </div>
          <div class="col-xs-6">
            <p class="align-right">Powered by Cloud Custom Solutions. © <?=date('Y')?></p>
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
<!--<script src="<?=PROJECT_PATH?>assets/customer_events/template1/js/owl.carousel.min.js"></script>--> 
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