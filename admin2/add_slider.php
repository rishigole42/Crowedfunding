<?php
define("PAGE_ID",3);
include("vendor.php");

include("includes/header.php");

?>


<div class="container">


<div class="row">

<br><br>
<div class="col-md-1"></div>
<div class="col-md-8">
<div class="panel panel-primary">
  <div class="panel-heading" style="background-color:#009cff;">
    <h2 class="panel-title" style="color:white;">Add Slider</h2>
  </div>
  <div class="panel-body">
   
<form method="post" enctype="multipart/form-data" action="insert_slider.php">
  <fieldset>
   
    <div class="form-group">
      <label>Title</label>
      <input type="text" class="form-control" name="title" placeholder="Enter email">
  	</div>
	
	<div class="form-group">
      <label>Content</label>
             <textarea class="form-control" name="content" rows="3"></textarea>
    </div>
    
    <div class="form-group">
      <label>Donate url</label>
      <input type="text" class="form-control" name="donate" placeholder="Enter email">
  	</div>
	
	<div class="form-group">
      <label>Learn url</label>
      <input type="text" class="form-control" name="learn" placeholder="Enter email">
  	</div>
  	
  	<div class="form-group">
      <label >Image</label>
      <input type="file" name="image">
    </div>
    
	
	
	
	
	
    
    </fieldset>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>

</div>
</div></div>
</div>
</div>
<?php

include("includes/footer.php");

?>