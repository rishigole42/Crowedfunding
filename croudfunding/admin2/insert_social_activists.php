<?php

define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
include("vendor.php");
include("includes/header.php");


if(isset($_POST['submit']))

{ 

$ngodata=$db->insert("socialactivist",array("Name"=>$_POST['Name'],"email"=>$_POST['Email'],"ContactNo"=>$_POST['Number'],"Address"=>$_POST['Address'],"password"=>$_POST['Password']));

	


 
$insert=$db->insert("access",array("username"=>$_POST['Email'],"access"=>'2,17',"user_type"=>'SocialActivist') ); 
 


//redirect("display_social_activists.php");


//var_dump($insert); 
}
 
 ?>
 
 
 <script> window.location='display_social_activists.php';</script>


