<html>
    <head>
        <title>Profile</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <!--My css-->
        <link href="src/userProfileStyle.css" rel="stylesheet">
        
        <!--Font Kit Icon-->
        <script src="https://kit.fontawesome.com/6f51fa838f.js" crossorigin="anonymous"></script>

        <!--google font-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgba(17,17,17,0.75); box-shadow: 0 3px 7px 0 rgba(0,0,0,0.35); font-family: 'Poppins', sans-serif; font-size: 18px;">
                <a class="navbar-brand" href="#">Man-Go</a>   
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> 
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="katakana.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Katakana
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="katakana.php">Katakana</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="katakanaQuiz1.php">Katakana Quiz I</a>
                            <a class="dropdown-item" href="katakanaQuiz2.php">Katakana Quiz II</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="hiragana.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hiragana
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="hiragana.php">Hiragana</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="hiraganaQuiz1.php">Hiragana Quiz I</a>
                            <a class="dropdown-item" href="hiraganaQuiz2.php">Hiragana Quiz II</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="userProfile.php">User Profile</a> 
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="userProfile.php" title="Log Out"><i class="fas fa-sign-out-alt" style="font-size: 1.4em;"></i></a> 
                        </li>  
                    </ul>        
                </div>
            </nav>

            <div class="container fadeInUp">
            <h2>User Profile</h2>
            <hr style="border-top: 1px solid white;">
            <form>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10 infoShow">
                    <input type="text" readonly class="form-control-plaintext" value="email@mail.com" style="color: white; font-size: 18px">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                    <input type="text" readonly class="form-control-plaintext" value="UserName" style="color: white; font-size: 18px">
                    </div>
                </div>
                <p>
                    Untuk mengganti password mu, silahkan klik tombol dibawah &#8595;
                </p>
                <button type="button" class="btn btn-primary" id="passBtn" onclick="forgotPass()">Ubah Password</button>
            </form>
        </div>  
        <script>
            function forgotPass(){
                window.location.replace("User_Regist/forgot_password.php");
            }
        </script>
    </body>