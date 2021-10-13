<!-- #TODO CALCULAR RENDIMIENTO POR AREA -->
<?php
session_start();
include ("seguridad.php");
header("Content-Type: text/html;charset=utf-8");
include 'databaseconnect/conection.php';
$select = "SELECT * FROM TB_CAT_AREA";
// $select = "SELECT DISTINCT TIPO_MAQUINA, TIPO_MAQUINA_HIDDEN FROM MAQUINAS GROUP BY TIPO_MAQUINA, TIPO_MAQUINA_HIDDEN;";
$query = sqlsrv_query($conexion,$select);

$select_avg = "SELECT TIPO_MAQUINA,ROUND(AVG(RENDIMIENTO), 2) AS RENDIMIENTO FROM MAQUINAS GROUP BY TIPO_MAQUINA";
$query1 = sqlsrv_query($conexion,$select_avg);

?>


<!DOCTYPE html>
<html lang="es">

<head>
  <!-- <meta charset="UTF-8"> -->
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styles/sidebar.css">
  <link href='styles/icons/all.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles\bootstrap\bootstrap.min.css">
  <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png"
    sizes="16x16">
  <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png"
    sizes="32x32">
  <title>Monitor de piso</title>
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

  <!-- CONTENIDO DE LA PÁGINA -->

  <section class="home-section">
    <div class="home-content">
      <i class="fas fa-bars" id="open_sidebar"></i>
      <span class="text">MONITOR DE PISO</span>
    </div>
    <div class="container my-1">
      <div class="row">
        <div class="col-lg-7">
          <div class="container">
            <div class="row">
            <!-- AND $porcentaje = sqlsrv_fetch_array($query1) -->
              <?php while($maquinas = sqlsrv_fetch_array($query) ){ ?>
              <div class="col-lg-6 mt-1">
                <div class="card my-2">
                  <div class="card-body my-2">
                    <h5 class="card-title text-center">
                      <?php $final = $maquinas['NAME']; echo utf8_encode($final); ?>
                    </h5>
                    <canvas data-value="<?php echo $porcentaje['RENDIMIENTO'] ?>" data-type="radial-gauge"
                      data-width="150" data-height="150" data-units="%OEE" data-min-value="0" data-max-value="100"
                      data-major-ticks="0,10,20,30,40,50,60,70,80,90,100" data-minor-ticks="2" data-stroke-ticks="true"
                      data-highlights='[
                                        {"from": 0, "to": 60, "color": "rgba(200, 50, 50, .75)"},
                                        {"from": 60, "to": 85, "color": "rgba(240, 233, 29, .94)"},
                                        {"from": 85, "to": 100, "color": "rgba(19, 142, 13, .56)"}
                                    ]' data-color-plate="#fff" data-border-shadow-width="0" data-borders="false"
                      data-needle-type="arrow" data-needle-width="2" data-needle-circle-size="7"
                      data-needle-circle-outer="true" data-needle-circle-inner="false" data-animation-duration="750"
                      data-animation-rule="linear" class="d-block mx-auto"
                      id="medidor<?php echo $maquinas['DESCRIPTION'] ?>"></canvas>
                    <a href="monitor-piso-details.php?id_area=<?php echo $maquinas['CAT_AREA_ID'] ?>"
                      class="my-2 btn btn-dark text-white d-block mx-auto">Detalles</a>
                  </div>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
        </div>

        <div class="col-lg-5 mt-1">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Ítem</th>
                      <th>Máquina</th>
                      <th>Id paro</th>
                      <th>Fecha inicio</th>
                      <th>Hora inicio</th>
                      <th>Fecha fin</th>
                      <th>Hora fin</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div id="link_wrapper"></div>


  <script src="js/sidebar.js"></script>
  <script src="js/gauge.min.js"></script>
  <script src="js/monitor.js"></script>
  <script src="js\bootstrap\jquery-3.5.1.slim.min.js"></script>
  <script src="js\bootstrap\bootstrap.bundle.min.js"></script>
</body>
<script src="js/live/live-monitor.js"></script>

</html>