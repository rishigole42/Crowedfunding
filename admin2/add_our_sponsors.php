<?php
define("PAGE_ID",3);
include("vendor.php");

include("includes/header.php");

?>
<br/>
<br/>
<br/>
<br/>

<div class="container">
	<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-6">
		<div class="panel panel-primary">
  <div class="panel-heading" style="background-color:#009cff;">
    <h2 class="panel-title" style="color:white;">Add Sponsors</h2>
  </div>
  <div class="panel-body">
<form method="post" enctype="multipart/form-data" action="insert_sponsor.php">
    <fieldset>
  
    <div class="form-group">
      <label>Name</label>
             <input type="text" name="name" class="form-control" >
    </div>
    
    
    <div class="form-group">
      <label>Image</label>
             <input type="file" name="image">
    </div>
    
    
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</fieldset>
</form>
</div></div></div>
<div class="col-md-2"></div>
</div>
</div>