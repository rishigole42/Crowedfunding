<?php
$util = array();
//unset($_SESSION['util']);
if(empty($_SESSION['util']))
unset($_SESSION['util']);

if(!isset($_SESSION['util']))
{
	$util['flash_message'] = new FlashMessage();
	$_SESSION['util'] = serialize($util);
}

else
$util = unserialize($_SESSION['util']);

$util = (object)$util;

//varPrint($util);

$session = @$_SESSION['data'];




$db = new database();
$transaction = new LedgerTransaction($db);
$heraicy = new HierachyManager($db);
?>