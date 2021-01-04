<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html>
<head>
<title>Forgot Password</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<form class="form" action="forgot_password.php" method="post">
 <h1>R E C O V E R &nbsp; Y O U R &nbsp; P A S S W O R D</h1>

	   <?php if (count($errors) > 0): ?>
                 <div class="alert alert-danger">
                    <?php foreach($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                 </div>
		<?php endif; ?>
		<br>
        <br>
        <p style="text-align: center; color: white;">
                Please enter your email address you used to sign in up on this site 
                and we will assists you in recovering your password.
            </p>
        <br>

       <div class="form-field">
 	  	  <label>Email</label>
 	  	    <input type="email" name="email" class="input">
 	  	  <div class="border-line">
 	  	  </div>
 	  </div>

 	  <div class="form-field">
			 <button type="submit" class="button" style="font-family: 'Ubuntu', sans-serif; font-size: 15px; cursor:pointer;" name="forgot-password">
             R E C O V E R &nbsp; P A S S W O R D </button>
	   </div>
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
