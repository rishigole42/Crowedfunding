<?php
define("PAGE_ID",3);
include("vendor.php");


$blog = $db->select("blog","*",array("sno"=>$_GET[id]));
$blog = $blog[0];

include("includes/header.php");
?>




                <div class="container">
                    <div class="row">
                        <!-- Start blog -->
                        <div class="blog">
                            <!-- Start single blog -->
                            <div class="col-sm-12 pull-right">
                                <div class="blog-details single-blog mb-30">
                                    <div class="blog-details-title">
                                     </div>
                                  
                                   
                                    <div class="blog-text">
                                       <p><?php echo @$blog->blog;  ?></p>
                                    </div>
                                </div>

                            </div>
                            <!-- End single blog -->
                        </div>
                      
                            </div>
                        </div>
             