<?php
define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
include("vendor.php");


//var_dump($_POST);

$_POST['username'] = substr($_POST['username'],2);


$data = $db->select("useridmanager","*",array("sno"=>$_POST['username']));
$data = $data[0];
$tbl = "";
$heraicy = "";
switch($data->user_type)
{
	case "user":
	
		$tbl = "users";
		$heraicy = 1;
	break;
	case "superagent":
		$tbl = "superagentdetails";
		$heraicy = 2;
	break;
	case "agent":
		$tbl = "agentdetails";
		$heraicy = 3;
	break;
	case "subagent":
		$tbl = "subagentdetails";
		$heraicy = 4;
	break;
	case "client":
		$tbl = "clientdetails";
		$heraicy = 5;
	break;
	
}
$user_id = $data->id_no;

$data = $db->select($tbl,"*",array("sno"=>$data->id_no));
//var_dump($data);

if($data)
{
	$data = $data[0];
	
	if($data->password!=$_POST['password'])
	{
		echo json_encode(array("status"=>"FALSE","msg"=>"username or password is incorrect"));
		return FALSE;
	}

	$data->user_id = $user_id;
	$data->hr_order = $heraicy;
	
	
	
	$access = $db->select("access","access",array("username"=>$data->username));
	$access = $access[0];
	$data->access = $access;
	$_SESSION['data']= $data;
	echo json_encode(array("status"=>"TRUE","msg"=>"dashboard.php"));
}








?>