<?php
define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
include("vendor.php");
include("header.php");





$insert=$db->insert("comments",array("name"=>$_POST['name'],"email"=>$_POST['email'],
 "msg"=>$_POST['msg'],"cause_id"=>$_POST['cause_id'])); 
 ?>
 <!--<script> window.location='PaytmKitk/pgredirect.php?cust_sno=<?php echo $insert ; ?>' ; </script>-->
 <script> window.location='cause_details.php?causeno=<?php echo $cause_id; ?>'</script>

