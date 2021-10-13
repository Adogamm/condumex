<?php
session_start();
include '../databaseconnect/conection.php';
$area = $_GET['area'];
$maquina = $_GET['maquina'];
$selectMachine = "SELECT * FROM TB_CAT_MACHINE WHERE AREA = '$area' AND MACHINE = '$maquina';";
$queryMachine = sqlsrv_query($conexion,$selectMachine);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styles/sidebar.css">
  <link rel="stylesheet" href="styles/styles-monitor.css">
  <link href='styles/icons/all.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles\bootstrap\bootstrap.min.css">
  <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png"
    sizes="16x16">
  <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png"
    sizes="32x32">
  <link rel="stylesheet" type="text/css" href="styles\datatables\jquery.dataTables.css">
  <link rel="stylesheet" href="styles\datatables\jquery.dataTables.min.css">
  <link rel="stylesheet" href="styles\datatables\buttons.dataTables.min.css">

  <title>Catalogo de maquinas</title>
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
      <span class="text">CATALOGO DE MAQUINAS</span>
    </div>
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="container">
          <form action="maestros/search-maquina.php" method="GET">
            <div class="row d-flex justify-content-beetween">
              <div class="col-lg-4 col-sm-12 my-2">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="area">Area</label>
                  </div>
                  <select class="form-control" id="area" name="area" required>
                    <option selected>Selecciona...</option>
                    <option value="Termo plástico">Termo plástico</option>
                    <option value="Termo fijo">Termo fijo</option>
                    <option value="Irradiado">Irradiado</option>
                    <option value="Retrabajo">Retrabajo</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-4 col-sm-12 my-2">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="maquina">Maquina</label>
                  </div>
                  <select class="form-control" id="maquina" name="maquina" required>
                  </select>
                </div>
              </div>
              <div class="col-lg-2 col-sm-12">
                <input class="mt-2 btn btn-dark d-block mx-auto" type="submit" value="Buscar">
              </div>
              <div class="col-lg-2 col-sm-12">
                <a href="maestros/alta-maquinas.php" class="mt-2 btn btn-dark">Alta</a>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table id="myTable" class="table table-hover mt-4">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Familia Calibre</th>
                      <th>Descripción</th>
                      <th>Área</th>
                      <th>Máquina</th>
                      <th>Modificar</th>
                      <th>ELiminar</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($rows = sqlsrv_fetch_array($queryMachine)) { ?>
                    <tr>
                      <td>
                        <?php echo $rows['MACHINE_ID']; ?>
                      </td>
                      <td>
                        <?php echo $rows['NAME']; ?>
                      </td>
                      <td>
                        <?php echo $rows['DESCRIPTION']; ?>
                      </td>
                      <td>
                        <?php echo $rows['AREA']; ?>
                      </td>
                      <td>
                        <?php echo $rows['MACHINE']; ?>
                      </td>
                      <td><a href="maestros/update-famcal.php?id=<?php echo $rows['MACHINE_ID']; ?>"
                          class="btn btn-dark d-block mx-auto">Modificar</a></td>
                      <td><a onclick="confirmar(<?php echo $rows['MACHINE_ID'] ?>);"
                          class="btn btn-danger d-block mx-auto">Eliminar</a></td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="../js/select.js"></script>
  <script src="../js/sidebar.js"></script>
  <script src="../js/gauge.min.js"></script>
  <script src="../js/monitor.js"></script>
  <script src="../js\sweetAlert\sweetAlert.js"></script>
  <script src="../js/delete.js"></script>
  <script src="../js\bootstrap\jquery-3.5.1.slim.min.js"></script>
  <script src="../js\bootstrap\bootstrap.bundle.min.js"></script>
  <script src="../js\datatables\jquery.min.js"></script>
  <script type="text/javascript" charset="utf8" src="../js\datatables\jquery.dataTables.js"></script>
  <script src="../js\datatables\jquery-3.5.1.js"></script>
  <script src="../js\datatables\jquery.dataTables.min.js"></script>
  <script src="../js\datatables\dataTables.buttons.min.js"></script>
  <script src="../js\datatables\jszip.min.js"></script>
  <script src="../js\datatables\pdfmake.min.js"></script>
  <script src="../js\datatables\vfs_fonts.js"></script>
  <script src="../js\datatables\buttons.html5.min.js"></script>
  <script src="../js\datatables\buttons.print.min.js"></script>
  <script src="../js/export.js"></script>
</body>

</html>