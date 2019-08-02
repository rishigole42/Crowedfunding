<?php

define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
include("vendor.php");
include("includes/header.php");

if(isset($_POST['submit']))

{ 


if($_POST['donate']=="ngo")
{
	
$insert=$db->insert("ngo_details",array("ngoname"=>$_POST['Name'],"email"=>$_POST['Email'],"contact"=>$_POST['Number'],"password"=>$_POST['Password'])); 
 

$insert=$db->insert("access",array("username"=>$_POST['Email'],"access"=>'2,17',"user_type"=>'NGO'));  
}else
{
	
$insert=$db->insert("social_activist_details",array("name"=>$_POST['Name'],"email"=>$_POST['Email'],"contact"=>$_POST['Number'],"password"=>$_POST['Password'])); 
}

 
  
    
 
 
//redirect("display_fundrisers.php");

}
//var_dump($insert); 

  
 ?>
 
 


