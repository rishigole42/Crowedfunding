<?php
define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
include("vendor.php");

define("PAGE_ID",17);


if(isset($_POST['submit']))
{ 	

$target_dir = "includes/img/";
$target_file = $target_dir . basename($_FILES["ID-Proof"]["name"]);
//$p=$_FILES["ID-Proof"]["name"];
$uploadOk = 1;
//var_dump($p);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


//$a=move_uploaded_file($_FILES["ID-Proof"]["tmp_name"], $target_file); 

$target_dir = "includes/img/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
$q=$_FILES["image"]["name"];
$uploadOk = 1;
var_dump($q);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


$b=move_uploaded_file($_FILES["image"]["tmp_name"], $target_file); 

 



$insert=$db->insert("blog",array("blogtital"=>$_POST['blogtital'],"blog"=>$_POST['text'],"image"=>$q)); 
 
  
  // $insert=$db->insert("access",array("username"=>$_POST['Email'],"access"=>'2,17',"user_type"=>'NeedyPeople') );
 
//redirect("display_person.php");

}


include("includes/header.php");


?>










<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>













<div class="main-content">
<div class="content-heading clearfix">
						<div class="heading-left">
							<h1 class="page-title">ADD Blog</h1>
							<p class="page-subtitle"></p>
						</div>
					
</div>

<div class="container-fluid">
<div class="col-md-2"></div>
	<div class="col-md-8">

<div class="panel">
<div class="panel-body">
<form class="form-horizontal label-left" action="add_blog.php" method="POST" enctype="multipart/form-data">

<div class="container-fluid">
	<div class="row">
	
	
   
   <div class="col-md-12" style="padding-right: 20px;">
       <div class="form-group"> 
       <label for="blog Tilal" style="color: #000; font-size: 17px;" class="col-sm-3 control-label">Blog Title</label>
       <input type="text" name="blogtital" class="form-control" id="blogtital">
    	</div>
    	
	 </div>

	

	
	</div>
	<br>
	
	    
<div class="row">				
	<div class="note-editor note-frame panel panel-default">
<textarea class="summernote" id="summernote" name="text"></textarea>
						
</div>
</div>	    
	

<br>

<div class="row">				
<div class="col-md-12" style="padding-left: 20px;">
		
<div class="form-group">
<label for="Image" style="color: #000; font-size: 17px;" class="col-sm-2 control-label">Image</label>
<div class="col-md-9">
<input type="file" name="image" id="image">

									</div>
 	 									</div>	
    </div>  
					
	    </div>



	
								
</div>
	<br><br>
	<div class="row">
	<div class="col-md-12">
		
		
	</div>
	

	
	<input type="submit" style="width:40%;" name="submit" class="btn btn-primary btn-lg btn-fullrounded center-block">			<br><br>								
</div>

</form>

    
</div>			

    
    	
	

    </div>
      								
</div>	


   
		
		</div>			
		</div>		











<script>
      $('#summernote').summernote({
        placeholder: 'Hello bootstrap 4',
        tabsize: 2,
        height: 100
      });
    </script>



<?php

include("includes/footer.php");

?>