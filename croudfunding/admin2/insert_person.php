<?php
define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
include("vendor.php");
include("includes/header.php");

if(isset($_POST['submit']))
{ 


$target_dir = "includes/img/";
$target_file = $target_dir . basename($_FILES["ID-Proof"]["name"]);
$p=$_FILES["ID-Proof"]["name"];
$uploadOk = 1;
//var_dump($p);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


$a=move_uploaded_file($_FILES["ID-Proof"]["tmp_name"], $target_file); 

$target_dir = "includes/img/";
$target_file = $target_dir . basename($_FILES["Image"]["name"]);
$q=$_FILES["Image"]["name"];
$uploadOk = 1;
//var_dump($q);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


$b=move_uploaded_file($_FILES["Image"]["tmp_name"], $target_file); 

$target_dir = "includes/img/";
$target_file = $target_dir . basename($_FILES["MedicalInvoice"]["name"]);
$r=$_FILES["MedicalInvoice"]["name"];
$uploadOk = 1;
//var_dump($r);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


$c=move_uploaded_file($_FILES["MedicalInvoice"]["tmp_name"], $target_file); 



$insert=$db->insert("needypersondetails",array("Name"=>$_POST['Name'],"InitialAmount"=>$_POST['Amount'],"ContactNo"=>$_POST['ContactNumber'],"Address"=>$_POST['Address'],"idproof"=>$p,"photo"=>$q,"medicalinvoice"=>$r,"description"=>$_POST['Description'])); 
 
  
  // $insert=$db->insert("access",array("username"=>$_POST['Email'],"access"=>'2,17',"user_type"=>'NeedyPeople') );

 
//redirect("display_person.php");

}
//var_dump($insert); 


 
 ?>
 
 
 <script> window.location='display_person.php';</script>

