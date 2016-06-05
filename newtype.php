<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2><?php echo $type; ?></h2>
        <ol class="breadcrumb">
            <li>
                <?php echo $type; ?>
            </li>
            <li class="active">
                <strong>Information</strong>
            </li>
        </ol>
    </div>
</div>

<div class="wrapper wrapper-content  animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5><?=$type?> Information</h5>
                </div>
                <form method="post" name="myform" id="myform" enctype="multipart/form-data" action="<?php echo 'newtype/'.$type_id; ?>">
                <div class="ibox-content">
                    <div class="row">
                    	<div class="col-sm-2">Company Name <font color="#ED5565">*</font> <input type="hidden" id="speaker_id" value="<?=$speaker_id?>" /></div>
                        <div class="col-sm-10"><input type="text" name="speaker_name" id="speaker_name" placeholder="<? if($type == 1) echo ''; else if($type == 1) echo ''; else if($type == 3) echo '';  ?>Name" class="form-control" value="<?=$speaker_name?>" maxlength="100" /></div>
                    </div>
                    <div class="row">
                    	<div class="col-sm-2">Email </div>
                        <div class="col-sm-10"><input type="email" name="email" id="email" placeholder="Email" class="form-control" value="<?=$email?>" maxlength="80" /></div>
                    </div>
                    <div class="row">
                    	<div class="col-sm-2">Company Website</div>
                        <div class="col-sm-10"><input type="text" name="profile_url" id="profile_url" placeholder="URL" class="form-control" value="<?=$profile_url?>" maxlength="200" /></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-2">Description</div>
                        <div class="col-sm-10">
                            <div class="mail-text h-200" style="min-height:200px;border:1px solid #ccc;">
                                <div class="summernote"><?=$speaker_detail?></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <? if($image_name != '' && file_exists('uploads/speakers/'.$image_name)) { ?> 
                    <div class="row">
                    	<div class="col-sm-2"></div><div class="col-sm-10"><img src="<?=PROJECT_PATH?>uploads/speakers/<?=$image_name . '?id=' . rand(0,50)?>" style="width:50px;50px;"></div>
                    </div>
                    <? } ?>
                    <div class="row">
                        <div class="col-sm-2">Image</div>
                        <div class="col-sm-10">
                        <input type="file" name="file_image" id="file_image" />
                        <small><i>Note: Please upload logo with dimensions 235*235 (w*h) for better experience.</i></small>
                        </div>
                    </div>
                    <div class="row" style="padding-top:15px;" id="processButton">
                    	<div class="col-sm-6">
                        	
                        </div>
                        <div class="col-sm-6">
                        	<button type="submit" class="btn btn-sm btn-primary pull-right" style="min-width:80px;">Save</button>
                        </div>
                    </div>
                    <div class="row">
                    	<div class="col-xs-12" id="processMessage"></div>
                    </div>
                </div>
            	</form>
            </div>
        </div>
        <? /*
        <div class="col-lg-4">
        	<? #$this->load->view('templates/rightListItems'); ?>
        </div>
		*/ ?>
    </div>
</div>	
<style type="text/css">
.ibox-content .row {
	margin-bottom:5px;
}
</style>
<script language="javascript">
$(document).ready(function () {
	$('.summernote').summernote();
	/*
	{
   	 toolbar: [
		//[groupname, [button list]]
		
		['style', ['bold', 'italic', 'underline', 'clear']],
		//['font', ['strikethrough', 'superscript', 'subscript']],
		['fontname', ['fontname']],
		['fontsize', ['fontsize']],
		['color', ['color']],
		['para', ['ul', 'ol', 'paragraph']],
		['height', ['height']],
		['misc', ['fullscreen']],
	  ]
	}
	*/
	
	$("#myform").validate({
		 ignore:[':hidden'],
		 rules: {                     
			/*email: {
				 required: true,
				 email:true
			},*/
			speaker_name: {
				 required: true
			},
			title_id: {
				 required: true
			}
		},
		showErrors: function(errorMap, errorList) {
			// Clean up any tooltips for valid elements
			  $.each(this.validElements(), function (index, element) {
				  var $element = $(element);
	
				  $element.data("title", "") // Clear the title - there is no error associated anymore
					  .removeClass("error")
					  .tooltip("destroy");
			  });
	
			  // Create new tooltips for invalid elements
			  $.each(errorList, function (index, error) {
				  var $element = $(error.element);
	
				  $element.tooltip("destroy") // Destroy any pre-existing tooltip so we can repopulate with new tooltip content
					  .data("title", error.message)
					  .addClass("error")
					  .tooltip(); // Create a new tooltip based on the error messsage we just set in the title
			  });
		  },
		 submitHandler: function(form) {
			// do other things for a valid form
			//$("#message_content").val($(".note-editable").html());
			SubmitForm(form);
		  }
	});
	
	toastr.options = {
		closeButton: true,
		progressBar: true,
		showMethod: 'slideDown',
		timeOut: 4000
	};
		
	function SubmitForm(form) {
		var formData = new FormData(form);
		//console.log(formData);
			
		formData.append('update_type_detail', 'Y');
		//formData.append('speaker_id', $('#speaker_id').val());
		formData.append('speaker_id', document.getElementById('speaker_id').value);
		formData.append('speaker_detail', $(".summernote").code())
		
		//var fileInput = document.getElementById('file_image');
		//var file = fileInput.files[0];
		
		$("#processMessage").css('display', '');
		$("#processMessage").html(getLoadingIcon());
		$("#processButton").css('display', 'none');

		$.ajax({
			//url: 'newtype',
			method: "POST",
			/*data: { 'update_type_detail' : 'Y', 
					'type_id': '<?=$type_id?>', 
					'speaker_id' : $('#speaker_id').val(),
					'speaker_name' : $('#speaker_name').val(),
					'email' : $('#email').val(),
					'title_id' : $('#title_id').val(),
					'speaker_detail' : $(".summernote").code(),	
					'file_image': file,
				},*/
			data: formData,
			cache:false,
			contentType: false,
			processData: false,
			dataType: "json",	
			complete: function(response, status) {
				if(status == 'success') { 	
					var json = response.responseJSON;
					if(json.status.toLowerCase() != 'success') {
						toastr.error(json.statusMessage); //swal(json.status, json.statusMessage, json.status.toLowerCase());
						
						$("#processMessage").css('display', 'none');
						$("#processButton").css('display', '');
						
					} else {
						toastr.success(json.statusMessage);
						location.href = '<?php echo PROJECT_PATH . 'sponsor/newtype/' . $type_id; ?>';
						/*
						swal({
							  title: json.status,
							  text: json.statusMessage,
							  type: json.status.toLowerCase(),
							  showCancelButton: false,
							  closeOnConfirm: false,
							  closeOnCancel: false
							},
							function(isConfirm){
								location.href = '<?php echo PROJECT_PATH . 'admin/typedetail/' . $type_id; ?>';
						});
						*/
						$('#speaker_id').val(speaker_id);
					}
				}	// End if status == success 		
			}
		}).fail(function( jqXHR, textStatus ) {
			if(jqXHR.status == 404)
				alert( "page not found" );
			else	
				alert( "Request failed: " + textStatus );
		});	
	
	}

});

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