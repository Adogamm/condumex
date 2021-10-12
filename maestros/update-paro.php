<?php
include '../databaseconnect/conection.php';
$id = intval($_GET['id']);
$selectMachine = "SELECT * FROM TB_CAT_SHUTDOWN WHERE CAT_SHUTDOWN_ID = $id;";
$queryMachine = sqlsrv_query($conexion,$selectMachine);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../styles/sidebar.css">
  <link href='../styles/icons/all.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles\bootstrap\bootstrap.min.css">
  <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png"
    sizes="16x16">
  <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png"
    sizes="32x32">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
  <title>Actualizar paro</title>
</head>

<body>
  <div class="sidebar" id="sidebar">
    <div class="logo-details">
      <img src="../images/logo-sidebar.png" alt="logo condumex">
      <span class="logo_name text-center mt-3">CONDUMEX <br>
        <h6>AUTOPARTES</h6>
      </span>
      <span><i class='' id="close_sidebar"></i></span>
    </div>
    <ul class="nav-links">

      <li>
        <div class="iocn-link">
          <a href="../monitor.php">
            <i class='bx bx-grid-alt'></i>
            <span class="link_name">Monitor piso</span>
          </a>
          <i class='bx bxs-chevron-down arrow'></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Monitor piso</a></li>
          <li><a href="../monitor-piso-details.php?id_area=2">Irradiado</a></li>
          <li><a href="../monitor-piso-details.php?id_area=3">Retrabajo</a></li>
          <li><a href="../monitor-piso-details.php?id_area=4">Termo fijo</a></li>
          <li><a href="../monitor-piso-details.php?id_area=1">Termo plastico</a></li>
        </ul>
      </li>
      <li>
        <a href="../maestros.html">
          <i class='bx bx-wrench'></i>
          <span class="link_name">Maestros</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="../maestros.html">Maestros</a></li>
        </ul>
      </li>

      <li>
        <a href="../recetas.html">
          <i class='bx bx-bookmark-alt'></i>
          <span class="link_name">Recetas</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="../recetas.html">Recetas</a></li>
        </ul>
      </li>
      <li>
        <a href="../bitacora-eventos.html">
          <i class='bx bx-calendar-event'></i>
          <span class="link_name">Bitacora de eventos</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="../bitacora-eventos.html">Bitacora de eventos</a></li>
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
          <li><a href="../administracion-usuarios.html">Administración</a></li>
          <li><a href="../roles-privilegios.html">Roles y privilegios</a></li>
        </ul>
      </li>
      <div class="profile-details">
        <div class="profile-content">
          <img src="../images/avatar.png" alt="profileImg">
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


  <!-- CONTENIDO DE LA PAGINA -->
  <section class="home-section">
    <div class="home-content">
      <i class='bx bx-menu' id="open_sidebar"></i>
      <span class="text">ACTUALIZAR PARO</span>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <div class="card">
            <div class="card-body mx-5 my-2">
              <h4 class="text-center">ACTUALIZAR PARO</h4>
              <form action="update-maestros/update-paro.php" method="POST">
                <?php while($rowsCompuesto = sqlsrv_fetch_array($queryMachine)) { ?>
                <div class="form-group my-2">
                  <input type="text" class="form-control" id="id" name="id"
                    value="<?php echo $rowsCompuesto['CAT_SHUTDOWN_ID']; ?>" hidden>
                </div>
                <div class="form-group my-2">
                  <label for="Compuestp">Compuesto</label>
                  <input type="text" class="form-control" id="paro" name="paro"
                    value="<?php echo $rowsCompuesto['NAME']; ?>">
                </div>
                <div class="form-group my-2">
                  <label for="Descripcion">Descripción</label>
                  <input type="text" class="form-control" id="descripcion" name="descripcion"
                    value="<?php echo $rowsCompuesto['DESCRIPTION']; ?>">
                </div>
                <?php } ?>
                <div class="input-group my-3">
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
                <div class="input-group my-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="maquina">Maquina</label>
                  </div>
                  <select class="form-control" id="maquina" name="maquina" required>
                  </select>
                </div>
                <input class=" mt-3 d-block mx-auto btn btn-dark" type="submit" value="Enviar">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="../js/select.js"></script>
    <script src="../js/sidebar.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>