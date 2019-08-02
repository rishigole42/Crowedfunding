<?php
define("PAGE_ID",3);
include("vendor.php");

include("includes/header.php");

?>
<div class="main-content">
<div class="content-heading clearfix">
						<div class="heading-left">
							<h1 class="page-title">NEEDY PEOPLE</h1>
							<p class="page-subtitle"></p>
							
							
						</div>
	<div class="header-right">
<li style="float: right;"><a href="needypersonadd.php">ADD NEEDY PEOPLE</a></li></div>
					</div>



<div class="row">
<div class="col-md-12">
<div class="panel panel-primary">
  
  <div class="panel-body">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Initial Amount</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Address</th>
	  <th scope="col">ID-Proof</th>
      <th scope="col">Image</th>
	  <th scope="col">MedicalInvoice</th>
      <th scope="col">Description</th>
      

      
      
    </tr>
  </thead>
  <tbody>
  <?php
  $result=$db->select("needypersondetails",'*',array("Feed_by"=>$session->email));
  foreach ($result as $project)
  {
   ?>
  
  
    <tr class="table-active">
      <th scope="row"><?php echo $project->Name; ?></th>
      <th scope="row"><?php echo $project->InitialAmount; ?></th>
      <th scope="row"><?php echo $project->ContactNo; ?></th>
      <th scope="row"><?php echo $project->Address; ?></th>
	  <th scope="row"><?php echo $project->idproof; ?></th>
      <th scope="row"><?php echo $project->photo; ?></th>
      <th scope="row"><?php echo $project->medicalinvoice; ?></th>
      <th scope="row"><?php echo $project->description; ?></th>
            
	  
          
   </tr>
    
    <?php } ?> 
    
    
  </tbody>
</table>

</div></div>








</div>
<div class="col-md-2"></div>
</div>
</div>


<?php
include("includes/footer.php");
?>
