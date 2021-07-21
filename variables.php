<?php 
include 'databaseconnect/conection.php';
$select = "SELECT DISTINCT TIPO_MAQUINA, TIPO_MAQUINA_HIDDEN FROM MAQUINAS GROUP BY TIPO_MAQUINA, TIPO_MAQUINA_HIDDEN;";
$query = mysqli_query($conexion,$select);

$select_avg = "SELECT TIPO_MAQUINA,ROUND(AVG(RENDIMIENTO), 2) AS RENDIMIENTO FROM MAQUINAS GROUP BY TIPO_MAQUINA";
$query1 = mysqli_query($conexion,$select_avg);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png" sizes="16x16">
    <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png" sizes="32x32">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="styles/styles-monitor copy.css">
    <link rel="stylesheet" href="styles/switch.css">
    <title>Monitor piso</title>
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
                <span class="tooltip">Monitor de piso</span>
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
                <span class="tooltip">Estadisticas</span>
            </li>
            <li>
                <a href="bitacora-eventos.html" class="pr-2 mt-2">
                    <i class='bx bx-calendar-event'></i>
                    <span class="link-name">Bitacora de eventos</span>
                </a>
                <span class="tooltip">Bitacora de eventos</span>
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
                <span class="tooltip">Gestión de usuarios</span>
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


    <!-- CONTENIDO DE LA PÁGINA -->
    <div class="home-content">
        <h3 class="text-center">Variables</h3>

        <div class="container">
            <div class="row">
                <div class="col-lg-5 d-block mx-auto mt-2">
                    <div class="card">
                        <div class="card-header text-center">
                            <h6>Bool</h6>
                        </div>
                        <div class="card-body my-4">
                            <div class="container">
                                <div class="row">

                                <!-- TOGGLERS -->
                                    <div class="col-lg-5 d-block mx-auto">
                                        <p class="text-center">Obtención del estado del enrollador</p>
                                    </div>
                                    <div class="col-lg-2 d-block mx-auto">
                                        <p class="text-center mt-3">Off</p>
                                    </div>
                                    <div class="col-lg-2 mr-3 mt-2">
                                        <div class="swtich-container">
                                            <input type="checkbox" id="switch" disabled>
                                            <label for="switch" class="lbl"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 d-block mx-auto">
                                        <p class="text-center mt-3">On</p>
                                    </div>


                                    <div class="col-lg-5 d-block mx-auto">
                                        <p class="text-center mt-1">Matriz de fallas de chispa</p>
                                    </div>
                                    <div class="col-lg-2 d-block mx-auto">
                                        <p class="text-center mt-3">Off</p>
                                    </div>
                                    <div class="col-lg-2 mr-3 mt-2">
                                        <div class="swtich-container">
                                            <input type="checkbox" id="switch" disabled>
                                            <label for="switch" class="lbl"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 d-block mx-auto">
                                        <p class="text-center mt-3">On</p>
                                    </div>


                                    <div class="col-lg-5 d-block mx-auto">
                                        <p class="text-center mt-3">Última bobina</p>
                                    </div>
                                    <div class="col-lg-2 d-block mx-auto">
                                        <p class="text-center mt-3">Off</p>
                                    </div>
                                    <div class="col-lg-2 mr-3 mt-2">
                                        <div class="swtich-container">
                                            <input type="checkbox" id="switch" disabled>
                                            <label for="switch" class="lbl"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 d-block mx-auto">
                                        <p class="text-center mt-3">On</p>
                                    </div>


                                    <div class="col-lg-5 d-block mx-auto">
                                        <p class="text-center mt-3">Cambio de bobina</p>
                                    </div>
                                    <div class="col-lg-2 d-block mx-auto">
                                        <p class="text-center mt-3">Off</p>
                                    </div>
                                    <div class="col-lg-2 mr-3 mt-2">
                                        <div class="swtich-container">
                                            <input type="checkbox" id="switch" disabled>
                                            <label for="switch" class="lbl"></label>
                                        </div>
                                    </div>
                                    <div class="col-lg-2 d-block mx-auto">
                                        <p class="text-center mt-3">On</p>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-lg-5 d-block mx-auto mt-2">
                    <div class="card">
                        <div class="card-header text-center">
                            <h6>Float</h6>
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-5">
                                        <p class="mt-5">Velocidad de operación</p>
                                    </div>
                                    <div class="col-lg-5">
                                        <canvas 
                                            data-value="100"
                                            data-type="radial-gauge"
                                            data-width="150"
                                            data-height="150"
                                            data-units="Km/h"
                                            data-min-value="0"
                                            data-max-value="220"
                                            data-major-ticks="0,20,40,60,80,100,120,140,160,180,200,220"
                                            data-minor-ticks="2"
                                            data-stroke-ticks="true"
                                            data-highlights='[
                                                {"from": 160, "to": 220, "color": "rgba(200, 50, 50, .75)"}
                                            ]'
                                            data-color-plate="#fff"
                                            data-border-shadow-width="0"
                                            data-borders="false"
                                            data-needle-type="arrow"
                                            data-needle-width="2"
                                            data-needle-circle-size="7"
                                            data-needle-circle-outer="true"
                                            data-needle-circle-inner="false"
                                            data-animation-duration="900"
                                            data-animation-rule="linear"
                                        ></canvas>
                                    </div>


                                    <div class="col-lg-5">
                                        <p class="mt-5">Horómetro</p>
                                    </div>
                                    <div class="col-lg-5">
                                        <canvas 
                                            data-value="90.56"
                                            data-type="radial-gauge"
                                            data-width="150"
                                            data-height="150"
                                            data-units="Horas"
                                            data-min-value="0"
                                            data-max-value="220"
                                            data-major-ticks="0,20,40,60,80,100,120,140,160,180,200,220"
                                            data-minor-ticks="2"
                                            data-stroke-ticks="true"
                                            data-highlights='[
                                                {"from": 160, "to": 220, "color": "rgba(200, 50, 50, .75)"}
                                            ]'
                                            data-color-plate="#fff"
                                            data-border-shadow-width="0"
                                            data-borders="false"
                                            data-needle-type="arrow"
                                            data-needle-width="2"
                                            data-needle-circle-size="7"
                                            data-needle-circle-outer="true"
                                            data-needle-circle-inner="false"
                                            data-animation-duration="900"
                                            data-animation-rule="linear"
                                        ></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>






            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/monitor.js"></script>
    <script src="js/gauge.min.js"></script>
</body>
</html>