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

  <title>Administración de usuarios</title>
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
      <span class="text">ROLES Y PRIVILEGIOS</span>
    </div>
    <div class="btn-group my-4 mx-4" role="group" aria-label="Basic example">
      <button type="button" class="btn btn-dark">Eliminar</button>
      <button type="button" class="btn btn-dark">Nuevo</button>
      <button type="button" class="btn btn-dark">Modificar</button>
    </div>
    <div class="col-lg-2 mx-4">
      <select class="form-select" aria-label="Default select example">
        <option selected>Rol</option>
        <option value="1">Administrador</option>
        <option value="2">Supervisor Mantto</option>
        <option value="3">Operador</option>
      </select>
    </div>
    <div class="container mt-5">
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table id="" class="table table-hover">
                  <thead>
                    <tr>
                      <th>Id</th>
                      <th>Rol</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>01</td>
                      <td>Administrador</td>
                    </tr>
                    <tr>
                      <td>02</td>
                      <td>Supervisor Mantto</td>
                    </tr>
                    <tr>
                      <td>03</td>
                      <td>Operador</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
          <h6 class="mt-3">Pantalla</h6>
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover">
                  <tr>
                    <th>Id</th>
                    <th>Pantalla</th>
                  </tr>
                  <tr>
                    <td>01</td>
                    <td>Recetas</td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>Reporta paros</td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>Maestros</td>
                  </tr>
                </table>
              </div>
            </div>
          </div>
          <h6 class="mt-3">Privilegios</h6>
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-hover">
                  <tr>
                    <th>Id</th>
                    <th>Privilegios</th>
                  </tr>
                  <tr>
                    <td>01</td>
                    <td>Modificar</td>
                  </tr>
                  <tr>
                    <td>02</td>
                    <td>Agregar</td>
                  </tr>
                  <tr>
                    <td>03</td>
                    <td>Eliminar</td>
                  </tr>
                </table>
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
  <script src="js\bootstrap\jquery-3.5.1.slim.min.js"></script>
  <script src="js\bootstrap\bootstrap.bundle.min.js"></script>

  <script src="js\datatables\jquery.min.js"></script>
  <script type="text/javascript" charset="utf8"
    src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
  <script src="js/export.js"></script>
</body>

</html>