<div class="row">
    <div class="col-lg-12">
        <div class="input-group"><input id="search_text" type="text" placeholder="Search" class="input-sm form-control"> <span class="input-group-btn">
            <button type="button" class="btn btn-sm btn-primary" id="search"> <i class="fa fa-search"></i></button> </span></div>
    </div>
</div>
<div class="row">
	<div class="col-lg-12">
    	<div class="table-responsive">
            <table class="table table-striped">
                <thead>
                <tr>
            
                    <th><input type="checkbox" class="ichecks" id="checkall" /></th>
                    <th>Code ID </th>
                    <th>Description</th>
                </tr>
                </thead>
                <tbody>
                    <?php
					if(count($codes)>0){
						foreach($codes as $code){
						?>
                    <tr>
                        <td><input type="checkbox" class="ichecks" id="code_id_1" name="code_id[]" value="<?=$code['code_id']?>" /></td>
                        <td><?=$code['code_id']?></td>
                        <td><?=$code['code_desc']?></td>
                    </tr>
                    <?php
						}
					}
					?>
                </tbody>
            </table>
 		</div>
    </div>
</div>
<script type="text/javascript">
	$().ready(function(){
		$("#search_text").on('keypress',function(event){
			 var keycode = (event.keyCode ? event.keyCode : event.which);
			if(keycode == '13'){
				$("#search").trigger('click'); 
			}
		});
		
		$("#search").on('click',function(event){
			event.stopPropagation();
			var xhr	=$.ajax({
				url: "<?= base_url() ?>CommonCode/ViewCode",
				//data:{remoteText:$(this).val()} ,
				data:{table_name:'<?=$table_name?>' , 'query':$(this).closest('div').find('input[type="text"]').val() , 'for' : '<?=$for?>'},
				type: "POST" , 				
				context: this ,
				success:function(response){
					$("<?=$for?>_modal").find(".modal-body").html(response);					
				}	
			});
			
		});
		if('<?=$query?>'==''){
			$("#checkall").trigger('click');
			$("[type='checkbox']",$('tbody')).prop('checked',true);
		}
		$("#checkall").on('click',function(){
			$("[type='checkbox']",$('tbody')).prop('checked',$(this).prop('checked'));
		});
		
		Array.prototype.unique1 = function() {			
			var i, l = this.length, r = new Array();
			for(i=0; i<l;i++){				
				if(r.indexOf(jQuery.trim(this[i]))==-1){					
					r.push(jQuery.trim(this[i]));
				}
			}			
			return r;
		};
		
		$('.table-responsive').slimScroll({ height:'350px'})
		
		$("<?=$for?>_modal").on('hidden.bs.modal',function(){							
			$("[name*='code_id']:checked").each(function(){	
									
				var choosen_obj	= $("<?=$for?>");				
				if($.inArray($(this).val(),choosen_obj.val())==-1){
					choosen_obj.append('<option value="'+$(this).val()+'" selected="selected">'+$(this).closest("tr").find("td:last-child").html()+'</option>');
					choosen_obj.trigger("chosen:updated");
				}
				else{
					
				}
				
			});
			$("<?=$for?>_modal").find(".modal-body").html('');
			
			/*if(selected_codes.length){
				var selected_codes_arr	= selected_codes.split(",");
				var unique 				= selected_codes_arr.unique1();	
			}*/
		});
	});
	
	
</script>
