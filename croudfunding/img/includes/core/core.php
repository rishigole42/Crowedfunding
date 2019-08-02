<?php
function base_url(){
  
 echo 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF'])."/";
}

function varPrint($var)
{
	if(Env!="PRODUCTION")
	var_dump($var);
}


function redirect($link)
{
	header("location:".$link);
	exit();
}

session_start();

if(Env=="PRODUCTION")
ini_set('display_errors', 0);

if(!defined('BYPASS_PAGE_ID')) define("BYPASS_PAGE_ID",FALSE);

if(!defined('PAGE_ID') && BYPASS_PAGE_ID==FALSE) die("PAGE ID not defined");

if(!defined('BYPASS_SESSION')) define("BYPASS_SESSION",FALSE);
if(BYPASS_SESSION==FALSE)
{
	
	if(!isset($_SESSION['data'])) header("location:logout.php");
}


	$_SESSION['PASSTOJS'] = array();
	
	function isJS($path)
	{
		file_exists($path) or die("js file not found ".$path);
	}

	function setJS($array)
	{
		foreach($array as $key=>$arr)
		{
			$_SESSION['PASSTOJS'][$key] = $arr;
		}
	}
	
	function getJS($path)
	{
	//	extract()
		if(isset($_SESSION['PASSTOJS']))
		extract($_SESSION['PASSTOJS']);
		include($path);
		unset($_SESSION['PASSTOJS']);
	}



isJS(dirname(__FILE__)."/../fileJS/".basename($_SERVER['PHP_SELF']));


?>