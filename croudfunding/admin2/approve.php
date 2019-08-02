<?php
define("PAGE_ID",3);
include("vendor.php");
//var_dump($_POST);//die();	
if($_POST){
	$up = $db->update("needypersondetails",array("status"=>$_POST['Approve']),array("sno"=>$_POST['sno']));
	redirect("approve.php");
}
include("includes/header.php");

?>
<div class="main-content">
<div class="content-heading clearfix">
						<div class="heading-left">
							<h1 class="page-title">NEEDY PEOPLE</h1>
							<p class="page-subtitle"></p>
							
							
						</div>
	


<form method="post" action="approve.php">
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
     
	  <th scope="col">MedicalInvoice</th>
      <th scope="col">Description</th>
      <th scope="col">&nbsp;</th>
      

      
      
    </tr>
  </thead>
  <tbody>
  <?php
  //var_dump($session);
  if($session->username=='admin'){
  	 $result=$db->select("needypersondetails",'*',array("status"=>"PENDING"));
  }else{
  	 $result=$db->select("needypersondetails",'*',array("Feed_by"=>$session->email,"status"=>"PENDING"));
  }//var_dump($result);
 
  foreach ($result as $project)
  {
   ?>
  
  
    <tr class="table-active">
      <th scope="row"><?php echo $project->Name; ?></th>
      <th scope="row"><?php echo $project->InitialAmount; ?></th>
      <th scope="row"><?php echo $project->ContactNo; ?></th>
      <th scope="row"><?php echo $project->Address; ?></th>
	  <th scope="row"><?php echo $project->idproof; ?></th>
     
      <th scope="row"><?php echo $project->medicalinvoice; ?></th>
      <th scope="row"><?php echo $project->description; ?></th>
      <th scope="row"><input type="submit"  name="Approve" value="Approve" class="btn btn-primary btn-lg btn-fullrounded center-block">	</th>
            
	  <input type="hidden" name="sno" value="<?php echo $project->sno;?>">
          
   </tr>
    
    <?php } ?> 
    
    
  </tbody>
</table>

</div></div>








</div>
<div class="col-md-2"></div>
</div>
</form>
</div>


<?php
include("includes/footer.php");
?>
