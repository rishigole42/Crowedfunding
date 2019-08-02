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
                                    <li><a href="dashboard2.php">Home</a></li>
                                    <li class="active">Blog</li>
                                </ol>
                            </div>
                            <div class="back-home">
                          <a href="dashboard.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> BACK TO HOME</a>
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
		
		<<center>
		<div class="row">
		<div class="col-md-6 text-centre" style=" margin-top: -135px;">										
					
<!-- Sharingbutton Facebook -->
<a class="resp-sharing-button__link" href="https://facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsharingbuttons.io" target="_blank" rel="noopener" aria-label="Share on Facebook">
  <div class="resp-sharing-button resp-sharing-button--facebook resp-sharing-button--large"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M18.77 7.46H14.5v-1.9c0-.9.6-1.1 1-1.1h3V.5h-4.33C10.24.5 9.5 3.44 9.5 5.32v2.15h-3v4h3v12h5v-12h3.85l.42-4z"/></svg>
    </div>Share on Facebook</div>
</a>



<a class="resp-sharing-button__link" href="https://twitter.com/intent/tweet/?text=Super%20fast%20and%20easy%20Social%20Media%20Sharing%20Buttons.%20No%20JavaScript.%20No%20tracking.&amp;url=http%3A%2F%2Fsharingbuttons.io" target="_blank" rel="noopener" aria-label="Share on Twitter">
  <div class="resp-sharing-button resp-sharing-button--twitter resp-sharing-button--large"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.44 4.83c-.8.37-1.5.38-2.22.02.93-.56.98-.96 1.32-2.02-.88.52-1.86.9-2.9 1.1-.82-.88-2-1.43-3.3-1.43-2.5 0-4.55 2.04-4.55 4.54 0 .36.03.7.1 1.04-3.77-.2-7.12-2-9.36-4.75-.4.67-.6 1.45-.6 2.3 0 1.56.8 2.95 2 3.77-.74-.03-1.44-.23-2.05-.57v.06c0 2.2 1.56 4.03 3.64 4.44-.67.2-1.37.2-2.06.08.58 1.8 2.26 3.12 4.25 3.16C5.78 18.1 3.37 18.74 1 18.46c2 1.3 4.4 2.04 6.97 2.04 8.35 0 12.92-6.92 12.92-12.93 0-.2 0-.4-.02-.6.9-.63 1.96-1.22 2.56-2.14z"/></svg>
    </div>Share on Twitter</div>
</a>


<a class="resp-sharing-button__link" href="https://plus.google.com/share?url=http%3A%2F%2Fsharingbuttons.io" target="_blank" rel="noopener" aria-label="Share on Google+">
  <div class="resp-sharing-button resp-sharing-button--google resp-sharing-button--large"><div aria-hidden="true" class="resp-sharing-button__icon resp-sharing-button__icon--solid">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M11.37 12.93c-.73-.52-1.4-1.27-1.4-1.5 0-.43.03-.63.98-1.37 1.23-.97 1.9-2.23 1.9-3.57 0-1.22-.36-2.3-1-3.05h.5c.1 0 .2-.04.28-.1l1.36-.98c.16-.12.23-.34.17-.54-.07-.2-.25-.33-.46-.33H7.6c-.66 0-1.34.12-2 .35-2.23.76-3.78 2.66-3.78 4.6 0 2.76 2.13 4.85 5 4.9-.07.23-.1.45-.1.66 0 .43.1.83.33 1.22h-.08c-2.72 0-5.17 1.34-6.1 3.32-.25.52-.37 1.04-.37 1.56 0 .5.13.98.38 1.44.6 1.04 1.84 1.86 3.55 2.28.87.23 1.82.34 2.8.34.88 0 1.7-.1 2.5-.34 2.4-.7 3.97-2.48 3.97-4.54 0-1.97-.63-3.15-2.33-4.35zm-7.7 4.5c0-1.42 1.8-2.68 3.9-2.68h.05c.45 0 .9.07 1.3.2l.42.28c.96.66 1.6 1.1 1.77 1.8.05.16.07.33.07.5 0 1.8-1.33 2.7-3.96 2.7-1.98 0-3.54-1.23-3.54-2.8zM5.54 3.9c.33-.38.75-.58 1.23-.58h.05c1.35.05 2.64 1.55 2.88 3.35.14 1.02-.08 1.97-.6 2.55-.32.37-.74.56-1.23.56h-.03c-1.32-.04-2.63-1.6-2.87-3.4-.13-1 .08-1.92.58-2.5zM23.5 9.5h-3v-3h-2v3h-3v2h3v3h2v-3h3"/></svg>
    </div>Share on Google+</div>
</a>

</div>

				
			</div>
								
	  
			</center>
			
<?php

include("footer.php");

?>			
           