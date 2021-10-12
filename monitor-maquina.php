<?php
session_start();
    date_default_timezone_set("America/Mexico_City");
    include('databaseconnect/conection.php');
    $maquina = $_GET['maquina'];
    setcookie('maquina',$maquina,time()+3600);

    //$maquinas_array = array('LRP601','LRP602','LAP601','LAP602','LAP605','LAP606','LAP607',
    //'LAP608','LAP609','LAP610','LAP611','LIR601','');

    $select = "SELECT * FROM TB_CAT_LINE WHERE NAME = '$maquina'";
    $resultado = sqlsrv_query($conexion,$select);


    $row = sqlsrv_fetch_array($resultado);


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles/led.css">
    <link rel="stylesheet" href="styles/sidebar.css">
    <link rel="stylesheet" href="styles/styles-monitor.css">
    <link href='styles/icons/all.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles\bootstrap\bootstrap.min.css">
    <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png"
        sizes="16x16">
    <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png"
        sizes="32x32">
    <title>Monitor maquina</title>
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
        <a href="maestros.html">
        <i class="fas fa-wrench"></i>
          <span class="link_name">Maestros</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="maestros.html">Maestros</a></li>
        </ul>
      </li>
      
      <li>
        <a href="recetas.html">
        <i class="far fa-bookmark"></i>
          <span class="link_name">Recetas</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="recetas.html">Recetas</a></li>
        </ul>
      </li>
      <li>
        <a href="bitacora-eventos.html">
        <i class="far fa-calendar"></i>
          <span class="link_name">Bitacora de eventos</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="bitacora-eventos.html">Bitacora de eventos</a></li>
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
          <li><a href="administracion-usuarios.html">Administración</a></li>
          <li><a href="roles-privilegios.html">Roles y privilegios</a></li>
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
            <i class='bx bx-menu' id="open_sidebar"></i>
            <span class="text">
                <?php echo $row['NAME']; ?>
            </span>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container">
                        <div class="row d-flex justify-content-end">
                            <div class="col-lg-2 col-sm-12">
                                <a href="historial-fallos.php" class="btn-custom btn btn-dark text-white my-3">Historial de
                                    fallos</a>
                            </div>
                            <div class="col-lg-2 col-sm-12">
                                <a href="variables.php?maquina=<?php echo $row['NAME']?>" style="min-width: 160px;" class="mr-1 text-white  my-3 btn-custom btn btn-dark">CTP'S</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-3 my-2">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="text-center"><i class='bx bx-info-circle'></i> Información</h6>
                        </div>
                        <div class="card-body">
                            <p id="area"></p>
                            <p id="fecha" class="my-1"></p>
                            <p id="hora" class="my-1"></p>
                            <p class="my-2">Velocidad: </p>
                            <div class="container p-0">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <p class="my-2">Estatus: </p>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="led-box">
                                            <div id="led" class="led-green"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 my-2">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="text-center"><i class='bx bx-timer'></i> Tiempos de línea</h6>
                        </div>
                        <div class="card-body my-3">
                            <div class="card-text my-3">
                                <p id="tiempo_muerto" class="my-4">Tiempo muerto: 10:00 mins<br>
                                <p id="tiempo_perdido" class="my-4">Tiempo perdido: 10:00 mins<br>
                                    <!-- <p id="tiempo_ciclo">Tiempo ciclo: 42:00 mins</p> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 my-2">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="text-center"><i class='bx bxs-chevron-right-circle'></i> OEE</h6>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <canvas data-value="0" data-type="radial-gauge" data-width="200"
                                            data-height="200" data-units="OEE" data-min-value="0" data-start-angle="90"
                                            data-ticks-angle="180" data-value-box="false" data-max-value="100"
                                            data-major-ticks="0,25,50,75,100" data-minor-ticks="4"
                                            data-stroke-ticks="true" data-highlights='[
                                        {"from": 0, "to": 60, "color": "rgba(200, 50, 50, .75)"},
                                        {"from": 60, "to": 85, "color": "rgba(240, 233, 29, .94)"},
                                        {"from": 85, "to": 100, "color": "rgba(19, 142, 13, .56)"}
                                    ]' data-color-plate="#fff" data-border-shadow-width="0" data-borders="false"
                                            data-needle-type="arrow" data-needle-width="2" data-needle-circle-size="7"
                                            data-needle-circle-outer="true" data-needle-circle-inner="false"
                                            data-animation-duration="500" data-animation-rule="linear"
                                            class="d-block mx-auto my-2" id="medidor"></canvas>
                                    </div>
                                    <div class="col-lg-6 text-left">
                                        <p>Alarmas en turno: 2</p>
                                        <p>Último fallo: 103</p>
                                        <p>
                                            <!-- echo strftime("%d-%h-%Y", strtotime($date)); -->
                                            <?php
                                            setlocale(LC_TIME, array('es_MX.UTF-8','es_MX','spanish'));
                                            $final = strftime("%A %e %B %Y");
                                            echo $final
                                            ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 my-2">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="text-center"><i class='bx bxs-chevron-right-circle'></i> Disponibilidad</h6>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <canvas data-value="0" data-type="radial-gauge" data-width="200"
                                            data-height="200" data-units="OEE" data-min-value="0" data-start-angle="90"
                                            data-ticks-angle="180" data-value-box="false" data-max-value="100"
                                            data-major-ticks="0,25,50,75,100" data-minor-ticks="4"
                                            data-stroke-ticks="true" data-highlights='[
                                                {"from": 0, "to": 60, "color": "rgba(200, 50, 50, .75)"},
                                                {"from": 60, "to": 85, "color": "rgba(240, 233, 29, .94)"},
                                                {"from": 85, "to": 100, "color": "rgba(19, 142, 13, .56)"}
                                            ]' data-color-plate="#fff" data-border-shadow-width="0"
                                            data-borders="false" data-needle-type="arrow" data-needle-width="2"
                                            data-needle-circle-size="7" data-needle-circle-outer="true"
                                            data-needle-circle-inner="false" data-animation-duration="500"
                                            data-animation-rule="linear" class="d-block mx-auto my-2"
                                            id="medidor1"></canvas>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <p>Tiempo operativo: 43.12 mins<br>
                                            Tiempo disponible: 56.10 mins</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 my-2">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="text-center"><i class='bx bxs-chevron-right-circle'></i> Rendimiento</h6>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <canvas data-value="0" data-type="radial-gauge" data-width="200"
                                            data-height="200" data-units="OEE" data-min-value="0" data-start-angle="90"
                                            data-ticks-angle="180" data-value-box="false" data-max-value="100"
                                            data-major-ticks="0,25,50,75,100" data-minor-ticks="4"
                                            data-stroke-ticks="true" data-highlights='[
                                                {"from": 0, "to": 60, "color": "rgba(200, 50, 50, .75)"},
                                                {"from": 60, "to": 85, "color": "rgba(240, 233, 29, .94)"},
                                                {"from": 85, "to": 100, "color": "rgba(19, 142, 13, .56)"}
                                            ]' data-color-plate="#fff" data-border-shadow-width="0"
                                            data-borders="false" data-needle-type="arrow" data-needle-width="2"
                                            data-needle-circle-size="7" data-needle-circle-outer="true"
                                            data-needle-circle-inner="false" data-animation-duration="500"
                                            data-animation-rule="linear" class="d-block mx-auto my-2"
                                            id="medidor2"></canvas>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <p>Producción real: 256 km.<br>
                                            Producción prevista: 280 km.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 my-2">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="text-center"><i class='bx bxs-chevron-right-circle'></i> Calidad</h6>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <canvas data-value="0" data-type="radial-gauge" data-width="200"
                                            data-height="200" data-units="OEE" data-min-value="0" data-start-angle="90"
                                            data-ticks-angle="180" data-value-box="false" data-max-value="100"
                                            data-major-ticks="0,25,50,75,100" data-minor-ticks="4"
                                            data-stroke-ticks="true" data-highlights='[
                                                {"from": 0, "to": 60, "color": "rgba(200, 50, 50, .75)"},
                                                {"from": 60, "to": 85, "color": "rgba(240, 233, 29, .94)"},
                                                {"from": 85, "to": 100, "color": "rgba(19, 142, 13, .56)"}
                                            ]' data-color-plate="#fff" data-border-shadow-width="0"
                                            data-borders="false" data-needle-type="arrow" data-needle-width="2"
                                            data-needle-circle-size="7" data-needle-circle-outer="true"
                                            data-needle-circle-inner="false" data-animation-duration="500"
                                            data-animation-rule="linear" class="d-block mx-auto my-2"
                                            id="medidor3"></canvas>
                                    </div>
                                    <div class="col-lg-12 text-center">
                                        <p>Producción real: 226 km.<br>
                                            Producción OK: 226 km.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    </section>
    <div id="link_wrapper"></div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="js/sidebar.js"></script>
    <script src="js/gauge.min.js"></script>
    <script src="js/monitor.js"></script>
</body>
<script src="js/live/live-monitor-maquina.js"></script>

</html>


<!-- ?maquina=<?php /* echo $maquina */ ?> -->