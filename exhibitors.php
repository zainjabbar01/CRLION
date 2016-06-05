<div class="row">
    <div id="owl-exhibitors">
    <? for($i=0;$i<count($event_exhibitors);$i++) { ?>
        <div class="item imgLiquidFill">
            <? if($event_exhibitors[$i]['profile_url'] != '' && $event_exhibitors[$i]['profile_url'] != '#') { ?>
            <a href="<?=$event_exhibitors[$i]['profile_url']?>" target="_blank"> 
                <img src="<?=ADMIN_PROJECT_PATH?>uploads/speakers/<?=$event_exhibitors[$i]['image_name']?>" alt="<?=$event_exhibitors[$i]['speaker_name']?>" width="200" height="200">
            </a>
            <? } else { ?>
                <a href="javascript:void(0)" url="<?=$event_exhibitors[$i]['speaker_id']?>" class="speaker" ><img src="<?=ADMIN_PROJECT_PATH?>uploads/speakers/<?=$event_exhibitors[$i]['image_name']?>" alt="<?=$event_exhibitors[$i]['speaker_name']?>"></a>
            <? } ?>
        </div>
    <? } ?>
    </div>
    <style type="text/css">
    #owl-exhibitors .item{
      margin: 3px;
	  width: 160px;
      height: 160px;
    }
    #owl-exhibitors .item img{
      display: block;
      
    }

    </style>

<script language="javascript">
$(document).ready(function() {
  
  $("#owl-exhibitors").owlCarousel({
 
	  autoPlay: 3000, //Set AutoPlay to 3 seconds
 
	  items : 4,
	  itemsDesktop : [1199,3],
	  itemsDesktopSmall : [979,3],
 		
		responsive: true
  });
  
 });
</script>  
</div>