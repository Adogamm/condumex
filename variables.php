<?php 
    include 'databaseconnect/conection.php';
    $maquina = $_GET['maquina'];
    setcookie('maquina',$maquina,time()+3600);
    $selectNombres = "SELECT TB_CAT_AREA.NAME AS 'AREA', TB_CAT_LINE.NAME AS 'LINEA' FROM TB_CAT_AREA INNER JOIN TB_CAT_LINE ON TB_CAT_AREA.CAT_AREA_ID = TB_CAT_LINE.CAT_AREA_ID WHERE TB_CAT_LINE.NAME = '$maquina';";
    $nombres = sqlsrv_query($conexion,$selectNombres);
    while($rowNombres = sqlsrv_fetch_array($nombres)){
        $area = $rowNombres['AREA'];
        $linea = $rowNombres['LINEA'];
    }
    $selectVariablesBool = "SELECT TB_VARIABLE.VARIABLE_ID AS ID, TB_VARIABLE.TAG AS TAG, TB_MEASUREMENT.VALUE AS VALUE FROM TB_MEASUREMENT 
    INNER JOIN TB_VARIABLE ON TB_MEASUREMENT.VARIABLE_ID = TB_VARIABLE.VARIABLE_ID
    INNER JOIN TB_CAT_LINE ON TB_VARIABLE.CAT_LINE_ID = TB_CAT_LINE.CAT_LINE_ID WHERE TB_CAT_LINE.NAME = '$maquina' AND TB_VARIABLE.TYPE = 'BOOL';";
    $bools = sqlsrv_query($conexion,$selectVariablesBool)
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png"
        sizes="16x16">
    <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png"
        sizes="32x32">
    <link rel="stylesheet" href="styles/sidebar.css">
    <link rel="stylesheet" href="styles/boxes.css">
    <title>Variables</title>
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
            <i class='bx bx-grid-alt'></i>
            <span class="link_name">Monitor piso</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Monitor piso</a></li>
          <li><a href="monitor-piso-details.php?tipo_maquina=Irradiado">Irradiado</a></li>
          <li><a href="monitor-piso-details.php?tipo_maquina=Retrabajo">Retrabajo</a></li>
          <li><a href="monitor-piso-details.php?tipo_maquina=Termo%20Fijo">Termo fijo</a></li>
          <li><a href="monitor-piso-details.php?tipo_maquina=Termo%20Plastico">Termo plastico</a></li>
        </ul>
      </li>
      <li>
        <a href="maestros.html">
          <i class='bx bx-wrench'></i>
          <span class="link_name">Maestros</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="maestros.html">Maestros</a></li>
        </ul>
      </li>
      
      <li>
        <a href="recetas.html">
          <i class='bx bx-bookmark-alt'></i>
          <span class="link_name">Recetas</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="recetas.html">Recetas</a></li>
        </ul>
      </li>
      <li>
        <a href="bitacora-eventos.html">
          <i class='bx bx-calendar-event'></i>
          <span class="link_name">Bitacora de eventos</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="bitacora-eventos.html">Bitacora de eventos</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-user'></i>
            <span class="link_name">Usuarios</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
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
          <div class="profile_name">Prem Shahi</div>
          <div class="job">Web Desginer</div>
        </div>
        <div>
          <a href="#">
            <i class='bx bx-log-out mx-4' style="color: #fff;"></i>
          </a>
        </div>
      </div>
      </li>
    </ul>
  </div>


    <!-- CONTENIDO DE LA PÁGINA -->
    <section class="home-section">
        <div class="home-content">
            <i class='bx bx-menu' id="open_sidebar"></i>
            <span class="text"><?php echo utf8_encode($area) ?>/<?php echo $linea ?></span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card mb-2">
                        <div class="card-body">
                            <form name="selector_datos" action="#" class="form-inline">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-4 col-sm-12 my-1 d-block mx-auto my-1">
                                            <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-4 col-form-label">Fecha
                                                    inicio</label>
                                                <div class="col-sm-7">
                                                    <input type="date" name="" id="" class="form-control my-2 mx-1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12 my-1">
                                            <div class="form-group row">
                                                <label for="staticEmail" class="col-sm-4 col-form-label">Fecha
                                                    fin</label>
                                                <div class="col-sm-7">
                                                    <input type="date" name="" id="" class="form-control my-2 mx-1">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-sm-12 my-1 d-block mx-auto my-1">
                                            <div class="form-group row mx-4">
                                                <label for="staticEmail" class="col-sm-4 col-form-label">Turno</label>
                                                <div class="col-sm-7">
                                                    <select class="form-control my-2 mx-1">
                                                        <option value="null"> Turno </option>
                                                        <option value="Turno_1">Turno 1</option>
                                                        <option value="Turno_2">Turno 2</option>
                                                        <option value="Turno_3">Turno 3</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-sm-12 my-1">
                    <div class="card">
                        <div class="card-body">
                            <canvas class="my-1" id="grafica-lineas" width="40%" height="26%"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 my-2">
                                <div class="card">
                                    <div class="card-header bg-warning text-white">
                                        <h6 class="text-center">ESTATUS</h6>
                                    </div>
                                    <div class="card-body p-0 mb-2">
                                        <div class="container">
                                            <div class="row">
                                            <?php while($rowsBool = sqlsrv_fetch_array($bools)){ ?>
                                                <div class="col-lg-6 col-sm-12 mt-2">
                                                    <div class="box green" id="led<?php echo $rowsBool['ID'] ?>"></div>
                                                    <small>
                                                        <?php echo $rowsBool['TAG'] ?>
                                                    </small>
                                                </div>
                                            <?php } ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-12 my-2">
                                <div class="card">
                                    <div class="card-header bg-warning text-white">
                                        <h6 class="text-center">VARIABLES</h6>
                                    </div>
                                    <div class="card-body p-0">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-5 col-sm-12 mt-2">
                                                    <div id="variable">
                                                        <p>Actual length: 10%</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-sm-12 mt-2">
                                                    <div id="variable">
                                                        <p>Last spool: OK</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-sm-12 mt-2">
                                                    <div id="variable">
                                                        <p>Preset length: 10 mts</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-sm-12 mt-2">
                                                    <div id="variable">
                                                        <p>Speed: 20 km/h</p>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5 col-sm-12 mt-2">
                                                    <div id="variable">
                                                        <p>Hourmeter: 5 hrs</p>
                                                    </div>
                                                </div>
                                                <!-- <div class="col-lg-5 col-sm-12 mt-2">
                                                    <div id="variable">
                                                        <p>Concentricity: -</p>
                                                    </div>
                                                </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="link_wrapper"></div>


    <script src="js/sidebar.js"></script>
    <script src="js/monitor.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <script src="js/select.js"></script>
</body>
<script src="js/live/live-variables.js"></script>

</html>