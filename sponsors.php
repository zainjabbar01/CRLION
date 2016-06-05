<div class="row">
    <div id="owl-sponsors">
    <? for($i=0;$i<count($event_sponsors);$i++) { ?>
        <div class="item imgLiquidFill">
            <? /*if($event_sponsors[$i]['profile_url'] != '' && $event_sponsors[$i]['profile_url'] != '#') { ?>
            <a href="<?=$event_sponsors[$i]['profile_url']?>" target="_blank"> 
                <img src="<?=ADMIN_PROJECT_PATH?>uploads/speakers/<?=$event_sponsors[$i]['image_name']?>" alt="<?=$event_sponsors[$i]['speaker_name']?>" width="200" height="200">
            </a>
            <? } else {*/ ?>
                <a href="javascript:void(0)" url="<?=$event_sponsors[$i]['speaker_id']?>" class="speaker" ><img url="<?=$event_sponsors[$i]['speaker_id']?>" src="<?=ADMIN_PROJECT_PATH?>uploads/speakers/<?=$event_sponsors[$i]['image_name']?>" alt="<?=$event_sponsors[$i]['speaker_name']?>"></a>
            <? //} ?>
        </div>
    <? } ?>
    </div>
    <p style="text-align:center;"><a style="text-decoration:underline;" href="<?=base_url()?>CustomerEvent/sponsor_level">View All</a></p>
    <style type="text/css">
    #owl-sponsors .item{
      margin: 3px;
	   width: 160px;
      height: 160px;
    }
    #owl-sponsors .item img{
      display: block;
     
    }

    </style>

<script language="javascript">
$(document).ready(function() {
  
  $("#owl-sponsors").owlCarousel({
 
	  autoPlay: 3000, //Set AutoPlay to 3 seconds
 
	  items : 4,
	  itemsDesktop : [1199,3],
	  itemsDesktopSmall : [979,3],
 		
		responsive: true
  });
  
  /*
  $("#owl-exhibitors").owlCarousel({
 
	  autoPlay: 3000, //Set AutoPlay to 3 seconds
 
	  items : 4,
	  itemsDesktop : [1199,3],
	  itemsDesktopSmall : [979,3]
 
  });
 */
});
</script>  
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>