<div class="footer">
    <div class="pull-right">
    </div>
    <div>
        <strong>Copyright</strong> Connection Revolution &copy; 2015-1016
    </div>
</div>
<? if($this->session->userdata('user_id') == '') { ?>
<div style="display: none;" class="modal inmodal" id="crDemoVideo" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Watch the Demo Video</h4>
                <small>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</small>
            </div>
            <div class="modal-body" style="padding:0px;">
                <figure>
                    <iframe src="https://player.vimeo.com/video/31250443?title=0&byline=0&portrait=0" width="100%" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    <? #<iframe style="width: 540px; height: 300px; display:none;" data-aspectratio="0.8211764705882353" src="http://www.youtube.com/embed/RtZUsPFrLS4" allowfullscreen="" frameborder="0"></iframe> ?>
                </figure>
            </div>
        </div>
    </div>
</div>


<div style="display: none;" class="modal inmodal" id="dynamicFieldAddition" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
            	<input type="hidden" id="hd_profile_group_id" />
                <input type="hidden" id="hd_field_id" />
                <input type="hidden" id="hd_current_page" />
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">Add New Field</h4>
                <small></small>
            </div>
            <div class="modal-body">
                <div class="row">
                	<div class="col-xs-3 col-sm-3">Field Name</div>
                    <div class="col-xs-9 col-sm-9"><input type="text" class="form-control" id="new_field_name" maxlength="25" /></div>
                </div>
                <div class="row">
                	<div class="col-xs-3 col-sm-3">Field Title</div>
                    <div class="col-xs-9 col-sm-9"><input type="text" class="form-control" id="new_field_title" maxlength="50" /></div>
                </div>
                <div class="row">
                	<div class="col-xs-3 col-sm-3">Field Type</div>
                    <div class="col-xs-9 col-sm-9">
                    	<select class="form-control" id="new_field_type_id" onchange="dispalySubFieldType(1)">
                        	<option value="1">Text</option>
                            <option value="2">Paragraph text</option>
                            <option value="3">Multiple choice</option>
                            <option value="4">Checkboxes</option>
                            <option value="5">Choose from a list</option>
                            <option value="6">Time</option>
                            <option value="7">Date</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                	<div class="col-xs-3 col-sm-3"></div>
                    <div class="col-xs-9 col-sm-9">
                    	<ul id="fieldSubType"></ul>
                        <a id="fieldSubTypeAfter" href="#" style="margin-left:50px; display:none;" onClick="dispalySubFieldType(0)">More</a>
                    </div>
                </div>
                <div class="row" style="display:none;">
                	<div class="col-xs-3 col-sm-3">Required</div>
                    <div class="col-xs-9 col-sm-9"><input type="checkbox" id="new_field_required" /></div>
                </div>
                <div class="row">
                	<div class="col-xs-3 col-sm-3"></div>
                    <div class="col-xs-9 col-sm-9">
                    	<input type="button" class="btn btn-primary btn-sm btn-md" value="Save" onclick="createDynamicField()" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<? } ?>
<style type="text/css">
.li-circle li{list-style-type: circle; margin:10px;}
.li-square li {list-style-type: square;}

.li-checkbox li, .li-radio li {
	margin:10px;
	list-style-type: none;
}

.li-checkbox li:before
{
    content: "\2610";
	margin:5px;
}

 {list-style-type: none;}
.li-radio li:before
{
    content: "\2611";
	margin:5px;
}

.li-number li
{
	margin:10px;
    list-style-type: number;
}
</style>
<script language="javascript">
function dispalySubFieldType(resetContainer) {
	if(resetContainer == 1) {	
		$("#fieldSubType").html("");	
		$("#fieldSubTypeAfter").css('display', 'block');
		$("#fieldSubType").append('<li><input type="text" name="new_field_sub_type[]"></li>');
	}
	
	$("#fieldSubType").append('<li><input type="text" name="new_field_sub_type[]"> &nbsp; <span style="cursor:pointer" onclick="this.parentNode.remove()">×</span></li>');
	
	$("#fieldSubType").removeClass('li-circle');
	$("#fieldSubType").removeClass('li-checkbox');
	$("#fieldSubType").removeClass('li-number');
	
	if(document.getElementById("new_field_type_id").value == 3) {
		$("#fieldSubType").addClass('li-circle');
	} else if(document.getElementById("new_field_type_id").value == 4) {
		$("#fieldSubType").addClass('li-checkbox');
	} else if(document.getElementById("new_field_type_id").value == 5) {
		$("#fieldSubType").addClass('li-number');
	} else {
		$("#fieldSubType").html("");
		$("#fieldSubTypeAfter").css('display', 'none')
		return false;
	}

}

function createDynamicField() {
	if(document.getElementById("new_field_name").value =='') {
		swal('Please enter field name');
		return false;	
	}
	
	if(document.getElementById("new_field_title").value =='') {
		swal('Please enter field title');
		return false;	
	}
	
	var new_field_sub_type = [];
	if(document.getElementById("new_field_type_id").value == 3 || document.getElementById("new_field_type_id").value == 4 || document.getElementById("new_field_type_id").value == 5) {
		for(i=0;i<document.getElementsByName("new_field_sub_type[]").length;i++) {
			new_field_sub_type.push(document.getElementsByName("new_field_sub_type[]")[i].value);
			if(document.getElementsByName("new_field_sub_type[]")[i].value =='') {
				swal('Please enter field type detail');
				return false;	
			}		
		}
	} 
	
	
	//var new_field_required = 'N';
	//if(document.getElementById("new_field_required").checked)
		//new_field_required = 'Y';
		
	$.ajax({
			url: '<? echo PROJECT_PATH ?>admin/addNewProfileGroup',
			method: "POST",
			data: { 
					'add_profile_group_type' : 'Y', 
					'new_field_name' : document.getElementById("new_field_name").value, 
					'new_field_title' : document.getElementById("new_field_title").value,
					'new_field_type_id' : document.getElementById("new_field_type_id").value,
					'new_field_sub_type' : new_field_sub_type,
					//'new_field_required' : new_field_required,
					'profile_group_id' : document.getElementById("hd_profile_group_id").value, 
					'field_id' : document.getElementById("hd_field_id").value, 
				},
			dataType: "json",	
			complete: function(response, status) {
				if(status == 'success') { 	
					var json = response.responseJSON;
					swal(json.status, json.statusMessage, json.status.toLowerCase());
					
					if(json.status.toLowerCase() == 'success') 
						location.href= '<? echo PROJECT_PATH ?>/admin/'+document.getElementById("hd_current_page").value + '/' + document.getElementById("hd_profile_group_id").value; 
				}	// End if status == success
			}
		}).fail(function( jqXHR, textStatus ) {
			if(jqXHR.status == 404)
				alert( "page not found" );
			else	
				alert( "Request failed: " + textStatus );
		});
	
}
</script>