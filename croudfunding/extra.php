<?php
define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
include("vendor.php");


$select = $db->select("needypersondetails","*");
//varPrint($select);
include("includes/header.php");



?>
			
        	<!-- Start slider area -->
        	<section class="slider-animate-area pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <div class="cd-intro">
                                <h1 class="cd-headline clip is-full-width title1 wow zoomIn animated" data-wow-duration="1s" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1s; animation-delay: 300ms; animation-name: zoomIn;">
                                    <span>WE CAN HELP </span>
                                    <span class="cd-words-wrapper">
                                        <b class="is-visible">SOMEONE</b>
                                        <b>SOMEONE</b>
                                        <b>SOMEONE</b>
                                    </span>
                                </h1>
                                <p class="wow zoomIn animated" data-wow-duration="1s" data-wow-delay="600ms" style="visibility: visible; animation-duration: 1s; animation-delay: 600ms; animation-name: zoomIn;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc quis ante commodo, dictum lectus suscipit. Quisque nec ullamcorper elit, nec fermentum metus.</p>
                                <div class="slider-button-area wow zoomIn animated" data-wow-duration="1s" data-wow-delay="900ms" style="visibility: visible; animation-duration: 1s; animation-delay: 900ms; animation-name: zoomIn;">
                                    <a href="donation_categories.php" class="btn-lg">DONATE NOW</a>
                                    <a href="#" class="btn-lg">LEARN MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        	</section>
        	<!-- End slider area -->
        	<!-- End slider area -->
            <!-- Start our couses area -->
        	<section class="our-couses-area pt-90 pb-90">
<div class="col-sm-12">
        					<div class="section-title text-center">
        						<h2>OUR <span>CAUSES</span></h2>
        						<img src="img\title-bottom.png" alt="">
        						<p>Our charity help those people who have no hope</p>
        					</div>

        				</div>







<div class="col-md-12">

<div class="row">
		<div class="MultiCarousel" data-items="0,1,2,3" data-slide="1" id="MultiCarousel1" data-interval="1000">
            <div class="MultiCarousel-inner" style="transform: translateX(0px); width: 1710px;">
	
<meta name="viewport" content="width=device-width, initial-scale=1.0">


               

<?php 
for ($x = 0; $x <= 10; $x++) {
?>

			   <div class="item" style="width: 190px;">
                    <div class="pad15">
                        <!-- Start single blog -->
                            <div class="col-sm-12">
                                <div class="single-blog">
                                    <div class="blo-image-and-date">
                                        <img src="img\blog\blog-one.jpeg" alt="">
                                        <a href="#">24 may</a>
                                    </div>
                                    <div class="blog-info">
                                        <div class="admin">
                                            <a href="#"><i class="fa fa-user" aria-hidden="true"></i> By: Admin</a>
                                        </div>
                                        <div class="comment">
                                            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 15</a>
                                            <a href="#"><i class="fa fa-comment" aria-hidden="true"></i> 25</a>
                                        </div>
                                    </div>
                                    <div class="blog-text">
                                        <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipicing elit. Nullam feugiat dignissim metus, id vestibulum tellus Cras ante commodo.</p>
                                       

                                    </div>
									
									 <div class="row">
                                    <div class="couses-button-and-price">   
                                    <div class="col-md-6">
                                        <div class="couses-button">
                                            <a href="" class="btn-md bo-ra-5"style="background-color:#0aaaa0; color: black; margin: 15px;">Donate</a>
                                        </div>
                                    </div>
                                     <div class="col-md-6" style="margin-top: -15px;">
                                        <div class="couses-price">
									
                                            <h5>$ 45,000 / $ 90,000</h5>
                                        </div>
                                     </div>
                                    </div>
                                    </div>
									
                                </div>
                            </div>
                            <!-- End single blog --> 
                    </div>
                </div>
				
			     <?php
				 }
				 ?>           

            </div>
            <button class="leftLst over" style="background-color:transparent;color:white; ;font-size:50px; border:none;    text-shadow: 4px 4px 8px black;

"><span class="glyphicon glyphicon-chevron-left"></span></button>
            <button class="rightLst" style="background-color:transparent;color:white; ;font-size:50px; border:none;    text-shadow: 4px 4px 8px black;

"><span class="glyphicon glyphicon-chevron-right"></span></button>
        </div>
	</div>
	
</div>	
	
	
	
