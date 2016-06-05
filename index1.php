<?
//require("../profile/field_validations.php");
$this->load->view('rolodex/field_validations.php');
?>
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
	/*height: 60px;
	width:  60px;*/
}
.avatar-container .avatar {
	/*width: 50px;
	height: 50px;*/
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
.my_nav_tabs{
	list-style:none;
}
.my_nav_tabs li{
	float:left;
	padding:0px 10px;
}
.table{
	display:table;
	margin-bottom:0px;
}
.table-row{
	display:table-row;
	height:30px;
}		
.cell{
	display:table-cell;
	color:#000;
	font-size:12px;
	vertical-align:middle;
}
.schedule_div{
	position:absolute;left:45px;z-index:2147483647;
}
.closed{
	padding-right:15px;
	cursor:pointer;
}
.main_popup{
	width:1000px; background:#333333; color:#fff;padding-bottom:30px;
}

.main_popup_first{
	height:60px; line-height:60px;
}
.activity_div{
	background:#F3F3F4; margin:0px;padding-bottom:30px;
}
.name_parent{
	padding:10px 0px 10px 0px;
}
.activity_info{
	background:#999999;color:#fff; text-align:left;padding:10px 15px 0px 15px;
}
.user_schedule{
	padding:6px 0px; font-size:10px; color:#333333;float:left; width:50%;
	cursor:pointer;
}
</style>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Rolodex</h2>
        <ol class="breadcrumb">            
            <li class="active">
                <strong>Contacts</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content  animated fadeInRight">


<style type="text/css">
.btn-white {
    border: 1px solid #cecece;
}

.btn-rounded {
    border-radius: 25px;
    margin-top: -10px;
    width: 80px;
}
.contact-box {
	min-height:290px;
	position:relative;
}
.custom-check{
	background: #1A7BB9 none repeat scroll 0 0;
    border: 1px solid #ccc;
    height: 25px;
    line-height: 25px;    
    text-align: center;    
    width: 25px;
	cursor:pointer;
	color:#FFF;
}
.disable{
	background: #ccc none repeat scroll 0 0;
	color:#826A6C;
}
.schedule_div{
	position:fixed;
	bottom: 0;
	left: 15px;
	right: 0;
	top:0px;		
	display:none;
	margin: auto;
	z-index:100;
	font-size:15px;
}
.closed{
	padding-right:15px;
	cursor:pointer;
}
.main_popup{
	width:1000px; background:#1c84c6; color:#fff;padding-bottom:30px;box-shadow: 0 0 5px #1C84C6;
}

.main_popup_first{
	height:60px; line-height:60px;margin-left:0px;
}
.activity_div{
	background:#F3F3F4; margin:0px;padding-bottom:30px;
}
.name_parent{
	padding:10px 0px 10px 0px;
	color: #000;
}
.activity_info{
	background:#1c84c6 ;color:#fff; text-align:left;padding:10px 15px 0px 15px;
}
.user_schedule{
	padding:6px 0px; font-size:12px; color:#333333;float:left; width:50%;
	cursor:pointer;
}
.book_now{
	text-decoration:underline;
	font-weight:bold;
}
.activity_info .table .table-row:first-child .cell{
	color:#fff;
}
span.default{
	background-color: #f5f5f5;
    border: 1px solid #e3e3e3;
    border-radius: 4px;
    box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05) inset;
}
</style>
<div class="schedule_div">
                                                            	
