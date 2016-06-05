<?php
function getFieldObject($propertyList, $invalidFields) {
	#3 === Multiple choice
	#4 === Checkboxes
	#5 === Choose from a list
	$field_table_name	= array('37' =>'mm_sics_codes' , '36'=>'mm_naics_codes' , '38'=>'mm_unspc_codes');
	$field_required = '';
	$field_required_symbol = '';
	if($propertyList['field_required'] == 'Y') {
		//$field_required = 'required';
		$field_required_symbol = '<span style="color:red">*</span>';
	}
	
	$errorClass = '';
	if(!empty($invalidFields) && in_array($propertyList['field_id'], $invalidFields))
		$errorClass = "has-error";
	
	$errorClassRow = '';
	if($propertyList['field_type_id'] == '3' || $propertyList['field_type_id'] == '4') {
		if($errorClass != '')
			$errorClassRow = ' style="border:1px solid #ed5565; " ';
	}
			
	$returnValue = '<div class="row '. $errorClass . '">
						<div class="col-xs-3">' . $propertyList['field_title'] . ' ' . $field_required_symbol .  '</div>
						<div class="col-xs-7" ' . $errorClassRow . '>
					';	
	
	if($propertyList['field_type_id'] == '3') {
		//$returnValue .= '<div style="padding-left:10px; margin-top:5px;" class="pull-left"><b>' . $propertyList['field_title'] . '</b></div>';
		for($i=0;$i<count($propertyList['options']); $i++) {
			$checked = '';
			if($propertyList['options'][$i]['option_id'] == $propertyList['field_value'])
				$checked = ' checked="checked" ';
					
			$returnValue .= '<div style="padding-left:10px; margin-top:5px;" class="pull-left"><input type="radio" name="field' . $propertyList['field_id'] . '_' . $propertyList['client_type_id'] .'" style="height:15px;" ' . $field_required . '  value="' . $propertyList['options'][$i]['option_id'] . '" ' . $checked . '></div>' .  
							'<div style="padding-left:10px; margin-top:5px;" class="pull-left">' . $propertyList['options'][$i]['option_desc'] . '</div>' ;
		}
		
	} else if( $propertyList['field_type_id'] == '4') {
		$field_required = '';
		//$returnValue .= '<div style="padding-left:10px" class="pull-left"><b>' . $propertyList['field_title'] . '</b></div>';
		$temp = explode(",", $propertyList['field_value']);
		for($i=0;$i<count($propertyList['options']); $i++) {
			$checked = '';
			if(in_array($propertyList['options'][$i]['option_id'],$temp))
				$checked = ' checked="checked" ';
				
			$returnValue .= '<div style="padding-left:10px;" class="pull-left"><input type="checkbox" name="field' . $propertyList['field_id'] . '_' . $propertyList['client_type_id'] .'[]" ' . $field_required . '  value="' . $propertyList['options'][$i]['option_id'] . '" ' . $checked . '></div>' .  
							'<div style="padding-left:10px" class="pull-left">' . $propertyList['options'][$i]['option_desc'] . '</div>' ;
		}
	} else if( $propertyList['field_type_id'] == '5') {
		$returnValue .= '<select name="field' . $propertyList['field_id'] . '_' . $propertyList['client_type_id'] .'" ' . $field_required . ' class="form-control">';
		$returnValue .= '<option value="">Select</option>';			
		for($i=0;$i<count($propertyList['options']); $i++) {
			$selected = '';
			if($propertyList['options'][$i]['option_id'] == $propertyList['field_value'])
				$selected = ' selected="selected" ';
				
			$returnValue .= '<option value="' . $propertyList['options'][$i]['option_id'] . '" ' . $selected . '>' .  $propertyList['options'][$i]['option_desc'] . '</option>';
		}
		$returnValue .= '</select>';
	} else if( $propertyList['field_type_id'] == '9') // Email
		$returnValue .= '<input readonly="readonly" type="text" class="form-control" " value="' . $propertyList['field_value'] . '" >';		 
	else if( $propertyList['field_type_id'] == '2') // Paragraph / Textarea - only in about me rest 4000 varchar 2 
		$returnValue .= '<textarea name="field' . $propertyList['field_id'] . '_' . $propertyList['client_type_id'] . '" ' . $field_required . ' class="form-control" placeholder="' . $propertyList['field_title'] . '" onkeyup="validateFieldLength(this, \'' . $propertyList['field_validate_id'] . '\', \'' . $propertyList['field_length'] . '\')">' . $propertyList['field_value'] . '</textarea>';
	else if( $propertyList['field_type_id'] == '7') // Date
		$returnValue .= '<input name="field' . $propertyList['field_id'] . '_' . $propertyList['client_type_id'] . '" ' . $field_required . ' type="text" class="form-control" placeholder="' . $propertyList['field_title'] . '" value="' . $propertyList['field_value'] . '" onblur="validateDateField(this)" maxlength="10"  data-mask="99/99/9999">';
	else
		$returnValue .= '<input name="field' . $propertyList['field_id'] . '_' . $propertyList['client_type_id'] . '" ' . $field_required . ' type="' . $propertyList['field_type_name'] . '" class="form-control" placeholder="' . $propertyList['field_title'] . '" value="' . $propertyList['field_value'] . '" onkeyup="validateFieldLength(this, \'' . $propertyList['field_validate_id'] . '\', \'' . $propertyList['field_length'] . '\')" maxlength="' . $propertyList['field_length'] .'">';
	
	if( $propertyList['field_type_id'] != '9') {
		$returnValue .= '<input type="hidden" name="form_fields[]" value="' . $propertyList['field_name'] . '">';
		$returnValue .= '<input type="hidden" name="form_field_titles[]" value="' . $propertyList['field_title'] . '">';
		$returnValue .= '<input type="hidden" name="form_field_details[]" value="' . $propertyList['field_id'] . ',' . $propertyList['field_required'] . ',' . $propertyList['field_type_id'] . ',' . $propertyList['client_type_id'] .'">';
	}
	
	$returnValue .= '</div>';
	if( $propertyList['field_type_id'] == '2') {
		$returnValue.='<div class="col-xs-2"><a data-target="#mymodal" data-toggle="modal" href="#" value="'.$field_table_name[$propertyList['field_id']].'"><i class="fa fa-plus" style="color:#737373;"></i>&nbsp;Add</a></div>';
	}
	$returnValue.='</div>';
	
	return $returnValue;
	//<input type="<?=$mm_client_fields[$i]['field_type_name']? >" class="form-control" placeholder="<?=$mm_client_fields[$i]['field_title']? >">
}
?>
<script language="javascript">
$().ready(function(){
	$('[data-toggle="modal"]').on('click',function(){
		$.ajax({
		url: "<?= base_url() ?>CommonCode/ViewCode",
		//data:{remoteText:$(this).val()} ,
		data:{table_name:$(this).attr('value')},
		type: "POST"
		}).done(function(response){
			$("#mymodal").find("modal-body").html(response);
		});
	});
});

function validateFieldLength(field, type, maxLength) {
	field.value = field.value.substr(0, maxLength);
	
	if(type == 2) { // Numeric
		/*if(isNaN(field.value)) {
			field.value = '';
			swal('Please enter numeric value');	
		}*/
		if (/\D/g.test(field.value)) field.value = field.value.replace(/\D/g,'')
	}
}

function validateDateField(field) {
	
}
</script>