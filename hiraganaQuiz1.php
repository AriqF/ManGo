<html>
    <head>
        <title>Man-Go | Hiragana I</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <!--My css-->
        <link href="src/stylequiz.css" rel="stylesheet">

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


        <div class="home-box custom-box">
            <h3>Instruksi:</h3>
            <p>Rubahlah Hiragana berikut kedalam romaji!</p>
            <p>Nomor Total Soal: <span class="total-question"></span></p>
            <button type="button" class="btn btn-primary" onclick="start()">Mulai</button>
        </div>

        <div class="quiz-box custom-box hide">
          <div class="question-number">

          </div>
          <div class="question-text">

          </div>
          <div class="option-container">

          </div>
          <div class="next-question-btn">
            <button type="button" class="btn btn-primary" onclick="next()">Selanjutnya</button>
          </div>
          <div class="answer-indicator">

          </div>
        </div>

        <div class="result-box custom-box hide">
          <h1>Quiz Result</h1>
          <table>
            <tr>
              <td>Total Pertanyaan</td>
              <td><span class="total-question"></span></td>
            </tr>
            <tr>
              <td>Soal dijawab</td>
              <td><span class="total-attempt"></span></td>
            </tr>
            <tr>
              <td>Benar</td>
              <td><span class="total-correct"></span></td>
            </tr>
            <tr>
              <td>Salah</td>
              <td><span class="total-wrong"></span></td>
            </tr>
            <tr>
              <td>Persentase</td>
              <td><span class="percentage"></span></td>
            </tr>
            <tr>
              <td>Total Skor</td>
              <td><span class="total-score"></span></td>
            </tr>
          </table>
          <button type="button" class="btn btn-success" onclick="redirectToPage()">Kembali</button>
          <button type="button" class="btn btn-secondary" onclick="tryAgain()">Coba lagi</button>
        </div>

    <script src="src/quizQuestion.js"></script>
    <script src="src/app.js"></script>
    </body>
</html>
