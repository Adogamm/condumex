<?php
    session_start();
    include 'databaseconnect/conection.php';
    $maquina = $_GET['maquina'];
    setcookie('maquina',$maquina,time()+3600);
    $selectNombres = "SELECT TB_CAT_AREA.NAME AS 'AREA', TB_CAT_LINE.NAME AS 'LINEA' FROM TB_CAT_AREA INNER JOIN TB_CAT_LINE ON TB_CAT_AREA.CAT_AREA_ID = TB_CAT_LINE.CAT_AREA_ID WHERE TB_CAT_LINE.NAME = '$maquina';";
    $nombres = sqlsrv_query($conexion,$selectNombres);
    while($rowNombres = sqlsrv_fetch_array($nombres)){
        $area = $rowNombres['AREA'];
        $linea = $rowNombres['LINEA'];
    }
    $selectVariablesBool = "SELECT * FROM TB_MEASUREMENT_LIVE WHERE TIPO_VARIABLE = 'BOOL' AND ID_MACHINE = '$maquina';";
    $bools = sqlsrv_query($conexion,$selectVariablesBool);
    $selectVariables = "SELECT * FROM TB_MEASUREMENT_LIVE WHERE TIPO_VARIABLE <> 'BOOL' AND ID_MACHINE = '$maquina';";
    $variables = sqlsrv_query($conexion,$selectVariables);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href='styles/icons/all.css' rel='stylesheet'>
    <link rel="stylesheet" href="styles\bootstrap\bootstrap.min.css">
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
            <span class="text"><?php echo $area ?>/<?php echo $linea ?></span>
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
                                                    <div class="box green" id="led<?php echo $rowsBool['ID_VARIABLE_SHOW'] ?>"></div>
                                                    <small>
                                                        <?php echo $rowsBool['ID_VARIABLE_SHOW'] ?>
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
                                                <?php while($rowsVariables = sqlsrv_fetch_array($variables)){ ?>
                                                    <div class="col-lg-6 col-sm-2 my-2">
                                                        <small id="variable<?php echo $rowsVariables['ID_VARIABLE_SHOW']; ?>"></small>
                                                    </div>
                                                <?php } ?>
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
    <script src="js/monitor.js"></script>
      <script src="js\bootstrap\jquery-3.5.1.slim.min.js"></script>
    <script src="js\bootstrap\bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/select.js"></script>
</body>
<script src="js/live/live-variables.js"></script>

</html>