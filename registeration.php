<div id="register1" style="padding-top:40px; padding-bottom:40px;">
<div class="container">
  <h3>Register Here!</h3>
  <div class="register-input"> 
    
    <!--======= Form Input =========-->
    <form role="form">
    <div class="row">
        <div class="col-sm-12 text-center"> 
          <div class="form-group">
            <button type="button" class="form-control" id="dialogRegister">REGISTER EVENTS!</button>
          </div>
        </div>
    </div>
    </form>
  </div>
</div>
</div>
<div id="dialog" style="display: none; padding:0px; overflow:hidden">
    <iframe name="myIframe" id="myIframe" src="<?=PROJECT_PATH?>register" style="width:100%; border:0px;"></iframe>
</div>
<script type="text/javascript">
$( document ).ready(function() {   
	$("#dialog").dialog({
		autoOpen: false,
		modal: true,
		height: 500,
		width: 700,
		title: 'Registration', //'Groups / Employees List',
		open: function(ev, ui){
			//$('#myIframe').attr('src','selectRecipients.php');
			//frames['myIframe'].getDefaultSelection();
		}, 
		/*
		close: function () {
			frames['myIframe'].table_grid.search('').draw();
		},
		*/
	});
	
	$('#dialogRegister').click(function(){
		$('#dialog').dialog('open');
	});
});
</script>
<style type="text/css">
#myIframe{
  height: 450px;
}
.ui-dialog {
	z-index:1001;
}

.ui-widget-header {
    background: none;
    border: 0px;
}
.ui-dialog-titlebar-close {
	display:none;
}

</style>

