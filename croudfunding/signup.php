<?php
define("PAGE_ID",3);
define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
include("vendor.php");




if(isset($_REQUEST["submit"]))
{
	
$type=$_REQUEST["donate"];
if($type=="ngo")
{
	$chk = $db->select("ngodetails","*",array("email"=>$_POST['Email']));
	if($chk){
		echo json_encode(array("status"=>"alert","msg"=>"Already exist!"));  
		return FALSE;
	}
	$insert=$db->insert("ngodetails",array("Name"=>$_POST['Name'],"email"=>$_POST['Email'],"password"=>$_POST['Password'],"ContactNo"=>$_POST['Number'],"Address"=>$_POST['Address']));
   
    $access = $db->insert("access",array("username"=>$_POST['Email'],"access"=>'2,3',"user_type"=>'NGO'));

if($insert){
	 	redirect("login.php");
	 }
}
elseif($type=="socialactivist")
{
	$chk = $db->select("ngodetails","*",array("email"=>$_POST['Email']));
	if($chk){
		echo json_encode(array("status"=>"alert","msg"=>"Already exist!"));
		return FALSE;
	}
	$insert=$db->insert("socialactivist",array("Name"=>$_POST['Name'],"email"=>$_POST['Email'],
 "password"=>$_POST['Password'],"ContactNo"=>$_POST['Number'],"Address"=>$_POST['Address']));
     $access = $db->insert("access",array("username"=>$_POST['Email'],"access"=>'2,3',"user_type"=>'SocialActivist'));
	 if($insert){
	 	redirect("login.php");
	 }
	}
elseif($type=="fundriser")
{
	$chk = $db->select("ngodetails","*",array("email"=>$_POST['Email']));
	if($chk){
		echo json_encode(array("status"=>"alert","msg"=>"Already exist!"));
		return FALSE;
	}
	$insert=$db->insert("fundrisersdetails",array("Name"=>$_POST['Name'],"email"=>$_POST['Email'],
 "password"=>$_POST['Password'],"ContactNo"=>$_POST['Number'],"Address"=>$_POST['Address']));
     $access = $db->insert("access",array("username"=>$_POST['Email'],"access"=>'2,3',"user_type"=>'FundRiser'));
	 
	 if($insert){
	 	redirect("login.php");
	 }
	}	
}

include("includes/header.php");
?>
	


<div class="container"style="background-image: url('img/signup cover.jpg'); background-repeat: round; width:100%; >
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6" style="margin-bottom: 50px; margin-top: 80px;">
		<div class="panel" style="border: 0px solid black;-webkit-box-shadow: -1px 5px 10px 11px rgba(0,0,0,0.75);
-moz-box-shadow: -1px 5px 10px 11px rgba(0,0,0,0.75);
box-shadow: -1px 5px 10px 11px rgba(0,0,0,0.75);
    background-color: rgba(120,190,180,0.5); border-radius: 20px 20px 20px 20px;
-moz-border-radius: 20px 20px 20px 20px;
-webkit-border-radius: 20px 20px 20px 20px;
border: 0px solid #000000;" >
<div class="panel-heading">
<h3 class="panel-title" style="text-align: center; margin-top:10px; font-size: 40px; color: white;"><b>SIGN UP</b></h3>
					</div>


<div class="panel-body">
<form class="form-horizontal label-left" action="" method="POST">
<div class="form-group">
<label for="signup-NGO Name" class="col-sm-1 control-label" style="color: white; font-size: 18px;">Name*</label>


<div class="col-sm-12">
<input type="text" name="Name" class="form-control" id="signup-NGO Name">
							</div>
								</div>


<div class="form-group">
<label for="signup-NGO Name" class="col-sm-1 control-label" style="color: white; font-size: 18px;">Email*</label>


<div class="col-sm-12">
<input type="email" name="Email" class="form-control" id="signup-NGO Name">
							</div>
								</div>

<div class="form-group">
<label for="signup-NGO Name" class="col-sm-1 control-label" style="color:white; font-size:18px; ">Password*</label>


<div class="col-sm-12">
<input type="password" name="Password" class="form-control" id="signup-NGO Name">
							</div>
								</div>

<div class="form-group">
<label for="signup-NGO Name" class="col-sm-1 control-label" style="color:white; font-size:18px;">Contact*</label>


<div class="col-sm-12">
<input type="text" name="Number" class="form-control" id="signup-NGO Name">
							</div>
								</div>


<div class="form-group">
<label for="signup-NGO Name" class="col-sm-1 control-label" style="color:white; font-size:18px;">Address*</label>


<div class="col-sm-12">
<input type="text" name="Address" class="form-control" id="signup-NGO Name">
							</div>
								</div>



<div class="form-group">
<label for="signup-email" class="col-sm-1 control-label" style="color:white; font-size:18px;">Select*</label>
<div class="col-sm-12">

<select class="form-control" name="donate" id="exampleSelect1">
        <option><b>select</b></option>
        <option value="ngo"><b>NGO</b> </option>
        <option value="socialactivist"><b>SOCIAL ACTIVIST</b></option>
		<option value="INDIVIDUAL"><b>INDIVIDUAL</b></option>
      </select>

						</div>
							</div>
<br><br>



<button type="submit" name="submit" style="width:50%; color:#10332d;margin-bottom:20px;" class="btn btn-primary btn-lg btn-fullrounded center-block">										<span><b>Submit</b></span>
							</button>
								</form>
									</div>
										</div>
	</div>
	<div class="col-md-3"></div>
</div>

					
								
<?php

include("footer.php");

?>	



						