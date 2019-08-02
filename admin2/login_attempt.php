<?php
define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
include("vendor.php");
date_default_timezone_set("Asia/Kolkata");
$date = date("d-m-Y H:i:s");

//var_dump($_POST);

//$_POST['username'] = substr($_POST['username'],2);

//if($_POST['captcha'])
$data = $db->select("useridmanager","*",array("id"=>$_POST['username']));
$data = $data[0];
//varPrint($data);
$tbl = "";
$heraicy = "";
switch(strtoupper($data->user_type))
{
	case "USER":
	
		$tbl = "users";
		
	break;
	case "FundRiser":
		$tbl = "fundriser_details";
		
	break;
	case "NGO":
		$tbl = "ngo_details";
		
	break;
	case "SocialActivist":
		$tbl = "social_activist_details";
		
	break;
	
	
}
$user_id = $data->id;
//varPrint($tbl);     
//varPrint($userName);      
$data = $db->select($tbl,"*",array("email"=>$data->id));
//var_dump($data);

if($data)
{
	$data = $data[0];
	
	if($data->password!=$_POST['password'])
	{
		echo json_encode(array("status"=>"FALSE","msg"=>"username or password is incorrect"));
		return FALSE;
	}

	
	
	
	
	$access = $db->select("access","access",array("username"=>$user_id));
	
	$access = ($access)?$access[0]:"";
	
	
	$data->access = $access;
	$_SESSION['data']= $data;
	
	//$logindetails = $db->insert("logindetails",array("userid"=>$data->user_id,"login_datetime"=>$date,"date"=>date("d-m-Y"),"status"=>"login"));
			
	echo json_encode(array("status"=>"TRUE","msg"=>"dashboard.php"));
}








?>