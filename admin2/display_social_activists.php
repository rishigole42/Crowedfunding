<?php
define("PAGE_ID",3);
include("vendor.php");

include("includes/header.php");

?>


<div class="main-content">
<div class="content-heading clearfix">
						<div class="heading-left">
							<h1 class="page-title">DISPLAY SOCIAL ACTIVIST</h1>
							<p class="page-subtitle"></p>
							
							
						</div>
	<div class="header-right">
<li style="float: right;"><a href="add_social_activists.php">ADD SOCIAL ACTIVIST</a></li></div>
					</div>



<div class="row">
<div class="col-md-12">
<div class="panel panel-primary">
  
  <div class="panel-body">
<table class="table table-hover">
  <thead>
  <tbody>
  <?php
  $result=$db->select("social_activist_details",'*');
  foreach ($result as $project)
  {
   ?>
  
  
    <tr class="table-active">
      <th scope="row"><?php echo $project->name; ?></th>
      <th scope="row"><?php echo $project->email ; ?></th>
      <th scope="row"><?php echo $project->contact; ?></th>
	  
          
   </tr>
    
    <?php } ?> 
    
    
  </tbody>
</table>

</div></div>








</div>
<div class="col-md-2"></div>
</div>
</div>
