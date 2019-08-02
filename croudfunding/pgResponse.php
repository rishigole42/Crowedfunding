
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<?php
	error_reporting(0);
	include("header.php");
header("Pragma: no-cache");
header("Cache-Control: no-cache");
header("Expires: 0");


// following files need to be included
require_once("./PaytmKitk/lib/config_paytm.php");
require_once("./PaytmKitk/lib/encdec_paytm.php");

$paytmChecksum = "";
$paramList = array();
$isValidChecksum = "FALSE";

$paramList = $_POST;
$paytmChecksum = isset($_POST["CHECKSUMHASH"]) ? $_POST["CHECKSUMHASH"] : ""; //Sent by Paytm pg

//Verify all parameters received from Paytm pg to your application. Like MID received from paytm pg is same as your application’s MID, TXN_AMOUNT and ORDER_ID are same as what was sent by you to Paytm PG for initiating transaction etc.
$isValidChecksum = verifychecksum_e($paramList, PAYTM_MERCHANT_KEY, $paytmChecksum); //will return TRUE or FALSE string.


if($isValidChecksum == "TRUE") {
	//echo "<b>Checksum matched and following are the transaction details:</b>" . "<br/>";
	if ($_POST["STATUS"] == "TXN_SUCCESS") {
		
		
	//	echo "<b>Transaction status is success</b>" . "<br/>";
		//Process your transaction here as success transaction.
		//Verify amount & order id received from Payment gateway with your application's order id and amount.
	}
	else {
		 	define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
		define("PAGE_ID",3);
	 
	
	include("vendor.php");
$str=$_POST["ORDERID"];
		$arr = explode("_", $str);
		$conno=$arr["1"];
		$result=$db->update("donator",array("is_payed"=>'t'),array("sno"=>$conno));
		 $result=$db->select("donator",'*',array("sno"=>$conno));
		   foreach ($result as $project) 
  {
		 
		?>


  <div class="row ">
    
    <div class="col-sm-4"></div>
    <div class="col-sm-4" id="printableArea">
    <div class="panel panel-primary">
      <div class="panel-heading" style="background-color:#0aaaa0;">
      <h3 class="text-center">DONATION CONFIRMATION</h3>
    </div>
    <br/>
    <div class="panel-body">
  <p>Thank you for your donation to people it! We also hope you enjoyed using Give.</p><br/>
  <p><b>Here is your donation receipt for your records.</b></p><br/>
      <table class="table table-striped table-bordered">
  
  <tbody>
    <tr class="table-active">
      <td scope="row">Name</th>
      <td><?php echo $project->name; ?> </td>
    </tr>
	
	<tr class="table-active">
      <td scope="row">Email</th>
      <td><?php echo $project->email; ?> </td>
    </tr>
	<tr class="table-active">
      <td scope="row">Mobile Number</th>
      <td><?php echo $project->mobile_no; ?> </td>
    </tr>
	
  <tr class="table-active">
      <td scope="row"><b>Total Amount</b></th>
      <td><b><?php echo $project->amount ." Rs"; ?></b> </td>
    </tr>
    
  </tbody> 
</table>

<h6 class="text-right"><img src="img/abc.png" style="width:auto; height:100px;"> <br>Foundation</h6>
    </div>
    <div class="col-sm-4"></div>
 
    
</div> 
</div>
<div>
<button style= "background: #0aaaa0 none repeat scroll 0 0;
    border: 1px solid #0aaaa0;
    color: #fff;
    
    font-size: 14px;
    font-weight: bold;
    padding: 10px 15px;
    text-transform: uppercase; "
	class="waves-effect waves-light" onclick="printDiv('printableArea')" value="print Slip" />Print Slip
	</button>   
</div>
<script>function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>   
 
</div>

    
		
		
		
		
		
	<!-- <script> window.location='successed.php'; </script> -->
		<?php

}
		
		
		
		
		
		
	//	echo "<b>Transaction status is failure</b>" . "<br/>";
	}

	if (isset($_POST) && count($_POST)>0 )
	{ 
		foreach($_POST as $paramName => $paramValue) {
			//	echo "<br/>" . $paramName . " = " . $paramValue;
		}
	}
	

}
else {
	echo "<b>Checksum mismatched.</b>";
	//Process transaction as suspicious.
}

?>