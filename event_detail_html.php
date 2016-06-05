<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Event Management</h2>
        <ol class="breadcrumb">
            <li><a href="/mm_sites/event/event_detail/23">Event</a></li>
            <li class="active">
                <strong>Washington DC Conference </strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>

<div class="wrapper wrapper-content animated fadeIn">
<style type="text/css">
.events_attend i {
    float: left;
    margin-top: 5px;
    width: 20px;
	list-style:none;
}
</style>
<div class="row">
    <div class="col-xs-12 col-sm-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Washington DC Conference </h5>
            </div>
            <div class="ibox-content" style="min-height: 340px;">
                <div class="row">
                	                    <div class="col-sm-12">
                        <h3>Washington DC Conference </h3>
                        <p></p>
                        <div class="row1">
                            <span class="fa fa-map-marker"></span>
                            1 E. Continental Drive / Tempe, AZ 85281 <br />
                            Arizona Arizona                        </div>
                        <p></p>
                        <div class="row1">
                            <span class="fa fa-calendar"></span>
                            <small class="text-muted">On 05/09/2016 at 09:00</small>
                        </div>
                    </div>
                </div>
                <div class="row" style="min-height:30px;"></div>
                <div class="row">
                	<div class="col-xs-12"><h2>DESCRIPTION</h2></div>
                </div>
                <div class="row" style="min-height:130px;">
                	<div class="col-xs-12">																				The Hard Hat Expo draws a quality crowd of contractors and municipalities from the DFW Metroplex market area. The show is held annually in March. The two day show consistently draws between 8,000-10,000 qualified attendees that are in the position to make buying decisions for their companies or municipalities.																		</div>
                </div>
            </div>
        </div>
    
    </div>
    <div class="col-xs-12 col-sm-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <span class="pull-left fa fa-shopping-cart" style="font-size:18px;"></span>
                <h5>EVENT CART</h5>
                <span class="pull-right">
                	<span class="fa fa-download"></span>
                    &nbsp; 
                	<a href="/mm_sites/event/eventDownload/23" target="_blank">Download</a>
                </span>
            </div>
            <div class="ibox-content" style="min-height: 340px;">
                <div class="row">
                    <div class="col-sm-8">Activity Fee</div>
                    <div class="col-sm-3 text-right"><b>$<span id="activity_fee">0.00</span></b></div>
                </div>
                <div class="row">
                    <div class="col-sm-8">Workshop Fee</div>
                    <div class="col-sm-3 text-right"><b>$<span id="workshop_fee">0.00</span></b></div>
                </div>
                <div class="row">
                	<div class="col-sm-8">Sponsor Level Fee</div>
                    <div class="col-sm-3 text-right"><b>$<span id="sponsor_level_fee">0.00</span></b></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="row">
                    <div class="col-sm-8">Total</div>
                    <div class="col-sm-3 text-right"><h2 class="font-bold" id="total_fee">$0.00</h2></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="row">
                    <div class="col-sm-4"><h4>Extra Tickets</h4></div>
                	<div class="col-sm-1"><input type="checkbox" id="extra_ticket" onclick="$('#no_of_tickets').toggle();" /></div>
                    <div class="col-sm-6"><input type="text" class="form-control" id="no_of_tickets" placeholder="Number of Tickets" style="display:none" maxlength="5" onkeyup="validateFieldLength(this, 2, 5)" /></div>
                </div>    
                <div class="hr-line-dashed"></div>
                <div class="row">
                    <div class="col-sm-4"><h4>Payment Option</h4></div>
                	<div class="col-sm-6">
                    	<input type="radio" name="payment_option" checked="checked" onclick="$('#payment_address').css('display','none')" />
                        Credit Card &nbsp;&nbsp;
                    	<input type="radio" name="payment_option" onclick="$('#payment_address').css('display','')" />
                    	Pay By Cheque    
					</div>
                </div>
                <div class="row" id="payment_address" style="display:none">
                    <div class="col-sm-4"><h3>Payment Address</h3></div>
                	<div class="col-sm-6">1881 E. Linda Ln
Chandler AZ 
85242</div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="row">
                	<div class="col-sm-12">
                    	<div id="event-register-option" class="pull-right" style="font-weight:bold">
                        	                            	<button type="button" class="btn btn-block btn-primary" onclick="register_event()">Register</button>
                                                    </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

