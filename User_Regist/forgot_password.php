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

            <h1>Recover Your Password</h1>

            <p>
                Please enter your email address you used to sign in up on this site 
                and we will assists you in recovering your password
            </p>

            <?php if (count($errors) > 0): ?>
                 <div class="alert alert-danger">
                    <?php foreach($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                 </div>
            <?php endif; ?>

            <form class="form" action="forgot_password.php" method="post">
 
                <div class="control">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="email"  placeholder="Email">
                </div>
                <div class="control">
                    <input type="submit" value="Recover Password" class="button" name="forgot-password">
                </div>

            </form>
            

        </div>
    </section>
</body>
</html>