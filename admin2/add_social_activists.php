<?php
define("PAGE_ID",3);
include("vendor.php");

include("includes/header.php");

?>




<div class="panel">
<div class="panel-heading">
<h3 class="panel-title">Social Activist Sign Up</h3>
					</div>


<div class="panel-body">
<form class="form-horizontal label-left" action="insert_social_activists.php" method="POST">
<div class="form-group">
<label for="signup-NGO Name" class="col-sm-3 control-label">Name*</label>
<div class="col-sm-9">
<input type="text" name="Name" class="form-control" id="signup-NGO Name">
							</div>
								</div>


<div class="form-group">
<label for="signup-email" class="col-sm-3 control-label">Email*</label>
<div class="col-sm-9">
<input type="email" name="Email" class="form-control" id="signup-email">
						</div>
							</div>


<div class="form-group">
<label for="NGO Number" class="col-sm-3 control-label">Contact*</label>
<div class="col-sm-9">
<input type="text" name="Number" class="form-control" id="signup-NGO Number">
						</div>
							</div>
											

											

<div class="form-group">
<label for="signup-password" class="col-sm-3  control-label">Password*</label>
<div class="col-sm-9">
<input type="password" name="Password" class="form-control" id="signup-password">
						</div>
							</div>


<div class="form-group">
<div class="col-sm-9 col-md-offset-3">
<label class="fancy-checkbox custom-bgcolor-green">
<input type="checkbox">
<span class="text-muted">I accept the <a href="#">Terms and  Agreements</a></span>
                    		</label>
	    							</div>
	   									</div>


<button type="submit" name="submit" class="btn btn-primary btn-lg btn-fullrounded center-block">										<span>Submit</span>
							</button>
								</form>
									</div>
										</div>						
								
<?php

include("includes/footer.php");

?>								