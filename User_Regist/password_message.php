<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Forgot Password</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

 <form>
    <h1>C H E C K &nbsp; Y O U R <br>    E M A I L</h1>


        <br>
        <p style="text-align: center; color: white;">
                An email has been sent to your email address to with a link to reset your
                password.
        </p>
 </form>
 
 <!-- using jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 <script>
       $(document).ready(function(){
       	  $(".input").focus(function(){
       	  	 $(this).parent(".form-field").addClass("active")
       	  })
       	  $(".input").blur(function(){
       	  	 if($(this).val()==""){
       	  	   $(this).parent(".form-field").removeClass("active")
       	  	}
       	  })
       })	
 </script>

</body>
</html>