<?php
  include 'databaseconnect/conection.php';
  $tipo_maquina=$_GET['tipo_maquina'];
  $select = "SELECT * FROM MAQUINAS WHERE TIPO_MAQUINA = '$tipo_maquina'";
  $select_avg = "SELECT ROUND(AVG(RENDIMIENTO), 2) AS RENDIMIENTO FROM MAQUINAS WHERE TIPO_MAQUINA = '$tipo_maquina'";
  $query = mysqli_query($conexion,$select);
  $query1 = mysqli_query($conexion,$select_avg);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png" sizes="16x16">
    <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png" sizes="32x32">
    <link rel="stylesheet" href="styles/monitor-styles.css">
    <title>Monitor piso</title>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav mr-auto">
        <a class="nav-item nav-link" href="monitor-piso.php">Monitor de piso</a>
        <a class="nav-item nav-link disabled" href="#">|</a>
        <a class="nav-item nav-link" href="recetas.html">Recetas</a>
        <a class="nav-item nav-link disabled" href="#">|</a>
        <a class="nav-item nav-link" href="analisis-disponibilidad.html">Analisis de disponibilidad</a>
        <a class="nav-item nav-link disabled" href="#">|</a>
        <a class="nav-item nav-link" href="bitacora-eventos.html">Bitacora de eventos</a>
        <a class="nav-item nav-link disabled" href="#">|</a>
        <a class="nav-item nav-link" href="maestros.html">Maestros</a>
      </div>
    </div>
    <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Juan Sánchez
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="administracion-usuarios.html">Administración de usuarios</a>
              <a class="dropdown-item" href="roles-privilegios.html">Roles y privilegios</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Cerrar sesión</a>
            </div>
        </li>
        <a class="mx-4 nav-item nav-link disabled" href="#">044513</a>
    </ul>
  </nav>
    <img src="images/condumex_logo.png" alt="condumex logo" class="navbar-icon mt-1">
    <h3 class="text-center title">Monitor de piso</h3>

    <div class="container">
      <div class="row">

        <div class="col-lg-2 mt-3">
          <a href="#"><?php echo $tipo_maquina ?></a>
        </div>
        <div class="col-lg-3 mt-3">
          <div class="progress" style="height: 25px;">
            <?php while($avg = mysqli_fetch_assoc($query1)){ ?>
              <div class="progress-bar bg-warning" role="progressbar" style="width: <?php echo $avg['RENDIMIENTO']?>%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" id="termo-fijo"><?php echo $avg['RENDIMIENTO']?></div>
            <?php } ?>
            </div>
        </div>
        <div class="col-lg-6 d-flex flex-row justify-content-end">
          <a href="monitor-piso.php">
            <img src="images/home.png" alt="inicio" class="home-icon">
          </a>
        </div>
      </div>

      <div class="row mt-5">
        <?php while($maquina = mysqli_fetch_assoc($query)){ ?>
        <div class="col-lg-3 my-3 text-center">
          <a href="#"><?php echo $maquina['MAQUINA']; ?></a>
          <div class="container">
            <div class="row">
              <div class="col-lg-12 bg-success text-start text-white pt-3">
                <ul class="p-3">
                  <li>Rendimiento: <?php echo $maquina['RENDIMIENTO']; ?> %</li>
                  <li>Velocidad: <?php echo $maquina['VELOCIDAD']; ?></li>
                  <li>Ultimo paro: <?php echo $maquina['ULTIMOPARO']; ?></li>
                  <li>Evento: <?php echo $maquina['EVENTO']; ?></li>
                  <li>Paro actual:<?php echo $maquina['PAROACTUAL']; ?></li>
                  <li>Evento actual: <?php echo $maquina['EVENTOACTUAL']; ?></li>
                  <li>OE:<?php echo $maquina['OE']; ?></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <?php } ?>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>