<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet" href="styles/led.css">
  <link rel="stylesheet" href="styles/sidebar.css">
  <link rel="stylesheet" href="styles/styles-monitor.css">
  <link href='styles/icons/all.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles\bootstrap\bootstrap.min.css">
  <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png"
    sizes="16x16">
  <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png"
    sizes="32x32">
  <title>Monitor maquina</title>
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
      <i class='bx bx-menu' id="open_sidebar"></i>
      <span class="text">HISTORIAL DE FALLOS</span>
    </div>
    <div class="container">
      <div class="row my-2">
        <div class="col-lg-6">
          <div class="container">
            <div class="row">
              <div class="col-lg-12">
                <div class="card mb-2">
                  <div class="card-body">
                    <form name="selector_datos" action="#" class="form-inline">
                      <div class="container">
                        <div class="row">
                          <div class="col-lg-12 col-sm-12 my-1 d-block mx-auto my-1">
                            <div class="form-group row">
                              <div class="col-sm-4">
                                <label for="staticEmail" class="col-form-label">Fecha Inicio</label>
                              </div>
                              <div class="col-sm-8">
                                <input type="date" name="" id="" class="form-control my-2 mx-1">
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-12 col-sm-12 my-1">
                            <div class="form-group row">
                              <div class="col-sm-4">
                                <label for="staticEmail" class="col-form-label">Fecha Fin</label>
                              </div>
                              <div class="col-sm-8">
                                <input type="date" name="" id="" class="form-control my-2 mx-1">
                              </div>
                            </div>
                          </div>
                          <div class="col-lg-12 col-sm-12 my-1 d-block mx-auto my-1">
                            <div class="form-group row">
                              <div class="col-sm-4">
                                <label for="staticEmail" class="col-form-label">Turno</label>
                              </div>

                              <div class="col-sm-8">
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
            <div class="row my-2">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-body">
                    <h5 class="text-center">LISTADO DE FALLOS</h5>
                    <div class="table-responsive">
                      <table class="table table-hover mt-3">
                        <thead>
                          <tr>
                            <th>Fallo</th>
                            <th>Tiempo perdido/Tiempo muerto</th>
                            <th>Tiempo</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>Reventón</td>
                            <td>Tiempo muerto</td>
                            <td>03 mins</td>
                          </tr>
                          <tr>
                            <td>Error en operación</td>
                            <td>Tiempo perdido</td>
                            <td>03 mins</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="card">
            <div class="card-body">
              <canvas id="myChart" height="500" width="500"></canvas>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="js/historial-fallos.js"></script>
    <script src=" js/sidebar.js"></script>
    <script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"></script>
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"></script>
</body>

</html>