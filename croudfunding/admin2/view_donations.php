<?php
define("PAGE_ID",3);
include("vendor.php");

include("includes/header.php");
$cause_no=$_REQUEST["ssno"];

?>

 <br/>
 <br/>

<div class="container">
<div class="row">

<div class="col-md-10">
<div class="panel panel-primary">
  <div class="panel-heading" style="background-color:#009cff;">
    <h2 class="panel-title" style="color:white;">Help Us Section</h2>
  </div> 
  <div class="panel-body">
  <h3>Total  Amount:    <?php 
 
 	$resultp=$db->select("donator",'sum(amount)as kt',array("cause_no"=>$cause_no,"is_payed"=>'t'));
                            
 
 foreach ($resultp as $projectp) 
  {
  	
	echo $projectp->kt ." Rs";
  }
  
  ?></h3>
 
  
   
  
<table class="table table-hover">
  <thead>
    <tr>
    
      
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile No</th>
	  <th scope="col">Amount</th>
      <th scope="col">Date</th> 
	   <th scope="col">Cause_Details</th> 
	  <th scope="col">Payement Status</th>
	 
		
    </tr>
  </thead>
  <tbody>
  <?php
  $result=$db->select("donator",'*',array("cause_no"=>$cause_no,"is_payed"=>'t'));
  foreach ($result as $project) 
  {
   ?>
  
  
    <tr class="table-active">
     
      <th scope="row"><?php echo $project->name ; ?></th>
      <th scope="row"><?php echo $project->email ; ?></th>
	  <th scope="row"><?php echo $project->mobile_no ; ?></th>
	  <th scope="row"><?php echo $project->amount ; ?></th>
	  <th scope="row"><?php echo $project->amount ; ?></th>
	  <th scope="row"><?php echo $project->cause_no ; ?></th>
	  	  <th scope="row"><?php echo $project->is_payed ; ?></th>
        
	  
  
	  
	       
   </tr>
    
    <?php } ?> 
    
    
  </tbody>
</table>



</div></div>






</div>
<div class="col-md-2"></div>
</div>
</div>







