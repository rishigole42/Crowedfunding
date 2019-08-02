<?php
define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
include("vendor.php");

$blog = $db->select("blog","*",array("sno"=>$_GET['id']));
$blog = $blog[0];

include("includes/header.php");
?>

<!-- Start page title -->
            <section class="page-title-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title text-center">
                                <h1>Our Blog</h1>
                            </div>
                            <div class="breadcumb-area  text-center">
                                <ol class="breadcrumb">
                                    <li><a href="#">Home</a></li>
                                    <li class="active">Blog</li>
                                </ol>
                            </div>
                            <div class="back-home">
                          <a href="index.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> BACK TO HOME</a>
                            </div>
                        </div>
                    </div>
                </div>       
            </section>
            <!-- End page title -->



            <!-- Start our blog area -->
            <section class="our-blog-area pt-90 pb-60">
                <div class="container">
                    <div class="row">
                        <!-- Start blog -->
                        <div class="blog">
                            <!-- Start single blog -->
                            <div class="col-sm-8 pull-right">
                                <div class="blog-details single-blog mb-30">
                                    <div class="blog-details-title">
                                     </div>
                                  
                                   
                                    <div class="blog-text">
                                        <p><?php echo @$blog->blog;  ?></p>
                                    </div>
                                </div>
                                <div class="blog-coment-box">
								 <div class="single0blog-coment">
                                    <h2>9 Comments</h2>
                                    <ul>
                                        <li>
                                            <div class="coment-image">
                                                <a href="#"><img src="img\blog\avatar-01.jpeg" alt=""></a>
                                            </div>
                                            <div class="comment-heading">
                                                <h5><a href="#">Jhon Doe</a></h5>
                                                <p>26 Dec 2016, 15:20</p>
                                                <a class="reply" href="#"><i class="fa fa-undo"></i>Reply</a>
                                            </div>
                                            <div class="coment0-text">
                                                <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. </p>
                                            </div>
                                            <ul>
                                                <li>
                                                    <div class="coment-image">
                                                        <a href="#"><img src="img\blog\avatar-02.jpeg" alt=""></a>
                                                    </div>
                                                    <div class="comment-heading">
                                                        <h5><a href="#">Jhon Doe</a></h5>
                                                        <p>26 Dec 2016, 15:20</p>
                                                        <a class="reply" href="#"><i class="fa fa-undo"></i>Reply</a>
                                                    </div>
                                                    <div class="coment0-text">
                                                        <p>Duis dapibus aliquam mi, eget euismod sem scelerisque ut. Vivamus at elit quis urna adipiscing iaculis. Curabitur vitae velit in neque dictum blandit. Proin in iaculis neque. </p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </div>
                                <div class="leave-reply">
                                    <h2>Leave Comment</h2>
                                    <ul>
                                        <li><input placeholder="Enter your Name" class="input-block-level" type="text"><i class="fa fa-user"></i></li>
                                        <li><input placeholder="Enter E-mail ID" class="input-block-level" type="text"><i class="fa fa-envelope-o"></i></li>
                                        <li><input placeholder="Website" class="input-block-level" type="text"><i class="fa fa-link"></i></li>
                                        <li><textarea class="input-block-level" placeholder="Message"></textarea></li>
                                        <li><a class="btn-style btn-md bo-ra-5" href="#">Post Comment</a></li>
                                    </ul>
                                </div>
                            </div>
                            </div>
                            <!-- End single blog -->
                        </div>
                        <!-- End blog -->
                        <div class="col-sm-4">
                            <div class="blog-sidebar">
                                <div class="event-sidebar">
                                    <!-- Start event popular post -->
                                    <div class="event-popular-post">
                                        <div class="event-sidt-title">
                                            <h3>POPULAR POSTS</h3>
                                        </div>
                                        <!-- Start popular item -->
                                        <div class="popular-idget mb-30 row">
                                            <div class="col-sm-4">
                                                <div class="post-thum">
                                                    <img src="img\event\popular-thmb-one.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="ev-post-text">
                                                    <p>Help girls to get education</p>
                                                    <span><a href="#">November, 15, 2016</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End popular item -->
                                        <!-- Start popular item -->
                                        <div class="popular-idget mb-30 row">
                                            <div class="col-sm-4">
                                                <div class="post-thum">
                                                    <img src="img\event\popular-thmb-two.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="ev-post-text">
                                                    <p>Help girls to get education</p>
                                                    <span><a href="#">November, 15, 2016</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End popular item -->
                                        <!-- Start popular item -->
                                        <div class="popular-idget mb-30 row">
                                            <div class="col-sm-4">
                                                <div class="post-thum">
                                                    <img src="img\event\popular-thmb-three.png" alt="">
                                                </div>
                                            </div>
                                            <div class="col-sm-8">
                                                <div class="ev-post-text">
                                                    <p>Help girls to get education</p>
                                                    <span><a href="#">November, 15, 2016</a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End popular item -->
                                    </div>
                                    <!-- End event popular post -->
                                    <!-- Start event categoris -->
                                    <div class="event-categoris">
                                        <div class="event-sidt-title">
                                            <h3>CATEGORIES</h3>
                                        </div>
                                        <ul>
                                            <li><a href="#">CHILDREN</a></li>
                                            <li><a href="#">VOLUNTEER</a></li>
                                            <li><a href="#">LIVE YOUR LIFE</a></li>
                                            <li><a href="#">REAL LIFE STORY</a></li>
                                            <li><a href="#">HUNGER</a></li>
                                        </ul>
                                    </div>
                                    <!-- End event categoris -->
                                    <div class="event-tags">
                                        <div class="popular-tags">
                                            <div class="event-sidt-title">
                                                <h3>POPULAR TAGS</h3>
                                            </div>
                                            <nav>
                                                <ul>
                                                    <li><a class="bo-ra-5" href="#">charity</a></li>
                                                    <li><a class="bo-ra-5" href="#">kids</a></li>
                                                    <li><a class="bo-ra-5" href="#">noprofit</a></li>
                                                    <li><a class="bo-ra-5" href="#">fundraising</a></li>
                                                    <li><a class="bo-ra-5" href="#">donation</a></li>
                                                    <li><a class="bo-ra-5" href="#">causes</a></li>
                                                    <li><a class="bo-ra-5" href="#">organization</a></li>
                                                    <li><a class="bo-ra-5" href="#">paypal</a></li>
                                                    <li><a class="bo-ra-5" href="#">donate</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End our blog area -->
            <!-- Start brand logo area -->
            <section class="brand-logo-area pb-90">
                <div class="container">
                    <div class="row">
                       
                       
                    </div>
                </div>
            </section>
            <!-- End brand logo area -->
			
			
<?php

include("footer.php");

?>			
           