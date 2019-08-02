<?php
define("PAGE_ID",3);
define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
include("vendor.php");
include("includes/header.php");

?>

<div class="container-fluid" style="background-image: url('img/login cover.jpg'); background-repeat: round;">
<div class="container">
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6" style=" padding-top:80px; padding-bottom: 50px;">
		<div class="panel" style="border: 0px solid black;-webkit-box-shadow: -1px 5px 10px 11px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 5px 10px 11px rgba(0,0,0,0.75);
box-shadow: -1px 5px 10px 11px rgba(0,0,0,0.75);
    background-color: rgba(120,190,180,0.5); border-radius: 20px 20px 20px 20px;
-moz-border-radius: 20px 20px 20px 20px;
-webkit-border-radius: 20px 20px 20px 20px;
border: 0px solid #000000;">
<div class="panel-heading">
<h3 class="panel-title" style="text-align: center; font-size: 40px; padding-top:15px; color: white;"><b> SIGN IN </b></h3>
					</div>


<div class="panel-body">
<form class="form-horizontal label-left" action="login_attempt.php" method="POST">
<div class="form-group">
<label for="signup-NGO Name" class="col-sm-1 control-label" style="color:white; font-size: 18px;">Email</label>


<div class="col-sm-12">
<input type="text" name="username" class="form-control" id="signup-NGO Name">
							</div>
								</div>




<div class="form-group">
<label for="signup-NGO Name" class="col-sm-1 control-label"style="color:white; font-size: 18px;">Password</label>


<div class="col-sm-12">
<input type="password" name="password" class="form-control" id="signup-NGO Name">
							</div>
								</div>


<br>



<button type="submit" name="submit" style="width:20%; color: white; " class="btn btn-primary btn-lg btn-fullrounded center-block"><span><b>Submit</b></span>
							</button>
								</form>
							
   
								<a href="signup.php"><button  class="btn btn-warning" style="color:white;"><b>Create an account</b></button></a>
									</div>
										</div>
	</div>
	<div class="col-md-3"></div>
</div>
</div>
</div>						
								
<?php

include("footer.php");

?>								