</div>
<div class="row">
	<div class="col-lg-9 col-sm-12 col-md-12">
    	<form method="post" action="" id="contact_form" name="contact_form">
            <div class="row">
                <div class="col-sm-12" style="padding-right:30px;margin-bottom:20px;">        
                    <div class="pull-left">
                    	<div class="btn-group">
                        	<div type="button" class="btn btn-white" style="padding-bottom: 4px; cursor:default;"> <?=$total_results?> Records Found</div>
                        </div>
                    </div>
                    <div class="pull-right">
                        <div class="btn-group first_btn_group" style="display:none;">
                            <button type="button" class="btn btn-white sms-popup-window">Send Message</button>
                            <button type="button" class="btn btn-white export_results">Export Results</button>
                            <button type="button" class="btn btn-white favourite_contacts">Add to Favorites</button>                
                        </div>
                        <div class="btn-group">
                            <button class="btn btn-white"><i class="fa fa-repeat"></i></button>
                            <button class="btn btn-white dropdown-toggle" data-toggle="dropdown" aria-expanded="false">All <span class="caret"></span></button>
                                <ul class="dropdown-menu">
                                    
                                </ul>
                            <div type="button" class="btn btn-white" style="padding-bottom: 4px;"><input id="checkall" type="checkbox" /></div>                
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <? for($i=0; $i<count($mm_profile); $i++) { ?>
                    <div class="col-sm-12 col-md-6">
                        <div class="contact-box">
                            <div class="col-sm-6">
                                <div class="text-center">
                                    <div class="avatar-container p-<?=$mm_profile[$i]['profile_complete_perc']?>"><a href="<?=PROJECT_PATH?>profile1/viewProfile/<?=$mm_profile[$i]['user_id']?>"><img alt="image" width="100" class="avatar m-t-xs img-responsive" src="<? if($mm_profile[$i]['image_name'] != '') echo PROJECT_PATH.'uploads/profile/'. $mm_profile[$i]['image_name'] .  '?id='.time(); else  echo PROJECT_PATH.'assets/img/profile_small.jpg'; ?>" /></a></div>
                                    <div class="percent_complete btn btn-outline btn-default btn-rounded"><?=$mm_profile[$i]['profile_complete_perc']?> %</div>
                                    <p class="m-t-xs">
                                    	<a href="<?=PROJECT_PATH?>profile1/viewProfile/<?=$mm_profile[$i]['user_id']?>"><button type="button" class="btn btn-primary btn-xs">&nbsp;&nbsp;Profile&nbsp;&nbsp;</button></a>
                                        &nbsp;
                                        <? if($mm_profile[$i]['profile_complete_perc'] == 100) { ?>
                                        <button type="button" val="<?=$mm_profile[$i]['user_id']?>" class="btn btn-info btn-xs view_schedule">Schedule</button>
                                        <? } ?>
                                    </p>
                                </div>
                                <? /*
                                <div class="text-center">
                                    <img src="<? if($mm_profile[$i]['image_name'] != '') echo PROJECT_PATH.'uploads/profile/'. str_pad($this->session->userdata('user_id'), 7, "0", STR_PAD_LEFT) . '.jpg'; else  echo PROJECT_PATH.'assets/img/profile_small.jpg'; ?>" class="img-circle m-t-xs img-responsive" alt="image">
                                    <div style="border:1px solid #cecece; border-radius: 10px; margin-top: -3px; font-weight:bold; "> <?=$mm_profile[$i]['profile_complete_perc']?> %</div>
                                    <div class="m-t-xs font-bold"><?=$mm_profile[$i]['your_role'] . '<br>' . $mm_profile[$i]['title']?></div>
                                </div>
                                */ ?>
                            </div>
                            <div class="col-sm-6">
                                <h3>
                                <strong>
                                    <a href="<?=PROJECT_PATH?>profile1/viewProfile/<?=$mm_profile[$i]['user_id']?>"><?=$mm_profile[$i]['first_name'] . ' ' . $mm_profile[$i]['last_name']?></a>
                                </strong></h3>
                                <p>
                                <?
                                    $temp = explode(",",$mm_profile[$i]['naics_code']);
                                    if(@$temp[0] != '')
                                        echo '<span class="label default" style="margin:5px;">' . $temp[0] .'</span>';
                                    
                                    if(@$temp[1] != '')
                                        echo '<span class="label default" style="margin:5px;">' . $temp[1] .'</span>';
                                    
                                    
                                    $temp = explode(",",$mm_profile[$i]['sic_code']);
                                    if(@$temp[0] != '')
                                        echo '<span class="label default" style="margin:5px;">' . $temp[0] .'</span>';
                                    
									if($mm_profile[$i]['search_applied'] != '') {
										$temp = explode(";", $mm_profile[$i]['search_applied']);
										for($j=0; $j<count($temp); $j++) {
											echo '<p><span class="label label-warning" style="margin:5px;">' . $temp[$j] .'</span></p>';
										}
										
									}
                                    /*if($temp[1] != '')
                                        echo '<span class="label label-primary" style="margin:5px;">' . $temp[1] .'</span>';*/
                                            
                                ?>
                                </p>
                                <p><i class="fa fa-map-marker"></i>  <?=$mm_profile[$i]['state_name']?></p>
                                <address>
                                    <strong><?=$mm_profile[$i]['city_name']?></strong><br>
                                    <?=$mm_profile[$i]['street']?><br>
                                    <br>
                                    <abbr title="Phone">P:</abbr> <?=$mm_profile[$i]['mobile']?>
                                </address>
                                
                            </div>
                            <div style="position:absolute; right:0px; bottom:0px;">
                                <div class="custom-check disable">
                                    <i class="fa fa-check"></i>
                                </div>
                                <input type="checkbox" name="selected_profiles[]" value="<?=$mm_profile[$i]['user_id']?>" display_name="<?=$mm_profile[$i]['first_name'] . ' ' . $mm_profile[$i]['last_name']?>" style="display:none;" />
                           </div>
                           <div class="clearfix"></div>
                        </div>
                    </div>
                <? 
                } 
                if(count($mm_profile) == 0) {
                    ?>
                        <div class="alert alert-danger">
                            No record found.
                        </div>
                    <?	
                }
                ?>
        
            </div>
            <div class="row">
            	<div class="col-lg-12">
                	<div class="text-center" style="margin-bottom: 20px;">
                        <div class="btn-group">
                        	<button class="btn btn-white" type="button" <?=($page_num==1)?'disabled="disabled"':''?> onclick="Page('<?=($page_num-1)?>')"><i class="fa fa-chevron-left"></i></button>
							<?php
															
								$start	= floor($page_num/$page_size) * $page_size+($page_num<10?1:0) ;
								$end	= $start+9;
								for($i=$start; ($i<=$end && $i<=round($total_results/$page_size));$i++){
									$active= ($i==$page_num)?"primary":"white";
									
									echo "<button class=\"btn btn-$active\" type=\"button\" onclick=\"Page(".$i.")\">$i</button>";
								}
							?>
                            <button class="btn btn-white" type="button" <?=($page_num<round($total_results/$page_size))?'':'disabled="disabled"'?>  onclick="Page('<?=($page_num+1)?>')"><i class="fa fa-chevron-right"></i> </button>
                        </div>
                     </div>
                </div>
            </div>
            <input type="hidden" name="btn_submit" id="btn_submit" value="Y" />
        </form>
    </div>
    <div class="col-lg-3 col-sm-12 col-md-6">
    	<form method="post" name="myform">
        <div class="ibox">
        	<div class="ibox-title"><h5>Search and find contacts</h5></div>
            <div class="ibox-content">
            	<div class="row">
                	<div class="col-sm-12 m-b-sm m-t-sm">
                    	<button class="btn btn-primary" type="button" id="btn-basic" onclick="toogleSearchItems(1)" style="border-radius:0px;width:50%;">Basic</button><button class="btn btn-white" type="button" id="btn-advance" onclick="toogleSearchItems(2)" style="border-radius:0px;width:50%;">Advanced</button>
                    </div>
                </div>
                <div id="basic-filters">
                	<?
					$invalidFields = array();
                    for($i=0; $i<count(@$mm_client_fields_basic); $i++) { 
						echo getFieldObject($mm_client_fields_basic[$i], $invalidFields); 
					}
					?>
                    <?
					/*
                    <div class="row">
                        <div class="col-sm-12 m-b-sm"><textarea class="form-control" name="keyword" maxlength="100" placeholder="By Keywords"><?=$_POST['keyword']?></textarea></div>
                    </div>
                	<div class="row">
                        <div class="col-sm-12 m-b-sm">
                            <select name="state_id" class="form-control">
                            <option value="">By State</option>
                            <?
                                for($i=0; $i<count($mm_states); $i++) {
                                    $selected = '';
                                    if($mm_states[$i]['state_id'] == $_POST['state_id'])
                                        $selected = ' selected="selected" ';
                                    echo '<option ' . $selected . ' value="' . $mm_states[$i]['state_id'] . '">' . $mm_states[$i]['state_name'] . '</option>';
                                }
                            ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 m-b-sm"><input type="text" name="city_name" class="form-control" maxlength="100" placeholder="By City" value="<?=$_POST['city_name']?>" /></div>
                    </div>
                    */
                    ?>
                </div>
                <div id="advance-filters">
                	<?
					$invalidFields = array();
                    for($i=0; $i<count(@$mm_client_fields_advance); $i++) { 
						echo getFieldObject($mm_client_fields_advance[$i], $invalidFields); 
					}
					?>
                    <?
					/*
                    <div class="row">
                        <div class="col-sm-12 m-b-sm"><input type="text" name="naics" class="form-control" maxlength="100" placeholder="By NAICS Code / SIC Code" value="<?=$_POST['naics']?>" /></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 m-b-sm">
                            <select name="isactive" class="form-control">
                            <option value="">By Status</option>
                            <option value="Y" <? if($_POST['isactive'] == 'Y') echo ' selected="selected" ';?>>Verified</option>
                            <option value="N" <? if($_POST['isactive'] == 'N') echo ' selected="selected" ';?>>Not-verified</option>
                            </select>
                        </div>
                    </div>
                	<div class="row">
                        <div class="col-xs-12 m-b-md text-center"><b>No. of Years</b></div>
                    </div>
                    <div class="row">    
                        <div class="col-xs-12">
                            <div id="html_years_in_business"></div>
                            <input type="hidden" maxlength="5" name="years_in_business" value="" class="form-control" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 m-b-md text-center"><b>Average Revenue (In Millions)</b></div>
                    </div>
                    <div class="row">    
                        <div class="col-xs-12">
                            <div id="html_revenue_amount"></div>
                            <input type="hidden" maxlength="15" name="revenue_amount" value="" class="form-control" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" />
                        </div>
                    </div>
                    */
                    ?>
                </div>
                <div class="row">
                    <div class="col-sm-12 m-t-md m-b-md"><button type="submit" class="btn btn-block btn-success">Search</button></div>
                </div>
	        </div>
        </div>
        <input type="button" name="btn_search" id="btn_search" value="Y" style="display:none;" />
        </form>
    </div>