<div class="row m-b-md">
	<div class="col-lg-6">
		<div class="ibox">
        	<div class="ibox-title">
            	<h5>ACTIVITIES</h5>
            </div>
            <div class="ibox-content" id="activity_level_grid">
				<div class="row">
                                <div class="col-lg-12">
                    <div class="ibox" style="border:1px solid #cecece">
                        <div class="ibox-content" style="padding-top:15px;">
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="/matchmaking/assets/img/hand_shake.png" style="height:33px; width:50px; margin-right:20px;" class="pull-left" />
                                </div>
                                <div class="col-sm-7">
                                    <h5>Non Strategic Session 2 at Expo</h5>
                                </div>
                                <div class="col-sm-3">
                                	                                    <span class="label label-success">$100</span>
                                    <button class="btn btn-default btn-block" style="display:none">$100</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul class="events_attend">
                                        <li>
                                            <i class="fa fa-clock-o pull-left"></i>
                                            <div><small> On 02/01/2016 from 10:00 to 11:00</small></div>
                                        </li>
                                        <li>
                                            <i class="fa fa-eraser"></i>
                                            <div><small>
                                                One - One Session & Non Strategic Matchmaking                                            </small></div>
                                        </li>
                                        <li style="display:none">
                                            <i class="fa fa-tint"></i>
                                            <div><small>Table 2</small></div>
                                        </li>
                                    </ul>
                                    <p>
                                        Are you drowning in too many emails, too many meetings, and too many interruptions?                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12"><hr /></div>
                                                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <button class="btn btn-default btn-block btn-outline get_insights" style="display:none;">Get insights</button>
                                </div>
                                <div class="col-lg-4">
                                                                        <button class="btn btn-success btn-block" id="btn-25-1" onclick="book_activity(25, '100', 0,  'Y'); make_availablity(23, 25, 'Y',  this)">Join</button>
                                    <button class="btn btn-success btn-block" id="btn-25-2" onclick="book_activity(25, '100', 0,  'N'); make_availablity(23, 25, 'N',  this)" style="display:none">Withdrawal</button>
                                                                        <input type="hidden" name="hd_activity_id[]" />
                                    <input type="hidden" name="hd_activity_fee[]" />
                                    <input type="hidden" name="hd_activity_type_id[]" value="2" />
                                </div>
                                <p class="text-center">
                                    <small>1 of 1 seats available</small>
                                </p>
                            </div>
                        </div>
                    </div>
                                    </div>
                                <div class="col-lg-12">
                    <div class="ibox" style="border:1px solid #cecece">
                        <div class="ibox-content" style="padding-top:15px;">
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="/matchmaking/assets/img/table_meeting.png" style="height:33px; width:50px; margin-right:20px;" class="pull-left" />
                                </div>
                                <div class="col-sm-7">
                                    <h5>Matchmaking at Expo</h5>
                                </div>
                                <div class="col-sm-3">
                                	                                    <span class="label label-success">$100</span>
                                    <button class="btn btn-default btn-block" style="display:none">$100</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul class="events_attend">
                                        <li>
                                            <i class="fa fa-clock-o pull-left"></i>
                                            <div><small> On 02/01/2016 from 12:00 to 02:00</small></div>
                                        </li>
                                        <li>
                                            <i class="fa fa-eraser"></i>
                                            <div><small>
                                                One - Many Sessions & Strategic Matchmaking                                            </small></div>
                                        </li>
                                        <li style="display:none">
                                            <i class="fa fa-tint"></i>
                                            <div><small>Table 2</small></div>
                                        </li>
                                    </ul>
                                    <p>
                                        She has mentored hundreds of professionals from entry level to corner office with excellent clientsatisfaction. Jendayi also functioned as an operations Training Manager creating innovative curriculum. She brings insight for the strategy minded person and has a passion for leadership. Jendayi received her master's in Counseling Psychology from Colorado Christian University and her bachelor's in Business Administration from Seton Hall University as a Martin Luther King Jr. Scholar. In her personal time, Jendayi enjoys running, reading, connecting with others, personal development and healthy living.                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12"><hr /></div>
                                                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <button class="btn btn-default btn-block btn-outline get_insights" style="display:none;">Get insights</button>
                                </div>
                                <div class="col-lg-4">
                                                                        <button class="btn btn-success btn-block" id="btn-26-1" onclick="book_activity(26, '100', 1,  'Y'); make_availablity(23, 26, 'Y',  this)">Join</button>
                                    <button class="btn btn-success btn-block" id="btn-26-2" onclick="book_activity(26, '100', 1,  'N'); make_availablity(23, 26, 'N',  this)" style="display:none">Withdrawal</button>
                                                                        <input type="hidden" name="hd_activity_id[]" />
                                    <input type="hidden" name="hd_activity_fee[]" />
                                    <input type="hidden" name="hd_activity_type_id[]" value="1" />
                                </div>
                                <p class="text-center">
                                    <small>3 of 3 seats available</small>
                                </p>
                            </div>
                        </div>
                    </div>
                                    </div>
                                <div class="col-lg-12">
                    <div class="ibox" style="border:1px solid #cecece">
                        <div class="ibox-content" style="padding-top:15px;">
                            <div class="row">
                                <div class="col-sm-2">
                                    <img src="/matchmaking/assets/img/hand_shake.png" style="height:33px; width:50px; margin-right:20px;" class="pull-left" />
                                </div>
                                <div class="col-sm-7">
                                    <h5>Non Strategic Session 1 at Expo</h5>
                                </div>
                                <div class="col-sm-3">
                                	                                    <span class="label label-success">$100</span>
                                    <button class="btn btn-default btn-block" style="display:none">$100</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <ul class="events_attend">
                                        <li>
                                            <i class="fa fa-clock-o pull-left"></i>
                                            <div><small> On 05/09/2016 from 10:00 to 11:00</small></div>
                                        </li>
                                        <li>
                                            <i class="fa fa-eraser"></i>
                                            <div><small>
                                                One - One Session & Non Strategic Matchmaking                                            </small></div>
                                        </li>
                                        <li style="display:none">
                                            <i class="fa fa-tint"></i>
                                            <div><small>Table 2</small></div>
                                        </li>
                                    </ul>
                                    <p>
                                        Are you drowning in too many emails, too many meetings, and too many interruptions?                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12"><hr /></div>
                                                            </div>
                            <div class="row">
                                <div class="col-lg-8">
                                    <button class="btn btn-default btn-block btn-outline get_insights" style="display:none;">Get insights</button>
                                </div>
                                <div class="col-lg-4">
                                                                        <button class="btn btn-success btn-block" id="btn-24-1" onclick="book_activity(24, '100', 2,  'Y'); make_availablity(23, 24, 'Y',  this)">Join</button>
                                    <button class="btn btn-success btn-block" id="btn-24-2" onclick="book_activity(24, '100', 2,  'N'); make_availablity(23, 24, 'N',  this)" style="display:none">Withdrawal</button>
                                                                        <input type="hidden" name="hd_activity_id[]" />
                                    <input type="hidden" name="hd_activity_fee[]" />
                                    <input type="hidden" name="hd_activity_type_id[]" value="2" />
                                </div>
                                <p class="text-center">
                                    <small>1 of 1 seats available</small>
                                </p>
                            </div>
                        </div>
                    </div>
                                    </div>
                            </div>
            </div>
        </div>
        
    </div>
        <div class="col-lg-6">
    	<div class="ibox">
        	<div class="ibox-title">
            	<h5>SPONSOR LEVELS</h5>
            </div>
            <div class="ibox-content" id="sponsor_level_grid">
    			<div class="panel-group" id="accordion">
                                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                                                        <input type="radio" name="sponsor" class="i-checks" value="19" price_value="20000" onclick="book_sponsor_level()" /> &nbsp;
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_0" style="font-size: 15px;">BE GOLD SPONSOR &nbsp; $20000</a>
                        </h5>
                    </div>
                    <div id="collapse_0" class="panel-collapse collapse in123">
                        <div class="panel-body">
                            <h4>Total Available: 7</h4>
                            <hr />
                            This is Andrew winning level sponsor                        </div>
                    </div>
                </div>
                                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                                                        <input type="radio" name="sponsor" class="i-checks" value="1" price_value="50000" onclick="book_sponsor_level()" /> &nbsp;
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_1" style="font-size: 15px;">PRESENTING SPONSORS &nbsp; $50000</a>
                        </h5>
                    </div>
                    <div id="collapse_1" class="panel-collapse collapse in123">
                        <div class="panel-body">
                            <h4>Total Available: 5</h4>
                            <hr />
                            <ul>
