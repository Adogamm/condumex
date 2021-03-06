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

  <title>Bitacora de eventos</title>
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
          <li><a href="administracion-usuarios.php">Administraci??n</a></li>
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
      <span class="text">BITACORA DE EVENTOS</span>
    </div>
    <div class="container">
      <div class="row">
        <!-- FORMULARIO -->
        <div class="col-lg-12">
          <div class="card mb-3">
            <div class="card-body">
              <form name="selector_datos" action="#" class="form-inline">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-4 d-block mx-auto my-1">
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Fecha
                          inicio</label>
                        <div class="col-sm-7">
                          <input type="date" name="" id="" class="form-control my-2 mx-1">
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group row">
                        <label for="staticEmail" class="col-sm-4 col-form-label">Fecha
                          fin</label>
                        <div class="col-sm-7">
                          <input type="date" name="" id="" class="form-control my-2 mx-1">
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 d-block mx-auto my-1">
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
      <div class="col-lg-12 my-2">
        <div class="card">
          <div class="card-body">
            <div class="table-responsive">
              <table id="myTable" class="table table-hover">
                <thead>
                  <tr>
                    <th>Maqu??na</th>
                    <th>Id paro</th>
                    <th>Descripci??n</th>
                    <th>Usuario</th>
                    <th>Fecha inicio</th>
                    <th>Hora inicio</th>
                    <th>Fecha fin</th>
                    <th>Hora fin</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>TF01</td>
                    <td>101</td>
                    <td>Averia maqu??na</td>
                    <td>4440</td>
                    <td>29/Nov/2020</td>
                    <td>12:24:00</td>
                    <td>30/Nov/2020</td>
                    <td>07:45:00</td>
                  </tr>
                  <tr>
                    <td>TF08</td>
                    <td>103</td>
                    <td>Revent??n</td>
                    <td>1350</td>
                    <td>29/Nov/2020</td>
                    <td>12:24:00</td>
                    <td>01/Dic/2020</td>
                    <td>15:32:06</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>


  </section>


  <script src="js/select.js"></script>
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