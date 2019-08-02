<?php
define("PAGE_ID",3);
include("vendor.php");


$db->orderBy("sno","DESC");
$Pcontent = $db->select("needypersondetails","*",array("NeedFor"=>$_GET['id']));
$db->reinit();
 
include("includes/header.php");
?>
 <div class="main-content">
                              
    <div class="content-heading clearfix">
						<div class="heading-left">
							<h1 class="page-title">NEEDY PEOPLE</h1>
							<p class="page-subtitle"></p>
							
							
						</div>
	<div class="header-right">
<li style="float: right;"><a href="#">ADD NEEDY PEOPLE</a></li></div>
					</div>

<div class="panel">
<div class="panel-body">
							  <div class="container-fluid">
							  <div class="row">
							  
							  
							  <?php
foreach($Pcontent as $content)
 {       

?>
							  
                             <div class="col-sm-4" style="margin-top: 50px;">
                                <div class="single-blog mb-30" style="border: 1px solid #efefef; overflow: hidden; padding-bottom: 15px; transition: all 0.3s ease 0s;">
								
                              <div class="blo-image-and-date" style="position: relative;">
                                  <img src="includes/img/<?php echo $content->photo;?>" alt="" style="height: 300px; padding:10px;  width: 100%; margin-left: auto; margin-right: auto;display: block;">
                                        
                                    </div>
                                       
									   
									    <div class="blog-info">
                                        <div class="admin" style="border:1px solid #ff0000;text-align: center;background: red;color: cornsilk;">
                                            <?php echo $content->NeedFor; ?>
                                        </div>
                                      
                                    </div> 
									   
									                                  
               <div class="blog-text" style="padding:15px; padding: 11px 15px 31px;">
                          <h3><a href="donate.php?id=<?php echo $content->sno; ?>" style="color: black;"><?php echo $content->Tital;?></a></h3>
                                        
                                        
                                    </div>								
                                </div>
                            </div>
	<?php
	}
	
	?>
	
	
							
							
							   </div>
                            </div>  
                         </div>
                         </div>
                         </div>
			 

<?php 
include("includes/footer.php");
?>			 
			 
 