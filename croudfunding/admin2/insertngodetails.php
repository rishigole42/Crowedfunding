<?php

define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
include("vendor.php");
include("includes/header.php");


if(isset($_POST['submit']))
{


$ngodata=$db->insert("ngodetails",array("Name"=>$_POST['Name'],"email"=>$_POST['Email'],"password"=>$_POST['Password'],"ContactNo"=>$_POST['Number'],"Address"=>$_POST['Address'])); 


$insert=$db->insert("access",array("username"=>$_POST['Email'],"access"=>'2,8,9,10',"user_type"=>'NGO')); 
   
 

//redirect("headngo.php");
}	

 ?>
 
 <script>alert("Record Saved Successfully");</script>
 <script>window.location="headngo.php"</script>
 
 

