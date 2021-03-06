<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styles/sidebar.css">
  <link href='styles/icons/all.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles\bootstrap\bootstrap.min.css">
  <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png"
    sizes="16x16">
  <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png"
    sizes="32x32">

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

  <title>Registro de usuarios</title>
</head>

<body>
  <div class="sidebar" id="sidebar">
    <div class="logo-details">
      <img src="images/logo-sidebar.png" alt="logo condumex">
      <span class="logo_name text-center mt-3">CONDUMEX <br>
        <h6>AUTOPARTES</h6>
      </span>
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
          <li><a href="monitor-piso-details.php?id_area=2">Irradiado</a></li>
          <li><a href="monitor-piso-details.php?id_area=3">Retrabajo</a></li>
          <li><a href="monitor-piso-details.php?id_area=4">Termo fijo</a></li>
          <li><a href="monitor-piso-details.php?id_area=1">Termo plastico</a></li>
        </ul>
      </li>
      <li>
        <a href="maestros.php">
          <i class='bx bx-wrench'></i>
          <span class="link_name">Maestros</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="maestros.php">Maestros</a></li>
        </ul>
      </li>

      <li>
        <a href="recetas.php">
          <i class='bx bx-bookmark-alt'></i>
          <span class="link_name">Recetas</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="recetas.php">Recetas</a></li>
        </ul>
      </li>
      <li>
        <a href="bitacora-eventos.php">
          <i class='bx bx-calendar-event'></i>
          <span class="link_name">Bitacora de eventos</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="bitacora-eventos.php">Bitacora de eventos</a></li>
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
          <li><a href="administracion-usuarios.php">Administraci??n</a></li>
          <li><a href="roles-privilegios.php">Roles y privilegios</a></li>
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


  <!-- CONTENIDO DE LA PAGINA -->
  <section class="home-section">
    <div class="home-content">
      <i class="fas fa-bars" id="open_sidebar"></i>
      <span class="text">REGGISTRO DE USUARIOS</span>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 d-flex justify-content-center">
          <div class="card">
            <div class="card-body mx-5 my-2">
              <h4 class="text-center">REGISTRAR NUEVO USUARIO</h4>
              <form>
                <div class="form-group my-2">
                  <label for="ID">ID</label>
                  <input type="text" class="form-control" id="id" placeholder="ID del nuevo usuario">
                </div>
                <div class="form-group my-2">
                  <label for="Nombre">Nombre completo</label>
                  <input type="text" class="form-control" id="Nombre" placeholder="Nombre completo del nuevo usuario">
                </div>
                <div class="form-group my-2">
                  <label for="exampleInputPassword1">Contrase??a</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contrase??a">
                </div>
                <div class="input-group my-3">
                  <div class="input-group-prepend">
                    <label class="input-group-text" for="rol">Rol del usuario</label>
                  </div>
                  <select class="form-control" id="rol">
                    <option selected>Seleccione...</option>
                    <option value="Operador">Operador</option>
                    <option value="Supervisor">Supervisor</option>
                    <option value="Administrador">Administrador</option>
                  </select>
                </div>
                <input class="d-block mx-auto btn btn-dark" type="submit" value="Enviar">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/sidebar.js"></script>
  <script src="js\bootstrap\jquery-3.5.1.slim.min.js"></script>
  <script src="js\bootstrap\bootstrap.bundle.min.js"></script>
    <script src="js\datatables\jquery.min.js"></script>
</body>

</html>