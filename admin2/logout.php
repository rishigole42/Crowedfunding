<?php
define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
include("vendor.php");
date_default_timezone_set("Asia/Kolkata");
$date = date("d-m-Y H:i:s");
/*
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
session_destroy();
*/
unset($_SESSION['data']);

$util->flash_message->add("Logout Successfully");
 
$logindetails = $db->insert("logindetails",array("userid"=>$session->user_id,"login_datetime"=>$date,"date"=>date("d-m-Y"),"status"=>"logout"));
//var_dump($_SESSION);

header("location:login.php");


?>