<li>Two (2) tables of 10 at the Salute Awards dinner (Thursday, March 24)</li>
<li>Two (2) tables of 10 at the Wednesday evening activities as applicable (Wednesday, March 23)</li>
<li>Each table guest receives a full Summit admission and access to the Salute Awards Reception</li>
<li>Company executive makes welcoming remarks during a Summit general session</li>
<li>Company recognized as a Summit &amp; Salute Presenting Sponsor in all printed and online marketing materials</li>
<li>One (1) feature article on company and CEO in monthly e-newsletter, 
the President's Report, sent to more than 20,000 recipients prior to the
 Summit &amp; Salute</li>
<li>Company prominently featured on the 2016 Summit &amp; Salute event website</li>
<li>Company listed in Summit &amp; Salute print advertising appearing in media partner publications</li>
<li>Twenty (20) invitations to the Senior Executive reception preceding the Salute Awards dinner (Thursday, March 24)</li>
<li>Full page, 4-color ad in program book</li></ul><br>                        </div>
                    </div>
                </div>
                                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                                                        <input type="radio" name="sponsor" class="i-checks" value="18" price_value="12000" onclick="book_sponsor_level()" /> &nbsp;
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_2" style="font-size: 15px;">LUNCHEON SPONSOR &nbsp; $12000</a>
                        </h5>
                    </div>
                    <div id="collapse_2" class="panel-collapse collapse in123">
                        <div class="panel-body">
                            <h4>Total Available: 10</h4>
                            <hr />
                            this is a test for Andrew                        </div>
                    </div>
                </div>
                                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                                                        <input type="radio" name="sponsor" class="i-checks" value="2" price_value="10000" onclick="book_sponsor_level()" /> &nbsp;
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_3" style="font-size: 15px;">PRESENTING SPONSORS &nbsp; $10000</a>
                        </h5>
                    </div>
                    <div id="collapse_3" class="panel-collapse collapse in123">
                        <div class="panel-body">
                            <h4>Total Available: 8</h4>
                            <hr />
                            <ul>
