<?php
define("PAGE_ID",6);
include("vendor.php");


if(isset($_POST['submit']))
{  
$target_dir = "includes/img/";

$target_file = $target_dir . basename($_FILES["Image"]["name"]);
$q=$_FILES["Image"]["name"];
$uploadOk = 1;


$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


$b=move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file); 




$insert=$db->insert("events",array("title"=>$_POST['Title'],"description"=>$_POST['Description'],"date"=>$_POST['Date'],"image"=>$q)); 
 
  
  if($insert){
  	redirect("add_event.php");
  }
 


}

include("includes/header.php");
?>











<div class="container-fluid" >
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6">
		<div class="panel" style="margin-top:50px;" >
<div class="panel-heading">
<h3 class="panel-title" style="text-align: center; margin-top:10px;"><b>ADD EVENT</b></h3>
					</div>


<div class="panel-body">
<form class="form-horizontal label-left" action="add_event.php" method="POST" enctype="multipart/form-data">
<div class="form-group">
<label for="signup-NGO Name" class="col-sm-1 control-label"style="font-size:17px;">Title*</label>


<div class="col-sm-12">
<input type="text" name="Title" class="form-control" id="EventName">
							</div>
								</div>

<div class="form-group">
<label for="signup-NGO Name" class="col-sm-1 control-label"style="font-size:17px;">Description*</label>


<div class="col-sm-12">
<input type="text" name="Description" class="form-control" id="EventDescription">
							</div>
								</div>



<div class="form-group">
<label for="signup-NGO Name" class="col-sm-1 control-label"style="font-size:17px;">Date*</label>


<div class="col-sm-12">
<input data-provide="datepicker" name="Date" data-date-autoclose="true" class="form-control">
							</div>
								</div>



<br><br>
<div class="form-group">
<label for="Image" class="col-sm-2 control-label"style="font-size:17px;margin-top:-32px;">Image*</label>
<div class="col-md-9">
<input type="file" name="Image" id="Image">

									</div>
 	 									</div>

<br><br>



<button type="submit" name="submit" style="width:50%; color:white;margin-bottom:20px;" class="btn btn-primary btn-lg btn-fullrounded center-block">										<span><b>Submit</b></span>
							</button>
								</form>
									</div>
										</div>
	</div>
	<div class="col-md-3"></div>
</div>

						
								
<?php

include("includes/footer.php");

?>	