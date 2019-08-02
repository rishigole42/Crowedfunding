<?php
define("PAGE_ID",3);
include("vendor.php");

include("includes/header.php");


if(isset($_POST['submit']))
{
	$insert=$db->insert("slider",array("title"=>$_POST['title'],"content"=>$_POST['content'],"donate"=>$_POST['donate'],"learn"=>$_POST['learn'],"image"=>"errors"));

$last_id = $insert;
	$imgsname=""; 
	
	 $errors= array();
      $file_name =$last_id ;
      $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $expensions= array("jpeg","jpg","png");
      
      
      
      
         move_uploaded_file($file_tmp,dirname(__FILE__)."/newsimage/slider/".$file_name.".".$file_ext);
        
		 $imgsname="newsimage/slider/".$file_name.".".$file_ext;
		 $insert=$db->update("slider",array("image"=>$imgsname),array("sno"=>$last_id));
     	if($insert)
	{
		
		setAlert("Insert Successfully","Added News Successfully","2500","success");
	}
	
	
}

?>

<script> window.location='add_slider.php'; </script>