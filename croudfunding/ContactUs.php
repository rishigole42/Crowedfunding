<?php
define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
include("vendor.php");


$select = $db->select("needypersondetails","*");
//varPrint($select);
include("includes/header.php");



?>

            <!-- Start page title -->
            <section class="page-title-area">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-title text-center">
                                <h1>Contact Us</h1>
                            </div>
                            <div class="breadcumb-area  text-center">
                                <ol class="breadcrumb">
                                    <li><a href="dashboard2.php">Home</a></li>
                                    <li class="active">Contact Us</li>
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
            <!-- Start keep in touch area -->
            <section class="keep-in-touch-area pt-90 pb-90">
                <div class="container">
                    <div class="row">
                        <!-- Start section title -->
                        <div class="col-sm-12">
                            <div class="section-title text-center">
                                <h2>Keep In <span>Touch</span></h2>
                                <img src="img\title-bottom.png" alt="">
                                <p>We create events aiming to pear to the voice for children and gather for support. <br>Please update with our events and confirm you presence.</p>
                            </div>
                        </div>
                        <!-- End section title -->
                        <div class="keep-in-touch-therd-box">
                            <!-- Start single box -->
                            <div class="col-sm-4">
                                <div class="single-box text-center">
                                    <i class="fa fa-map" aria-hidden="true"></i>
                                    <h3>ADDRESS</h3>
                                
                                    <p>Hoshangabad Road Bhopal 462023 M.P. INDIA.</p>
                                </div><br><br>
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3667.0949597143713!2d77.45415941444556!3d23.203209715376428!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x397c43ce6427d56b%3A0x914f7e9fcda75dcc!2sUniversity+Institute+of+Technology%2C+Barkatullah+University!5e0!3m2!1sen!2sin!4v1561025748562!5m2!1sen!2sin" width="1140" height="450" frameborder="0" style="border:0"></iframe>
                            </div>
                            <!-- End single box -->
                            <!-- Start single box -->
                            <div class="col-sm-4">
                                <div class="single-box text-center">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <h3>CALL US</h3>
                                    <p>(+91)1234567890<br>(+91)1234567891</p>
                                </div>
                            </div>
                            <!-- End single box -->
                            <!-- Start single box -->
                            <div class="col-sm-4">
                                <div class="single-box text-center">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <h3>EMAIL US</h3>
                                    <p>support@edisha.com <br>support1@edisha.com</p>
                                </div>
                            </div>
                            <!-- End single box -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- End keep in touch area -->
           
           
            <!-- End brand logo area -->
<?php

include("footer.php");

?>