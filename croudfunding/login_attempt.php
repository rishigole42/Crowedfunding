<?php
define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
include("vendor.php");
date_default_timezone_set("Asia/Kolkata");
$date = date("d-m-Y H:i:s");

var_dump($_POST);

//$_POST['username'] = substr($_POST['username'],2);

//if($_POST['captcha'])
$data = $db->select("useridmanager","*",array("id"=>$_POST['username']));
$data = $data[0];
varPrint($data->user_type);
//die();
$tbl = "";
$heraicy = "";
switch(strtoupper($data->user_type))
{
	case "ADMIN":
	
		$tbl = "users";
		
	break;
	case "FUNDRISER":
		$tbl = "fundrisersdetails";
		echo 'herw';
	break;
	case "NGO":
		$tbl = "ngodetails";
		
	break;
	case "SOCIALACTIVIST":
		$tbl = "socialactivist";
		
	break;
	
	
}
$user_id = $data->id;
varPrint($tbl);     
//varPrint($userName);   
if($tbl == 'users'){
	$data = $db->select($tbl,"*",array("sno"=>$data->id));
}  else{
	$data = $db->select($tbl,"*",array("email"=>$data->id));
} 
//$user_id = $data->id;
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
	$data->userid = $user_id;
	$_SESSION['data']= $data;
	
	
	//$logindetails = $db->insert("logindetails",array("userid"=>$data->user_id,"login_datetime"=>$date,"date"=>date("d-m-Y"),"status"=>"login"));
			
	//echo json_encode(array("status"=>"TRUE","msg"=>"admin2/dashboard.php"));
	header("location:admin2/dashboard.php");
}








?>