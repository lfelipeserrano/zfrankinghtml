<?php
    include('conexion.php');
    $res = $mysqli->query("SELECT * FROM jugador ORDER BY points DESC");
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/output.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>ZFRanks</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark navbarbg">
      <a href="index.html" class="navbar-brand">
          <img src="img/zfconvertedWhite.png" alt="" width="30" height="30" class="d-inline-block align-top">
          ZivarFighters
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
              <a class="nav-link" href="index.html">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item active">
              <a class="nav-link" href="streams.html">Streams</a>
          </li>
          <li class="nav-item active">
              <a class="nav-link" href="zfranks.php">Ranks</a>
          </li>
          <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Meses pasados
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Septiembre</a>
              <a class="dropdown-item" href="#">Agosto</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Año 2017</a>
              </div>
          </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
          <a href="https://www.facebook.com/ZivarFighters/">
              <i class="icon-facebook icono"></i>
          </a>
          <a href="https://www.instagram.com/zivarfighters/">
              <i class="icon-instagram icono"></i>
          </a>
          <a href="https://www.youtube.com/channel/UCqNKJ_WKztoUkGCgVf9b8Lg">
              <i class="icon-youtube-play icono"></i>
          </a>
          <a href="https://www.twitch.tv/zivarfighters">
              <i class="icon-twitch icono"></i>
          </a>
          </form>
      </div>
  </nav>

  <div class="container">
      <div class="row mt-3 justify-content-between">
        <div class="col-6">
          <h3 class="mt-4 ranking-title">Ranking mes actual</h3>
        </div>
        <div class="col-6">
          <img src="img/sfvconverted.png" alt="" class="float-right">
        </div>
      </div>

      <div class="row mt-5">
        <div class="col">
          <div class="table-responsive-sm">
              <table class="table table-hover">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Userename</th>
                    <th scope="col">Matchs</th>
                    <th scope="col">Wins</th>
                    <th scope="col">Rounds</th>
                    <th scope="col">Perfects</th>
                    <th scope="col">Points</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                      while($row = mysqli_fetch_assoc($res)){
                          echo "<tr>
                              <th>{$row['username']}</th>
                              <th>{$row['matchs']}</th>
                              <th>{$row['wins']}</th>
                              <th>{$row['rounds']}</th>
                              <th>{$row['perfects']}</th>
                              <th>{$row['points']}</th>
                          </tr>";
                      }
                  ?>
                </tbody>
              </table>
          </div>
          
        </div>
      </div>
  </div>

  <footer class="footer">
    <div class="container text-center">
      <span>ZivarFighters</span>
    </div>
  </footer>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>