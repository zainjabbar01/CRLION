<?php
function getFieldObject($propertyList) {
	#3 === Multiple choice
	#4 === Checkboxes
	#5 === Choose from a list
	$field_required = '';
	//if($propertyList['field_required'] == 'Y')
		//$field_required = 'required';
	//<div class="col-xs-3">' . $propertyList['field_title'] . '</div>`
	$returnValue = '<div class="row">
						
						<div class="col-xs-12">
					';	
	
	if( $propertyList['field_type_id'] == '3') {
		//$returnValue .= '<div style="padding-left:10px; margin-top:5px;" class="pull-left"><b>' . $propertyList['field_title'] . '</b></div>';
		for($i=0;$i<count($propertyList['options']); $i++) {
			$returnValue .= '<div style="padding-left:10px; margin-top:5px;" class="pull-left"><input type="radio" name="field' . $propertyList['field_id'] . '_' . $propertyList['client_type_id'] .'" style="height:15px;" ' . $field_required . '  value="' . $propertyList['options'][$i]['option_id'] . '"></div>' .  
							'<div style="padding-left:10px; margin-top:5px;" class="pull-left">' . $propertyList['options'][$i]['option_desc'] . '</div>' ;
		}
		
	} else if( $propertyList['field_type_id'] == '4') {
		$field_required = '';
		//$returnValue .= '<div style="padding-left:10px" class="pull-left"><b>' . $propertyList['field_title'] . '</b></div>';
		for($i=0;$i<count($propertyList['options']); $i++) {
			$returnValue .= '<div style="padding-left:10px; margin-top:-20px;" class="pull-left"><input type="checkbox" name="field' . $propertyList['field_id'] . '_' . $propertyList['client_type_id'] .'[]" ' . $field_required . '  value="' . $propertyList['options'][$i]['option_id'] . '"></div>' .  
							'<div style="padding-left:10px" class="pull-left">' . $propertyList['options'][$i]['option_desc'] . '</div>' ;
		}
	} else if( $propertyList['field_type_id'] == '5') {
		//$returnValue = '<select name="field' . $propertyList['field_id'] . '_' . $propertyList['client_type_id'] .'" ' . $field_required . ' >';
		for($i=0;$i<count($propertyList['options']); $i++) {
			$returnValue .= '<option value="' . $propertyList['options'][$i]['option_id'] . '">' .  $propertyList['options'][$i]['option_desc'] . '</option>';
		}
		$returnValue .= '</select>';
	} 
	else {
		$additionalAttribute = '';
		if($propertyList['field_type_name'] == 'Password')
			$additionalAttribute = '  onBlur="validate_pass(this, ' . $propertyList['client_type_id'] . ')" ';
		$returnValue .= '<input name="field' . $propertyList['field_id'] . '_' . $propertyList['client_type_id'] . '" ' . $field_required . ' type="' . $propertyList['field_type_name'] . '" class="form-control" placeholder="' . $propertyList['field_title'] . '" ' . $additionalAttribute . ' >';
		if($propertyList['field_type_name'] == 'Password')
			$returnValue .= '<div id="errorMessage' . $propertyList['client_type_id'] . '"></div>';
	}
	
	$returnValue .= '<input type="hidden" name="form_fields[]" value="' . $propertyList['field_name'] . '">';
	$returnValue .= '<input type="hidden" name="form_field_titles[]" value="' . $propertyList['field_title'] . '">';
	$returnValue .= '<input type="hidden" name="form_field_details[]" value="' . $propertyList['field_id'] . ',' . $propertyList['field_required'] . ',' . $propertyList['field_type_id'] . ',' . $propertyList['client_type_id'] .'">';
	
	$returnValue .= '
						</div>
					</div>
					';
	
	return $returnValue;
	//<input type="<?=$mm_client_fields[$i]['field_type_name']? >" class="form-control" placeholder="<?=$mm_client_fields[$i]['field_title']? >">
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Register</title>

<!--Main-->
<link rel="stylesheet" type="text/css" href="<?=PROJECT_TEMPLATE?>rs-plugin/css/settings.css" media="screen" >
<link href="<?=PROJECT_TEMPLATE?>css/style.css" rel="stylesheet" type="text/css">
<link href="<?=PROJECT_TEMPLATE?>css/responsive.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" id="color" href="<?=PROJECT_TEMPLATE?>css/colors/default.css">
<style type="text/css">
.register-input{
	border:none;
	padding:5px 20px;
}
.register-input input[type="text"], 
.register-input input[type="email"], 
.register-input input[type="password"], 
.register-input textarea, 
.register-input select
{
	height: 33px;
	line-height: 33px;
}
.register-input button {
	border-width:1px;
}
.form-control {
	border-radius:1px;
}

</style>
<script src="<?=PROJECT_TEMPLATE?>js/jquery-1.9.1.min.js"></script> 
</head>
<body>

<div class="container">
  <div class="register-input" style="margin-top:0px; <? if($status == 'success') echo 'display:none;'; ?>"> 
    <?
    if($status == 'error') {
	?>
    	<div style="background-color: #f2dede;border-color: #ebccd1;color: #a94442;border-radius: 1px;margin-bottom: 20px; padding:10px;">
            <?=$statusMessage?>
        </div>
    <?
	}
	?>
    <!--======= Form Input =========-->
    <form name="myform" method="post">
    <input type="hidden" name="client_type_id" value="<? if(@$_POST['client_type_id'] != '') echo $_POST['client_type_id']; else echo $mm_client_type[0]['client_type_id']; ?>">
    <!--<div class="col-xs-3">
    	&nbsp;
    </div>-->
    <div class="row">
    	<div class="col-xs-12">
		<select name="a" class="form-control" onChange="showData(this.value)">
		<?php 
        //echo "<pre>"; print_r($mm_client_type); echo "</pre>";
        for($i=0;$i<count($mm_client_type); $i++) {
       	/*
		?>
            <a class="myLink btn <? if($i==0) echo 'btn-success'; ?>" onClick="event.preventDefault();" href="#" id="button-toggle-<?php echo $mm_client_type[$i]['client_type_id']?>" type="button">
                    <span onclick="showData(<?php echo $mm_client_type[$i]['client_type_id']?>)"><?php echo $mm_client_type[$i]['user_type_title']?></span>
            </a>
        <?
		*/
			echo '<option value="' . $mm_client_type[$i]['client_type_id'] . '">' . $mm_client_type[$i]['user_type_title'] . '</option>';
        }
        ?>
        </select>
    	</div>
    </div>
    <div class="row" style="margin-top:10px;">
    <?
    //echo "<pre>"; print_r($mm_client_fields); echo "</pre>";
    for($i=0; $i<count(@$mm_client_fields); $i++) {
    ?>  
        <div class="col-xs-<? if(in_array($mm_client_fields[$i]['field_type_id'], array(3,4))) echo '12'; else echo '12'; ?> profile-group-section<?=$mm_client_fields[$i]['client_type_id']?>" style="margin-bottom:5px;">
          <div class="form-group">
            <?php echo getFieldObject($mm_client_fields[$i]); ?>
          </div>
        </div>		
    <?
    }
    ?>
    </div>
    <div class="row">
        <div class="col-xs-12">
        	<div class="form-group">
            	<input type="checkbox" value="Y" name="agree_policy" style="float:left"> 
                <div style="float: left; margin-top: 17px;margin-left:10px;">Agree the terms and policy</div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top:10px;">        
        <div class="col-xs-12">
          <div class="form-group" style="margin-top:0px;">
          	<!-- onclick="$('.register-input').toggle();$('.register-ok').toggle();" -->
            <button type="submit" class="btn btn-success full-width block" id="dialogRegister" >Register</button>
          </div>
        </div>
     </div>
     <!--<div class="row" style="margin-top:10px;"> 
        <div class="col-xs-12">
          <div class="form-group">
            <button type="button"  class="btn full-width block" onclick="parent.$('[class=\'close\']').trigger('click');">Close</button>
          </div>
        </div>
    </div>-->
    </form>
  </div>
	
    <div class="register-ok" style="<?php if($status != 'success') echo 'display:none;'; ?>color:#ccc; padding:20px;width:90%;">
        <br /><br />
        <div class="row">
            <div class="col-sm-12">
                <span class="fa fa-check"></span> 
                <h3 style="color:#ccc;">Successfully registered!</h3>
                <p>We have sent an activation email, please check your email for further instructions to login</p>
                <div class="col-xs-3">
                  <div class="form-group">
                    <button type="button"  class="form-control btn btn-danger" onclick="parent.$('#dialog').dialog('close'); parent.$('#regModal').dialog('close');">Close</button>
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script language="javascript">
function showData(id) {
	
	<?php 
	for($i=0;$i<count($mm_client_type); $i++) {
	?>
		//$("#button-toggle-<?=$mm_client_type[$i]['client_type_id']?>" ).removeClass('btn-success');
		$(".profile-group-section<?=$mm_client_type[$i]['client_type_id']?>").css('display', 'none');
		
		$(".profile-group-section<?=$mm_client_type[$i]['client_type_id']?> input").each(function(index, field) { 
			if(field.type == 'text' || field.type == 'email' || field.type == 'password') 
				field.value = '';
			
			if(field.type == 'radio') 
				field.checked = false;
			
			if(field.type == 'checkbox') 
				field.checked = false;		
			//console.log(field.type + ',' + field.value);
		})
	<?
	}
	?>
	
	//$("#button-toggle-" + id).addClass('btn-success');
	$(".profile-group-section" + id).css('display', 'table');
	document.myform.client_type_id.value = id;
	
}

function validate_pass(field, client_type_id) {
	var r1=/[A-Z]/;  //Uppercase
	var r2=/[a-z]/;  //lowercase
	var r3=/[!@#$%^&*()\-_=+{};:,<.>]/;  // whatever you mean by 'special char'
	var r4=/[0-9]/;  //numbers
	
	var errorMessage = '';
	$("#errorMessage"+client_type_id).html('');
	
	if(field.value == '') {
		errorMessage = 'Password can not be blank';
	}
	
	if(!r1.test(field.value) || !r2.test(field.value) || !r3.test(field.value) || !r4.test(field.value) ) {
		errorMessage = 'Password must contain a character, a number and a special character. Atleast one letter should be in upper case.';	
	}
	
	if(field.value.length < 6) {
		errorMessage = 'Password should be min 6 characters long';
	}
	
	if(field.value.length > 15) {
		errorMessage = 'Password can be max 15 characters long';
	}
	
	if(errorMessage != '') {
		/*$("#errorMessage").html(
			'<div class="alert alert-danger alert-dismissable">' +
        		'<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>' +
        		errorMessage +
    		'</div>'
		);	*/
		$("#errorMessage"+client_type_id).html(
			'<div style="color:red">' +
        		errorMessage +
    		'</div>'
		);
	}
	
}

<?php if($status != 'success') { 
		if(@$_POST['client_type_id'] != '')
			echo 'showData(' . $_POST['client_type_id'] . ');';
		else
			echo 'showData(' . $mm_client_type[0]['client_type_id'] . ');';
} ?>
</script>
</body>
</html>