</div>
<div id="msgModal" style="display:none;">
	<iframe name="myIframe" id="myIframe" src="<?=PROJECT_PATH?>message/index" frameborder="0" style="width:100%; border:0px;height:415px;"></iframe>
</div>

<script language="javascript">
function toogleSearchItems(id) {
	if(id == 1) {
		$("#btn-basic").removeClass('btn-white');
		$("#btn-basic").addClass('btn-primary');
		
		$("#btn-advance").addClass('btn-white');
		$("#btn-advance").removeClass('btn-primary');
		
		$("#basic-filters").css('display', '');
		$("#advance-filters").css('display', 'none');
		
	} else {
		$("#btn-advance").removeClass('btn-white');
		$("#btn-advance").addClass('btn-primary');
		
		$("#btn-basic").addClass('btn-white');
		$("#btn-basic").removeClass('btn-primary');
		
		$("#basic-filters").css('display', 'none');
		$("#advance-filters").css('display', '');	
	}
}

$(document).ready(function(){
	if('<?=$saved_msg?>'!=""){
		alert('<?=$saved_msg?>');
	}
	$("#msgModal").dialog({
		autoOpen: false,
		modal: true,		
		width: 500,
		title: 'Send Message', //'Groups / Employees List',			
		open: function(ev, ui){
			//$('#myIframe').attr('src','selectRecipients.php');
			//frames['myIframe'].document.getElementByID('hd_users')
		}, 
		/*
		close: function () {
			frames['myIframe'].table_grid.search('').draw();
		},
		*/
	});
	
	$("#checkall").on('click',function(){
		var checkall	= $(this);
		//console.log(checkall.prop('checked'));
		$(".custom-check").each(function(){
			if(checkall.prop('checked')){
				$(this).removeClass('disable');
				$(this).next().prop('checked',true);
				$('.first_btn_group').show();
			}
			else{
				$(this).addClass('disable');
				$(this).next().prop('checked',false);
				$('.first_btn_group').hide();
				
			}
		});
			
	});
	
	$(".custom-check").on('click',function(){
		$(this).toggleClass('disable');
		$(this).next().trigger('click');
		if($(this).next().is(":checked"))
			$('.first_btn_group').show();
		else
			$('.first_btn_group').hide();
	});
	
	$(".export_results").on('click',function(){
		window.open('<?=base_url()?>rolodex/exportResults' , '_blank');
	});
	
	$(".favourite_contacts").on('click',function(){
		var obj = document.getElementsByName("selected_profiles[]");
		var selected_profiles = [];
		for(i=0; i<obj.length; i++) {
			if(obj[i].checked) {
				selected_profiles.push(obj[i].value);
			}
		}
		
		if(selected_profiles.length == 0) {
			swal('', 'Please select a record');
			return false;	
		}
		else{
			document.contact_form.submit();
		}
	});
	
	$('.sms-popup-window').click(function(){
		
		frames['myIframe'].$('#txt_email_to').val('')
		frames['myIframe'].$('#txt_email_to').trigger("chosen:updated");
		
		var obj = document.getElementsByName("selected_profiles[]");
		var selected_profiles = [];
		for(i=0; i<obj.length; i++) {
			if(obj[i].checked) {
				selected_profiles.push(obj[i].value);
			}
		}
		
		if(selected_profiles.length == 0) {
			swal('', 'Please select a record');
			return false;	
		}
		
		
		for(i=0; i<obj.length; i++) {
			if(i==0){
				frames['myIframe'].$('#txt_email_to').html('');
			}
			if(obj[i].checked) {
				frames['myIframe'].$('#txt_email_to').append('<option value="' + obj[i].value + '">' + obj[i].getAttribute('display_name') + '</option>');
			}
		}
		
		
		
		frames['myIframe'].$('#txt_email_to').val(selected_profiles)
		frames['myIframe'].$('#txt_email_to').trigger("chosen:updated");
		
		$('#msgModal').dialog('open');
	});
	
	$("#html_years_in_business").ionRangeSlider({
		min: 0,
		max: 25,
		type: 'single',
		step: 1,
		prefix: "",
		postfix: " Years",
		maxPostfix: "+",
		prettify: false,
		hasGrid: true,
		from: '<?=$_POST['years_in_business']?>',
		onStart: function (data) {
			//console.log("onStart");
		},
		onChange: function (data) {
			//console.log("onChange");
		},
		onFinish: function (data) {
			//console.log("onFinish");
			document.myform.years_in_business.value = data.fromNumber;
		},
		onUpdate: function (data) {
			//console.log("onUpdate");
		}
	});
	
	$('.view_schedule').on('click',function(){
			ViewSchedule(this);
	});
	
	$("#html_revenue_amount").ionRangeSlider({
		min: 0,
		max: 25,
		type: 'single',
		step: 1,
		prefix: "",
		postfix: " M",
		maxPostfix: "+",
		prettify: false,
		hasGrid: true,
		from: '<?=$_POST['revenue_amount']?>',
		onStart: function (data) {
			//console.log("onStart");
		},
		onChange: function (data) {
			//console.log("onChange");
		},
		onFinish: function (data) {
			//console.log("onFinish");
			document.myform.revenue_amount.value = data.fromNumber;
		},
		onUpdate: function (data) {
			//console.log("onUpdate");
		}
	});
	
	$("#advance-filters").css('display', 'none');
	
	$(window).on('scroll',function(){
		$('.schedule_div').css("marginTop",($(window).scrollTop() + 30) + "px");
	});
	
});
</script>
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
	});
	
	function ViewSchedule(obj){
		var user_name	= $(obj).closest('.col-sm-6').next().find('a').html();
		var user_name_arr	= user_name.split(" ");
		var first_name		= user_name_arr[0];		
		$.ajax({
			url: "<?= base_url() ?>RequestMeeting/GetActivities",
			//data:{remoteText:$(this).val()} ,
			data:{user_id : $(obj).attr('val')},
		type: "POST"
		}).done(function(response){
			var res	= jQuery.parseJSON(response);
			res	= res.data;
			var view_schedule	= '<div class="main_popup"><div class="row main_popup_first"><div class="col-lg-3"> Schedule of '+user_name+' </div><div class="col-lg-6"><div class="button-group" style="display:none;"><button type="button" class="btn btn-white btn-rounded"> <i class="fa fa-calendar"></i> </button><button type="button" class="btn btn-default btn-rounded"> <i class="fa fa-calendar"></i> </button></div></div><div class="col-lg-3"><div class="pull-right closed">X</div></div></div><div class="row activity_div"><div class="col-lg-12"><div class="row name_parent"><div class="col-lg-12"><div class="pull-left"><?=$event_name?></div></div></div><div class="row">';
			$.each(res, function(i){
				view_schedule+='<div class="col-lg-4"> <div class="ibox"> <div class="ibox-content activity_info" activity_id="'+res[i].activity_id+'"> <span>'+res[i].activity_name+'</span> <h5>Each session of '+res[i].session_duration+' Minutes</h5> <div class="row"> <div class="col-lg-12"> <div style="background:#F2F2F2;" class="user_schedule" user_id="'+$(obj).attr('val')+'"> <div style="text-align:center;text-transform: uppercase;">'+first_name+' SCHEDULE</div></div><div style="background:#CCCCCC;" class="user_schedule" user_id=0> <div style="text-align:center;">YOUR SCHEDULE</div></div></div></div><div class="row"> <div class="col-lg-12"> <div class="table"> <div class="table-row"> <div class="cell"> <b>MEETING TIME</b> </div><div class="cell"> <b>STATUS</b> </div></div></div></div></div></div></div>';
				view_schedule+='<div class="ibox"><div class="ibox-content" style="text-align:left;padding-top:10px;"><div class="row"><div class="col-lg-12"><div class="table">';
				$.each(res[i].details ,function(j){
					view_schedule+='<div class="table-row"><div class="cell">'+res[i].details[j].start_time+'-'+res[i].details[j].end_time +'</div><div class="cell">';					
					if(res[i].details[j].match_status ==1){
						view_schedule+='<b>PENDING</b>';
					}
					else if(res[i].details[j].match_status ==2){
						view_schedule+='<b>AVAILABLE</b>';
					}
					else if(res[i].details[j].match_status ==3){
						view_schedule+='<b>UNAVAILABLE</b>';
					}
					else if(res[i].details[j].match_status ==4){
						view_schedule+='<b>CANCELLED</b>';
					}
					else{
						view_schedule+='<span><a href="#" class="book_now" detail_id="'+res[i].details[j].activity_detail_id+'">BOOK NOW</a></span>';
					}
					view_schedule+='</div></div>';
				});
				view_schedule+='</div></div><div></div></div></div></div></div>';
			});
			//view_schedule+='<div class="col-lg-4"> <div class="ibox"> <div class="ibox-content" style="background:#999999;color:#fff; text-align:left;padding:10px 15px 0px 15px;;"> <h5 class="no-margins">ACTIVITY 1</h5> <span>Each session of 15 Minutes</span> <div class="row"> <div class="col-lg-12"> <div style="background:#F2F2F2;padding:6px 0px; font-size:10px; color:#333333;float:left; width:50%;"> <div style="text-align:center;">AMANDA SCHEDULE</div></div><div style="background:#CCCCCC;padding:6px 0px; font-size:10px; color:#333333;float:left; width:50%;"> <div style="text-align:center;">YOUR SCHEDULE</div></div></div></div><div class="row"> <div class="col-lg-12"> <div class="table"> <div class="table-row"> <div class="cell"> <b>Meeting Time</b> </div><div class="cell"> <b>Status</b> </div></div></div></div></div></div></div><div class="ibox"> <div class="ibox-content" style="text-align:left;padding-top:10px;"> <div class="row"> <div class="col-lg-12"> <div class="table"> <div class="table-row"> <div class="cell"> 9.00 AM- 9.10 AM </div><div class="cell"> <span>OPEN</span> <br/> <a href="#">Book Now</a> </div></div><div class="table-row"> <div class="cell"> 9.00 AM- 9.10 AM </div><div class="cell"> <span>OPEN</span> <br/> <a href="#">Book Now</a> </div></div><div class="table-row"> <div class="cell"> 9.00 AM- 9.10 AM </div><div class="cell"> <span>OPEN</span> <br/> <a href="#">Book Now</a> </div></div><div class="table-row"> <div class="cell"> 9.00 AM- 9.10 AM </div><div class="cell"> <span>OPEN</span> <br/> <a href="#">Book Now</a> </div></div><div class="table-row"> <div class="cell"> 9.00 AM- 9.10 AM </div><div class="cell"> <span>OPEN</span> <br/> <a href="#">Book Now</a> </div></div></div></div></div></div></div></div>';
			
			view_schedule+='</div></div></div></div></div>';
			$('.schedule_div').html(view_schedule);
			$('.schedule_div').show();
			$('.closed').on('click',function(){
				$('.schedule_div').html('');
				$('.schedule_div').hide();
			});
			$('.user_schedule').on('click',function(){
				ActivityDetails(this,obj);
			});
			$('.book_now').on('click',function(){
				BookNow(this,obj);
			});
			$($(".ibox:nth-child(2)").find(".ibox-content"),$(".col-lg-4")).slimScroll({
        		height: '150px'
    		});
		});
		
		
	}
	
	function ActivityDetails(obj,parentobj){
		var view_schedule	= '';
		$.ajax({
			url: "<?= base_url() ?>RequestMeeting/GetActivityDetails",			
			data:{user_id : $(obj).attr('user_id') , activity_id : $(obj).closest('.activity_info').attr('activity_id')},
			type: "POST"
		}).done(function(response){
			var res	= jQuery.parseJSON(response);
			res	= res.data;
			$.each(res ,function(i){					
					view_schedule+='<div class="table-row"><div class="cell">'+res[i].start_time+'-'+res[i].end_time +'</div><div class="cell">';
					if(res[i].my_activity==0){						
						if(res[i].match_status ==1){
							view_schedule+='<b>PENDING</b>';
						}
						else if(res[i].match_status ==2){
							view_schedule+='<b>AVAILABLE</b>';
						}
						else if(res[i].match_status ==3){
							view_schedule+='<b>UNAVAILABLE</b>';
						}
						else if(res[i].match_status ==4){
							view_schedule+='<b>CANCELLED</b>';
						}
						else{
							view_schedule+='<span><a href="#" class="book_now" detail_id="'+res[i].activity_detail_id+'">BOOk NOW</a></span> ';							
						}
					}
					view_schedule+='</div></div>';
			});
			$(obj).closest('.ibox').next().find('.table').html(view_schedule);
			$('.book_now').on('click',function(){				
				BookNow(this,parentobj);
			});
			
		});
	}
	function BookNow(obj,parentobj){
				
		var act_id	= $(obj).closest('.ibox').prev().find('.activity_info').attr('activity_id');
		frames['myIframe'].$('#txt_email_to').html('');
		frames['myIframe'].$('#txt_email_to').append('<option value="' + $(parentobj).attr('val') + '">' + $(parentobj).closest('.col-sm-6').next().find('strong').html()+ '</option>');
		frames['myIframe'].$('#txt_email_to').val($(parentobj).attr('val'));
		frames['myIframe'].$("[name='activity_id']").val(act_id)
		frames['myIframe'].$("[name='activity_detail_id']").val($(obj).attr('detail_id'))
		frames['myIframe'].$('#txt_email_to').trigger("chosen:updated");
		$('#msgModal').dialog('open');
		$( "#msgModal" ).on( "dialogclose", function( event, ui ) {
			if(frames['myIframe'].document.myform.status.value=='success'){	
				frames['myIframe'].document.myform.status.value	= '';			
				BookingNow(obj,parentobj);
			}
		});
	}
	
	function BookingNow(obj,parentobj){
		var act_id	= $(obj).closest('.ibox').prev().find('.activity_info').attr('activity_id');
		$.ajax({
			url: "<?= base_url() ?>RequestMeeting/BookNow",
			//data:{remoteText:$(this).val()} ,
			data:{user_id : $(parentobj).attr('val') , activity_id :  act_id , activity_detail_id : $(obj).attr('detail_id')},
			type: "POST"
		}).done(function(response){
			var res	= jQuery.parseJSON(response);
			res	= res.data;
			if(res.error){
				alert(res.msg);
			}
			else{
				//alert(res.msg);
				$(parentobj).trigger('click');
				//BookNow(obj,parentobj);
				//$(parentobj).closest('.col-sm-6').prev().find('.schedule_div').html('');
			}
		});
		
	}
	
	function Page(page_num){
		location.href='<?=base_url()?>rolodex/index?page_num='+page_num;
	}
	
</script>
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
	});
</script>
</div>