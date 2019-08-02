<?php
define("PAGE_ID",3);
define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
include("vendor.php");

$detail = $db->select("events","*");









include("includes/header.php");

?>







 <!-- Start page title -->
            <section class="page-title-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title text-center">
                                <h1>OUR EVENTS</h1>
                            </div>
                            <div class="breadcumb-area  text-center">
                                <ol class="breadcrumb">
                                    <li><a href="dashboard2.php">Home</a></li>
                                    <li class="active">OUR EVENTS</li>
                                </ol>
                            </div>
                            <div class="back-home">
                                <a href="dashboard2.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> BACK TO HOME</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End page title -->



   <div class="container" style="margin-top: 30px;">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-timeline2">
                       
					   
					   <?php 
					   foreach($detail as $event){
					   
					   ?>
					   
					   
					    <div class="timeline">
                            <span class="icon fa fa-globe"></span>
                        <a href="#" class="timeline-content" style="background-image:url(''<?php echo $event->image; ?>');background-size: 100% 100% ;height: 220px;">
                                
								
								<h3 class="title"> <?php echo ucwords( $event->title); ?></h3>
                                
                 
                              
                            </a>
                        </div>
                       
					   
					   <?php
					   }
					   ?>
					   



 


					   
					    
                    </div>
                </div>
            </div>
        </div>

 










 
<?php
include("footer.php"); 
?>          