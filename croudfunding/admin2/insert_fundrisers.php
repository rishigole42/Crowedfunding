<?php

define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
include("vendor.php");
include("includes/header.php");

if(isset($_POST['submit']))

{ 



	



$insert=$db->insert("fundrisersdetails",array("Name"=>$_POST['Name'],"email"=>$_POST['Email'],"ContactNo"=>$_POST['PhoneNumber'],"Address"=>$_POST['Address'])); 
 




 
  
   $insert=$db->insert("access",array("username"=>$_POST['Email'],"access"=>'2,17',"user_type"=>'FundRiser') );
 
 
 
 
//redirect("display_fundrisers.php");

}
//var_dump($insert); 


 
 ?>
 
 
 <script> window.location='display_fundrisers.php';</script>