<li>Two (2) tables of 10 at the Salute Awards dinner (Thursday, March 24)</li>
<li>Two (2) tables of 10 at the Wednesday evening activities as applicable (Wednesday, March 23)</li>
<li>Each table guest receives a full Summit admission and access to the Salute Awards Reception</li>
<li>Company executive makes welcoming remarks during a Summit general session</li>
<li>Company recognized as a Summit &amp; Salute Presenting Sponsor in all printed and online marketing materials</li>
<li>One (1) feature article on company and CEO in monthly e-newsletter, 
the President's Report, sent to more than 20,000 recipients prior to the
 Summit &amp; Salute</li>
<li>Company prominently featured on the 2016 Summit &amp; Salute event website</li>
<li>Company listed in Summit &amp; Salute print advertising appearing in media partner publications</li>
<li>Twenty (20) invitations to the Senior Executive reception preceding the Salute Awards dinner (Thursday, March 24)</li>
<li>Full page, 4-color ad in program book</li></ul>                        </div>
                    </div>
                </div>
                                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                                                        <input type="radio" name="sponsor" class="i-checks" value="3" price_value="25000" onclick="book_sponsor_level()" /> &nbsp;
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_4" style="font-size: 15px;">WBE PRESENTING SPONSORS &nbsp; $25000</a>
                        </h5>
                    </div>
                    <div id="collapse_4" class="panel-collapse collapse in123">
                        <div class="panel-body">
                            <h4>Total Available: 10</h4>
                            <hr />
                            
<ul>
<li>One (1) table of 10 at the Salute Awards dinner (Thursday, March 24)</li>
<li>Each Salute table guest receives a full Summit admission and access to the Salute Awards Reception</li>
<li>One (1) reserved table at the Wednesday evening activities as applicable (Wednesday, March 23)</li>
<li>Company executive makes welcoming remarks during a Summit general session</li>
<li>Company recognized as a Summit &amp; Salute Presenting Sponsor in all printed and online marketing materials</li>
<li>Company prominently featured on the 2016 Summit &amp; Salute event website</li>
<li>Company listed in Summit &amp; Salute print advertising appearing in media partner publications</li>
<li>One (1) feature article on company and CEO in monthly e-newsletter, 
the President's Report, sent to more than 20,000 recipients prior to the
 Summit &amp; Salute</li>
<li>Full page, 4-color ad in program book</li>
<li>Ten (10) invitations to the Senior Executive reception preceding Salute Awards dinner (Thursday, March 24)&nbsp;</li></ul>                        </div>
                    </div>
                </div>
                                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h5 class="panel-title">
                                                        <input type="radio" name="sponsor" class="i-checks" value="4" price_value="10000" onclick="book_sponsor_level()" /> &nbsp;
                                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse_5" style="font-size: 15px;">PLATNUM LEVEL BENEFITS &nbsp; $10000</a>
                        </h5>
                    </div>
                    <div id="collapse_5" class="panel-collapse collapse in123">
                        <div class="panel-body">
                            <h4>Total Available: 10</h4>
                            <hr />
                            
