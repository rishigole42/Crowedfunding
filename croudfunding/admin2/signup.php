<?php
define("PAGE_ID",3);
define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
include("vendor.php");
include("includes/header.php");

?>


<div class="container">
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel">
<div class="panel-heading">
<h3 class="panel-title" style="text-align: center; font-size: 40px;">Sign Up</h3>
					</div>


<div class="panel-body">
<form class="form-horizontal label-left" action="insert_signup.php" method="POST">
<div class="form-group">
<label for="signup-NGO Name" class="col-sm-1 control-label">Name*</label>


<div class="col-sm-12">
<input type="text" name="Name" class="form-control" id="signup-NGO Name">
							</div>
								</div>


<div class="form-group">
<label for="signup-NGO Name" class="col-sm-1 control-label">Email*</label>


<div class="col-sm-12">
<input type="text" name="Email" class="form-control" id="signup-NGO Name">
							</div>
								</div>

<div class="form-group">
<label for="signup-NGO Name" class="col-sm-1 control-label">Contact*</label>


<div class="col-sm-12">
<input type="text" name="Number" class="form-control" id="signup-NGO Name">
							</div>
								</div>
<div class="form-group">
<label for="signup-NGO Name" class="col-sm-1 control-label">Password*</label>


<div class="col-sm-12">
<input type="password" name="Password" class="form-control" id="signup-NGO Name">
							</div>
								</div>

<div class="form-group">
<label for="signup-email" class="col-sm-1 control-label">Select*</label>
<div class="col-sm-12">

<select class="form-control" name="donate" id="exampleSelect1">
        <option></option>
        <option value="ngo">NGO </option>
        <option value="socialactivist">SOCIAL ACTIVIST</option>
      </select>

						</div>
							</div>
<br><br>



<button type="submit" name="submit" style="width:50%;" class="btn btn-primary btn-lg btn-fullrounded center-block">										<span>Submit</span>
							</button>
								</form>
									</div>
										</div>
	</div>
	<div class="col-md-3"></div>
</div>
</div>

						
								
<?php

include("footer.php");

?>								