<?php
define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
include("vendor.php");
include("header.php");

$mob_id=$_REQUEST["causeno"];

?>
	<?php
		$result=$db->select("donate_fund",'*',array("sno"=>$mob_id));
                                $i=1;
 foreach ($result as $project)
  {?>
							



            <!-- End header -->
            <!-- Start page title -->
           
            <!-- End page title -->
            <!-- Start our blog area -->
            <section class="our-blog-area pt-90 pb-60">
                <div class="container">
                    <div class="row">
                        <!-- Start blog -->
                        <div class="blog">
                            <!-- Start single blog -->
                            <div class="col-md-8" style="overflow: hidden;">
                                <div class="blog-details single-blog mb-30">
                                    <div class="blog-details-title">
                                        <h3><?php echo $project->title ;   ?></h3>
                                    </div>
                                    <div class="blog-info">
                                        <div class="admin">
                                            <a href="#"><i class="fa fa-user" aria-hidden="true"></i> By:<?php echo $project->name ;   ?></a>
                                        </div>
                                       
                                    </div>     
									
                                    <div class="blo-image-and-date">
                                        <img src="../admin2/<?php echo $project->image ;   ?>" alt="">
                                    </div>
									
									
                                    <div class="blog-text">
                                      <ul class="nav nav-tabs">
  <li class="active"><a href="#home" data-toggle="tab" aria-expanded="true">About Us</a></li>
  <li ><a href="#profile" data-toggle="tab" aria-expanded="false">Documents</a></li>
 
</ul>
<div class="col-md-8">

<div id="myTabContent" class="tab-content" >

   <div class="tab-pane fade active in" id="home">
 
  
    <p ><?php  echo $project->dis   ; ?></p>
  </div>
  <div class="tab-pane fade " id="profile">
    <p>
	
	<?php
	$resultd=$db->select("donate_docoment",'*',array("dsno"=>$mob_id));
                                $i=1;
 foreach ($resultd as $projectd)
  {?> 
	
	
	<div class="col-md-8">
		<img src="../admin2/<?php echo $projectd->docomentimage ; ?>" >
		   
		
		
		
	</div>
	
	
	<?php 
	}
	?>
	</p>
  </div>
  
</div>
									  
	</div> 								  
									  </div>
                               
									
									
									
									 </div>
                                <div class="blog-coment-box">
								 <div class="leave-reply">
                                    <h2>Leave Comment</h2>
                                    <ul>
                                    <form action="insert_msg.php" method="post">
                                        <li><input placeholder="Enter your Name" name="name" class="input-block-level" type="text"><i class="fa fa-user"></i></li>
                                        <li><input placeholder="Enter your Name" name="cause_id" hidden="hidden" class="input-block-level" type="text" value="<?php echo $mob_id;  ?>"><i class="fa fa-user"></i></li>
                                        <li><input placeholder="Enter E-mail ID" name="email" class="input-block-level" type="text"><i class="fa fa-envelope-o"></i></li>
                                       
                                        <li><textarea class="input-block-level" placeholder="Message" name="msg"></textarea></li>
                                        <li><input type="submit" class="btn-style btn-md bo-ra-5" name="submit" ></li>
                                        </form>
                                    </ul>
                                </div>
                                <div class="single0blog-coment">
                                    <h2>Comments</h2>
                                    <ul>
									<?php
		$resulte=$db->select("comments",'*',array("cause_id"=>$mob_id));
                                $i=1;
 foreach ($resulte as $projecte)
  {
  	?>
									
                                        
                                        <li>
                                            <div class="coment-image">
                                                <a href="#"><img src="img\blog\avatar-01.jpeg" alt=""></a>
                                            </div>
                                            <div class="comment-heading">
                                                <h5><p><?php echo $projecte->name; ?></p></h5>
                                                
                                            </div>
                                            <div class="coment0-text">
                                                <p><?php echo $projecte->msg; ?></p>
                                            </div>
                                        </li>
 <?php
  }
 ?>

                                    </ul>
                                </div>
                               
                            </div>
                            </div>
                            <!-- End single blog -->
                        </div>
                        <!-- End blog -->
                        
            <!--benefisiory details code start-->   
                   
                        <div class="col-md-4 col-sm-4 content-right-section kt-campaign-details campaign-details-ab-uppersection main-actions clearfix">
    <div class="top-donor-section">
	              <!-- Header Right Section -->
	
		<div class="clearfix main-actions">
                           <!-- Contribute button -->
              
                <p class="hidden-xs contribute-button">
            <button class="btn btn-lg btn-primary btn-contribute contibuteButton text-center btn-donate btn-cont-pos1 filterBtn ripple" onclick="checkpopup()" data-toggle="modal" data-target="#myModal" ">
                        <h2>
                            <i class="fa fa-heart customHeart"></i>Contribute Now  </h2>
                    </button>
                </p>
                
        <!--model start-->        
 <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header bg-info">
         <!-- <h4 class="modal-title">Modal Heading</h4>-->
          <span ng-if="!contributionData.reward" class="ng-scope">Choose a donation amount</span>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
        <form action="insert_funding.php" method="post"> 
		
		<label>Amount:</label>  
		<input type="hidden" name="cause_id" value="<?php echo $mob_id ;?> " >
	
          <input type="text" name="amt" class="form-control"><br />        
        <label>Name:</label>
          <input type="text" name="name" class="form-control">
          <label for="Email">Email:</label><br />
          <input type="email" name="email" class="form-control"/>
          <br />
          <label>Mobile No:</label>     
          <input type="text" name="mob_no" class="form-control"/>
          <br />
		  
		  
		  
		  
		  
		  
		   
		  
		  
          <input type="submit" value="submit" class="btn btn-sm btn-center" >
          </form>  
		  
		  
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  
</div>
<!--end of the model-->
                
                
                
                
                
                
                
                
                
                
                
                
                <!--Payment modes options start -->
                   <!--             <div class="payment-modes-options clearfix">
                   
                    <ul class="list-inline">
                        <li class="credit-debit btn-donate payments-m" data-payment="creditCard" onclick="checkpopup()"></li>
                        <li class="netbank btn-donate payments-m" data-payment="netbanking" onclick="checkpopup()"></li>
                                                    <li class="paytm-wallets bank-card payments-m" onclick="scrollToUpiCard()"></li>
                                                 
                            <li class="bank-transfer" onclick="scrollToPaymentCard()"></li>
                        
                    </ul>
                 </div>
                                 <!--Payment modes options start End -->

                <!-- For Mobile START -->
                <!--  -->

                    <!-- Code for ended fundraiser and contribute button here START -->
                   
                    <p class="col-md-12 btn-floating visible-xs">
                       <button class="btn btn-lg btn-primary btn-contribute text-center btn-donate btn-cont-pos0" href="javascript:void(0);" data-version="A">
                           <h3>
                               <span>Contribute Now</span>
                           </h3>
                       </button>
                    </p>


                    <!-- Code for ended fundraiser and contribute button here END -->

                <!--  -->
                <!-- /Contribute button -->
                <!-- Facebook Share button -->

                <!-- Code for Share it icons START -->
                                <div class="main-media">
                    <div class="share-it-wrapper">
                        <div id="" class="clearfix">

                            <p class="md-share-icons btn-floating-top hidden-xs">
                                <!-- <button class="btn btn-lg btn-fb text-center" onClick="triggerFShareDialogClick('Share', 1);" data-href="https://www.ketto.org/VikasYadav?utm_source=internal&utm_medium=fbpageshare&utm_campaign=VikasYadav&utm_content=730577&shby=1" data-counturl="https://www.ketto.org/fundraiser/VikasYadav"><i class="fa fa-facebook fa-3"></i>&nbsp;&nbsp;Spread The Word&nbsp;<span class='share-count hidden'>(0 Shares)</span>
                                </button> -->
                                <button class="btn btn-lg btn-fb-md text-center ripple" onclick="triggerFShareDialogClick('Share', 1);" data-href="https://www.ketto.org/VikasYadav?utm_source=internal&amp;utm_medium=fbpageshare&amp;utm_campaign=VikasYadav&amp;utm_content=730577&amp;shby=1" data-counturl="https://www.ketto.org/fundraiser/VikasYadav"><i class="fa fa-facebook-square"></i>&nbsp;&nbsp;Spread The Word&nbsp;<span class="share-count">(99 Shares)</span>
                                </button>
                                <!--Only for AB testing whatsapp share button -->
                                <!-- <a  target="_blank" href="https://web.whatsapp.com/send?text=%2AVikas%20Yadav%20Memorial%20Fund%2A%0A%0AYoung%20and%20bright%2C%20Vikas%20Kumar%20Yadav%20was%20a%20part%20of%20the%20Subway%20family%20working%20as%20a%20Sandwich%20Artist%20in%20one%20of%20the%20Restaurants.%20He%20had%20the%20brightest%20of%20smiles%20which%20could%20liven%20up%20the%20guests%20and%20co-workers%20on%20any%20day.%20Aspirational%2C%20cooperative%20and%20supportive%20by%20nature%E2%80%A6all%20the%20dreams%20of%20this%2022%20year%20old%20boy%2C%20who%20hailed%20from%20Bihar%20and%20got%20married%20just%20five%20months%20ago%2C%20came%20to%20a%20standstill%20during%20the%20wee%20hours%20of%209th%20October%202018%20when%20he%20met%20...%0A%0A%2ARead%20more%2A%20-%20https%3A%2F%2Fwww.ketto.org%2Ffundraiser%2FVikasYadav%3Futm_source%3Dinternal%26utm_medium%3DwhatsappShare%26utm_campaign%3DVikasYadav%26utm_content%3D730577%26shby%3D1%0A%0A%2ADonate%20Now%20to%20help%20Nitin%20Dhureja%2A%20-%20https%3A%2F%2Fwww.ketto.org%2Fcontribute%2Fcontribute.php%3Ffmd_id%3D69559%26utm_source%3Dinternal%26utm_medium%3DwhatsappShare%26utm_campaign%3DVikasYadav%26utm_content%3D730577" data-action="share/whatsapp/share"
                                data-clevent="share" data-cleventname="WhatsApp Share" data-clposition="2">
                                    <button class="btn btn-primary custom_whatsapp ripple"><i class="fa fa-whatsapp"></i>&nbsp;&nbsp;Share via Whatsapp</button>
                                </a>
                        </div>
                    </div>
                </div>
                                <!-- Code for Share it icons END -->
                <!-- /Facebook Share button -->
                        <!-- For Desktop END -->
            
            <div class="amount-raised-section">

<?php
	$resultdt=$db->select("donate_fund",'*',array("sno"=>$mob_id));
                                $i=1;
 foreach ($resultdt as $project)
  {?>



            <!-- Amount Display Block -->
            <div class="amount-raised">
			
               
                
           <?php     
            
		$resultdt1=$db->select("donator",'sum(amount)as kt',array("cause_no"=>$mob_id));
                                $i=1;
 foreach ($resultdt1 as $projects)
  {?>

                
                 <h2><i class="fa fa-inr"></i><?php 
                
                $x=$projects->kt;
                echo $projects->kt ; ?></h2>
               
				Raised of  <?php
				$amount=$project->amount;
				 echo $project->amount ; 
				 	
				 ?> goal  
                               <!-- <p class="">raised of <b>&nbsp;<i class="fa fa-inr"></i> 1,50,000</b> goal</p>--> 
                           </div>
        <?php 
        }
	}
                           ?>


            <!-- /Amount Display Block -->
            <!-- Progress Bar -->
            <div>
				<div class="progress">
                    <div id="campaignProgressRaised" class="progress-bar" style="width:<?php
			
					$total=($x * 100)/ $amount;
					 echo $total."%" ; ?>"></div>                    
                    <span class="popOver goal-completion-popover"> </span>  
		        </div>    
            </div> 
            <!-- /Progress Bar -->
            <div class="clearfix">
                <!-- Backers Section -->
    			<div class="col-xs-6 amount-raised backers ">
    				<h2 class="kt-campaign-backers">28</h2>
    				<p class="kt-campaign-backers">supporters</p>
    			</div>
                <!-- /Backers Section -->
                <!-- Days Count Section -->
                                    <div class="col-xs-6 amount-raised ">
                        <h2 class="kt-campaign-backers">
							<?php 
						
							$d1=$project->ldate; 
							$d2=date('Y-m-d',time()); 
							
							$date1=date_create($d1);
							$date2=date_create($d2); 
							$diff=date_diff($date2,$date1);
							echo $diff->format("%a ") ;  
							?>
							           
									
									
					
							 
							
						</h2>
                        <p class="kt-campaign-backers">days left</p>
                    </div>
                                <!-- /Days Count Section -->
            </div>
            <!-- Campaigner Info -->
          <!--  <div class="campaigner-box clearfix">

            <div class="campaigner clearfix">
                <div class="col-xs-3">
                    <span class="profile-image center-block">
 <img src="https://d1vdjc70h9nzd9.cloudfront.net/media/individual/715000/715271/image/5bd02f2c2da5b.jpg" alt="Nitin Dhureja">
             </span>
                </div>
                <div class="profile-links col-xs-9">
                    <!-- <p class="label">Campaigner<a data-toggle="tooltip" data-placement="top" title="" data-original-title="You can send a personal message to the campaigner in case you have any queries.">(?)</a></p> -->
                <!--    <p class="label">Campaigner<span class="contact-wrap">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;
                    <a href="#composeModal" data-toggle="modal" data-target="#composeModal">Contact</a>
                </span></p>
                                        <div class="campaigner-name-wrap clearfix">
                        <h5 class="campaigner-name"><a href="javascript:void(0);" data-toggle="modal" data-target="#campaignerPopup">Nitin Dhureja</a></h5>
                        <a class="tooltip-wrap" data-toggle="tooltip" data-placement="top" data-html="true" title="" data-original-title="<div class='verified-wrap'><p><i class='fa fa-check-circle-o'></i>Facebook Verified</p><p><i class='fa fa-check-circle-o'></i>Email Verified</p><p><i class='fa fa-check-circle-o'></i>Identity Verified</p></div>"><span class="badge-verified"><img src="https://d1vdjc70h9nzd9.cloudfront.net/images/verifiednew.png" style="width:74px"></span></a>
                    </div>
                    <div class="fb-friends"><i class="fa fa-facebook-official" aria-hidden="true"></i>580+ friends</div>                        <ul class="clearfix">
                                                            <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;<span id="campLocation">Gurugram</span>
                                </li>
                                                    
                            
                                                        <!-- <li><a href="">See full Profile</a></li> -->
                      <!--  </ul>
                                    </div>
                </div>-->
                <!-- Compose Mail Popup code begins -->
                <div id="composeModal" class="tweet-modal modal animated fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                                                    <h4 class="modal-title text-center">Contact Nitin Dhureja</h4>
                                
                            </div>
                            <div class="modal-body clearfix">
                                <form class="clearfix" id="sendMessage" method="POST" action="/campaign/message.php" role="form">
                                                                            <p class="sub-head text-center">
                                            Your message will be directly emailed to Nitin Dhureja and you will receive his/her response on the email address entered below.<br> Don't worry, we will not share your email address with the campaigner.
                                        </p>
                                                                                                                <div class="form-group col-sm-6 clearfix">
                                            <label for="messageSenderName" class="control-label">Your Name</label>
                                            <input type="text" class="form-control input-lg" id="messageSenderName" name="messageSenderName" placeholder="Name" value="" required="">
                                        </div>
                                        <div class="form-group col-sm-6 clearfix">
                                            <label for="messageSenderEmail" class="control-label">Your Email</label>
                                            <input type="email" class="form-control input-lg" id="messageSenderEmail" name="messageSenderEmail" placeholder="Email Address" value="" required="">
                                        </div>
                                    
                                    <div class="form-group col-xs-12 clearfix">
                                        <label for="messageContent" class="control-label">Message</label>
                                        <div class="control-group">
                                            <textarea class="form-control" rows="7" id="messageContent" name="messageContent" required=""></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12 clearfix captcha-group">
                                        <div class="control-group">
                                            <div id="recaptcha1"></div>
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12 clearfix">
                                        <input type="hidden" name="campaign_id" value="69559">
                                        <input type="hidden" name="type" value="campaigner">
                                        <input type="hidden" name="form_action" value="add">

                                        <button type="submit" id="sendMail" class="btn btn-primary btn-lg"><i class="fa fa-envelope-o fa-3"></i>&nbsp;&nbsp;Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            
                <!-- Compose Mail Popup code ends -->
                <!-- Compose Mail Popup code begins -->
                <div id="composeNgoModal" class="tweet-modal modal animated fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">×</button>
                                <h4 class="modal-title text-center">Contact Soli Yadav</h4>
                            </div>
                            <div class="modal-body clearfix">
        <form class="clearfix" id="sendMessage" method="POST" action="/campaign/message.php" role="form">
                                    <p class="sub-head text-center">
                                        Your message will be directly emailed to Soli Yadav and you will receive his/her response on the email address entered below.<br> Don't worry, we will not share your email address with the campaigner.
                                    </p>

                                                                            <div class="form-group col-sm-6 clearfix">
                                            <label for="messageSenderName" class="control-label">Your Name</label>
                                            <input type="text" class="form-control input-lg" id="messageSenderName" name="messageSenderName" placeholder="Name" value="" required="">
                                        </div>
                                        <div class="form-group col-sm-6 clearfix">
                                            <label for="messageSenderEmail" class="control-label">Your Email</label>
                                            <input type="email" class="form-control input-lg" id="messageSenderEmail" name="messageSenderEmail" placeholder="Email Address" value="" required="">
                                        </div>
                                    
                                    <div class="form-group col-xs-12 clearfix">
                                        <label for="messageContent" class="control-label">Message</label>
                                        <div class="control-group">
                                            <textarea class="form-control" rows="7" id="messageContent" name="messageContent" required=""></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12 clearfix captcha-group">
                                        <div class="control-group">
                                            <div id="recaptcha3"></div>
                                        </div>
                                    </div>

                                    <div class="form-group col-xs-12 clearfix">
                                        <input type="hidden" name="campaign_id" value="69559">
                                        <input type="hidden" name="type" value="ngo">
                                        <input type="hidden" name="form_action" value="add">

                                        <button type="submit" id="sendMail" class="btn btn-primary btn-lg"><i class="fa fa-envelope-o fa-3"></i>&nbsp;&nbsp;Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Compose Mail Popup code ends -->




            <!-- /Campaigner Info -->
                            <!-- Benefactor Info -->
               <div class="campaigner clearfix beneficiary-box">
                                            <div class="col-xs-3">
                            <span class="profile-image center-block">
                                <img src="https://d1vdjc70h9nzd9.cloudfront.net/media/campaign/69000/69559/image/5bbd8f1847d4c.png" alt="" class="img-responsive">
                            </span>
                        </div>
                                        <div class="profile-links col-xs-9">
                                            <p class="label">Beneficiary</p>
                        <h5>Soli Yadav</h5>
                        <p>Victim's Father</p>
                                        </div>
                </div>
                <!-- /Benefactor Info 
                    </div> 
        </div>
        </div>
        
    
    <!-- /Header Right Section -->
        <!-- Content Right Section -->
		<div class="kt-start-campaign campaign-sidebar">

			
				            <!-- Backers Section -->
				<div class="clearfix">
                <!--  -->
                	<div class="hidden-xs">
		<div id="donationFriend">
    <div class="my-donations-cards"> <!-- html in new-campaign-page.js -->
    </div>
    <div class="friends-donations-cards-new"> <!-- html in new-campaign-page.js -->
    </div>
</div>	</div>
	<!-- Code for Top 5 Donors START -->
		<!-- Code for Top 5 Donors END -->

	<!-- Code for Most Raised from Sharing START -->
		<!-- Code for Most Raised from Sharing END -->
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
			
			
			
			<?php } ?>
            <!-- End brand logo area -->
            <!-- Start footer -->
            <footer>
                <div class="footer-top pt-50 pb-50">
                    <div class="container">
                        <div class="row">
                            <div class="footer-widget-area">
                                <!-- Start footer widget -->
                                <div class="col-sm-4">
                                    <div class="footer-widget widget-one">
                                        <div class="footer-widget-title">
                                            <h3>ABOUT US</h3>
                                        </div>
                                        <div class="widget-about-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla id tincidunt risus. </p>
                                        </div>
                                        <div class="widget-contact-content">
                                            <h3>CONTACT US</h3>
                                            <a href="tel:+0012345678">Phone :  +(00) 1234-5678</a>
                                            <a href="mailto:info@granttheme.com">Email :  info@granttheme.com</a>
                                            <p>Address :  122, New road, South Zone Country.</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- End footer widget -->
                                <!-- Start footer widget -->
                                <div class="col-sm-2">
                                    <div class="footer-widget widget-two">
                                        <div class="footer-widget-title">
                                            <h3>OUR PROJECT</h3>
                                        </div>
                                        <nav>
                                            <ul>
                                                <li><a href="#">Water Surve</a></li>
                                                <li><a href="#">Education for all</a></li>
                                                <li><a href="#">Treatment</a></li>
                                                <li><a href="#">Food Serving</a></li>
                                                <li><a href="#">Cloth</a></li>
                                                <li><a href="#">Selter Project</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <!-- End footer widget -->
                                <!-- Start footer widget -->
                                <div class="col-sm-2">
                                    <div class="footer-widget widget-two">
                                        <div class="footer-widget-title">
                                            <h3>QUCIK LINK</h3>
                                        </div>
                                        <nav>
                                            <ul>
                                                <li><a href="#">Causes</a></li>
                                                <li><a href="#">Projects</a></li>
                                                <li><a href="#">Gallery</a></li>
                                                <li><a href="#">Terms of use</a></li>
                                                <li><a href="#">Legal disclaimer</a></li>
                                                <li><a href="#">Privacy policy</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <!-- End footer widget -->
                                <!-- Start footer widget -->
                                <div class="col-sm-4">
                                    <div class="footer-widget widget-four">
                                        <div class="footer-widget-title">
                                            <h3>NEWSLETTER</h3>
                                        </div>
                                        <div class="widget-about-content">
                                            <p>Select your newsletters, enter your email address, and click "Subscribe"</p>
                                        </div>
                                        <div class="newslater">
                                            <form id="mc-form" class="mc-form form">
                                                <input id="mc-email" type="email" autocomplete="off" placeholder="Email Address">
                                                <button id="mc-submit" type="submit"><i class="fa fa-envelope" aria-hidden="true"></i></button>
                                            </form>
                                            <!-- mailchimp-alerts Start -->
                                            <div class="mailchimp-alerts text-centre">
                                                <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                                                <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                                                <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                                            </div><!-- mailchimp-alerts end -->
                                        </div>
                                    </div>
                                </div>
                                <!-- End footer widget -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="copyright">
                                    <p>Copyright 2017 All rigth reserved. Design by theme <a href="#">Grant Foundation</a></p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="footer-social">
                                    <nav>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="hidden-xs" id="back-top" style="display: block;"></div>
                    </div>
                </div>
            </footer>
            <!-- End footer -->

        </div>
        <!-- End main area -->
		      
        <!-- Color Switcher -->
        <div class="ec-colorswitcher">
            <a class="ec-handle" href="#"><i class="fa fa-cog" aria-hidden="true"></i></a>
            <h3>Style Switcher</h3>
            <div class="style-swicher-logo text-center">
                <img src="img\logo.png" alt="Logo">
            </div>
            <div class="ec-switcherarea">
                <h6>Select Layout</h6>
                <div class="layout-btn">
                    <a href="#" class="ec-boxed"><span>Boxed</span></a>
                    <a href="#" class="ec-wide"><span>Wide</span></a>
                </div>
                <h6>Chose Color</h6>
                <ul class="ec-switcher">
                    <li><a href="#" class="cs-color-1 styleswitch" data-rel="color-one"></a></li>
                    <li><a href="#" class="cs-color-2 styleswitch" data-rel="color-two"></a></li>
                    <li><a href="#" class="cs-color-3 styleswitch" data-rel="color-three"></a></li>
                    <li><a href="#" class="cs-color-4 styleswitch" data-rel="color-four"></a></li>
                    <li><a href="#" class="cs-color-5 styleswitch" data-rel="color-five"></a></li>
                    <li><a href="#" class="cs-color-6 styleswitch" data-rel="color-six"></a></li>
                    <li><a href="#" class="cs-color-7 styleswitch" data-rel="color-seven"></a></li>
                    <li><a href="#" class="cs-color-8 styleswitch" data-rel="color-eight"></a></li>
                    <li><a href="#" class="cs-color-9 styleswitch" data-rel="color-nine"></a></li>
                    <li><a href="#" class="cs-color-10 styleswitch" data-rel="color-ten"></a></li>
                    <li><a href="#" class="cs-color-11 styleswitch" data-rel="color-eleven"></a></li>
                    <li><a href="#" class="cs-color-12 styleswitch" data-rel="color-twelve"></a></li>
                </ul>
                <div class="ec-pattren">
                    <h6>Chose Pattren</h6>
                    <div class="pattren-wrap">
                        <a href="#" data-rel="pattren1" class="styleswitch"><img src="img\pattren\pattren1.jpeg" alt=""></a>
                        <a href="#" data-rel="pattren2" class="styleswitch"><img src="img\pattren\pattren2.jpeg" alt=""></a>
                        <a href="#" data-rel="pattren3" class="styleswitch"><img src="img\pattren\pattren3.jpeg" alt=""></a>
                        <a href="#" data-rel="pattren4" class="styleswitch"><img src="img\pattren\pattren4.jpeg" alt=""></a>
                        <a href="#" data-rel="pattren5" class="styleswitch"><img src="img\pattren\pattren5.jpeg" alt=""></a>
                    </div>
                </div>
                <div class="ec-background">
                    <h6>Chose Background</h6>
                    <div class="background-wrap">
                        <a href="#" data-rel="background1" class="styleswitch"><img src="img\background\bg-1.jpeg" alt=""></a>
                        <a href="#" data-rel="background2" class="styleswitch"><img src="img\background\bg-2.jpeg" alt=""></a>
                        <a href="#" data-rel="background3" class="styleswitch"><img src="img\background\bg-3.jpeg" alt=""></a>
                        <a href="#" data-rel="background4" class="styleswitch"><img src="img\background\bg-4.jpeg" alt=""></a>
                        <a href="#" data-rel="background5" class="styleswitch"><img src="img\background\bg-5.jpeg" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Color Switcher end -->

		<!-- jquery-1.12.0.min js
		============================================ -->  
        <script src="js\vendor\jquery-1.12.0.min.js"></script>
		
		<!-- bootstrap js
		============================================ -->         
        <script src="js\bootstrap.min.js"></script>
		
		<!-- owl.carousel.min js
		============================================ -->       
        <script src="js\owl.carousel.min.js"></script>

        <!-- jquery.nivo.slider.pack js
		============================================ -->       
        <script src="js\jquery.nivo.slider.pack.js"></script>

        <!-- jquery.mixitup.min js
        ============================================ -->       
        <script src="js\jquery.mixitup.min.js"></script>

        <!-- jquery.magnific-popup.min js
        ============================================ -->       
        <script src="js\jquery.magnific-popup.min.js"></script>

        <!-- jquery.meanmenu js
        ============================================ -->       
        <script src="js\jquery.meanmenu.js"></script>

        <!-- jquery.syotimer.min js
        ============================================ -->       
        <script src="js\jquery.syotimer.min.js"></script>
		
		<!-- wow js
		============================================ -->       
        <script src="js\wow.js"></script>
		
        <!-- jquery.scrollUp.min js
        ============================================ -->       
        <script src="js\jquery.scrollUp.min.js"></script>
        
        <!-- jquery.ajaxchimp.min js
        ============================================ -->       
        <script src="js\jquery.ajaxchimp.min.js"></script>
      
        <!-- plugins js
		============================================ -->         
        <script src="js\plugins.js"></script>

        <script>
        	new WOW().init();
        </script>
        
        <!-- styleswitch js
        ============================================ -->       
        <script src="js\styleswitch.js"></script>
        
   		<!-- main js
		============================================ -->           
        <script src="js\main.js"></script>
    </body>
</html>
