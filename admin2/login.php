<?php
define("BYPASS_PAGE_ID",TRUE);
define("BYPASS_SESSION",TRUE);
include("vendor.php");

?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login</title>

    <link href="includes/css/bootstrap.min.css" rel="stylesheet">
    <link href="includes/font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="includes/css/animate.css" rel="stylesheet">
    <link href="includes/css/style.css" rel="stylesheet">

</head>

<body class="gray-bg">

<?php  if($util->flash_message->is_render()){?>

<div class="alert alert-danger text-center">
                                <?php echo $util->flash_message->render(); ?>
                            </div>
							<?php } ?>
    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
          
            <h3>Welcome to IN+</h3>
           
                
            </p>
            <p>Login in. To see it in action.</p>
			
            <form class="m-t" method="post" role="form" id="login" action="#">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username" required="">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                </div>
                <button type="button" id="login-btn" class="btn btn-primary block full-width m-b">Login</button>

                <a href="#"><small>Forgot password?</small></a>
                <p class="text-muted text-center"><small>Do not have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="register.html">Create an account</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="includes/js/jquery-3.1.1.min.js"></script>
    <script src="includes/js/popper.min.js"></script>
    <script src="includes/js/bootstrap.js"></script>

	<script>
		
		$(function(){
			$("#login-btn").click(function(){
				
				
				$.ajax({
		           type: "POST",
		           url: "login_attempt.php",
		           dataType:"json",
		           data: $("#login").serialize(), // serializes the form's elements.
		           success: function(data)
		           {
		           	console.log(data);
		           	console.log(data.status);
		               if(data.status=="TRUE")
		               window.location.href = data.msg;
		           }
		         });
				
				
			});
			
			
			
		});
	</script>
</body>



</html>
