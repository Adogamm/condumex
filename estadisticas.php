<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png" sizes="16x16">
    <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png" sizes="32x32">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.3.2/chart.min.js" integrity="sha512-VCHVc5miKoln972iJPvkQrUYYq7XpxXzvqNfiul1H4aZDwGBGC0lq373KNleaB2LpnC2a/iNfE5zoRYmB4TRDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="styles/styles-monitor.css">
    <title>Analisis de disponibilidad</title>
</head>
<body>

    <div class="sidebar">
        <div class="logo-container">
            <!-- <img src="images/logo.png" alt="Your Logo" class="logo"> -->
            <img src="images/condumex_logo.png" alt="condumex logo" class="logo">
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav_list">
            <li>
                <a href="monitor.php" class="pr-2 mt-2">
                    <i class='bx bx-grid-alt' ></i>
                    <span class="link-name">Monitor de piso</span>
                </a>
            </li>
            <!-- <li>
                <a href="recetas.html" class="pr-2 mt-2">
                    <i class='bx bx-book-bookmark'></i>
                    <span class="link-name">Recetas</span>
                </a>
            </li> -->
            <li>
                <a href="estadisticas.php" class="pr-2 mt-2">
                    <i class='bx bx-line-chart'></i>
                    <span class="link-name">Estadisticas</span>
                </a>
            </li>
            <li>
                <a href="bitacora-eventos.html" class="pr-2 mt-2">
                    <i class='bx bx-calendar-event'></i>
                    <span class="link-name">Bitacora de eventos</span>
                </a>
            </li>
            <!-- <li>
                <a href="maestros.html">
                    <i class='bx bx-wrench'></i>
                    <span class="link-name">Maestros</span>
                </a>
            </li> -->
            <!-- TODO SOLO SI LA SESIÓN PERTENECE A UN USUARIO -->
            <li>
                <a href="administracion-usuarios.html" class="pr-2 mt-2">
                    <i class='bx bx-user' ></i>
                    <span class="link-name">Gestión de usuarios</span>
                </a>
            </li>
        </ul>
        <div class="profile-content">
            <div class="profile">
                <div class="profile-details">
                    <img src="images/avatar.png" alt="Profile image">
                    <div class="name_job">
                        <div class="name">
                            Juan Sánchez
                        </div>
                        <div class="job">
                            Administrador
                        </div>
                    </div>
                </div>
                <i class='bx bx-exit' id="log-out"></i>
            </div>
        </div>
    </div>

  <!-- CONTENIDO DE LA PAGINA -->
  <div class="home-content">


    <div class="container">
        <div class="row">
            <div class="col-lg-4 mt-4">
                <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="text-dark" style="text-decoration: none;">
                    <p class="text-left">
                        <i class='bx bx-arrow-back'></i>
                        <span class="ml-1"> Regresar</span>
                    </p>
                </a>
            </div>
            <div class="col-lg-4">
                <h3 class="text-center title">Estadísticas</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="container mt-4">
                                <div class="row">
                                    <div class="col-lg-12 d-block mx-auto">
                                        <form action="#" class="form-inline">
                                            <select class="form-control my-2 mx-1">
                                                <option value="null">-- Seleccionar Área --</option>
                                                <option value="Irradiado">Irradiado</option>
                                                <option value="Repase">Repase</option>
                                                <option value="Termo fijo">Termo fijo</option>
                                                <option value="Termo plástico">Termo plástico</option>
                                                <option value="Tubulado">Tubulado</option>
                                            </select>
                                            <select class="form-control my-2 mx-1">
                                                <option value="null">-- Seleccionar Máquina --</option>
                                                <option value="LIR601">LIR601</option>

                                                <option value="LRP601">LRP601</option>
                                                <option value="LRP602">LRP602</option>
                                            
                                                <option value="LAF601">LAF601</option>
                                                <option value="LAF602">LAF602</option>
                                                <option value="LAF603">LAF603</option>
                                                <option value="LAF604">LAF604</option>
                                                <option value="LAF605">LAF605</option>
                                                <option value="LAF606">LAF606</option>
                                                <option value="LAF607">LAF607</option>
                                            
                                                <option value="LAF601">LAF601</option>
                                                <option value="LAF602">LAF602</option>
                                                <option value="LAF603">LAF603</option>
                                                <option value="LAF604">LAF604</option>
                                                <option value="LAF605">LAF605</option>
                                                <option value="LAF606">LAF606</option>
                                                <option value="LAF607">LAF607</option>
                                                <option value="LAF608">LAF608</option>
                                                <option value="LAF609">LAF609</option>
                                                <option value="LAF610">LAF620</option>
                                                <option value="LAF611">LAF611</option>
                                            
                                                <option value="LAF601">LAF601</option>
                                            </select>
                                            <select class="form-control my-2 mx-1">
                                                <option value="null">-- Seleccionar Variables --</option>
                                                <option value="estado-enrollador">Obtención del estado del enrollador</option>
                                                <option value="actual-length">Medición de la producción conforme "Actual Length"</option>
                                                <option value="fallas-chispa">Matriz de fallas de chispa</option>
                                                <option value="fallas-superficie">Fallas de superficie</option>
                                                <option value="preset_length">Preset_length</option>
                                                <option value="spool-change">Cambio de bobina (spool change)</option>
                                                <option value="last-spool">Velocidad de operación</option>
                                                <option value="last-spool">Concentricidad</option>
                                                <option value="last-spool">Horómetro</option>
                                            </select>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-5 d-block mx-auto mt-2">
                            <canvas id="grafica-lineas" width="30%" height="30%"></canvas>
                        </div>
                        <div class="col-lg-5 d-block mx-auto">
                            <table class="table table-striped mt-4">
                                <tr>
                                    <th>Ítem</th>
                                    <th>Variable</th>
                                    <th>Valor</th>
                                    <th>Fecha</th>
                                    <th>Hora</th>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
    <script src="js/main.js"></script>
    <script src="js/monitor.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>