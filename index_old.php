<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge"><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <title>Home</title>
    <meta name="description" content="PSD to HTML5+CSS3 conversion.">
    <meta name="keywords" content="PSD, HTML5, CSS3">
    <meta name="author" content="Erwin Kaddy">

    <link rel="shortcut icon" href="<?=PROJECT_PATH?>assets/template2/img/favicon.ico">
    <link rel="apple-touch-icon" href="<?=PROJECT_PATH?>assets/template2/img/apple-touch-icon.jpg">
    <link rel="apple-touch-icon" sizes="72x72" href="<?=PROJECT_PATH?>assets/template2/img/apple-touch-icon-72x72.jpg">
    <link rel="apple-touch-icon" sizes="114x114" href="<?=PROJECT_PATH?>assets/template2/img/apple-touch-icon-114x114.jpg">
    
	<?
	/*
    <link href='http://fonts.googleapis.com/css?family=Ubuntu:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,700' rel='stylesheet' type='text/css'>
    */
    ?>
    <link rel="stylesheet" href="<?=PROJECT_PATH?>assets/template2/css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?=PROJECT_PATH?>assets/template2/css/animate.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?=PROJECT_PATH?>assets/template2/css/font-awesome.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?=PROJECT_PATH?>assets/template2/css/font-lineicons.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?=PROJECT_PATH?>assets/template2/css/jquery.fancybox.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?=PROJECT_PATH?>assets/template2/css/style.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?=PROJECT_PATH?>assets/js/plugins/magnific-popup/magnific-popup.css" media="all" /> 
    
    <link href="<?=PROJECT_PATH?>assets/css/plugins/jQueryUI/jquery-ui-1.11.4.css" rel="stylesheet">
    <link rel="stylesheet" href="<?=PROJECT_PATH?>assets/css/plugins/sweetalert/sweetalert.css" media="all" /> 
    
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
 
 header nav li {
	 
 }
 header nav li ul li{
	 line-height:20px !important;
 }
 ul.navigation-bar-left {
  list-style: none;
  padding: 0;
  margin: 0;
}
ul.navigation-bar-left li {
  display: block;
  position: relative;
  float: left; 
}
 .navigation-bar-left li ul{
	 display:none;
	
 }
 ul.navigation-bar-left li a {
  display: block;
  padding: 1em;
  text-decoration: none;
  white-space: nowrap;
  color: #fff;
}
ul.navigation-bar-left li:hover > ul {
  display: block;
  position: absolute;
}
 ul.navigation-bar-left ul ul {
  left: 100%;
  top: 0;
}
 ul.navigation-bar-left ul ul ul {
  left: 0;
  top: 100%;
}
ul.navigation-bar-left:before,
ul.navigation-bar-left:after {
  content: " "; /* 1 */
  display: table; /* 2 */
}

ul.navigation-bar-left:after { clear: both; }
ul.navigation-bar-left li:hover li { float: none; }

/*ul.navigation-bar-left li:hover a { background: #1bc2a2; }

ul.navigation-bar-left li:hover li a:hover { background: #2c3e50; }*/

.navigation-bar-left li ul li { border-top: 0; }
</style>
    <!--[if lt IE 9]>
        <script src="<?=PROJECT_PATH?>assets/template2/js/html5.js"></script>
        <script src="<?=PROJECT_PATH?>assets/template2/js/respond.min.js"></script>
    <![endif]-->


<!--[if lt IE 9]>
    <script type="text/javascript" src="<?=PROJECT_PATH?>assets/template2/js/jquery-1.11.0.min.js?ver=1"></script>
<![endif]-->  
<!--[if (gte IE 9) | (!IE)]><!-->  
   <script type="text/javascript" src="<?=PROJECT_PATH?>assets/template2/js/jquery-2.1.0.min.js?ver=1"></script>
<!--<![endif]-->  

