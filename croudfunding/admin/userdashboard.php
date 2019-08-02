<?php
define("PAGE_ID",3);
include "vendor.php";
include "includes/header.php";


$result=$db->select("users",'*');
?>

<div class="row">
<div class="col-md-12">


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Type</th>
      <th scope="col">Column heading</th>
      <th scope="col">Column heading</th>
      <th scope="col">Column heading</th>
    </tr>
  </thead>
  <?php foreach ($result as $project)
  {?>
  <tbody>
    <tr class="table-active">
      <th scope="row"><?php echo $project->username ; ?></th>
      <td>Column content</td>
      <td>Column content</td>
      <td>Column content</td>
    </tr>
  <?php } ?>
  </tbody>
</table> 

</div>


</div>


<?php
include "includes/footernav.php";
?>