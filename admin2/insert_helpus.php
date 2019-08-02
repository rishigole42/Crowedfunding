<?php


define("PAGE_ID",3);
include("vendor.php");

include("includes/header.php");




if(isset($_POST['submit']))
{
	$insert=$db->insert("help_us",array("title"=>$_POST['title'],"content"=>$_POST['content'],"link"=>$_POST['links']));
	if($insert)
	{
		setAlert("Insert Successfully","Added  Successfully","250","success");
	
	}
	
	
}
?>
<script> window.location='add_helpus.php'; </script>



