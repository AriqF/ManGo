<?php require_once 'controllers/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
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

            <h1>Sign Up</h1>
            <form class="form" action="signup.php" method="post">
                <div class="control">
                    <label for="username">Name</label>
                    <input type="text" name="username" class="username"  placeholder="Username" value="<?php echo $username; ?>">
                </div>
                <div class="control">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="email"  placeholder="Email" value="<?php echo $email; ?>">
                </div>
                <div class="control">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="password" placeholder="Password">
                </div>
                <div class="control">
                    <label for="passwordConf">Confirm Password</label>
                    <input type="passwordConf" name="passwordConf" class="passwordConf" placeholder="Confirm Password">
                </div>
                <div class="control">
                    <input type="submit" value="Sign Up" class="button" name="signup-btn">
                </div>
            </form>
            
            <div class="link">
                <p >Already a Member ?&nbsp;<a href="login.php">Sign In</a></p>
            </div>
        </div>
    </section>
</body>
</html>