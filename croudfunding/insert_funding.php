
<?php
define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
include("vendor.php");


$causeno=$_REQUEST["cause_id"];
$name=$_REQUEST["name"];
$email=$_REQUEST["email"];
$mob_no=$_REQUEST["mob_no"];
$amount=$_REQUEST["amt"];

$insert=$db->insert("donator",array("name"=>$_POST['name'],"email"=>$_POST['email'],
 "mobile_no"=>$_POST['mob_no'],"amount"=>$_POST['amt'],"cause_no"=>$_POST['cause_id'],"is_payed"=>'f',)); 
 ?>
 <script> window.location='PaytmKitk/pgredirect.php?cust_sno=<?php echo $insert ; ?>' ; </script>

