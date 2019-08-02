<?php
define("PAGE_ID",3);
include("vendor.php");

include("includes/header.php");

?>


 <br/>
 <br/>

<div class="container">
<div class="row">
<div class="col-md-1"></div>
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
      <th scope="col">Content</th>
      <th scope="col">Link</th>
	  <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
  <?php
  $result=$db->select("help_us",'*');
  foreach ($result as $project)
  {
   ?>
  
  
    <tr class="table-active">
      <th scope="row"><?php echo $project->title ; ?></th>
      <th scope="row"><?php echo $project->content ; ?></th>
      <th scope="row"><?php echo $project->link ; ?></th>
	  <th><a class="btn btn-info" href="delete_element.php?element=help&ssno=<?php echo $project->sno ;?>">Delete</a></th>
          
   </tr>
    
    <?php } ?> 
    
    
  </tbody>
</table>

</div></div>








</div>
<div class="col-md-2"></div>
</div>
</div>
