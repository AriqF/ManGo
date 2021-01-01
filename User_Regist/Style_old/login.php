<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div class="form-container">
            
            <h1>l o g i n</h1>

            <?php if (count($errors) > 0): ?>
                 <div class="alert alert-danger">
                    <?php foreach($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                 </div>
            <?php endif; ?>

            <form class="form" action="login.php" method="post">
                <div class="control">
                    <label for="username">Name Or Email</label>
                    <input type="text" name="username" class="username"  placeholder="Username or Email" value="<?php echo $username; ?>">
                </div>
                <div class="control">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="password" placeholder="Password">
                </div>
                <div class="control">
                    <input type="submit" value="L o g i n" class="button" name="login-btn">
                </div>
            </form>
            
            <div class="link">
                <p style="color: white;">No Account ? &nbsp;<a href="signup.php">Sign up</a></p>
                <br>
                <a href="forgot_password.php" style="color: white; ">Forgot Your Password?</a>
            </div>
        </div>
    </section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

 <script>
       $(document).ready(function(){
       	  $(".input").focus(function(){
       	  	 $(this).parent(".control").addClass("active")
       	  })
       	  $(".input").blur(function(){
       	  	 if($(this).val()==""){
       	  	   $(this).parent(".control").removeClass("active")
       	  	}
       	  })
       })	
 </script>
</body>
</html>