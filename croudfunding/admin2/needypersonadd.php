<?php
define("PAGE_ID",17);
include("vendor.php");
//var_dump($session);//die();
if(isset($_POST['submit']))   
{ 	

$target_dir = "includes/img/";
$target_file = $target_dir . basename($_FILES["ID-Proof"]["name"]);
$p=$_FILES["ID-Proof"]["name"];
$uploadOk = 1;
//var_dump($p);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


$a=move_uploaded_file($_FILES["ID-Proof"]["tmp_name"], $target_file); 

$target_dir = "includes/img/";
$target_file = $target_dir . basename($_FILES["Image"]["name"]);
$q=$_FILES["Image"]["name"];
$uploadOk = 1;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


$b=move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file); 

$target_dir = "includes/img/";
$target_file = $target_dir . basename($_FILES["MedicalInvoice"]["name"]);
$r=$_FILES["MedicalInvoice"]["name"];
$uploadOk = 1;
//var_dump($r);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


$c=move_uploaded_file($_FILES["MedicalInvoice"]["tmp_name"], $target_file); 



$insert=$db->insert("needypersondetails",array("Name"=>$_POST['Name'],"InitialAmount"=>$_POST['Amount'],"ContactNo"=>$_POST['ContactNumber'],"Address"=>$_POST['Address'],"Tital"=>$_POST['Title'],"NeedFor"=>$_POST['needfor'],"idproof"=>$p,"photo"=>$q,"medicalinvoice"=>$r,"description"=>$_POST['Description'],"Feed_by"=>$session->email)); 
 
  
  // $insert=$db->insert("access",array("username"=>$_POST['Email'],"access"=>'2,17',"user_type"=>'NeedyPeople') );
 
//redirect("display_person.php");

}

include("includes/header.php");

?>
<div class="main-content">
<div class="content-heading clearfix">
						<div class="heading-left">
							<h1 class="page-title">ADD Needy People</h1>
							<p class="page-subtitle"></p>
						</div>
					
</div>
<style>
	.form-group{    padding: 5px;
	}
</style>

<div class="container-fluid">
<div class="panel">
<div class="panel-body">
<form class="form-horizontal label-left" action="needypersonadd.php" method="POST" enctype="multipart/form-data">



<div class="container-fluid">
	<div class="row">
	
	
   
   <div class="col-md-6" >
     		
       <div class="form-group"> 
       <label for="Name" style="color: #000;" class="col-sm-3 control-label">Name*</label>
       <input type="text" name="Name" class="form-control" id="signup-NGO Number">
    	</div>
    	
	 </div>

	<div class="col-md-6">       
<div class="form-group">
<label for="signup-email" style="color: #000;" class="col-sm-3 control-label">Initial Amount*</label>
<input type="text" name="Amount"  class="form-control" id="signup-email">
							</div>
	</div>

	
	</div>
	
	<div class="row">				
<div class="col-md-6" >										
<div class="form-group">
<label for="PhoneNumber" style="color: #000;" class="col-sm-3 control-label">Contact</label>
<input type="text" name="ContactNumber" class="form-control" id="PhoneNumber">
									</div>
					
	    </div>
	
	
	<div class="col-md-6">									
<div class="form-group">
<label for="Address" style="color: #000;" class="col-sm-3 control-label">Address</label>
<input type="text" class="form-control" name="Address" id="signup-NGO Number" placeholder="Addres">
						
							</div>
</div>

							

</div>





<div class="row">	
<div class="col-md-6" >


<div class="form-group">
<label for="Address" style="color: #000;" class="col-sm-3 control-label">Title</label>
<input type="text" class="form-control" name="Title" id="signup-NGO Number" placeholder="Addres">
						
							</div>
							</div>
						

<div class="col-md-6">
<div class="form-group">

<label for="MedicalInvoice" style="color:black;" class="col-sm-3 control-label">Need For</label>
<select class="form-control" name="needfor">
	
	<option value="Health">Health</option>
	<option value="Education">Education</option>
	<option value="Animal Welfare">Animal Welfare</option>
	<option value="Creative">Creative</option>
	<option value="Woman Empowerment">Woman Empowerment</option>
	<option value="Food & Hunger">Food & Hunger</option>
	<option value="Envirnoment">Envirnoment</option>
	<option value="Sports">Sports</option>
	<option value="Children">Children</option>
	<option value="Community Development">Community Development</option>
	<option value="Other">Other</option>
	
	
</select>

         						</div>
  										</div>

							</div>





<div class="row">

<div class="col-md-6">
<div class="form-group">

<label for="ID-Proof" style="color: #000; padding-left: 32px;" class="col-sm-3 control-label">ID-Proof</label>
<input type="file" style="padding-top: 6px;" name="ID-Proof" id="signup-NGO Number">

         						</div>
  										</div>
<div class="col-md-6">
		
<div class="form-group">
<label for="Image" style="color: #000; padding-left: 2px;" class="col-sm-3 control-label">Image</label>
<div class="col-md-9">
<input type="file" style="padding-top: 6px;" name="Image" id="signup-NGO Number">

									</div>
 	 									</div>	
    </div>  								
</div>
	<br>
<div class="row">

<div class="col-md-6">
<div class="form-group">
<br>
<label for="MedicalInvoice" style="color: #000;" class="col-sm-4 control-label">Required Document</label>
<input type="file" name="MedicalInvoice" id="signup-NGO Number">

         						</div>
  										</div>
<div class="col-md-6">										
<div class="form-group">
<label for="Amount" style="color: #000;" class="col-sm-3 control-label">Description</label>
<input type="text" name="Description" class="form-control" id="Amount">
							</div>
							</div>	
    </div>	
		
	
	<div class="row">

		<div class="col-md-6">													
<div class="form-group">

<label class="fancy-checkbox custom-bgcolor-green">					
													
<br>							
<input type="checkbox">
<span class="text-muted">I accept the <a href="#">Terms and  Agreements</a></span>
							</label>
									</div>
	</div>
	
	</div>
	
	
	
	
	<input type="submit" style="width:40%;" name="submit" class="btn btn-primary btn-lg btn-fullrounded center-block">			<br><br>								
</div>



    
</div>			

    
    	
		
    </form>
    </div>
      								
</div>	


   
		
		</div>			
		</div>		
	
											
								
<?php

include("includes/footer.php");

?>	