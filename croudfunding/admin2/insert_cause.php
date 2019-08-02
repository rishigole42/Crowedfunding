<?php
define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
include("vendor.php");
include("includes/header.php");



if(isset($_POST['submit']))
{
	$insert=$db->insert("donate_fund",array("title"=>$_POST['title'],"name"=>$_POST['name'],"dis"=>$_POST['dis'],"city"=>$_POST['city'],"amount"=>$_POST['amount'],"ldate"=>$_POST['date'],"status"=>'t',"image"=>"error"));
	
	$last_id = $insert;
	$imgsname="";
	
	
	
	
	
      $errors= array();
      $file_name =$last_id ;
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      
      
      
         move_uploaded_file($file_tmp,dirname(__FILE__)."/newsimage/fund/".$file_name.".".$file_ext);
        
		 $imgsname="newsimage/fund/".$file_name.".".$file_ext;
		 $insert=$db->update("donate_fund",array("image"=>$imgsname),array("sno"=>$last_id));
     	if($insert) 
	{
		
		setAlert("Insert Successfully","Added News Successfully","2500","success");
	}
	$causeid=$insert;
	
	$docs=$_FILES["doc"]["tmp_name"];
	
	$i=1;
	foreach($_FILES["doc"]["tmp_name"] as $key=>$tmp_name)
	{
		
		
		
		
		
		
	
      $errors= array();
      $file_name =$last_id."_".$i ;
      $file_size =$_FILES['doc']['size'][$key];
      $file_tmp =$_FILES['doc']['tmp_name'] [$key];
      $file_type=$_FILES['doc']['type'][$key];
      $file_ext=strtolower(end(explode('.',$_FILES['doc']['name'][$key])));
      
      $expensions= array("jpeg","jpg","png");
      
      
      
      
         move_uploaded_file($file_tmp,dirname(__FILE__)."/newsimage/document/".$file_name.".".$file_ext);
        
		 $imgsname="newsimage/document/".$file_name.".".$file_ext;
		 $insert=$db->insert("donate_docoment",array("docomentimage"=>$imgsname,"dsno"=>$last_id),array("sno"=>$last_id));  
     	if($insert)   
	{
		
		setAlert("Insert Successfully","Added News Successfully","2500","success");
	}
	
	
	
	
	$i=$i+1;
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}










?>
<script> window.location='add_cause.php'; </script> 