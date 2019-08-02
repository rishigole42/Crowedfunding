<?php
define("PAGE_ID",3);
include "vendor.php";
include "includes/header.php";
if(isset($_POST['submit']))
{
	$insert=$db->insert("users",array("name"=>$_POST['name'],"username"=>$_POST['email'],"password"=>$_POST['pass'],"status"=>"active"));
	if($insert)
	{
		setAlert("insert successfully");
		redirect("add.php");
	}
	
	
}




?>
<div class="row">
<div class="col-md-8">
<form  method="post">
  <fieldset>
    <legend>Create User</legend>
   
    <div class="form-group">
      <label for="exampleInputEmail1">Name</label>
      <input type="text" class="form-control" name="name" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
      
    </div>
	 <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
	
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" name="pass" id="exampleInputPassword1" placeholder="Password">
    </div>
    
    </fieldset>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </fieldset>
</form>
</div></div>














<?php
include "includes/footernav.php";
?>