<style>
.mr-row1-left, .mr-row1-right {
    float: left;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    -o-box-sizing: border-box;
    -ms-box-sizing: border-box;
    box-sizing: border-box;
    width: 61%;
    border-right: solid 1px #e5e5e5;
    position: relative;
}
.intro-pic {
    width: 45%;
    position: relative;
}
.mr-row1-left .intro-txt {
    background: #FFF;
    width: 60%;
    top: 0;
    left: 42%;
    position: absolute;
    padding: 36px;
    -moz-box-shadow: 5px 6px 5px rgba(33, 30, 31, .4);
    -webkit-box-shadow: 5px 6px 5px rgba(33, 30, 31, .4);
    box-shadow: 5px 6px 5px rgba(33, 30, 31, .4);
    z-index: 50;
}
.intro-pic img {
    width: 100%;
}

element.style {
}
.mr-row1, .mr-row2 {
    position: relative;
    padding: 0 0 2em 0;
    margin: 0 auto 2em auto;
    border-bottom: solid 1px #e5e5e5;
}
.mCustomScrollbar {
    -ms-touch-action: pinch-zoom;
    touch-action: pinch-zoom;
}

.whoare-contents {
    height: 330px;
    overflow: auto;
    position: relative;
}
.mCustomScrollBox {
    position: relative;
    overflow: hidden;
    height: 100%;
    max-width: 100%;
    outline: none;
    direction: ltr;
}

.mCustomScrollBox {
    position: relative;
    overflow: hidden;
    height: 100%;
    max-width: 100%;
    outline: none;
    direction: ltr;
}
.mCSB_inside > .mCSB_container {
    margin-right: 30px;
}

.mCSB_container {
    overflow: hidden;
    width: auto;
    height: auto;
}
element.style {
    display: block;
}

.mCSB_scrollTools {
    opacity: 0.75;
    filter: "alpha(opacity=75)";
    -ms-filter: "alpha(opacity=75)";
}
.mCSB_scrollTools, .mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar, .mCSB_scrollTools .mCSB_buttonUp, .mCSB_scrollTools .mCSB_buttonDown, .mCSB_scrollTools .mCSB_buttonLeft, .mCSB_scrollTools .mCSB_buttonRight {
    -webkit-transition: opacity .2s ease-in-out, background-color .2s ease-in-out;
    -moz-transition: opacity .2s ease-in-out, background-color .2s ease-in-out;
    -o-transition: opacity .2s ease-in-out, background-color .2s ease-in-out;
    transition: opacity .2s ease-in-out, background-color .2s ease-in-out;
}
.mCSB_scrollTools {
    position: absolute;
    width: 16px;
    height: auto;
    left: auto;
    top: 0;
    right: 0;
    bottom: 0;
}

.intro-txt p {
    font-family: "Baskerville", Georgia, Times, Serif;
    font-size: 1.2em;
    line-height: 1.5em;
    color: #111;
    font-style: italic;
    text-align: justify;
}

.intro-txt h2 {
    text-align: center;
    font-family: "AvantGarde", Arial, Sans-serif;
    font-size: 1.5em;
    line-height: 1.2;
    text-transform: uppercase;
    color: #000;
    letter-spacing: 0.01em;
}


.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 16px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
    cursor: pointer;
}
.button3 {
    background-color:transparent; 
    color: black; 
    border: 10px solid #f44336;
	width:250px;
}

.button3:hover {
    background-color: #f44336;
    color: white;
}

