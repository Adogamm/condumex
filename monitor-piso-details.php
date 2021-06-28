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
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="styles/styles-monitor.css">
    <title>Monitor piso</title>
</head>
<body>

<div class="sidebar">
        <div class="logo-container">
            <!-- <img src="images/logo.png" alt="Your Logo" class="logo"> -->
            <img src="images/condumex_logo.png" alt="condumex logo" class="logo">
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>
                <a href="monitor.php" class="pr-2 mt-2">
                    <i class='bx bx-grid-alt' ></i>
                    <span class="link-name">Monitor de piso</span>
                </a>
            </li>
            <li>
                <a href="recetas.html" class="pr-2 mt-2">
                    <i class='bx bx-book-bookmark'></i>
                    <span class="link-name">Recetas</span>
                </a>
            </li>
            <li>
                <a href="analisis-disponibilidad.html" class="pr-2 mt-2">
                    <i class='bx bx-line-chart'></i>
                    <span class="link-name">Analisis disponibilidad</span>
                </a>
            </li>
            <li>
                <a href="bitacora-eventos.html" class="pr-2 mt-2">
                    <i class='bx bx-calendar-event'></i>
                    <span class="link-name">Bitacora de eventos</span>
                </a>
            </li>
            <li>
                <a href="maestros.html">
                    <i class='bx bx-wrench'></i>
                    <span class="link-name">Maestros</span>
                </a>
            </li>

            
            <!-- TODO SOLO SI LA SESIÓN PERTENECE A UN USUARIO -->
            <li>
                <a href="#" class="pr-2 mt-2">
                    <i class='bx bx-user' ></i>
                    <span class="link-name">Gestión de usuarios</span>
                </a>
            </li>
        </ul>
        <div class="profile-content">
            <div class="profile">
                <div class="profile-details">
                    <img src="images/avatar.png" alt="Profile image">
                    <div class="name_job">
                        <div class="name">
                            Juan Sánchez
                        </div>
                        <div class="job">
                            Administrador
                        </div>
                    </div>
                </div>
                <i class='bx bx-exit' id="log-out"></i>
            </div>
        </div>
    </div>
    

    <!-- CONTENIDO DE LA PAGINA -->
    <div class="home-content">
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
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/monitor.js"></script>
  </body>
</html>