<?php
define("PAGE_ID",6);
include("vendor.php");

varPrint($_POST);
//die();
if(isset($_POST['submit'])){

     $selct = $db->select("Pdetailconent","*".array("personid"=>$_POST['pid']));

     if($selct){
 $insert = $db->update("Pdetailconent",array("text"=>@$_POST['text']),array("personid"=>$_POST['pid']));	
     }else{
     	 $insert = $db->insert("Pdetailconent",array("personid"=>$_POST['pid'],"text"=>@$_POST['text']));	
     }

   
}   

$NeedyPer = $db->select("needypersondetails","*");	

include("includes/header.php");
?>






<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.js"></script>








<form method='post'  action="homecontent.php">

<div class="container-fluid">



<div class="panel">
									<div class="panel-heading">
										<h3 class="panel-title">Basic Demo</h3>
									</div>
									<div class="panel-body">
										<p>Person Select</p>
										<select class="select-basic select2-hidden-accessible" style="width: 20%;" tabindex="-1" aria-hidden="true" name="pid">
											
												<option value="">Select It..</option>
										<?php foreach($NeedyPer as $Per){?>		
												<option value="<?php echo $Per->sno;?>"><?php echo $Per->Name;?></option>
											<?php } ?>
										</select>
										<span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-x99t-container"><span class="select2-selection__rendered" id="select2-x99t-container" title="Alaska"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
										<br>
										<br>
										<br>
										
<div class="row">				
	<div class="note-editor note-frame panel panel-default">
<textarea class="summernote" id="summernote" name="text"></textarea>
						
</div>
</div>




<button type="submit" name="submit" class="btn btn-success">Success</button>	
									</div>
								</div>
</div>
</form>




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

