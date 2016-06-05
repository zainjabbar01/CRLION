<div class="row">
	<div class="col-md-3">
    	<img src="<?=ADMIN_PROJECT_PATH?>uploads/speakers/<?=$image_name?>" alt="<?=$speaker_name?>" width="150">
    </div>
    <div class="col-md-8">
    	<div class="row">
        	<div class="col-md-12">
            	<h3 style="color:#000; font-size:24px;"><?=$speaker_name?></h3>
            </div>
        </div>
        <div class="row">
        	<div class="col-md-12">
            	<?=$designation?>
            </div>
        </div>
        <!--<div class="row">
        	<div class="col-md-12">
            	<? //$title_name?>
            </div>
        </div>-->        
        <? if($email){?>
        <div class="row">
        	<div class="col-md-12">
            	<a href="mailto:<?=$email?>"><?=$email?></a>
            </div>
        </div>
        <? }
		if($profile_url){?>
        <div class="row">
        	<div class="col-md-12" style="padding-top:10px;">
            	<a href="<?=$profile_url?>" target="_blank">Visit Website</a>&nbsp;<i class="fa fa-external-link"><a href="<?=$profile_url?>" target="_blank"></i>
            </div>
        </div>
        <? } ?>
        
    </div>
</div>
<div class="row">
    <div class="col-md-12" style="padding-top:15px;">
        <?=$speaker_detail?>
    </div>
</div>