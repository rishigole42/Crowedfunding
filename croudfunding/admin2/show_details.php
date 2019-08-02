<?php
define("PAGE_ID",3);
include("vendor.php");

$db->orderBy("sno","DESC");
$detail = $db->select("blog","*");


include("includes/header.php");


?>


	<!-- MAIN CONTENT -->
				<div class="main-content" style="padding-top: 50px;">
				
					<div class="container-fluid">
						<!-- TOP METRICS -->
						<div class="row">
							
							<?php foreach($detail as $blog){
		?>
							<div class="col-md-4 col-sm-8">
								<div class="widget widget-metric_1 animate">
					<div class="img-responsive" style="margin-left: auto; margin-right:auto; display:block;">
			<center>	<img src="includes/img/<?php echo $blog->image ?>" style="    width: 100%; height: 300px;
    padding: 5px;"/> </center>
			</div>
			<hr>
				<div style="height:80px;">
			<center><p style="font-size:17px;"><b><?php echo $blog->blogtital?></b></p></center>
			 <a href="showfulldetail.php?id=<?php echo $blog->sno; ?>">Read More...</a>  
	                     	</div>
                        		</div>
						        	</div>
<?php } ?>


						</div>
						<!-- END TOP METRICS -->
						
					</div>
				</div>
				<!-- END MAIN CONTENT -->



			