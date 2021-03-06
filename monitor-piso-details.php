<!-- #TODO CALCULAR RENDIMIENTO POR AREA -->
<?php
session_start();
  include 'databaseconnect/conection.php';
  $id_area = $_GET['id_area'];
  setcookie('id_area',$id_area,time()+3600);
  $select = "SELECT * FROM TB_CAT_LINE WHERE CAT_AREA_ID='$id_area'";
  // $select_avg = "SELECT ROUND(AVG(RENDIMIENTO), 2) AS RENDIMIENTO FROM MAQUINAS WHERE TIPO_MAQUINA = '$tipo_maquina'";
  $query = sqlsrv_query($conexion, $select);
  // $query1 = sqlsrv_query($conexion,$select_avg);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styles/sidebar.css">
  <link rel="stylesheet" href="styles/styles-monitor.css">
  <link rel="stylesheet" href="styles/led.css">
  <link href='styles/icons/all.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles\bootstrap\bootstrap.min.css">
  <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png"
    sizes="16x16">
  <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png"
    sizes="32x32">
  <title>
    Detalles por área
  </title>
</head>

<body>
<div class="sidebar" id="sidebar">
    <div class="logo-details">
      <img src="images/logo-sidebar.png" alt="logo condumex">
      <span class="logo_name text-center mt-3">CONDUMEX <br> <h6>AUTOPARTES</h6></span>
      <span><i class='' id="close_sidebar"></i></span>
    </div>
    <ul class="nav-links">

      <li>
        <div class="iocn-link">
          <a href="monitor.php">
          <i class="fas fa-border-all"></i>
            <span class="link_name">Monitor piso</span>
          </a>
          <i class="fas fa-caret-down arrow"></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Monitor piso</a></li>
          <li><a href="monitor-piso-details.php?id_area=2">Irradiado</a></li>
          <li><a href="monitor-piso-details.php?id_area=3">Retrabajo</a></li>
          <li><a href="monitor-piso-details.php?id_area=4">Termo fijo</a></li>
          <li><a href="monitor-piso-details.php?id_area=1">Termo plastico</a></li>
        </ul>
      </li>
      <li>
        <a href="maestros.php">
        <i class="fas fa-wrench"></i>
          <span class="link_name">Maestros</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="maestros.php">Maestros</a></li>
        </ul>
      </li>
      
      <li>
        <a href="recetas.php">
        <i class="far fa-bookmark"></i>
          <span class="link_name">Recetas</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="recetas.php">Recetas</a></li>
        </ul>
      </li>
      <li>
        <a href="bitacora-eventos.php">
        <i class="far fa-calendar"></i>
          <span class="link_name">Bitacora de eventos</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="bitacora-eventos.php">Bitacora de eventos</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
          <i class="far fa-user"></i>
            <span class="link_name">Usuarios</span>
          </a>
          <i class="fas fa-caret-down arrow"></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Usuarios</a></li>
          <li><a href="administracion-usuarios.php">Administración</a></li>
          <li><a href="roles-privilegios.php">Roles y privilegios</a></li>
        </ul>
      </li>
      <div class="profile-details">
        <div class="profile-content">
          <img src="images/avatar.png" alt="profileImg">
        </div>
        <div class="name-job">
          <div class="profile_name"><?php echo $_SESSION['NOMBRE']; ?></div>
          <div class="job"><?php echo $_SESSION['ROL']; ?></div>
        </div>
        <div>
          <a href="./loggout.php">
            <i class="fas fa-sign-out-alt" style="color: #fff; margin-right: 20px; font-size:25px"></i>
          </a>
        </div>
      </div>
      </li>
    </ul>
  </div>


  <!-- CONTENIDO DE LA PAGINA -->

  <section class="home-section">
    <div class="home-content">
      <i class="fas fa-bars" id="open_sidebar"></i>
      <span class="text">
        <?php //echo strtoupper($tipo_maquina) ?>
      </span>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="card ml-4">
            <div class="card-header">
              <h6 class="text-center">OEE</h6>
            </div>
            <div class="card-body">
              <?php //while($avg = sqlsrv_fetch_array($query1)){ ?>
              <div class="progress my-4">
                <div id="medidor" class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                  style="width: <?php //echo $avg['RENDIMIENTO'];  ?>?%; min-width: 25%;"
                  aria-valuenow="<?php //echo $avg['RENDIMIENTO'];  ?>" aria-valuemin="0" aria-valuemax="100">
                  <?php //echo $avg['RENDIMIENTO'];  ?>%
                </div>
              </div>
              <!-- Actualizar los medidores con valores aleatorios -->
              <!-- <script>
                var number = 0;
                var barra = document.getElementById("medidor");
                setInterval(function () {
                  number = Math.floor(Math.random() * 100);
                  $("#medidor").css("width", number + "%").attr("aria-valuenow", number).text(number + "%");
                  if (number >= 0 && number <= 60) {
                    barra.classList.remove("bg-warning");
                    barra.classList.remove("bg-success");
                    barra.classList.add("bg-danger");
                  } else if (number >= 61 && number <= 85) {
                    barra.classList.remove("bg-danger");
                    barra.classList.remove("bg-success");
                    barra.classList.add("bg-warning");
                  } else if (number >= 86 && number <= 100) {
                    barra.classList.remove("bg-danger");
                    barra.classList.remove("bg-warning");
                    barra.classList.add("bg-success");
                  }
                }, 1000);
              </script> -->
              <?php //} ?>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="container">
          <div class="row">
            <?php while($maquina = sqlsrv_fetch_array($query)){  ?>
            <div class="col-lg-6 text-center d-block mx-auto">
              <div class="card my-2" style="min: width 170px;">
                <div class="card-header">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-6 col-md-12">
                        <div class="led-box">
                          <div id="led<?php echo $maquina['NAME'] ?>" class="led-green"></div>
                        </div>
                        <div class="container mt-2">
                          <div class="row">
                            <div class="col-lg-4">
                              <p style="margin-right: 75%; min-width:70px;">
                                <?php echo $maquina['NAME'] ?>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-12 mt-4">
                        <p>Velocidad: 200 km/h</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="card-body">
                  <h6 id="text<?php echo $maquina['NAME'] ?>"></h6>
                  <canvas data-value="00 <?php //echo $maquina['RENDIMIENTO'] ?>" data-type="radial-gauge" data-width="200"
                    data-height="200" data-units="" data-min-value="0" data-start-angle="90" data-ticks-angle="180"
                    data-value-box="false" data-max-value="100" data-major-ticks="0,25,50,75,100" data-minor-ticks="4"
                    data-stroke-ticks="true" data-highlights='[
                                            {"from": 0, "to": 60, "color": "rgba(200, 50, 50, .75)"},
                                            {"from": 60, "to": 85, "color": "rgba(240, 233, 29, .94)"},
                                            {"from": 85, "to": 100, "color": "rgba(19, 142, 13, .56)"}
                                        ]' data-color-plate="#fff" data-border-shadow-width="0" data-borders="false"
                    data-needle-type="arrow" data-needle-width="2" data-needle-circle-size="7"
                    data-needle-circle-outer="true" data-needle-circle-inner="false" data-animation-duration="900"
                    data-animation-rule="linear" class="d-block mx-auto"
                    id="medidor<?php echo $maquina['NAME']; ?>"></canvas>
                  <a href="monitor-maquina.php?maquina=<?php echo $maquina['NAME'] ?>"
                    class="btn btn-dark d-block mx-auto text-white">Detalles</a>
                </div>
              </div>
            </div>
            <?php } ?>
          </div>
        </div>






  </section>
  <!-- Carga de información desde JS -->
  <div id="link_wrapper"></div>
  <script src="js\bootstrap\jquery-3.5.1.slim.min.js"></script>
  <script src="js\bootstrap\bootstrap.bundle.min.js"></script>
  <script src="js/sidebar.js"></script>
  <script src="js/gauge.min.js"></script>
  <script src="js/monitor.js"></script>
</body>
<script src="js/live/live-monitor-piso-details.js"></script>

</html>