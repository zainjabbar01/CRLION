<style type="text/css">
.heading{
	background:#676a6c;border-top:0;color:#fff;padding:15px;
}
</style>
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-12">
        <h2>Event Management</h2>
        <ol class="breadcrumb">
            <li>Event</li>
            <li class="active">
                <strong><?=$event_name?></strong>
            </li>
        </ol>
    </div>
</div>

<div class="wrapper wrapper-content animated fadeIn">
<div class="row">
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-title">
                <h5>Billing Information</h5>
                <span class="pull-right">
                    <i class="fa fa-cc-amex text-success" style="font-size:18px;"></i>
                    <i class="fa fa-cc-mastercard text-warning" style="font-size:18px;"></i>
                    <i class="fa fa-cc-discover text-danger" style="font-size:18px;"></i>
                </span>
            </div>
            <div class="ibox-content">
                <? if($status == 'error') { ?>
                <div class="alert alert-danger">
                	<?=$statusMessage?>
                </div>
                <? } ?>
				<? if($status == 'success' || $pay_by_cheque == 'Y') { ?>
                <div class="alert alert-success">
                	<?=$statusMessage?>
                </div>
                <? } else { ?>                
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" id="payment-form" method="post" class="form-horizontal">
                        <div class="row">
                        	<div class="col-lg-6">
                            	<div class="row">
                                	<div class="col-md-12">
                                    	<h3 class="heading">CONTACT DETAILS</h3>
                                    </div>
                                </div>
                                <div class="row m-t-md">
                                	<div class="col-md-6 col-sm-6 col-xs-12">
                                    	<label>NAME <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="bill_name" name="bill_name" placeholder="NAME AND SURNAME" value="<?=$user_info['name'];?>" required/>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    	<label>Email <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="bill_email" name="bill_email" placeholder="Email" value="<?=$user_info['email'];?>" required/> 
                                    </div>
                                </div>
                                <div class="row m-t-md">
                                    <div class="col-xs-12">
                                        <label>Company <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="bill_company" name="bill_company" placeholder="Company" value="<?=$user_info['company_name'];?>" required/>      </div>
                                </div>
                                <div class="row m-t-md">
                                	<div class="col-xs-6">
                                        <label>Phone <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="bill_phone" name="bill_phone" placeholder="Phone" value="<?=$user_info['phone'];?>" required/>                                                                      
                                    </div>
                                    <div class="col-xs-6">
                                        <label>Fax</label>
                                        <input type="text" class="form-control" id="bill_fax" name="bill_fax" placeholder="Fax"/>
                                    </div>
                                </div>
                                <div class="row" style="margin-top:20px;">
                                	<div class="col-md-12">
                                    	<h3 class="heading">ADDRESS DETAILS</h3>
                                    </div>
                                </div>
                                <div class="row m-t-md">
                                    <div class="col-xs-12">
                                     	<label>Address <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="bill_address" name="bill_address" placeholder="Address" value="<?=$user_info['street'];?>" required/>            		</div>
                                </div>
                                <div class="row m-t-md">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>City <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="bill_city" name="bill_city" placeholder="City" value="<?=$user_info['city_name'];?>" required/>                                                                    
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                    	<label>State/Province <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="bill_state" name="bill_state" placeholder="State/Province" required/>
                                    </div>
                                </div>
                                <div class="row m-t-md">
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Country <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="bill_country" name="bill_country" placeholder="Country" required/>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <label>Zip Code <font color="red">*</font></label>
                                        <input type="text" class="form-control" id="bill_zip_code" name="bill_zip_code" placeholder="Zip Code" value="<?=$user_info['zipcode'];?>" required/>                                                        
                                    </div>
                                </div>
                            </div>                            
                            <div class="col-lg-6">
                            	<div class="row">
                                    <div class="col-md-12">
                                    	<h3 class="heading">CARD DETAILS</h3>
                                    </div> 
                                </div>
                                <div class="row m-t-md">
                                    <div class="col-md-6 col-sm-6  col-xs-12">
                                        <label>CARD NUMBER <font color="red">*</font></label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="card_number" placeholder="Valid Card Number" required />
                                            <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                        </div>
                                    </div>
                                    <div style="padding-top:27px;" class="col-md-6 col-xs-12">
                                        <i class="fa fa-cc-amex text-success" style="font-size:28px;"></i>
                                        <i class="fa fa-cc-visa text-info" style="font-size:28px;"></i>
                                        <i class="fa fa-cc-mastercard text-warning" style="font-size:28px;"></i>
                                        <i class="fa fa-cc-discover text-danger" style="font-size:28px;"></i>
                                        <i class="fa fa-cc-paypal text-info" style="font-size:28px;"></i>
                                        <i class="fa fa-cc-stripe text-danger" style="font-size:28px;"></i>
                                    </div>
                                </div>
                                <div class="row m-t-md">
                                    <div class="col-xs-7 col-md-7">
                                        <label>EXPIRATION DATE <font color="red">*</font></label>
                                        <input type="text" class="form-control" name="Expiry" placeholder="MM / YY"  required/>                                     
                                    </div>
                                    <div class="col-xs-5 col-md-5 pull-right">
                                        <label>CV CODE <font color="red">*</font></label>
                                        <input type="text" class="form-control" name="CVC" placeholder="CVC"  required/>
                                    </div>
                                </div>
                                <div class="row m-t-md"></div>
                                <div class="ibox">
                                    <div class="ibox-title" style="background:#676a6c; color:#FFF; border-top:0px;">
                                        <h5 style="font-size:16px;">ORDER SUMMARY</h5>
                                    </div>
                                    <div class="ibox-content" style="background:#F5F5F5; border:1px solid #F5F5F5;">
                                        <table class="table table-bordered" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <th>ACTIVITY NAME</th>
                                                <th class="text-right">CHARGES</th>
                                            </tr>
											<?
											$total = 0;
                                            for($i=0; $i<count($eventData); $i++) {
                                            	$total = $total + ($eventData[$i]['fee']*$eventData[$i]['total_tickets']);
											?>
                                            <tr>
                                                <td><?=$eventData[$i]['activity_name']?>
                                                    <input type="hidden"  name="product_id[]" value="1" />
                                                    <input type="hidden" class="form-control" name="product_name[]" value="Cannes Logo" placeholder="Product 1" required /></td>
                                                <td class="text-right">$<?=$eventData[$i]['fee']*$eventData[$i]['total_tickets']?>.00<input type="hidden" class="form-control" name="product_price[]" value="10" required /></td>
                                            </tr>
                                            <?
                                            }
                                            ?>
                                            <tr>
                                            	<th class="text-right">TOTAL</th>
                                                <th class="text-right">$<?=$total?>.00</th>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="row m-t-md">
                                        <div class="col-lg-12 text-right"> <button class="btn btn-primary btn-lg" type="submit">Process payment!</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                        
                        
                        </form>
                    </div>
                </div>
                <? } ?>
            </div>
    	</div>
	</div>
</div>
<? if($status == 'success' || $pay_by_cheque == 'Y') { ?>
<br /><br /><br />
<button type="button" class="btn btn-success" onclick="location.href='<?=PROJECT_PATH?>event/confirm_availability/<?=$event_id?>'">Proceed to Session Availablity</button>
<? } ?>
</div>