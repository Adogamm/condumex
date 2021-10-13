<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

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
    <link rel="stylesheet" href="styles/styles-monitor.css">
    <title>Agregar receta</title>
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
            <span class="text">NUEVA RECETA</span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 d-block mx-auto">
                    <div class="card mb-4 shadow">
                        <div class="card-body">
                            <!-- FORMULARIO -->
                            <form action="">

                                <!-- PÁGINA 1 -->
                                <div class="mb-3">
                                    <label for="variable" class="form-label">Variable</label>
                                    <input type="variable" class="form-control" id="variable" name="variable" required>
                                </div>
                                <div class="mb-3">
                                    <label for="cantidad" class="form-label">Cantidad</label>
                                    <input type="cantidad" class="form-control" id="cantidad" name="cantidad" required>
                                </div>
                                <div class="mb-3">
                                    <label for="cantidad" class="form-label">Activado</label>
                                    <select name="activado" id="activado" class="form-control" required>
                                        <option value="none">-</option>
                                        <option value="activado">Activado</option>
                                        <option value="desactivado">Desactivado</option>
                                    </select>
                                </div>
                                <div>
                                    <h6 class="mt-5">Parametros generales de temperatura</h6>
                                </div>
                                <div class="mb-3">
                                    <label for="limpieza" class="form-label">Limpieza</label>
                                    <input type="limpieza" class="form-control" id="limpieza" name="limpieza" required>
                                </div>
                                <div class="mb-3">
                                    <label for="limpieza" class="form-label">Espera</label>
                                    <input type="espera" class="form-control" id="espera" name="espera" required>
                                </div>
                                <div class="mb-3">
                                    <label for="limpieza" class="form-label">Temperatura minima</label>
                                    <input type="temp-min" class="form-control" id="temp-min" name="temp-min" required>
                                </div>
                                <div class="mb-3">
                                    <label for="limpieza" class="form-label">Desviación L</label>
                                    <input type="desviacion-l" class="form-control" id="desviacion-l"
                                        name="desviacion-l" required>
                                </div>
                                <div class="mb-3">
                                    <label for="limpieza" class="form-label">Desviación LL</label>
                                    <input type="desviacion-ll" class="form-control" id="desviacion-ll"
                                        name="desviacion-ll" required>
                                </div>
                                <div class="mb-3">
                                    <label for="limpieza" class="form-label">Desviación H</label>
                                    <input type="desviacion-h" class="form-control" id="desviacion-h"
                                        name="desviacion-h" required>
                                </div>
                                <div class="mb-3">
                                    <label for="limpieza" class="form-label">Desviación HH</label>
                                    <input type="desviacion-hh" class="form-control" id="desviacion-hh"
                                        name="desviacion-hh" required>
                                </div>
                                <div>
                                    <h6 class="mt-5">Extrusor base de temperatura</h6>
                                </div>
                                <div class="mb-3">
                                    <label for="limpieza" class="form-label">Limpieza</label>
                                    <input type="limpieza" class="form-control" id="limpieza" name="limpieza" required>
                                </div>
                                <div class="mb-3">
                                    <label for="limpieza" class="form-label">Espera</label>
                                    <input type="espera" class="form-control" id="espera" name="espera" required>
                                </div>
                                <div class="mb-3">
                                    <label for="limpieza" class="form-label">Temperatura minima</label>
                                    <input type="temp-min" class="form-control" id="temp-min" name="temp-min" required>
                                </div>
                                <div class="mb-3">
                                    <label for="limpieza" class="form-label">Desviación L</label>
                                    <input type="desviacion-l" class="form-control" id="desviacion-l"
                                        name="desviacion-l" required>
                                </div>
                                <div class="mb-3">
                                    <label for="limpieza" class="form-label">Desviación LL</label>
                                    <input type="desviacion-ll" class="form-control" id="desviacion-ll"
                                        name="desviacion-ll" required>
                                </div>
                                <div class="mb-3">
                                    <label for="limpieza" class="form-label">Desviación H</label>
                                    <input type="desviacion-h" class="form-control" id="desviacion-h"
                                        name="desviacion-h" required>
                                </div>
                                <div class="mb-3">
                                    <label for="limpieza" class="form-label">Desviación HH</label>
                                    <input type="desviacion-hh" class="form-control" id="desviacion-hh"
                                        name="desviacion-hh" required>
                                </div>
                                <div>
                                    <h6 class="mt-5">Extrusor franja</h6>
                                </div>
                                <div class="mb-3">
                                    <label for="limpieza" class="form-label">Limpieza</label>
                                    <input type="limpieza" class="form-control" id="limpieza" name="limpieza" required>
                                </div>
                                <div class="mb-3">
                                    <label for="limpieza" class="form-label">Espera</label>
                                    <input type="espera" class="form-control" id="espera" name="espera" required>
                                </div>
                                <div class="mb-3">
                                    <label for="limpieza" class="form-label">Temperatura minima</label>
                                    <input type="temp-min" class="form-control" id="temp-min" name="temp-min" required>
                                </div>
                                <div class="mb-3">
                                    <label for="limpieza" class="form-label">Desviación L</label>
                                    <input type="desviacion-l" class="form-control" id="desviacion-l"
                                        name="desviacion-l" required>
                                </div>
                                <div class="mb-3">
                                    <label for="limpieza" class="form-label">Desviación LL</label>
                                    <input type="desviacion-ll" class="form-control" id="desviacion-ll"
                                        name="desviacion-ll" required>
                                </div>
                                <div class="mb-3">
                                    <label for="limpieza" class="form-label">Desviación H</label>
                                    <input type="desviacion-h" class="form-control" id="desviacion-h"
                                        name="desviacion-h" required>
                                </div>
                                <div class="mb-3">
                                    <label for="limpieza" class="form-label">Desviación HH</label>
                                    <input type="desviacion-hh" class="form-control" id="desviacion-hh"
                                        name="desviacion-hh" required>
                                </div>
                                <input type="submit" value="Enviar" class="btn btn-dark d-block mx-auto">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <script src="js/sidebar.js"></script>
      <script src="js\bootstrap\jquery-3.5.1.slim.min.js"></script>
    <script src="js\bootstrap\bootstrap.bundle.min.js"></script>
</body>

</html>