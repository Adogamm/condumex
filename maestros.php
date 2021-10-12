<?php session_start(); ?>
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
  <title>Catalogo de compuestos</title>
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
      <i class='bx bx-menu' id="open_sidebar"></i>
      <span class="text">MAESTROS</span>
    </div>
    <div class="container">
      <div class="row d-flex justify-content-around">
        <div class="col-lg-3">
          <div class="card my-2">
            <div class="card-header">
              <h4 class="text-center">COMPUESTOS</h4>
            </div>
            <div class="card-body">
              <img src="images/compuesto.png" class="d-block mx-auto" alt="Paros" width="30%">
            </div>
            <div class="card-footer">
              <a href="catalogo-compuestos.php" class="btn btn-dark btn-lg d-block mx-auto">Ir</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card my-2">
            <div class="card-header">
              <h4 class="text-center">PAROS</h4>
            </div>
            <div class="card-body">
              <img src="images/advertencia.png" class="d-block mx-auto" alt="Paros" width="30%">
            </div>
            <div class="card-footer">
              <a href="catalogo-paros.php" class="btn btn-dark btn-lg d-block mx-auto">Ir</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card my-2">
            <div class="card-header">
              <h4 class="text-center">MÁQUINA</h4>
            </div>
            <div class="card-body">
              <img src="images/maquinaria.png" class="d-block mx-auto" alt="Paros" width="30%">
            </div>
            <div class="card-footer">
              <a href="catalogo-maquinas.php" class="btn btn-dark btn-lg d-block mx-auto">Ir</a>
            </div>
          </div>
        </div>
        
        <div class="col-lg-3">
          <div class="card my-2">
            <div class="card-header">
              <h4 class="text-center">FAMILIA CALIBRE</h4>
            </div>
            <div class="card-body">
              <img src="images/calibre.png" class="d-block mx-auto" alt="Paros" width="30%">
            </div>
            <div class="card-footer">
              <a href="catalogo-famcal.php" class="btn btn-dark btn-lg d-block mx-auto">Ir</a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>


  <script src="js/sidebar.js"></script>
  <script src="js/gauge.min.js"></script>
  <script src="js/monitor.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</body>

</html>