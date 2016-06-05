<div id="price_table" class="page_alt_section" style="display:<?=strstr($pages,'price_table')?"":"none"?>;">
  <div class="container">
    <div class="icon-main wow flipInX" data-wow-duration="1s" data-wow-delay="600ms"> <i class="ion-ios7-infinite"></i> </div>
    
    <!--=======  Heading Tittle =========-->
    <div class="tittle wow flipInX" data-wow-duration="1s" data-wow-delay="800ms">
      <h2>Pricing Tables</h2>
      <p></p>
    </div>
    <div class="price-plan">
      <div class="row"> 
        <? /*
        <!--======= Plan Details =========-->
        <div class="col-md-2">
          <ul class="price-fea">
            <li> Seat</li>
            <li> Coffe Break</li>
            <li> Certificate</li>
            <li> Lunch</li>
            <li> Flight ticket</li>
            <li> Servicing</li>
            <li> Conference</li>
            <li> Startup Review</li>
          </ul>
        </div>
        */ ?>
        <!--======= Plan 1 =========-->
        <div class="col-md-10">
          <div class="row">
            <? 
			$counter=1;
			for($i=0;$i<count($activityData); $i++) { 
				for($j=0;$j<count($activityData[$i]['participants']);$j++) {
					if($activityData[$i]['participants'][$j]['fee'] != '' && $activityData[$i]['participants'][$j]['seats'] != '') {
			?>
                        <div class="col-md-3">
                          <ul class="add-sub">
                            <li>
                              <h4 class="bg-<?=$counter?>"><?=$activityData[$i]['participants'][$j]['user_type_title']?></h4>
                            </li>
                            <li><?=$activityData[$i]['participants'][$j]['activity_name']?></li>
                            <li><h8>Seats: <?=$activityData[$i]['participants'][$j]['seats']?></h8></li>
                          </ul>
                          
                          <!--======= Price  =========-->
                          <div class="price"> <span>$<?=$activityData[$i]['participants'][$j]['fee']?></span> </div>
                        </div>
			<? 
    	            $counter++;
					if($counter == 5)
						$counter = 1;
					}
					
	            	
				}
				
            } 
            ?>
            <?
			/* 
            <!--======= Plan 2 =========-->
            <div class="col-md-3">
              <ul class="add-sub">
                <li>
                  <h4 class="bg-2">SiLVER</h4>
                </li>
                <li><i class="ion-ios7-close-outline"></i></li>
                <li><i class="ion-ios7-close-outline"></i></li>
                <li><i class="ion-ios7-close-outline"></i></li>
                <li><i class="ion-ios7-close-outline"></i></li>
                <li><i class="ion-ios7-close-outline"></i></li>
                <li><i class="ion-ios7-close-outline"></i></li>
                <li><i class="ion-ios7-close-outline"></i></li>
              </ul>
              
              <!--======= Price  =========-->
              <div class="price"> <span>99$</span> </div>
            </div>
            
            <!--======= Plan 3 =========-->
            <div class="col-md-3">
              <ul class="add-sub">
                <li>
                  <h4 class="bg-3">GOLD</h4>
                </li>
                <li><i class="ion-ios7-checkmark-outline"></i></li>
                <li><i class="ion-ios7-checkmark-outline"></i></li>
                <li><i class="ion-ios7-checkmark-outline"></i></li>
                <li><i class="ion-ios7-checkmark-outline"></i></li>
                <li><i class="ion-ios7-checkmark-outline"></i></li>
                <li><i class="ion-ios7-checkmark-outline"></i></li>
                <li><i class="ion-ios7-checkmark-outline"></i></li>
              </ul>
              
              <!--======= Price  =========-->
              <div class="price"> <span>199$</span> </div>
            </div>
            
            <!--======= Plan 4 =========-->
            <div class="col-md-3">
              <ul class="add-sub">
                <li>
                  <h4 class="bg-4">PLATIN</h4>
                </li>
                <li><i class="ion-ios7-close-outline"></i></li>
                <li><i class="ion-ios7-close-outline"></i></li>
                <li><i class="ion-ios7-close-outline"></i></li>
                <li><i class="ion-ios7-close-outline"></i></li>
                <li><i class="ion-ios7-close-outline"></i></li>
                <li><i class="ion-ios7-close-outline"></i></li>
                <li><i class="ion-ios7-close-outline"></i></li>
              </ul>
              
              <!--======= Price  =========-->
              <div class="price"> <span>499$</span> </div>
            </div>
            */
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>