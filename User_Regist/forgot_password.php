<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div class="form-container">

        <?php if (count($errors) > 0): ?>
                 <div class="alert alert-danger">
                    <?php foreach($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                 </div>
            <?php endif; ?>

            <h1>R e c o v e r &nbsp; Y o u r &nbsp; P a s s w o r d</h1>
            <p style="text-align: center;">
                Please enter your email address you used to sign in up on this site 
                and we will assists you in recovering your password.
            </p>
            <br>

            <form class="form" action="forgot_password.php" method="post">
 
                <div class="control">
                    <label for="email">Email</label>
                    <input type="email" name="email"  placeholder="Email">
                </div>
                <div class="control">
                    <input type="submit" value="R e c o v e r  &nbsp; P a s s w o r d" class="button" name="forgot-password">
                </div>

            </form>
            

        </div>
    </section>
</body>
</html>