<?php
require("field_validations.php");
?>
<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row">
    	<div class="col-sm-12">
        	<h2><?=$mm_profile_group[0]['profile_group_name']?></h2>
            <p>
				Welcome! Lets get you set up for an event
            </p>
        </div>
    </div>
    <div class="row">
    	<div id="statusMessage"> 
        	<? if(trim(strtolower($status)) == 'error' && $statusMessage != '') {?>
            <div class="alert alert-danger alert-dismissable"> 
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button> 
                <?=$statusMessage?>
            </div>
			<? } ?>
        </div>
        <div class="col-lg-8">
            <form method="post" name="myform" enctype="multipart/form-data">
            <div class="ibox">
            	<div class="ibox-title">
                	<h5>Profile Pic</h5>
                </div>
                <div class="ibox-content">
                    <div class="row">
                        <div class="col-xs-3">Image</div>
                        <div class="col-xs-3">
                            <input type="file" name="file_image" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="ibox "><? #echo "<pre>"; print_r($userProfile); echo "</pre>";?>
				<?
                //echo "<pre>"; print_r($mm_client_fields); echo "</pre>";
				$section_id = '';
                for($i=0; $i<count(@$mm_client_fields); $i++) {
					if($section_id == '') {
						echo '<div class="ibox-title">
								<h5>' . $mm_client_fields[$i]['section_name'] .'</h5>
							</div>
							<div class="ibox-content">';	
						$section_id = $mm_client_fields[$i]['section_id'];
					}
					if($section_id != $mm_client_fields[$i]['section_id']) {
						echo '</div><br />';
						echo '<div class="ibox-title">
								<h5>' . $mm_client_fields[$i]['section_name'] .'</h5>
							</div>
							<div class="ibox-content">';	
						$section_id = $mm_client_fields[$i]['section_id'];
					}
	                echo getFieldObject($mm_client_fields[$i], $invalidFields);            
                }
					if(count(@$mm_client_fields) > 0)
						echo '</div>';
                ?>
                
                <? /*
                <div class="ibox-content">
                    <div class="row">
                    	<div class="col-sm-2">Name</div>
                        <div class="col-sm-5"><input type="text" name="first_name" class="form-control" value="<?=$userProfile->FIRST_NAME?>" placeholder="First Name" /></div>
                        <div class="col-sm-5"><input type="text" name="last_name" class="form-control" value="<?=$userProfile->LAST_NAME?>" placeholder="Last Name" /></div>
               		</div> 
                    <div class="row">
                    	<div class="col-sm-2">Email address</div>
                        <div class="col-sm-10"><input type="text" name="email" class="form-control" value="<?=$userProfile->EMAIL?>" readonly="readonly" placeholder="Last Name" /></div>
                    </div>
                    <div class="row">
                    	<div class="col-sm-2">Phone Number</div>
                        <div class="col-sm-10"><input type="text" name="phone_number" class="form-control" value="<?=$userProfile->PHONE?>" /></div>
                    </div>
                    <div class="row">
                    	<div class="col-sm-2">Address</div>
                        <div class="col-sm-10"><input type="text" name="street" class="form-control" placeholder="Street" value="<?=$userProfile->STREET?>" /></div>
                    </div>
                    <div class="row">
                    	<div class="col-sm-2"></div>
                        <div class="col-sm-10">
                        	<div class="row">
                            	<div class="col-sm-4">
                                	<select name="state_id" class="form-control">
                                    <option value="">State</option>
                                    <?
                                    for($i=0;$i<count($state_list_array);$i++) {
										$selected = '';
										if($userProfile->STATE_ID == $state_list_array[$i]['state_id'])
											$selected = ' selected="selected" ';	
										echo '<option value="' . $state_list_array[$i]['state_id'] . '" ' . $selected . '>' . $state_list_array[$i]['state_name'] . '</option>';		
									}
									?>
                                    </select>
                                </div>
                                <div class="col-sm-4"><input name="city" type="text" maxlength="30" class="form-control" value="<?=$userProfile->CITY_NAME?>" placeholder="City Name" /></div>
                                <div class="col-sm-4"><input type="text" name="zipcode" class="form-control" maxlength="10" placeholder="Zipcode" value="<?=$userProfile->ZIPCODE?>" /></div>
                            </div>
                        </div>
                    </div>    
                </div>
                <br />
                <div class="ibox-title">
                    <h5>DESCRIBE YOUR ROLES & RESPONSIBILITIES</h5>
                </div>
                <div class="ibox-content">
                	<div class="row">
                    	<div class="col-sm-2">Biography</div>
                        <div class="col-sm-10"><textarea name="biography" class="form-control" rows="3" placeholder="In 2 - 3 sentences, tell us about your interests, hobbies, work life..etc" /><?=$userProfile->BIOGRAPHY?></textarea></div>
                    </div>
                    <div class="row">
                    	<div class="col-sm-2">Responsibilities</div>
                        <div class="col-sm-10"><textarea name="responsibilities" class="form-control" rows="3" placeholder="In 2 - 3 sentences, tell us about your interests, hobbies, work life..etc" /><?=$userProfile->RESPONSIBILITIES?></textarea></div>
                    </div>
                </div>
                */ ?>
                <div class="ibox-content">
                    <div class="row">
                    	<div class="col-sm-12">
                        	<button type="button" class="btn btn-primary btn-sm pull-right" onclick="submitForm()" style="width:75px"><? if($boardingFinished) echo 'Save'; else echo 'Continue'; ?></button>
                        </div>
					</div>
				</div>
            </div>
            </form>
        </div>
        <div class="col-lg-4">
        	<?php 
				$profileSetupMenuClass = array('<i class="fa fa-pencil"></i>', '', '', '', '');
				require("profileRightMenu.php");
			?>
        </div>
    </div>
</div>	
<style type="text/css">
.vertical-timeline-block {
    margin: 1em 0;
    position: relative;
}

.ibox-content .row {
	margin-bottom:5px;
}
</style>
<script language="javascript">
var existingResords;
$(document).ready(function () {
	
});

function submitForm() {
	/*
	for(i=0; i<document.getElementsByName("client_type_id[]").length; i++) {
		if(document.getElementsByName("client_type_id[]")[i].value =='' || 
				document.getElementsByName("user_type_title[]")[i].value =='' || 
				document.getElementsByName("user_type_desc[]")[i].value =='' || 
				document.getElementsByName("url[]")[i].value =='' ) {
					
			$("#errorMessages").html(
				'<div class="alert alert-danger alert-dismissable"> ' + 
                    '<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button> ' +
                    'Please enter all the fields'+
                '</div>');
			$(document).scrollTop( $("#errorMessages").offset().top );
			return false;
		}
	}
	*/
	document.myform.submit();
}

function getLoadingIcon() {
	return '<div class="spiner-example">' +
                                '<div class="sk-spinner sk-spinner-three-bounce">' +
                                    '<div class="sk-bounce1"></div>' +
                                    '<div class="sk-bounce2"></div>' +
                                    '<div class="sk-bounce3"></div>' +
                                '</div>' +
                            '</div>';	
}
</script>