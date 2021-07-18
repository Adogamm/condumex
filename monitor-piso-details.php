<?php
  include 'databaseconnect/conection.php';
  $tipo_maquina = $_GET['tipo_maquina'];
  setcookie('Prueba',$tipo_maquina,time()+3600);
  $select = "SELECT * FROM MAQUINAS WHERE TIPO_MAQUINA='$tipo_maquina'";
  $select_avg = "SELECT ROUND(AVG(RENDIMIENTO), 2) AS RENDIMIENTO FROM MAQUINAS WHERE TIPO_MAQUINA = '$tipo_maquina'";
  $query = sqlsrv_query($conexion, $select);
  $query1 = sqlsrv_query($conexion,$select_avg);
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

<!-- SIDEBAR -->

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
            <!-- <li>
                <a href="recetas.html" class="pr-2 mt-2">
                    <i class='bx bx-book-bookmark'></i>
                    <span class="link-name">Recetas</span>
                </a>
            </li> -->
            <li>
                <a href="estadisticas.php" class="pr-2 mt-2">
                    <i class='bx bx-line-chart'></i>
                    <span class="link-name">Estadisticas</span>
                </a>
            </li>
            <li>
                <a href="bitacora-eventos.html" class="pr-2 mt-2">
                    <i class='bx bx-calendar-event'></i>
                    <span class="link-name">Bitacora de eventos</span>
                </a>
            </li>
            <!-- <li>
                <a href="maestros.html">
                    <i class='bx bx-wrench'></i>
                    <span class="link-name">Maestros</span>
                </a>
            </li> -->
            <!-- TODO SOLO SI LA SESIÓN PERTENECE A UN USUARIO -->
            <li>
                <a href="administracion-usuarios.html" class="pr-2 mt-2">
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
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mt-4">
                <a href="monitor.php" class="text-dark" style="text-decoration: none;">
                    <p class="text-left">
                        <i class='bx bx-arrow-back'></i>
                        <span class="ml-1"> Regresar</span>
                    </p>
                </a>
            </div>
            <div class="col-lg-4">
                <h3 class="text-center title">Monitor piso</h3>
            </div>
        </div>
    </div>
      <div class="container">
        <div class="row"><div class="card ml-4">
            <div class="card-body">
            <?php while($avg = sqlsrv_fetch_array($query1)){ ?>
              <canvas
                data-value="<?php echo $avg['RENDIMIENTO']; ?>"
                data-type="radial-gauge"
                data-width="200"
                data-height="100"
                data-units="OEE"
                data-min-value="0"
                data-start-angle="90"
                data-ticks-angle="180"
                data-value-box="false"
                data-max-value="100"
                data-major-ticks="0"
                data-minor-ticks="2"
                data-stroke-ticks="true"
                data-highlights='[
                    {"from": 0, "to": 20, "color": "rgba(200, 50, 50, .75)"},
                    {"from": 21, "to": 50, "color": "rgba(240, 233, 29, .94)"},
                    {"from": 51, "to": 100, "color": "rgba(19, 142, 13, .56)"}
                ]'
                data-color-plate="#fff"
                data-border-shadow-width="0"
                data-borders="false"
                data-needle-type="arrow"
                data-needle-width="2"
                data-needle-circle-size="7"
                data-needle-circle-outer="true"
                data-needle-circle-inner="false"
                data-animation-duration="1000"
                data-animation-rule="linear"
                class="d-block mx-auto my-2"
                id="medidor"
              ></canvas>

<!-- Actualizar los medidores con valores aleatorios -->
            <script>
                var number = 0;
                    setInterval(function() {
                        number = Math.floor(Math.random()*100);
                        $("#medidor").attr("data-value",number);
                    }, 1000);
            </script>
              <h5 class="card-title text-center"><?php echo $tipo_maquina ?></h5>
              <?php } ?>
            </div>
          </div>
          <div class="col-lg-3 mt-3"></div>
          <div class="col-lg-6 d-flex flex-row justify-content-end">
            <a href="monitor-piso.php">
              <img src="images/home.png" alt="inicio" class="home-icon">
            </a>
          </div>
        </div>
        <div class="my-2">
            <div class="container">
            <div class="row">
                <?php while($maquina = sqlsrv_fetch_array($query)){  ?>
                    <div class="col-lg-4 my-3 text-center d-block mx-auto">
                        <div class="card">
                            <div class="card-header">
                                <img src="images/trabajador.png" alt="maquina" class="d-block mx-auto top-img">
                                <h6 class="text-center mt-2"><?php echo $maquina['MAQUINA'] ?></h6>
                            </div>
                        <div class="card-body">
                            <h6 id="text<?php echo $maquina['MAQUINA'] ?>"></h6>
                                <canvas
                                    data-value="<?php echo $maquina['RENDIMIENTO'] ?>"
                                    data-type="radial-gauge"
                                    data-width="150"
                                    data-height="150"
                                    data-units="OEE"
                                    data-min-value="0"
                                    data-start-angle="90"
                                    data-ticks-angle="180"
                                    data-value-box="false"
                                    data-max-value="100"
                                    data-major-ticks="0,25,50,75,100"
                                    data-minor-ticks="4"
                                    data-stroke-ticks="true"
                                    data-highlights='[
                                        {"from": 0, "to": 20, "color": "rgba(200, 50, 50, .75)"},
                                        {"from": 21, "to": 50, "color": "rgba(240, 233, 29, .94)"},
                                        {"from": 51, "to": 100, "color": "rgba(19, 142, 13, .56)"}
                                    ]'
                                    data-color-plate="#fff"
                                    data-border-shadow-width="0"
                                    data-borders="false"
                                    data-needle-type="arrow"
                                    data-needle-width="2"
                                    data-needle-circle-size="7"
                                    data-needle-circle-outer="true"
                                    data-needle-circle-inner="false"
                                    data-animation-duration="900"
                                    data-animation-rule="linear"
                                    class="d-block mx-auto my-2"
                                    id="medidor<?php echo $maquina['MAQUINA']; ?>"
                                ></canvas>
                            <a href="monitor-maquina.php?maquina=<?php echo $maquina['MAQUINA'] ?>" class="btn btn-warning d-block mx-auto mt-4 text-white">Detalles</a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>

        </div>
      </div>
    </div>

    <!-- Carga de información desde JS -->
    <div id="link_wrapper">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/gauge.min.js"></script>
    <script src="js/monitor.js"></script>
  </body>
<script src="js/live.js"></script>
</html>

