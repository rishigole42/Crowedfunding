<?php
define("PAGE_ID",15);
include("vendor.php");

include("includes/header.php");

?>
<div class="main-content">
<div class="content-heading clearfix">
						<div class="heading-left">
							<h1 class="page-title">ADD FUND RISERS</h1>
							<p class="page-subtitle"></p>
						</div>
					
					</div>

<div class="container-fluid">
<div class="panel">
<div class="panel-body">
<form class="form-horizontal label-left" action="insert_fundrisers.php" method="POST" enctype="multipart/form-data">

<div class="container-fluid">
	<div class="row">
	
   
   <div class="col-md-6" style="padding-right: 20px;">
     		
       <div class="form-group"> 
       <label for="Name" style="color: #000;" class="col-sm-3 control-label">Name*</label>
       <input type="text" name="Name" class="form-control" id="signup-NGO Number">
    	</div>
    	
	 </div>

	<div class="col-md-6" style="padding-left: 20px;">       
<div class="form-group">
<label for="signup-email" style="color: #000;" class="col-sm-3 control-label">Email*</label>
<input type="email" name="Email"  class="form-control" id="signup-email">
							</div>
	</div>

	
	</div>
	
	<div class="row">				
<div class="col-md-6" style="padding-right: 20px;">										
<div class="form-group">
<label for="PhoneNumber" style="color: #000;" class="col-sm-3 control-label">Phone Number</label>
<input type="text" name="PhoneNumber" class="form-control" id="PhoneNumber">
									</div>
										</div>																
        <div class="col-md-6" style="padding-left: 20px;">										
<div class="form-group">
<label for="AlternateNumber" style="color: #000;" class="col-sm-6 control-label">Alternate Number</label>
<input type="text" name="AlternateNumber" class="form-control" id="AlternateNumber">
							</div>
								</div>			
	    </div>
	
	<div class="row">	
<div class="col-md-6" style="padding-right: 20px;">									
<div class="form-group">
<label for="Address" style="color: #000;" class="col-sm-3 control-label">Address</label>
<input type="text" class="form-control" name="Address" id="signup-NGO Number" placeholder="Addres">
						
							</div>
</div>
<div class="col-md-6" style="padding-left: 20px;">
<div class="form-group">
<label for="Description" style="color: #000;" class="col-sm-2 control-label">Description</label>
<textarea class="form-control" name="Description" id="signup-NGO Number" placeholder="Description"></textarea>
								</div>
									</div>
								


</div>
<br><br>
<div class="row">

<div class="col-md-6" style="padding-right: 20px;">
<div class="form-group">

<label for="ID-Proof" style="color: #000;" class="col-sm-4 control-label">ID-Proof</label>
<input type="file" name="ID-Proof" id="signup-NGO Number">

         						</div>
  										</div>
<div class="col-md-6" style="padding-left: 20px;">
		
<div class="form-group">
<label for="Image" style="color: #000;" class="col-sm-2 control-label">Image</label>
<div class="col-md-9">
<input type="file" name="Image" id="signup-NGO Number">

									</div>
 	 									</div>	
    </div>  								
</div>
	<br><br>
<div class="row">

<div class="col-md-6" style="padding-right: 20px;">
<div class="form-group">
<br>
<label for="MedicalInvoice" style="color: #000;" class="col-sm-4 control-label">Medical Invoice</label>
<input type="file" name="MedicalInvoice" id="signup-NGO Number">

         						</div>
  										</div>
<div class="col-md-6" style="padding-left: 20px;">										
<div class="form-group">
<label for="Amount" style="color: #000;" class="col-sm-3 control-label">Amount</label>
<input type="text" name="Amount" class="form-control" id="Amount">
							</div>
							</div>	
    </div>	
	
	<div class="row">
	<div class="col-md-1"></div>
		<div class="col-md-6" style="padding-right: 20px;">													
<div class="form-group">

<label class="fancy-checkbox custom-bgcolor-green">					
													
<br>							
<input type="checkbox">
<span class="text-muted">I accept the <a href="#">Terms and  Agreements</a></span>
							</label>
									</div>
	</div>
	
	</div>
	
	<br>
	
	
	<input type="submit" style="width:40%;" name="submit" class="btn btn-primary btn-lg btn-fullrounded center-block">			<br><br>								
</div>



    
</div>			

    
    
    
    </div>
      								
</div>	






	
	
	
											
	
   
		</form>	
		</div>			
		</div>		
	</div>
											
								
<?php

include("includes/footer.php");

?>	