.MultiCarousel { float: left; overflow: hidden; padding: 15px; width: 100%; position:relative; }
    .MultiCarousel .MultiCarousel-inner { transition: 1s ease all; float: left; }
        .MultiCarousel .MultiCarousel-inner .item { float: left;}
        .MultiCarousel .MultiCarousel-inner .item > div { text-align: center; padding:10px; margin:10px; background:#f1f1f1; color:#666;}
    .MultiCarousel .leftLst, .MultiCarousel .rightLst { position:absolute; border-radius:50%;top:calc(50% - 20px); }
    .MultiCarousel .leftLst { left:0; }
    .MultiCarousel .rightLst { right:0; }
    
        .MultiCarousel .leftLst.over, .MultiCarousel .rightLst.over { pointer-events: none; background:#ccc; }
</style>





<script>
$(document).ready(function () {
    var itemsMainDiv = ('.MultiCarousel');
    var itemsDiv = ('.MultiCarousel-inner');
    var itemWidth = "";

    $('.leftLst, .rightLst').click(function () {
        var condition = $(this).hasClass("leftLst");
        if (condition)
            click(0, this);
        else
            click(1, this)
    });

    ResCarouselSize();




    $(window).resize(function () {
        ResCarouselSize();
    });

    //this function define the size of the items
    function ResCarouselSize() {
        var incno = 0;
        var dataItems = ("data-items");
        var itemClass = ('.item');
        var id = 0;
        var btnParentSb = '';
        var itemsSplit = '';
        var sampwidth = $(itemsMainDiv).width();
        var bodyWidth = $('body').width();
        $(itemsDiv).each(function () {
            id = id + 1;
            var itemNumbers = $(this).find(itemClass).length;
            btnParentSb = $(this).parent().attr(dataItems);
            itemsSplit = btnParentSb.split(',');
            $(this).parent().attr("id", "MultiCarousel" + id);


            if (bodyWidth >= 1200) {
                incno = itemsSplit[3];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 992) {
                incno = itemsSplit[2];
                itemWidth = sampwidth / incno;
            }
            else if (bodyWidth >= 768) {
                incno = itemsSplit[1];
                itemWidth = sampwidth / incno;
            }
            else {
                incno = itemsSplit[0];
                itemWidth = sampwidth / incno;
            }
            $(this).css({ 'transform': 'translateX(0px)', 'width': itemWidth * itemNumbers });
            $(this).find(itemClass).each(function () {
                $(this).outerWidth(itemWidth);
            });

            $(".leftLst").addClass("over");
            $(".rightLst").removeClass("over");

        });
    }


    //this function used to move the items
    function ResCarousel(e, el, s) {
        var leftBtn = ('.leftLst');
        var rightBtn = ('.rightLst');
        var translateXval = '';
        var divStyle = $(el + ' ' + itemsDiv).css('transform');
        var values = divStyle.match(/-?[\d\.]+/g);
        var xds = Math.abs(values[4]);
        if (e == 0) {
            translateXval = parseInt(xds) - parseInt(itemWidth * s);
            $(el + ' ' + rightBtn).removeClass("over");

            if (translateXval <= itemWidth / 2) {
                translateXval = 0;
                $(el + ' ' + leftBtn).addClass("over");
            }
        }
        else if (e == 1) {
            var itemsCondition = $(el).find(itemsDiv).width() - $(el).width();
            translateXval = parseInt(xds) + parseInt(itemWidth * s);
            $(el + ' ' + leftBtn).removeClass("over");

            if (translateXval >= itemsCondition - itemWidth / 2) {
                translateXval = itemsCondition;
                $(el + ' ' + rightBtn).addClass("over");
            }
        }
        $(el + ' ' + itemsDiv).css('transform', 'translateX(' + -translateXval + 'px)');
    }

    //It is used to get some elements from btn
    function click(ell, ee) {
        var Parent = "#" + $(ee).parent().attr("id");
        var slide = $(Parent).attr("data-slide");
        ResCarousel(ell, Parent, slide);
    }

});
</script>





</section>
            <!-- End our couses area -->
            <section class="what-we-do-area pb-70">
                <div class="container">
                    <div class="row">
                        <!-- Start section title -->
                        <div class="col-sm-12">
                            <div class="section-title text-center">
                                <h2>Browse <span>Fundraisers</span></h2>
                                <img src="img\title-bottom.png" alt="">
                                <p>We create events aiming to pear to the voice for children and gather for support. <br>Please update with our events and confirm you presence.</p>
                            </div>
                        </div>
                        <!-- End section title -->
                        <div class="what-we-do">
                            <!-- Start single we do -->
                            <div class="col-sm-3">
                                <div class="single-we-do">
                                    <div class="we-do-image">
                                        <img src="img\about\we-do-one.jpeg" alt="">
                                    </div>
                                    <div class="we-do-text">
                                        <h5>DONATE FOR EDUCATION</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- End single we do -->
                            <!-- Start single we do -->
                            <div class="col-sm-3">
                                <div class="single-we-do">
                                    <div class="we-do-image">
                                        <img src="img\about\we-do-two.jpeg" alt="">
                                    </div>
                                    <div class="we-do-text">
                                        <h5>DONATE FOR FOOD</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- End single we do -->
                            <!-- Start single we do -->
                            <div class="col-sm-3">
                                <div class="single-we-do">
                                    <div class="we-do-image">
                                        <img src="img\about\we-do-three.jpeg" alt="">
                                    </div>
                                    <div class="we-do-text">
                                        <h5>DONATE FOR WATER</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- End single we do -->
                             <!-- Start single we do -->
                            <div class="col-sm-3">
                                <div class="single-we-do">
                                    <div class="we-do-image">
                                        <img src="img\about\we-do-three.jpeg" alt="">
                                    </div>
                                    <div class="we-do-text">
                                        <h5>DONATE FOR SPORTS</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- End single we do -->
                        </div>

                          <div class="what-we-do">
                            <!-- Start single we do -->
                            <div class="col-sm-3" style="padding-top: 15px;">
                                <div class="single-we-do">
                                    <div class="we-do-image">
                                        <img src="img\about\we-do-one.jpeg" alt="">
                                    </div>
                                    <div class="we-do-text">
                                        <h5>DONATE FOR CHILDREN</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- End single we do -->
                            <!-- Start single we do -->
                            <div class="col-sm-3" style="padding-top: 15px;">
                                <div class="single-we-do">
                                    <div class="we-do-image">
                                        <img src="img\about\we-do-two.jpeg" alt="">
                                    </div>
                                    <div class="we-do-text">
                                        <h5>DONATE FOR COMMUNITY DEVELOPMENT</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- End single we do -->
                            <!-- Start single we do -->
                            <div class="col-sm-3" style="padding-top: 15px;">
                                <div class="single-we-do">
                                    <div class="we-do-image">
                                        <img src="img\about\we-do-three.jpeg" alt="">
                                    </div>
                                    <div class="we-do-text">
                                        <h5>DONATE FOR CREATIVITY</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- End single we do -->
                             <!-- Start single we do -->
                            <div class="col-sm-3" style="padding-top: 15px;">
                                <div class="single-we-do">
                                    <div class="we-do-image">
                                        <img src="img\about\we-do-three.jpeg" alt="">
                                    </div>
                                    <div class="we-do-text">
                                        <h5>DONATE FOR HEALTH</h5>
                                    </div>
                                </div>
                            </div>
                            <!-- End single we do -->
                        </div>
                    </div>
                </div>
            </section>  
            <!-- Start help us area -->
            <section class="help-us-area pt-80 pb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
						
					
						
                            <div class="section-title-style-two text-center">
                                <h2>HOW CAN YOU HELP US?</h2>
                                 
                            </div>
                        </div>
						
                        <div class="help-us-content-area">
                            <!-- Start single help -->
                        
							<div class="col-sm-4">
                                <div class="single-help">
                                    <div class="help-icon">
                                        <i class="fa fa-university" aria-hidden="true"></i>
                                        <span class="icon-Health icons-catgeory"></span>
                                    </div>
                                    <div class="help-text">
										
                                        <h3></h3>
                                        <p></p>
                                       
										
                                    </div>
									
                                </div>
                            </div>
                            <!-- End single help -->
                            <!-- Start single help -->
                    
                            <!-- End single help -->
                            <!-- Start single help -->
                         
                             <!-- End single help -->
                        </div>


                    </div>
                </div>
            </section>
            <!-- End help us area -->
            <!-- Start our gallery -->
            <section class="our-gallery pt-90 pb-60">
                <div class="container">
                    <div class="row">
                        <!-- Start section title -->
                        <div class="col-sm-12">
                            <div class="section-title text-center">
                                <h2>OUR <span>Gallery</span></h2>
                                <img src="img\title-bottom.png" alt="">
                                <p>We create events aiming to pear to the voice for children and gather for support. <br>Please update with our events and confirm you presence.</p>
                            </div>
                        </div>
                        <!-- End section title -->
                        <div class="gallery-area">
                            <div class="col-sm-12">
                                <div class="gallery-menu text-center">
                                    <nav>
                                        <ul>
                                            <li class="filter" data-filter="all">All</li>
                                            <li class="filter" data-filter="Charity">Charity</li>
                                            <li class="filter" data-filter="Nature">Nature</li>
                                            testimonial.jpeg<li class="filter" data-filter="Wildlife">Wildlife</li>
                                            <li class="filter" data-filter="Video">Video</li>
                                            <li class="filter" data-filter="Children">Children</li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div id="gallery-filter">
                                <!-- Start single gallery -->
                                <div class="col-sm-3 mb-30 single-gallery mix all Charity Wildlife ">
									<div class="gallery-image-and-text">
										<img class="img-responsive" src="img\gallery\gallery-one.jpeg" alt="">
										<a class="image-link text-center" href="img\gallery\gallery-one.jpeg">
											<i class="fa fa-plus-square-o" aria-hidden="true"></i>
											<p>Poor Nature</p>
										</a>
									</div>
                                </div>
                                <!-- End single gallery -->
                                <!-- Start single gallery -->
                                <div class="col-sm-3 mb-30 single-gallery mix all Nature Video">
									<div class="gallery-image-and-text">
										<img class="img-responsive" src="img\gallery\gallery-two.jpeg" alt="">
										<a class="image-link text-center" href="img\gallery\gallery-two.jpeg">
											<i class="fa fa-plus-square-o" aria-hidden="true"></i>
											<p>Poor Nature</p>
										</a>
									</div>
                                </div>
                                <!-- End single gallery -->
                                <!-- Start single gallery -->
                                <div class="col-sm-3 mb-30 single-gallery mix all Charity Wildlife Children">
									<div class="gallery-image-and-text">
										<img class="img-responsive" src="img\gallery\gallery-three.jpeg" alt="">
										<a class="image-link text-center" href="img\gallery\gallery-three.jpeg">
											<i class="fa fa-plus-square-o" aria-hidden="true"></i>
											<p>Poor Nature</p>
										</a>
									</div>
                                </div>
                                <!-- End single gallery -->
                                <!-- Start single gallery -->
                                <div class="col-sm-3 mb-30 single-gallery mix all Nature Video">
									<div class="gallery-image-and-text">
										<img class="img-responsive" src="img\gallery\gallery-four.jpeg" alt="">
										<a class="image-link text-center" href="img\gallery\gallery-four.jpeg">
											<i class="fa fa-plus-square-o" aria-hidden="true"></i>
											<p>Poor Nature</p>
										</a>
									</div>
                                </div>
                                <!-- End single gallery -->
                                <!-- Start single gallery -->
                                <div class="col-sm-3 mb-30 single-gallery mix all Charity Wildlife Video Children">
									<div class="gallery-image-and-text">
										<img class="img-responsive" src="img\gallery\gallery-five.jpeg" alt="">
										<a class="image-link text-center" href="img\gallery\gallery-five.jpeg">
											<i class="fa fa-plus-square-o" aria-hidden="true"></i>
											<p>Poor Nature</p>
										</a>
									</div>
                                </div>
                                <!-- End single gallery -->
                                <!-- Start single gallery -->
                                <div class="col-sm-3 mb-30 single-gallery mix all Nature Children">
									<div class="gallery-image-and-text">
										<img class="img-responsive" src="img\gallery\gallery-six.jpeg" alt="">
										<a class="image-link text-center" href="img\gallery\gallery-six.jpeg">
											<i class="fa fa-plus-square-o" aria-hidden="true"></i>
											<p>Poor Nature</p>
										</a>
									</div>
                                </div>
                                <!-- End single gallery -->
                                <!-- Start single gallery -->
                                <div class="col-sm-3 mb-30 single-gallery mix all Charity Wildlife Video">
									<div class="gallery-image-and-text">
										<img class="img-responsive" src="img\gallery\gallery-seven.jpeg" alt="">
										<a class="image-link text-center" href="img\gallery\gallery-seven.jpeg">
											<i class="fa fa-plus-square-o" aria-hidden="true"></i>
											<p>Poor Nature</p>
										</a>
									</div>
                                </div>
                                <!-- End single gallery -->
                                <!-- Start single gallery -->
                                <div class="col-sm-3 mb-30 single-gallery mix all Nature Children">
									<div class="gallery-image-and-text">
										<img class="img-responsive" src="img\gallery\gallery-eight.jpeg" alt="">
										<a class="image-link text-center" href="img\gallery\gallery-eight.jpeg">
											<i class="fa fa-plus-square-o" aria-hidden="true"></i>
											<p>Poor Nature</p>
										</a>
									</div>
                                </div>
                                <!-- End single gallery -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End our gallery -->
            <!-- Start countdown area -->
            <section class="countdown-area pt-60 pb-60">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 col-md-4">
                            <div class="countdown-side-area">
                                <div class="countdown-icon">
                                    <i class="fa fa-calendar-check-o" aria-hidden="true"></i>
                                </div>
                                <div class="countdown-text">
                                    <h3>Up comming event</h3>
                                    <p>SCHOOL OF CRITIVITY</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-7 col-md-8">
                            <div class="count-down">
                                <div id="simple_timer"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End countdown area -->
            <!-- Start our volunteers area -->
            <section class="our-volunteers-area pt-90 pb-90">
                <div class="container">
                    <div class="row">
                        <!-- Start section title -->
                        <div class="col-sm-12">
                            <div class="section-title text-center">
                                <h2>OUR <span>VOLUNTEERS</span></h2>
                                <img src="img\title-bottom.png" alt="">
                                <p>We create events aiming to pear to the voice for children and gather for support. <br>Please update with our events and confirm you presence.</p>
                            </div>
                        </div>
                        <!-- End section title -->
                        <div class="our-volunteers">
                            <!-- Start single volunteer -->
                            <div class="col-sm-3">
                                <div class="single-volunteer">
                                    <div class="volunteer-image-and-social">
                                        <img src="img\volunteers\volunteers-one.jpeg" alt="">
                                        <div class="volunteer-social">
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="volunteer-title text-center">
                                        <h5>Farnado rotia</h5>
                                        <p>Secretery</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End single volunteer -->
                            <!-- Start single volunteer -->
                            <div class="col-sm-3">
                                <div class="single-volunteer">
                                    <div class="volunteer-image-and-social">
                                        <img src="img\volunteers\volunteers-two.jpeg" alt="">
                                        <div class="volunteer-social">
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="volunteer-title text-center">
                                        <h5>Serena sanion</h5>
                                        <p>Secretery</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End single volunteer -->
                            <!-- Start single volunteer -->
                            <div class="col-sm-3">
                                <div class="single-volunteer">
                                    <div class="volunteer-image-and-social">
                                        <img src="img\volunteers\volunteers-three.jpeg" alt="">
                                        <div class="volunteer-social">
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="volunteer-title text-center">
                                        <h5>Peterson smith</h5>
                                        <p>Secretery</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End single volunteer -->
                            <!-- Start single volunteer -->
                            <div class="col-sm-3">
                                <div class="single-volunteer">
                                    <div class="volunteer-image-and-social">
                                        <img src="img\volunteers\volunteers-four.jpeg" alt="">
                                        <div class="volunteer-social">
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                            <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <div class="volunteer-title text-center">
                                        <h5>Anabari koy</h5>
                                        <p>Secretery</p>
                                    </div>
                                </div>
                            </div>
                            <!-- End single volunteer -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- End our volunteers area -->
            <!-- Start people says area -->
            <section class="people-says-area pt-54 pb-20">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="people-asy-title text-center">
                                <h2>WHAT PEOPLE SAYS</h2>
                                <img src="img\title-bottom.png" alt="">
                            </div>
							<?php
							 
							$result=$db->select("people_says",'*');
 foreach ($result as $project)
  {?>

                            
							<div class="people-say-slide">
                                <!-- Start single people -->
                                <div class="single-people text-center">
                                    <div class="people-say-image">
                                        <img src="<?php echo $project->image ; ?> " alt="">
                                    </div>  
									
                                    <div class="peoplp-say-text text-center">
                                        <p><?php echo $project->content ; ?></p>
                                        <h5><?php echo $project->name ; ?></h5>
                                        <h6><?php echo $project->position ; ?></h6>
                                    </div>  
                                </div>
                                <!-- End single people -->
                                <!-- Start single people -->
                                
                                <!-- End single people -->
                                <!-- Start single people -->
                                







<?php } ?>   
                        </div>
                    </div>
                </div>
            </section>
            <!-- End people says area -->
            <!-- Start blog area -->
            <section class="blog-area pt-90 pb-90">
                <div class="container">
                    <div class="row">
                        <!-- Start section title -->
                        <div class="col-sm-12">
                            <div class="section-title text-center">
                                <h2>LATEST FROM <span>BLOG</span></h2>
                                <img src="img\title-bottom.png" alt="">
                                <p>We create events aiming to spear the voice for children and gather for <br>support Please update with our events</p>
                            </div>
                        </div>
                        <!-- End section title -->
                        <!-- Start blog -->
                        <div class="blog">
                            <!-- Start single blog -->
                            <div class="col-sm-4">
                                <div class="single-blog">
                                    <div class="blo-image-and-date">
                                        <img src="img\blog\blog-one.jpeg" alt="">
                                        <a href="#">24 may</a>
                                    </div>
                                    <div class="blog-info">
                                        <div class="admin">
                                            <a href="#"><i class="fa fa-user" aria-hidden="true"></i> By: Admin</a>
                                        </div>
                                        <div class="comment">
                                            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 15</a>
                                            <a href="#"><i class="fa fa-comment" aria-hidden="true"></i> 25</a>
                                        </div>
                                    </div>
                                    <div class="blog-text">
                                        <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipicing elit. Nullam feugiat dignissim metus, id vestibulum tellus Cras ante commodo.</p>
                                        <a href="#">Read More...</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-sm-4">
                                <div class="single-blog">
                                    <div class="blo-image-and-date">
                                        <img src="img\blog\blog-two.jpeg" alt="">
                                        <a href="#">24 may</a>
                                    </div>
                                    <div class="blog-info">
                                        <div class="admin">
                                            <a href="#"><i class="fa fa-user" aria-hidden="true"></i> By: Admin</a>
                                        </div>
                                        <div class="comment">
                                            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 15</a>
                                            <a href="#"><i class="fa fa-comment" aria-hidden="true"></i> 25</a>
                                        </div>
                                    </div>
                                    <div class="blog-text">
                                        <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipicing elit. Nullam feugiat dignissim metus, id vestibulum tellus Cras ante commodo.</p>
                                        <a href="#">Read More...</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                            <!-- Start single blog -->
                            <div class="col-sm-4">
                                <div class="single-blog">
                                    <div class="blo-image-and-date">
                                        <img src="img\blog\blog-three.jpeg" alt="">
                                        <a href="#">24 may</a>
                                    </div>
                                    <div class="blog-info">
                                        <div class="admin">
                                            <a href="#"><i class="fa fa-user" aria-hidden="true"></i> By: Admin</a>
                                        </div>
                                        <div class="comment">
                                            <a href="#"><i class="fa fa-heart" aria-hidden="true"></i> 15</a>
                                            <a href="#"><i class="fa fa-comment" aria-hidden="true"></i> 25</a>
                                        </div>
                                    </div>
                                    <div class="blog-text">
                                        <h3><a href="#">Lorem ipsum dolor sit amet</a></h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipicing elit. Nullam feugiat dignissim metus, id vestibulum tellus Cras ante commodo.</p>
                                        <a href="#">Read More...</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End single blog -->
                        </div>
                        <!-- End blog -->
                    </div>
                </div>
            </section>
            <!-- End blog area -->
            <!-- Start brand logo area -->
            <section class="brand-logo-area pb-90">
                <div class="container">
                    <div class="row">
                        <!-- Start section title -->
                        <div class="col-sm-12">
                            <div class="section-title text-center">
                                <h2>OUR <span>SPONSORS</span></h2>
                                <img src="img\title-bottom.png" alt="">
                            </div>
                        </div>
                        <!-- End section title -->
                        <!-- Start brand logo -->
                        <div class="brand-logo">
                            <div class="col-sm-2">
                                <div class="b-logo">
                                    <a href="http://psdrightsell.com/"><img src="img\brand-logo\b-logo-one.png" alt="psdrightsell"></a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="b-logo">
                                    <a href="http://hastech.company/"><img src="img\brand-logo\b-logo-two.png" alt="hastech"></a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="b-logo">
                                    <a href="https://devitems.com/"><img src="img\brand-logo\b-logo-three.png" alt="devitems"></a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="b-logo">
                                    <a href="https://themeforest.net/user/power-boosts"><img src="img\brand-logo\b-logo-four.png" alt="power boosts"></a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="b-logo">
                                    <a href="https://themeforest.net/user/hastech/portfolio"><img src="img\brand-logo\b-logo-five.png" alt="hastech"></a>
                                </div>
                            </div>
                            <div class="col-sm-2">
                                <div class="b-logo">
                                    <a href="https://themeforest.net/user/codecarnival"><img src="img\brand-logo\b-logo-six.png" alt="codecarnival"></a>
                                </div>
                            </div>
                        </div>
                        <!-- End brand logo -->
                    </div>
                </div>
            </section>
            <!-- End brand logo area -->
            <!-- Start footer -->
          
		  
<?php

include("includes/footer.php");

?>