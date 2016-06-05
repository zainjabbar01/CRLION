<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $pageTitle; ?></title>
	<?
	$totalRecords = count($cssFiles);
    for($i=0; $i<$totalRecords; $i++) {
	?>
    	<link href="<?php echo $cssFiles[$i]; ?>" rel="stylesheet">
    <?
	}
	?>
	
    <link href="<?php echo PROJECT_PATH; ?>assets/css-cr/cr.css" rel="stylesheet">
    <link href="<?php echo PROJECT_PATH; ?>assets/css-cr/cr-responsive.css" rel="stylesheet">
        
    <?
	$totalRecords = count($jsFiles);
    for($i=0; $i<$totalRecords; $i++) {
	?>
    	<script src="<?php echo $jsFiles[$i]; ?>"></script>
    <?
	}
	?>

</head>

<body class="<?=$bodyClass?>">
    <div id="wrapper">
    	<? if($showLeftMenu) $this->load->view('includes/leftMenu'); ?>
        <div id="page-wrapper" class="gray-bg">
        	<? if($showHeader)  $this->load->view('includes/header'); ?>
            <? $this->load->view($loadView); ?>
	        <? $this->load->view('includes/footer'); ?>

        </div>
    </div>
</body>
</html>
