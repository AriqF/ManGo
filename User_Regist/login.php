<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login form</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

 <form form class="form" action="login.php" method="post">
	   <h1>L O G I N</h1>

	   <?php if (count($errors) > 0): ?>
                 <div class="alert alert-danger">
                    <?php foreach($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                 </div>
		<?php endif; ?>
		<br>
		<br>
 	  <div class="form-field">
 	  	  <label>Username Or Email</label>
 	  	  <input type="text" name="username" class="input" value="<?php echo $username; ?>">
 	  	  <div class="border-line">
 	  	  </div>
 	  </div>
 	  <div class="form-field">
 	  	  <label>Password</label>
 	  	  <input type="password" name="password" class="input">
 	  	  <div class="border-line">
 	  	  </div>
 	  </div>
 	  <div class="form-field">
			 <button type="submit" class="button" style="font-family: 'Ubuntu', sans-serif; font-size: 15px;" name="login-btn">L O G I N</button>
	   </div>
	   <div class="link">
                <p>No Account ? &nbsp;<a href="signup.php">Sign up</a></p>
                <br>
                <a href="forgot_password.php" style="color: white; ">Forgot Your Password?</a>
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