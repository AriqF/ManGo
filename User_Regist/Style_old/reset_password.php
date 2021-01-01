<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <section>
        <div class="form-container">

            <h1>R e s e t &nbsp; Y o u r <br> P a s s w o r d</h1>

            <?php if (count($errors) > 0): ?>
                 <div class="alert alert-danger">
                    <?php foreach($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                    <?php endforeach; ?>
                 </div>
            <?php endif; ?>

            <form class="form" action="reset_password.php" method="post">
                <div class="control">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="password" placeholder="Password">
                </div>
                <div class="control">
                    <label for="passwordConf">Confirm Password</label>
                    <input type="password" name="passwordConf" class="passwordConf" placeholder="Confirm Password">
                </div>
                <div class="control">
                    <input type="submit" value="R e s e t  P a s s w o r d" class="button" name="reset-password-btn">
                </div>
            </form>
        </div>
    </section>
</body>
</html>