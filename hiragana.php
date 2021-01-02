<html>
    <head>
        <title>  </title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <!--My css-->
        <link rel="stylesheet" href="src/learnPageStyle.css">
        
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
                        <a class="nav-link" href="#">User Profile</a> <!--add userProfile.php later-->
                        </li>       
                    </ul>        
                </div>
            </nav>
        
        <div class="content">
            <div class="container">
                <div class="jumbotron fadeInDown" id="header">
                    <h2>
                        Hiragana
                    </h2>
                    <hr>
                    <p style="text-align: justify; font-size: 18px;">
                        Hiragana umumnya digunakan untuk menulis kosa kata asli Jepang yang tidak memiliki huruf Kanji, Kanji yang kurang umum digunakan atau terlalu formal untuk penulisan.
                    </p>
                    <hr>
                    <p>
                        Jangan lupa scroll kebawah ya untuk latihan mengukur kemampuan Hiragana mu!
                    </p>
                    
                </div>

                <div class="row">
                    <table class="table-sm">
                        <tbody>
                            <tr>
                                <table class="table-sm mx-auto fadeInRight">    <!--left side table-->
                                    <tbody> 
                                        <tr>
                                            <td><img class="img-fluid" src="src/img//hira/a.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/i.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/u.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/e.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/o.png"></td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-fluid" src="src/img//hira/ka.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/ki.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/ku.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/ke.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/ko.png"></td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-fluid" src="src/img//hira/sa.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/shi.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/su.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/se.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/so.png"></td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-fluid" src="src/img//hira/ta.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/chi.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/tsu.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/te.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/to.png"></td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-fluid" src="src/img//hira/ha.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/hi.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/fu.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/he.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/ho.png"></td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-fluid" src="src/img//hira/na.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/ni.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/nu.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/ne.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/no.png"></td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-fluid" src="src/img//hira/ma.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/mi.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/mu.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/me.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/mo.png"></td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-fluid" src="src/img//hira/ra.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/ri.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/ru.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/re.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/ro.png"></td>
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
                                            <td><img class="img-fluid" src="src/img//hira/ga.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/gi.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/gu.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/ge.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/go.png"></td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-fluid" src="src/img//hira/za.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/ji.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/zu.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/ze.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/zo.png"></td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-fluid" src="src/img//hira/da.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/cji.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/dzu.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/de.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/do.png"></td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-fluid" src="src/img//hira/ba.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/bi.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/bu.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/be.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/bo.png"></td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-fluid" src="src/img//hira/pa.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/pi.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/pu.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/pe.png"></td>
                                            <td><img class="img-fluid" src="src/img//hira/po.png"></td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-fluid" src="src/img//hira/ya.png"></td>
                                            <td></td>
                                            <td><img class="img-fluid" src="src/img//hira/yu.png"></td>
                                            <td></td>
                                            <td><img class="img-fluid" src="src/img//hira/yo.png"></td>
                                        </tr>
                                        <tr>
                                            <td><img class="img-fluid" src="src/img//hira/wa.png"></td>
                                            <td></td>
                                            <td><img class="img-fluid" src="src/img//hira/n.png"></td>
                                            <td></td>
                                            <td><img class="img-fluid" src="src/img//hira/wo.png"></td>
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
                Jika terdapat つ kecil artinya, huruf setelahnya dibaca double. Sebagai contoh: いったい akan dibaca ittai. <br>
                Namun jika terdapat huruf selain つ (tsu), seperti よ (yo), や (ya), dan ゆ（ゆ）maka huruf sebelumnya akan dibaca mati dan menyambung ke huruf setelahnya. <br>
                Agar paham, coba perhatikan contoh berikut:
                <ul style="color: #ffffff;">
                    <li>きょ = Kyo</li>
                    <li>にゃ = Nya</li>
                    <li>ひゃ = Hya</li>
                </ul>
            </p>
        </div>

        
        <div class="container" id="contentBox">
            <h3>Latihan Hiragana I</h3>
            <hr style="border-top: 1px solid white;">
            <p>
                Pada latihan ini kamu akan diminta untuk merubah sebuah kata Hiragana menjadi Romaji.<br> Ayo mulai latihan untuk mengukur kemampuanmu!
            </p>
            <button type="button" class="btn btn-primary" href=""><a class="nav-link" href="hiraganaQuiz1.php">Mulai Quiz &#8594;</a></button>
        </div>


        <div class="container" id="contentBox">
            <h3>Latihan Hiragana II</h3>
            <hr style="border-top: 1px solid white;">
            <p>
                Pada latihan ini kamu akan diminta untuk merubah kalimat Hiragana menjadi Romaji.<br> Ayo mulai latihan untuk mengukur kemampuanmu!
            </p>
            <button type="button" class="btn btn-primary"><a class="nav-link" href="hiraganaQuiz2.php">Mulai Quiz &#8594;</a></button>
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
