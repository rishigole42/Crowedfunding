<?php

define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
include("vendor.php");
include("includes/header.php");


if(isset($_POST['submit']))

{


$ngodata=$db->insert("ngo_details",array("ngoname"=>$_POST['Name'],"email"=>$_POST['Email'],"contact"=>$_POST['Number'],"password"=>$_POST['Password'])); 


$insert=$db->insert("access",array("username"=>$_POST['Email'],"access"=>'2,17',"user_type"=>'NGO') ); 

 
 //var_dump($insert);
//redirect("display_ngo_details");
}	



 
 ?>
 
 
 <script> window.location='display_ngo_details.php';</script>

