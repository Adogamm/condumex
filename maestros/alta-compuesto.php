<?php session_start(); ?>
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
  <title>Nuevo compuesto</title>
</head>

<body>
<div class="sidebar" id="sidebar">
    <div class="logo-details">
      <img src="../images/logo-sidebar.png" alt="logo condumex">
      <span class="logo_name text-center mt-3">CONDUMEX <br> <h6>AUTOPARTES</h6></span>
      <span><i class='' id="close_sidebar"></i></span>
    </div>
    <ul class="nav-links">

      <li>
        <div class="iocn-link">
          <a href="../monitor.php">
          <i class="fas fa-border-all"></i>
            <span class="link_name">Monitor piso</span>
          </a>
          <i class="fas fa-caret-down arrow"></i>
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
        <a href="../maestros.php">
        <i class="fas fa-wrench"></i>
          <span class="link_name">Maestros</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="../maestros.php">Maestros</a></li>
        </ul>
      </li>
      
      <li>
        <a href="../recetas.php">
        <i class="far fa-bookmark"></i>
          <span class="link_name">Recetas</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="../recetas.php">Recetas</a></li>
        </ul>
      </li>
      <li>
        <a href="../bitacora-eventos.php">
        <i class="far fa-calendar"></i>
          <span class="link_name">Bitacora de eventos</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="../bitacora-eventos.php">Bitacora de eventos</a></li>
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
          <li><a href="../administracion-usuarios.php">Administración</a></li>
          <li><a href="../roles-privilegios.php">Roles y privilegios</a></li>
        </ul>
      </li>
      <div class="profile-details">
        <div class="profile-content">
          <img src="../images/avatar.png" alt="profileImg">
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
      <span class="text">NUEVO COMPUESTO</span>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <div class="card">
            <div class="card-body mx-5 my-2">
              <h4 class="text-center">AGREGAR NUEVO COMPUESTO</h4>
              <form action="insert-maestros/insert-compuesto.php" method="POST">
                <div class="form-group my-2">
                  <label for="ID">ID</label>
                  <input type="number" class="form-control" id="id" name="id" placeholder="ID del nuevo compuesto"
                    required>
                </div>
                <div class="form-group my-2">
                  <label for="Compuestp">Compuesto</label>
                  <input type="text" class="form-control" id="compuesto" name="compuesto" placeholder="Compuesto"
                    required>
                </div>
                <div class="form-group my-2">
                  <label for="Descripcion">Descripción</label>
                  <input type="text" class="form-control" id="descripcion" name="descripcion" placeholder="Descripcion"
                    required>
                </div>
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
  <script src="js\bootstrap\jquery-3.5.1.slim.min.js"></script>
  <script src="js\bootstrap\bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>