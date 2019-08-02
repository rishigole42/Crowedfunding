<?php
define("PAGE_ID",3);
include("vendor.php");

include("includes/header.php");

?>

<div class="main-content">

<div class="content-heading clearfix">
						<div class="heading-left">
							<h1 class="page-title">Welcome to Klorofil Pro</h1>
							<p class="page-subtitle">Bootstrap admin dashboard template with drag and drop panel</p>
						</div>
						<ul class="breadcrumb">
							<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
							<li><a href="#">Dashboards</a></li>
							<li class="active">Dashboard v1</li>
						</ul>
</div>

<div class="container-fluid">
<div class="row">

<div class="col-md-12">
<div class="panel panel-primary">
  <div class="panel-heading" style="background-color:#009cff;">
    <h2 class="panel-title" style="color:white;">View Gallery</h2>
  </div>
  <div class="panel-body">
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      <th scope="col">Image</th>
	  <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
  $result=$db->select("gallery",'*');
  foreach ($result as $project)
  {
   ?>
  
  
    <tr class="table-active">
      <th scope="row"><?php echo $project->title ; ?></th>
      <th scope="row"><?php echo $project->content ; ?></th>
      <th scope="row"><img style="height:38px; width:auto; "src="<?php echo $project->image ; ?>"></th>
	  <th><a  class="btn btn-info" href="delete_element.php?element=gallery&ssno=<?php echo $project->sno ;?>">Delete</a></th>
          
   </tr>
    
    <?php } ?> 
    
    
  </tbody>
</table>

</div></div>








</div>

</div>
</div>
</div>