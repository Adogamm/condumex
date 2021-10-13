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
    <link rel="stylesheet" href="styles/styles-monitor.css">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

    <title>Recetas</title>
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
            <span class="text">RECETAS</span>
        </div>
        <div class="container my-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="nueva-receta.php" class="btn btn-dark">Nueva receta</a>
                        <!-- <button type="button" class="btn btn-dark">Editar receta</button> -->
                        <!-- <button type="button" class="btn btn-dark">Eliminar receta</button> -->
                        <!-- <button type="button" class="btn btn-dark">Nueva receta</button> -->
                    </div>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-lg-2 my-1">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Area</option>
                        <option value="1">Estirado grueso</option>
                        <option value="2">Estirado fino</option>
                        <option value="3">Termo plasticos</option>
                        <option value="4">Termo fijos</option>
                        <option value="5">Irradiado</option>
                        <option value="6">Reunido</option>
                    </select>
                </div>
                <div class="col-lg-2 my-1">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Maquina</option>
                        <option value="1">TF-01</option>
                        <option value="2">TF-02</option>
                        <option value="3">TF-03</option>
                        <option value="4">TF-04</option>
                        <option value="5">TF-05</option>
                        <option value="6">TF-06</option>
                        <option value="7">TF-07</option>
                        <option value="8">TF-08</option>
                    </select>
                </div>

                <div class="col-lg-2 my-1">
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Familia calibre</option>
                    </select>
                </div>
            </div>


            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="myTable">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Área</th>
                                            <th>Máquina</th>
                                            <th>Editar</th>
                                            <th>Eliminar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>01</td>
                                            <td>Irradiado</td>
                                            <td>LIR601</td>
                                            <td><button type="button" class="btn btn-dark">Editar receta</button></td>
                                            <td><button type="button" class="btn btn-dark">Eliminar receta</button></td>
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

    </section>





    <script src="js/sidebar.js"></script>
    <script src="js/gauge.min.js"></script>
    <script src="js/monitor.js"></script>
      <script src="js\bootstrap\jquery-3.5.1.slim.min.js"></script>
    <script src="js\bootstrap\bootstrap.bundle.min.js"></script>

      <script src="js\datatables\jquery.min.js"></script>
  <script type="text/javascript" charset="utf8" src="js\datatables\jquery.dataTables.js"></script>
  <script src="js\datatables\jquery-3.5.1.js"></script>
  <script src="js\datatables\jquery.dataTables.min.js"></script>
  <script src="js\datatables\dataTables.buttons.min.js"></script>
  <script src="js\datatables\jszip.min.js"></script>
  <script src="js\datatables\pdfmake.min.js"></script>
  <script src="js\datatables\vfs_fonts.js"></script>
  <script src="js\datatables\buttons.html5.min.js"></script>
  <script src="js\datatables\buttons.print.min.js"></script>
</body>

</html>







<!-- <tr>
                                    <th>Variable</th>
                                    <th>Cantidad</th>
                                    <th>Activado</th>
                                </tr>
                                <tr>
                                    <td>Velocidad</td>
                                    <td>600 km/h</td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" checked>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Compuesto</td>
                                    <td>POL135</td>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="flexCheckChecked" checked>
                                        </div>
                                    </td>
                                </tr> -->





<!-- <h6 class="mt-4">Parametros generales temperatura</h6>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover">
                                <tr>
                                    <th>Limpieza</th>
                                    <th>Espera</th>
                                    <th>Temp. miníma</th>
                                    <th>Desviación L.</th>
                                    <th>Desviación LL.</th>
                                    <th>Desviación H.</th>
                                    <th>Desviación HH</th>
                                </tr>
                                <tr>
                                    <td>150</td>
                                    <td>60</td>
                                    <td>90</td>
                                    <td>3</td>
                                    <td>5</td>
                                    <td>3</td>
                                    <td>5</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <h6 class="mt-4">Extrusor base temperatura</h6>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover">
                                <tr>
                                    <th>Limpieza</th>
                                    <th>Espera</th>
                                    <th>Temp. miníma</th>
                                    <th>Desviación L.</th>
                                    <th>Desviación LL.</th>
                                    <th>Desviación H.</th>
                                    <th>Desviación HH</th>
                                </tr>
                                <tr>
                                    <td>150</td>
                                    <td>60</td>
                                    <td>90</td>
                                    <td>3</td>
                                    <td>5</td>
                                    <td>3</td>
                                    <td>5</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <h6 class="mt-4">Extrusor franja</h6>
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-hover">
                                <tr>
                                    <th>Limpieza</th>
                                    <th>Espera</th>
                                    <th>Temp. miníma</th>
                                    <th>Desviación L.</th>
                                    <th>Desviación LL.</th>
                                    <th>Desviación H.</th>
                                    <th>Desviación HH</th>
                                </tr>
                                <tr>
                                    <td>150</td>
                                    <td>60</td>
                                    <td>90</td>
                                    <td>3</td>
                                    <td>5</td>
                                    <td>3</td>
                                    <td>5</td>
                                </tr>
                            </table>
                        </div> -->