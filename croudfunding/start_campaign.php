<?php
define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
include("vendor.php");
include("includes/header.php");
?>

						
		


  <style>
.tooli{
	
	
	border: 3px solid white;
	
}
.tooli:hover{

	border-color: #0aaaa0 ;
	
}
</style>



<div id="PageLanding">
	<div class="container kt-start-campaign">
		<div class="row text-center">
			<h2>Who are you raising money for?</h2>
		</div>
		<div class="row kt-campaign-type">
		
		
			<div id="Personal" class="col-md-4  animated zoomIn">
	               <div class="well well-lg tooli" style="background:transparent;">						
			<a href="start_campaign.php"><img src ="img/abc.png" class="img-responsive" style="height:210px;"/></a>	
						<a class="block-link" href="/campaign/start_campaign_personal.php" data-title="Personal">
						<div class="content center-block">
		            		<span class="icon center-block"></span>
		                	<h3 id="camp_card">Personal</h3>
		                	<p>If you're taking charge of yourself or being a kind soul to a loved one in need.</p>
						</div>
					</a>
	                <p class="hidden-xs hidden-sm hidden">
	                	<a class="btn btn-lg btn-primary type-option" href="/campaign/start_campaign_personal.php">Start a fundraiser</a>
                	</p>
	            </div>
	        </div>
		
	        <div id="NGO" class="col-md-4 animated zoomIn">
	            <div class="well well-lg tooli" style="background:transparent;">
			<a href="start_campaign.php"><img src ="img/abc.png" class="img-responsive" style="height:210px;"/></a>
						<a class="block-link" href="/campaign/start_campaign_ngo.php" data-title="NGO">
	            		<div class="content center-block">
		            		<span class="icon center-block ngo"></span>
		                	<h3 id="camp_card">Charity/NGO</h3>
		                	<p>If you're supporting the NGO/charitable trust that works for the cause you believe in.</p>
		                </div>
	                </a>
	                <p class="hidden-xs hidden-sm hidden">
	                	<a class="btn btn-lg btn-primary type-option" href="/campaign/start_campaign_ngo.php">Start a fundraiser</a>
                	</p>
	            </div>
	        </div>
	        	        <div id="Creative" class="col-md-4 animated zoomIn">
	            <div class="well well-lg tooli" style="background:transparent;">
	<a href="star_campaign.php"><img src ="img/abc.png" class="img-responsive" style="height:210px;"></a>
					<a class="block-link" href="/campaign/start_campaign_personal.php" data-title="Personal">
						<div class="content center-block">
		            		<span class="icon center-block creative"></span>
		                	<h3 id="camp_card">Creative</h3>
		                	<p>If you want to turn that wonderful idea of yours into reality.</p>
		                </div>
	                </a>
	                <p class="hidden-xs hidden-sm hidden">
	                	<a class="btn btn-lg btn-primary type-option" href="/campaign/start_campaign_creative.php">Start a fundraiser</a>
                	</p>
	            </div>
	        </div>
	        		</div>
	</div>
</div>



<?php 

include("includes/footer.php");

?>