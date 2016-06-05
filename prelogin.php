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
    <link rel="stylesheet" href="<?=PROJECT_PATH?>assets/template2/css/bootstrap.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?=PROJECT_PATH?>assets/template2/css/animate.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?=PROJECT_PATH?>assets/template2/css/font-awesome.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?=PROJECT_PATH?>assets/css/plugins/toastr/toastr.min.css" type="text/css" media="all" />
    <link rel="stylesheet" href="<?=PROJECT_PATH?>assets/template2/css/style.css" type="text/css" media="all" />
    <style type="text/css">
		
		body {
			background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
		}
		.gray-bg {
			background-color: #f3f3f4;
		}
		#page-wrapper {
			margin: auto;
			padding-top: 100px;
			width: 50%;
		}
		.ibox::after, .ibox::before {
    		display: table;
		}
		.ibox {
			clear: both;
			margin-bottom: 25px;
			margin-top: 0;
			padding: 0;
		}
		.ibox-title {
			-moz-border-bottom-colors: none;
			-moz-border-left-colors: none;
			-moz-border-right-colors: none;
			-moz-border-top-colors: none;
			background-color: #ffffff;
			border-color: #e7eaec;
			border-image: none;
			border-style: solid solid none;
			border-width: 3px 0 0;
			color: inherit;
			margin-bottom: 0;
			min-height: 48px;
			padding: 14px 15px 7px;
		}
		.ibox-title h5 {
			display: inline-block;
			float: left;
			font-size: 14px;
			margin: 0 0 7px;
			padding: 0;
			text-overflow: ellipsis;
		}
		.ibox-content {
			clear: both;
		}
		.ibox-content {
			background-color: #ffffff;
			border-color: #e7eaec;
			border-image: none;
			border-style: solid solid none;
			border-width: 1px 0;
			color: inherit;
			padding: 15px 20px 20px;
		}
		.iCheck-helper{
			position:relative !important;
		}
	</style>
<!--[if (gte IE 9) | (!IE)]><!-->  
   <script type="text/javascript" src="<?=PROJECT_PATH?>assets/template2/js/jquery-2.1.0.min.js?ver=1"></script>
<!--<![endif]-->  

</head>
<?
//echo '<pre>';print_r($slider_data);
?>
<body class="pace  pace-inactive gray-bg ">
	<div id="wrapper">
        <div id="page-wrapper">        	
        	<div class="wrapper wrapper-content  animated fadeInRight">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox ">
                            <div class="ibox-title">
                                <h5>Forgot Password</h5>
                                
                            </div>
                            <div class="ibox-content">
                                <?php
                                    echo form_open("preLogin/forgotPassword",array('class'=>'form-horizontal' , 'role'=>'form' , 'id'=>'forgot-form'));
                                ?>
                                        <div class="form-group">
                                            <div class="col-lg-12">
                                                <b>Can't sign in? Forget your password?</b>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-lg-12">
                                                Enter your email address below and we'll send you password reset instructions.
                                            </div>
                                        </div>
                                        <div class="form-group">                            	
                                            <div class="col-xs-12">
                                                <input type="text" name="email" class="form-control" placeholder="Email" value="<?=$email?>" style="height:38px;" />
                                                <label id="email-error" class="error" for="email"><?=$error?></label>
                                                <input type="submit" class="btn btn-success btn-block m-b" value="Submit" style="margin-top:15px;" /> 
                                            </div>                                                         
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <hr style="border-top:1px solid #CCC;width:100%;" />
                                                <b>A note about spam filters</b>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                If you don't get an email from us within a few minutes please be sure to check your spam filter. <b>The email will be coming from do-not-reply@connectionrevolution.com.</b>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                             <div class="col-xs-12" style="text-align:center;">
                                                <a href="javascript:void(0)" class="btn btn-success" onClick="window.history.go(-1)">Cancel</a>
                                             </div>
                                        </div>
                                <?php
                                    echo form_close();
                                ?>
            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
<script src="<?=PROJECT_PATH?>assets/js/plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="<?=PROJECT_PATH?>assets/js/plugins/validate/jquery.validate.min.js"></script>
<script type="text/javascript" src="<?=PROJECT_PATH?>assets/template2/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="<?=PROJECT_PATH?>assets/js/plugins/metisMenu/jquery.metisMenu.js"></script> 
<script type="text/javascript" src="<?=PROJECT_PATH?>assets/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="<?=PROJECT_PATH?>assets/js/inspinia.js"></script>
<script type="text/javascript" src="<?=PROJECT_PATH?>assets/js/plugins/pace/pace.min.js"></script>
<script type="text/javascript" src="<?=PROJECT_PATH?>assets/js/plugins/toastr/toastr.min.js"></script>

<script type="text/javascript">
	  $(document).ready(function () {
   $("#forgot-form").validate({
		 rules: {
			 email: {
				 required: true,
				 email:true
			}
		 }
	});
	if('<?=$success?>'!=""){
		toastr.success('<?=$success?>');
	}
});
</script>
</body>
</html>