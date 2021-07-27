<?php 
include 'databaseconnect/conection.php';
$select = "SELECT DISTINCT TIPO_MAQUINA, TIPO_MAQUINA_HIDDEN FROM MAQUINAS GROUP BY TIPO_MAQUINA, TIPO_MAQUINA_HIDDEN;";
$query = mysqli_query($conexion,$select);

$select_avg = "SELECT TIPO_MAQUINA,ROUND(AVG(RENDIMIENTO), 2) AS RENDIMIENTO FROM MAQUINAS GROUP BY TIPO_MAQUINA";
$query1 = mysqli_query($conexion,$select_avg);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles/sidebar.css">
        <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png" sizes="16x16">
        <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png" sizes="32x32">
        <link rel="stylesheet" href="styles/switch.css">
        <title>Variables</title>
   </head>
<body>
  <div class="sidebar close">
    <div class="logo-details">
      <img src="images/logo-sidebar.png" alt="logo condumex">
      <span class="logo_name">CONDUMEX</span>
    </div>
    <ul class="nav-links">
      
      <li>
        <div class="iocn-link">
            <a href="monitor.php">
                <i class='bx bx-grid-alt' ></i>
                <span class="link_name">Monitor piso</span>
            </a>
            <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Monitor piso</a></li>
          <li><a href="monitor-piso-details.php?tipo_maquina=Irradiado">Irradiado</a></li>
          <li><a href="monitor-piso-details.php?tipo_maquina=Repase">Repase</a></li>
          <li><a href="monitor-piso-details.php?tipo_maquina=Termo%20Fijo">Termo fijo</a></li>
          <li><a href="monitor-piso-details.php?tipo_maquina=Termo%20Plastico">Termo plastico</a></li>
        </ul>
      </li>
      <li>
        <a href="estadisticas.php">
          <i class='bx bx-line-chart' ></i>
          <span class="link_name">Estadísticas</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="estadisticas.php">Estadísticas</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Catalogos</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Catalogos</a></li>
          <li><a href="catalogo-compuestos.html">Compuestos</a></li>
          <li><a href="recetas.html">Recetas</a></li>
        </ul>
      </li>
      <li>
        <a href="bitacora-eventos.html">
          <i class='bx bx-calendar-event' ></i>
          <span class="link_name">Bitacora de eventos</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="bitacora-eventos.html">Bitacora de eventos</a></li>
        </ul>
      </li>
      <li>
        <a href="maestros.html">
          <i class='bx bx-wrench' ></i>
          <span class="link_name">Maestros</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="maestros.html">Maestros</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
            <a href="#">
            <i class='bx bx-user' ></i>
            <span class="link_name">Usuarios</span>
            </a>
            <i class='bx bxs-chevron-down arrow' ></i>
        </div>
            <ul class="sub-menu">
            <li><a class="link_name" href="#">Usuarios</a></li>
            <li><a href="#">Administración</a></li>
            <li><a href="#">Roles y privilegios</a></li>
            </ul>
        </li>
        <div class="profile-details">
            <div class="profile-content">
            <img src="images/avatar.png" alt="profileImg">
        </div>
        <div class="name-job">
            <div class="profile_name">Prem Shahi</div>
            <div class="job">Web Desginer</div>
        </div>
          <i class='bx bx-log-out' style="color: #fff;"></i>
        </div>
    </li>
    </ul>
  </div>


    <!-- CONTENIDO DE LA PÁGINA -->
        <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu' ></i>
            <span class="text">CTP'S</span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="text-dark" style="text-decoration: none;">
                        <p class="text-left">
                            <i class='bx bx-arrow-back'></i>
                            <span class="ml-1"> Regresar</span>
                        </p>
                    </a>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-lg-5 d-block mx-auto mt-2">
                    <div class="card">
                        <div class="card-header text-center">
                            <h6>Estatus</h6>
                        </div>
                        <div class="card-body my-4">
                            <div class="container">
                                <div class="row">

                                <!-- TOGGLERS -->
                                    <div class="col-lg-5 d-block mx-auto">
                                        <p class="text-center">Obtención del estado del enrollador</p>
                                    </div>
                                    <div class="col-lg-2 d-block mx-auto">
                                        <p class="text-center mt-3">Off</p>
                                    </div>
                                    <div class="col-lg-2 mr-3 mt-2">
                                        <div class="swtich-container">
                                            <input type="checkbox" id="switch" checked disabled>
                                            <label for="switch" class="lbl"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 d-block mx-auto">
                                        <p class="text-center mt-3">On</p>
                                    </div>


                                    <div class="col-lg-5 d-block mx-auto">
                                        <p class="text-center mt-1">Matriz de fallas de chispa</p>
                                    </div>
                                    <div class="col-lg-2 d-block mx-auto">
                                        <p class="text-center mt-3">Off</p>
                                    </div>
                                    <div class="col-lg-2 mr-3 mt-2">
                                        <div class="swtich-container">
                                            <input type="checkbox" id="switch" disabled>
                                            <label for="switch" class="lbl"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 d-block mx-auto">
                                        <p class="text-center mt-3">On</p>
                                    </div>


                                    <div class="col-lg-5 d-block mx-auto">
                                        <p class="text-center mt-3">Última bobina</p>
                                    </div>
                                    <div class="col-lg-2 d-block mx-auto">
                                        <p class="text-center mt-3">Off</p>
                                    </div>
                                    <div class="col-lg-2 mr-3 mt-2">
                                        <div class="swtich-container">
                                            <input type="checkbox" id="switch" cheked disabled>
                                            <label for="switch" class="lbl"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 d-block mx-auto">
                                        <p class="text-center mt-3">On</p>
                                    </div>


                                    <div class="col-lg-5 d-block mx-auto">
                                        <p class="text-center mt-3">Cambio de bobina</p>
                                    </div>
                                    <div class="col-lg-2 d-block mx-auto">
                                        <p class="text-center mt-3">Off</p>
                                    </div>
                                    <div class="col-lg-2 mr-3 mt-2">
                                        <div class="swtich-container">
                                            <input type="checkbox" id="switch" disabled>
                                            <label for="switch" class="lbl"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 d-block mx-auto">
                                        <p class="text-center mt-3">On</p>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-lg-5 d-block mx-auto mt-2">
                    <div class="card">
                        <div class="card-header text-center">
                            <h6>Float</h6>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <p class="mt-5">Velocidad de operación</p>
                                    </div>
                                    <div class="col-lg-5">
                                        <canvas 
                                            data-value="100"
                                            data-type="radial-gauge"
                                            data-width="150"
                                            data-height="150"
                                            data-units="Km/h"
                                            data-min-value="0"
                                            data-max-value="220"
                                            data-major-ticks="0,20,40,60,80,100,120,140,160,180,200,220"
                                            data-minor-ticks="2"
                                            data-stroke-ticks="true"
                                            data-highlights='[
                                                {"from": 160, "to": 220, "color": "rgba(200, 50, 50, .75)"}
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
                                        ></canvas>
                                    </div>


                                    <div class="col-lg-5">
                                        <p class="mt-5">Horómetro</p>
                                    </div>
                                    <div class="col-lg-5">
                                        <canvas 
                                            data-value="90.56"
                                            data-type="radial-gauge"
                                            data-width="150"
                                            data-height="150"
                                            data-units="Horas"
                                            data-min-value="0"
                                            data-max-value="220"
                                            data-major-ticks="0,20,40,60,80,100,120,140,160,180,200,220"
                                            data-minor-ticks="2"
                                            data-stroke-ticks="true"
                                            data-highlights='[
                                                {"from": 160, "to": 220, "color": "rgba(200, 50, 50, .75)"}
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
                                        ></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>


<script src="js/sidebar.js"></script>
<script src="js/gauge.min.js"></script>
<script src="js/monitor.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>