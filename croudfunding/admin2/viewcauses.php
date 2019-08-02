<?php
define("PAGE_ID",3);
include("vendor.php");

include("includes/header.php");

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
<table class="table table-hover">
  <thead>
    <tr>
    
      <th scope="col">Title</th>
      <th scope="col">Name</th>
      <th scope="col">Discription</th>
      <th scope="col">City</th>
	  <th scope="col">Amount</th>
      <th scope="col">Last Date</th> 
	  <th scope="col">image</th>
	        <th scope="col">Action</th> 
			<th scope="col" >Donations</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $result=$db->select("donate_fund",'*');
  foreach ($result as $project) 
  {
   ?>
  
  
    <tr class="table-active">
     
      <th scope="row"><?php echo $project->title ; ?></th>
      <th scope="row"><?php echo $project->name ; ?></th>
      <th scope="row"><?php echo $project->dis ; ?></th>
	  <th scope="row"><?php echo $project->city ; ?></th>
	  <th scope="row"><?php echo $project->amount ; ?></th>
	  <th scope="row"><?php echo $project->ldate ; ?></th>
      <th scope="row"><img style="height:38px; width:auto;" src="<?php echo $project->image ; ?>"></th> 
	  <th><a  class="btn btn-info" href="delete_element.php?element=gallery&ssno=<?php echo $project->sno ;?>">Delete</a></th>   
	  
	    <th><a  class="btn btn-info" href="view_donations.php?ssno=<?php echo $project->sno ;?>">Show Donations</a></th>   
	  
	       
   </tr>
    
    <?php } ?> 
    
    
  </tbody>
</table>



</div></div>






</div>
<div class="col-md-2"></div>
</div>
</div>