</head>
<?
//echo '<pre>';print_r($slider_data);
?>
<body id="index">
    <!-- Preloader -->
    <div id="mask">
        <div id="loader"><img src="<?=PROJECT_PATH?>assets/template2/img/preloader.gif" alt="preloader" /></div>
    </div>
    <header id="mobileheader" class="navigation-bar-header light visible-xs"></header>
    <? //echo '<pre>';print_r($slider_data);?>
    <!-- Hero Section -->
    <section id="hero" class="light" style="background-image:url('<?=$home_data['image_site'].$slider_data[0]['slider_image']?>')">
		<div class="" id="video-container">
        	
		</div>
      <div class="container">
        <div class="home-bg">
          <nav class="navigation navigation-social">
            <ul class="navigation-bar">
              <li style="dispaly:<?=($home_data['twitter'])?'':":none"?>"><a href="<?=$home_data['twitter']?>"><span class="fa fa-twitter"></span></a>
              <li style="dispaly:<?=($home_data['facebook'])?'':":none"?>"><a href="<?=$home_data['facebook']?>"><span class="fa fa-facebook"></span></a>
              <li style="dispaly:<?=($home_data['pinterest'])?'':":none"?>"><a href="<?=$home_data['pinterest']?>"><span class="fa fa-pinterest-square"></span></a>
              <li style="dispaly:<?=($home_data['linkedin'])?'':":none"?>"><a href="<?=$home_data['linkedin']?>"><span class="fa fa-linkedin-square"></span></a>
              <li style="dispaly:<?=($home_data['googleplus'])?'':":none"?>"><a href="<?=$home_data['googleplus']?>"><span class="fa fa-google-plus"></span></a>
              <!--<li><a href="<?=$home_data['facebook']?>"><span class="fa fa-instagram"></span></a>-->
            </ul>
          </nav>
          <div class="hero-content text-center ">
			<div class="hero-small">
              <hr /><span><img width="150" src="<?=$home_data['image_site'].$home_data['logo']?>"  /></span><hr />
            </div>
            <div class="hero-big"></div>
            <div class="hero-normal" style="max-width:600px; font-size:16px; margin:auto; padding-bottom:30px; "><?=$home_data['user_type_desc']?><strong></strong></div>
			<?php
			if(!empty($home_data['video_info'])){
			?>
            <a href="<?=$home_data['video_info']?>" class="btn btn-sm btn-default popup-vimeo" style="width:180px;">Watch video</a>
            <a href="#register" class="btn btn-sm btn-default" style="width:180px;">Register</a>
            <a href="#login" class="btn btn-sm btn-default" style="width:180px;">Login</a>
            <?php
			}
			?>
          </div>          
        </div>
      </div>
    </section> 
    <!-- End Hero Section -->
    <!-- Header -->
    <header id="header" class="navigation-bar-header light hidden-xs">
      <div class="container">
        <nav class="navigation">
          <div class="navigation-txt visible-xs" data-toggle="dropdown">Home</div>
          <button class="navigation-toggle visible-xs" type="button" data-toggle="dropdown">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <ul class="navigation-bar navigation-bar-left">
            <li><a href="#banner">HOME</a></li>
			<?php
			  echo $pages;
			?>
            <li class="featured"><a href="#register"><i class="fa fa-ticket fa-1x"></i>Register</a></li>
            <li class="featured"><a href="#login"><i class="fa fa-ticket fa-1x"></i>Login</a></li>
          </ul>
        </nav>
      </div>      
    </header>
    <!-- End Header -->
    <!-- About Section -->
    <?php
	if(count($links)>0){
		foreach($links as $link_key=>$link_arr){	
			if($link_arr['home'])
			{
		?>  
            <section id="page_<?=$link_arr['page_id']?>" class="section dark" style=" background-image:url(<?=$home_data['image_site'].$link_arr['background_image']?>);background-color:<?=$link_arr['back_color']?>;color:<?=$link_arr['front_color']?>;">
              <!--<div class="overlay"></div>-->
              <div class="container">
                <h3><?=$link_arr['page_title']?></h3>
                <?=$link_arr['page_content']?>
              </div>
            </section>
		 <?php
			}
         }
	}
	?>
    
    
    <div class="clearfix"></div>
    
    <section id="register" class="section light">
      <div class="overlay"></div>
	    <? require("registeration.php") ?>
      </div>
    </section>
    
    <section id="login" class="section dark" style="background-image:none;">
	    <? require("login.php") ?>
      </div>
    </section>

    <section id="map" class="dark">
		<div id="canvas-map"><?php if(!empty($home_data['map_info'])){echo $home_data['map_info']->html;}?></div>
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-7 animated hiding location" data-animation="fadeInLeft" data-delay="0">
					<h3>Location</h3>
						<?
						/*
                        <ul itemscope="" itemtype="http://schema.org/PostalAddress">
							<li itemprop="address"><i class="fa fa-map-marker highlight"></i>
								<?=$parent_profile_data['sreet'].",".$parent_profile_data['city_name']?>
                            </li>
							<li itemprop="email"><i class="fa fa-envelope highlight"></i><?=$parent_profile_data['email']?></li>
							<li itemprop="telephone"><i class="fa fa-phone highlight"></i><?=$parent_profile_data['mobile']?></li>
						</ul>
                        */
                        ?>
				</div>
			</div>
		</div>
    </section>
    <!-- End Map Section -->
    <footer id="footer">

    </footer>
    
    <div class="back-to-top"><i class="fa fa-angle-up fa-3x"></i></div>

    <script src="<?=PROJECT_PATH?>assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script> 
    <script type="text/javascript" src="<?=PROJECT_PATH?>assets/template2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=PROJECT_PATH?>assets/template2/js/jquery.nav.js"></script>
    <script type="text/javascript" src="<?=PROJECT_PATH?>assets/template2/js/jquery.appear.js"></script>
    <script type="text/javascript" src="<?=PROJECT_PATH?>assets/template2/js/jquery.countTo.js"></script>
    <script type="text/javascript" src="<?=PROJECT_PATH?>assets/template2/js/waypoints.min.js"></script>
    <script type="text/javascript" src="<?=PROJECT_PATH?>assets/template2/js/waypoints-sticky.min.js"></script>
    <script type="text/javascript" src="<?=PROJECT_PATH?>assets/template2/js/jquery.fancybox.js"></script>
	<script type="text/javascript" src="<?=PROJECT_PATH?>assets/template2/mailchimp/js/mailing-list.js"></script>
    <script type="text/javascript" src="<?=PROJECT_PATH?>assets/template2/js/scripts.js"></script>
    <script type="text/javascript" src="<?=PROJECT_PATH?>assets/js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    
    <script type="text/javascript" src="<?=PROJECT_PATH?>assets/js/plugins/sweetalert/sweetalert.min.js"></script>
    
    <script type="text/javascript">
		 $(document).ready(function() {
			$('.popup-vimeo').magnificPopup({
			  disableOn: 700,
			  type: 'iframe',
			  mainClass: 'mfp-fade',
			  removalDelay: 160,
			  preloader: false,
			  fixedContentPos: false
			});
      	});
	</script>
</body>
</html>