<?php

define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
include("vendor.php");
include("header.php");



$insert=$db->insert("ngo_details",array("ngoname"=>$_POST['NgoName'],"ngonumber"=>$_POST['NgoNumber'],"email"=>$_POST['Email'],"password"=>$_POST['Password'])); 
 
 
 
 
var_dump($insert)
 
 
 ?>
 <!--<script> window.location='PaytmKitk/pgredirect.php?cust_sno=<?php echo $insert ; ?>' ; </script>-->
 <script> window.location='cause_details.php?causeno=<?php echo $cause_id; ?>'</script>

