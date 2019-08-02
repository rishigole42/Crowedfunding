<?php
define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
include("vendor.php");
include("includes/header.php");



?>
<br/>
 <script src="assets/js/summernote-lite.js"></script>
    <link href="assets/css/summernote-lite.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote-lite.css" rel="stylesheet">





<div class="container">
	<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-8">
	<div class="panel panel-primary">
  <div class="panel-heading" style="background-color:#009cff;">
    <h2 class="panel-title" style="color:white;">Add Cause</h2>
  </div>
  <div class="panel-body">
	
	
<form method="post" enctype="multipart/form-data" action="insert_cause.php">
    <fieldset>
    <legend>Add Our Causes</legend>
    <div class="form-group">
      <label>Title</label>
             <input type="text" name="title" class="form-control" >
    </div>
    
    <div class="form-group">
      <label>Name</label>
             <input type="text" name="name" class="form-control" >
    </div>
    
    <div class="form-group">
      <label>Discription</label>
             <textarea class="form-control" id="summernote2" rows="5" name="dis"></textarea>
    </div>
	<script>
     
	  $('#summernote2').summernote({
        placeholder: 'Hello stand alone ui',
        tabsize: 2,
        height: 100
      });
	
    </script>
	<div class="form-group">
      <label>City</label>
             <input type="text" class="form-control"  name="city">
    </div>
	<div class="form-group">
      <label>Amount</label>
             <input type="text" class="form-control" name="amount" >
    </div>
	<div class="form-group">
      <label>Date</label>
             <input type="date" class="form-control"  name="date">
    </div>
    
    
    <div class="form-group">
      <label>Image</label>
             <input type="file" name="image">
    </div>  
	   <div class="form-group">
      <label>Documents</label>
             <input type="file" name="doc[]" multiple>
    </div>  
    
    
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
<br><br><br></fieldset>
</form>
</div></div>
</div>
<div class="col-md-2"></div>
</div>
</div>