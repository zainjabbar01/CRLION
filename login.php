<div class="register-input">
    <!--======= Form Input =========-->
    
    <div class="row" style="margin-top:40px;">
        <div class="col-sm-12"> 
          <div class="form-group">
            <input type="email" class="form-control" id="email" placeholder="Email" />
          </div>
        </div>
     </div>
     <div class="row">
        <div class="col-sm-12"> 
          <div class="form-group">
            <input type="password" class="form-control" id="password" placeholder="Password" />
          </div>
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-12">
        	<div class="form-group">
            	<input type="checkbox" name="remember_me" style="float:left">
                <div style="float: left; margin-top: 4px;"> Keep me signed in</div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top:15px;">
        <div class="col-xs-12"> 
          <div class="form-group">
            <button type="button" class="btn btn-success btn-block" id="dialogLogin" onclick="validateUser();">Login</button>
          </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12"> 
          <div class="form-group">
            <a style="color:#2384BE;" target="_parent" href="/mm_sites/preLogin/forgotPassword">Can't access your account?</a>
          </div>
        </div>
    </div>
    
  </div>
<br  /><br  /><br  />
<style type="text/css">
#login .overlay {
	padding: 80px 0;
}
#login {
	background: url(<?=PROJECT_TEMPLATE?>images/register-bg.jpg) no-repeat;
	background-size: cover;
	margin-bottom:20px;
}
#login .tittle h2 {
	color: #fff !important;
}
#login .tittle h2 span {
	color: #fff;
}
#login p {
	color: #fff;
}
.register-input{
	border:none;
	padding:5px 20px;
}
.register-input input[type="text"],.register-input input[type="email"], .register-input input[type="password"], .register-input textarea {
	height: 33px;
	line-height: 33px;
}
.register-input button {
	border-width:1px;	
	color:#fff;
}
.form-control {
	border-radius:1px;
}
.form-control:focus{
	border-color:#f10f24 !important;
}
</style>
<script type="text/javascript">
function validateUser() {
	//console.log(document.formEmail);
	$('#dialogLogin').attr('disabled', 'true');
	$.ajax({
		url: '<?=PROJECT_PATH ?>welcome/login',
		method: "POST",
		data: { 'user_login' : 'Y', 'email' : document.formEmail.email.value, 'password' : document.formEmail.password.value },
		dataType: "json",	
		complete: function(response, status) {
			if(status == 'success') { 	
				var json = response.responseJSON;
				
					
				if(json.status.toLowerCase() == "success") {
					location.href = '<? echo PROJECT_PATH ?>welcome/login';
				} else {
					swal(json.status, json.statusMessage, json.status.toLowerCase());
					$('#dialogLogin').removeAttr('disabled');
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
</script>