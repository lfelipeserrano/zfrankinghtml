<?php
    include('conexion.php');
    $res = $mysqli->query("SELECT * FROM jugador");
?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>ZFRanks</title>
    <style>
      body{
        background: gray
      }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <!-- <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
                    <a href="#" class="navbar-brand">
                        <img src="img/SmallZF.png" alt="" width="30" height="30" class="d-inline-block align-top">
                        ZivarFighters
                    </a>
                </nav> -->
                <nav class="navbar navbar-expand-lg navbar-dark" style="background: black">
                    <a href="#" class="navbar-brand">
                        <img src="img/SmallZFPNGWhite.png" alt="" width="30" height="30" class="d-inline-block align-top">
                        ZivarFighters
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                  
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="#">Global</a>
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
                    </div>
                  </nav>
            </div>
        </div>

        <div class="row mt-3 justify-content-between">
          <div class="col-6">
            <h3 class="mt-4" style="color: black">Ranking mes actual</h3>
          </div>
          <div class="col-6">
            <img src="img/sfv.png" alt="" height="90px" width="128px" class="float-right">
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

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>