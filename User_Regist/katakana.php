<?php 

require_once 'controllers/authController.php'; 

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Man-Go | Belajar Katakana</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <!--My css-->
        <link rel="stylesheet" href="../src/learnPageStyle.css">

        <!--Font Kit Icon-->
        <script src="https://kit.fontawesome.com/6f51fa838f.js" crossorigin="anonymous"></script>
        
        <!--google font-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
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
                    <a class="nav-link" href="userProfile.php"><?php echo $_SESSION['username']; ?></a>
                    </li>    
                    <li class="nav-item">
                        <a class="nav-link" href="index1.php?logout=1" title="Log Out"><i class="fas fa-sign-out-alt" style="font-size: 1.4em;"></i></a> 
                    </li>   
                </ul>        
            </div>
        </nav>

        <div class="content">
            <div class="container">
                <div class="jumbotron fadeInDown" id="header">
                    <h2>
                        Katakana
                    </h2>
                    <hr>
                    <p style="text-align: justify; font-size: 18px;">
                        Berbeda dengan Hiragana, Katakana digunakan untuk menuliskan nama tempat yang tidak memiliki Kanji, nama orang asing, kata singkatan, dan kosa kata asing maupun serapan.
                    </p>
                    <hr>
                    <p>
                        Jangan lupa scroll kebawah ya untuk latihan mengukur kemampuan Katakana mu!
                    </p>    
                </div>
                <div class="row">
                    <table class="table-sm">
                        <tbody>
                            <tr>
                                <table class="table-sm mx-auto fadeInRight">    <!--left side table-->
                                    <tbody> 
                                        <tr>
                                            <td><img class="img-fluid" src="../src/img//kata/a.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/i.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/u.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/e.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/o.png"></td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-fluid" src="../src/img//kata/ka.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/ki.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/ku.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/ke.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/ko.png"></td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-fluid" src="../src/img//kata/sa.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/shi.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/su.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/se.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/so.png"></td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-fluid" src="../src/img//kata/ta.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/chi.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/tsu.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/te.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/to.png"></td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-fluid" src="../src/img//kata/ha.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/hi.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/hu.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/he.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/ho.png"></td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-fluid" src="../src/img//kata/na.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/ni.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/nu.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/ne.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/no.png"></td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-fluid" src="../src/img//kata/ma.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/mi.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/mu.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/me.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/mo.png"></td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-fluid" src="../src/img//kata/ra.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/ri.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/ru.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/re.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/ro.png"></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </tr>
                            <tr class="spacer">                       
                            </tr>
                            <tr>  
                                <table class="table-sm mx-auto fadeInLeft">    <!--Right side table-->
                                    <tbody>
                                        <tr>
                                            <td><img class="img-fluid" src="../src/img//kata/ga.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/gi.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/gu.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/ge.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/go.png"></td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-fluid" src="../src/img//kata/za.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/zi.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/zu.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/ze.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/zo.png"></td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-fluid" src="../src/img//kata/da.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/di.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/dzu.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/de.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/do.png"></td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-fluid" src="../src/img//kata/ba.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/bi.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/bu.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/be.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/bo.png"></td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-fluid" src="../src/img//kata/pa.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/pi.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/pu.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/pe.png"></td>
                                            <td><img class="img-fluid" src="../src/img//kata/po.png"></td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-fluid" src="../src/img//kata/ya.png"></td>
                                            <td></td>
                                            <td><img class="img-fluid" src="../src/img//kata/yu.png"></td>
                                            <td></td>
                                            <td><img class="img-fluid" src="../src/img//kata/yo.png"></td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-fluid" src="../src/img//kata/wa.png"></td>
                                            <td></td>
                                            <td><img class="img-fluid" src="../src/img//kata/n.png"></td>
                                            <td></td>
                                            <td><img class="img-fluid" src="../src/img//kata/wo.png"></td>
                                        </tr>
                                    </tbody>
                                </table> 
                            </tr>
                        </tbody>
                 </table>              
                </div>     
            </div>
        </div>
        </div>
        <div class="container" id="contentBox">
            <h3>Tips &#9872;</h3>
            <hr style="border-top: 1px solid white;">
            <p>
                Pada penulisan Hiragana dan Katakana sangat umum terdapat huruf yang lebih kecil daripada yang ditulis. Hal ini memicu beberapa kondisi tertentu: <br>
                Jika terdapat つ kecil artinya, huruf setelahnya dibaca double. Sebagai contoh: カーペット akan dibaca Kāpetto. <br>
                Namun jika terdapat huruf selain つ (tsu), seperti よ (yo), や (ya), dan ゆ（ゆ）maka huruf sebelumnya akan dibaca mati dan menyambung ke huruf setelahnya. <br>
                Agar paham, coba perhatikan contoh berikut:
                <ul style="color: #ffffff;">
                    <li>ミャ = Mya</li>
                    <li>キャ = Kya</li>
                    <li>リョ = Ryo</li>
                </ul>
            </p>
            <p>
                Pada penulisan Katakana juga sering kali ditemukan aksara "ー". Aksara tersebut menunjukkan huruf sebelumnya dibaca sedikit panjang. 
                Agar paham, perhatikan contoh berikut:
                <ul style="color: #ffffff;">
                    <li>ラーメン = Rāmen = Raamen</li>
                    <li>カーペット　= Kāpetto = Kaapetto</li>
                </ul>
            </p>
        </div>    
        <div class="container" id="contentBox">
            <h3>Latihan Katakana I</h3>
            <hr style="border-top: 1px solid white;">
            <p>
                Pada latihan ini kamu akan diminta untuk merubah sebuah kata Katakana menjadi Romaji.<br> Ayo mulai latihan untuk mengukur kemampuanmu!
            </p>
            <button type="button" class="btn btn-primary" href=""><a class="nav-link" href="katakanaQuiz1.php">Mulai Quiz &#8594;</a></button>
        </div>
        <div class="container" id="contentBox">
            <h3>Latihan Katakana II</h3>
            <hr style="border-top: 1px solid white;">
            <p>
                Pada latihan ini kamu akan diminta untuk merubah kata Romaji menjadi Katakana.<br> Ayo mulai latihan untuk mengukur kemampuanmu!
            </p>
            <button type="button" class="btn btn-primary"><a class="nav-link" href="katakanaQuiz2.php">Mulai Quiz &#8594;</a></button>
        </div>        
        <!--Footer-->
        <div class="jumbotron footer" style="width: 100%; margin: 0">
            <div class="container-fluid text-center text-md-left">
                <div class="row">
                    <div class="col-md-6 mt-md-0 mt-3">

                        <h5 class="text-uppercase">Tentang Kami</h5>
                        <hr style="border-top: 1px solid white;">
                        <p>Website ini dibuat dengan tujuan memenuhi tugas mata kuliah Pemograman Web</p>
                    </div>
                    <hr class="clearfix w-100 d-md-none pb-3">
                    <div class="col-md-3 mb-md-0 mb-3">
                        <h5 class="text-uppercase">Tim Kami</h5>
                        <hr style="border-top: 1px solid white;">
                        <ul class="list-unstyled" style="color: #ffffff;">
                            <li>
                                Ariq Fachry R         
                            </li>
                            <li>
                                M. Alif Hidayatullah   
                            </li>
                            <li>
                                Balqis A       
                            </li>
                            <li>
                                Farhan Dwi Amugerah    
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>      
    </body>  
</html>