<ul>
<li>One (1) table of 10 at the Salute Awards dinner (Thursday, March 24)</li>
<li>Each Salute table guest receives a full Summit admission and access to the Salute Awards Reception</li>
<li>One (1) reserved table at the Wednesday evening activities as applicable (Wednesday, March 23)</li>
<li>Company executive makes welcoming remarks during a Summit general session</li>
<li>Company recognized as a Summit &amp; Salute Presenting Sponsor in all printed and online marketing materials</li>
<li>Company prominently featured on the 2016 Summit &amp; Salute event website</li>
<li>Company listed in Summit &amp; Salute print advertising appearing in media partner publications</li>
<li>One (1) feature article on company and CEO in monthly e-newsletter, 
the President's Report, sent to more than 20,000 recipients prior to the
 Summit &amp; Salute</li>
<li>Full page, 4-color ad in program book</li>
<li>Ten (10) invitations to the Senior Executive reception preceding Salute Awards dinner (Thursday, March 24)&nbsp;</li></ul>                        </div>
                    </div>
                </div>
                                </div>
            </div>
        </div>
    </div>
    </div>


<div class="row">
`	<div class="col-lg-12">
        <div class="ibox-title">
            <span class="pull-left fa fa-shopping-cart" style="font-size:18px;"></span>
            <h5>AGENDA</h5>
        </div>
        <div class="ibox-content">
            <div class="row" style="margin-top:10px;">
                        <div class="col-xs-12">
                        10:00 &nbsp; <span class="fa fa-circle-thin"> &nbsp; Non Strategic Session 2 at Expo
                        </div>
                    </div>
                        <div class="row" style="margin-top:10px;">
                        <div class="col-xs-12">
                        12:00 &nbsp; <span class="fa fa-circle-thin"> &nbsp; Matchmaking at Expo
                        </div>
                    </div>
                        <div class="row" style="margin-top:10px;">
                        <div class="col-xs-12">
                        10:00 &nbsp; <span class="fa fa-circle-thin"> &nbsp; Non Strategic Session 1 at Expo
                        </div>
                    </div>
                                </div>
    </div>
</div>


<div class="row">
	<div class="col-xs-12">
    	<h2>SPEAKERS</h2>
    </div>
</div>

<div class="row">
    <div id="owl-speakers">
            <div class="item">
                            <img src="/matchmaking/uploads/speakers/94_1.jpg" alt="Dr. Rea Waldon Ph.D.">
                    </div>
        </div>
    <style type="text/css">
    #owl-speakers .item{
      margin: 3px;
    }
    #owl-speakers .item img{
      display: block;
      width: 200px;
      height: 200px;
    }
    </style>
</div>

<div class="row">
	<div class="col-xs-12">
    	<h2>SPONSORS</h2>
    </div>
</div>

<div class="row">
    <div id="owl-sponsors">
        </div>
    <style type="text/css">
    #owl-sponsors .item{
      margin: 3px;
    }
    #owl-sponsors .item img{
      display: block;
      width: 200px;
      height: 200px;
    }
    </style>
</div>

<div class="row">
	<div class="col-xs-12">
    	<h2>EXHIBITORS</h2>
    </div>
</div>

<div class="row">
    <div id="owl-exhibitors">
        </div>
    <style type="text/css">
    #owl-exhibitors .item{
      margin: 3px;
    }
    #owl-exhibitors .item img{
      display: block;
      width: 200px;
      height: 200px;
    }
    </style>
</div>        

<form method="post" name="myform_payment" action="/mm_sites/event/process_payment/23">
<input type="hidden" name="event_id" value="23" />
</form>

<form method="post" name="myform_tickets" action="/mm_sites/event/event_tickets/23">
<input type="hidden" name="event_id" value="23" />
<input type="hidden" name="activity_id" />
<input type="hidden" name="no_of_tickets" />
<input type="hidden" name="pay_by_cheque" />
</form>

</div>
<div class="footer">
    <div class="pull-right">
    </div>
    <div>
        <strong>Copyright</strong> Connection Revolution &copy; 2015-1016
    </div>
</div>
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
			url: '/mm_sites/admin/addNewProfileGroup',
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
						location.href= '/mm_sites//admin/'+document.getElementById("hd_current_page").value + '/' + document.getElementById("hd_profile_group_id").value; 
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
        </div>
    </div>
</body>
</html>
