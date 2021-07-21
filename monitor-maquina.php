<?php
    include('databaseconnect/conection.php');
    $maquina = $_GET['maquina'];


    $select = "SELECT * FROM MAQUINAS WHERE MAQUINA = '$maquina'";
    $resultado = mysqli_query($conexion,$select);
    $row = mysqli_fetch_array($resultado);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-sxle=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png" sizes="16x16">
    <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png" sizes="32x32">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,300,600,800,900" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="styles/styles-monitor.css">
    <title>Monitor de maquína</title>
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
    <div class="container mt-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mt-3">
                <a href="<?php echo $_SERVER['HTTP_REFERER']; ?>" class="text-dark" style="text-decoration: none;">
                    <p class="text-left">
                        <i class='bx bx-arrow-back'></i>
                        <span class="ml-1"> Regresar</span>
                    </p>
                </a>
            </div>
            <div class="col-lg-4 mt-3">
                <h4 class="text-center">Monitor de máquina: <?php echo $row['MAQUINA']; ?></h4>
            </div>
            <div class="col-lg-3">
                <a href="variables.php?maquina=<?php echo $maquina ?>" class="d-block text-white  my-3 mx-auto btn btn-warning">Variables</a>
                <!-- <select class="form-control my-2 mx-1">
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
                </select> -->
            </div>
        </div>
    </div>





    <!-- <div class="row">
        <div class="col-lg-12 my-2">
            <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <i class='bx bx-info-circle'></i> Información
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            <div class="card-body text-center">
                                <p>Área: <?php echo $row['TIPO_MAQUINA'] ?><br>
                                Línea: <?php echo $maquina; ?><br>
                                Fecha: <?php echo date("m/d/y"); ?><br>
                                Hora: <?php echo date("H:i"); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <i class='bx bx-timer'></i> Tiempo muerto
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body text-center">
                            <p>Tiempo muerto: 0.23 mins</p>
                            <p>Tiempo ciclo: 12.43 mins</p>
                        </div>
                        </div>
                </div>



                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <i class='bx bx-chevron-right-circle'></i> OEE
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                        <canvas
                            data-value="0"
                            data-type="radial-gauge"
                            data-width="150"
                            data-height="150"
                            data-units="OEE"
                            data-min-value="0"
                            data-start-angle="90"
                            data-ticks-angle="180"
                            data-value-box="false"
                            data-max-value="100"
                            data-major-ticks="0,25,50,75,100"
                            data-minor-ticks="4"
                            data-stroke-ticks="true"
                            data-highlights='[
                                {"from": 0, "to": 20, "color": "rgba(200, 50, 50, .75)"},
                                {"from": 21, "to": 50, "color": "rgba(240, 233, 29, .94)"},
                                {"from": 51, "to": 100, "color": "rgba(19, 142, 13, .56)"}
                            ]'
                            data-color-plate="#fff"
                            data-border-shadow-width="0"
                            data-borders="false"
                            data-needle-type="arrow"
                            data-needle-width="2"
                            data-needle-circle-size="7"
                            data-needle-circle-outer="true"
                            data-needle-circle-inner="false"
                            data-animation-duration="1000"
                            data-animation-rule="linear"
                            class="d-block mx-auto my-2"
                            id="medidor"
                        ></canvas>
                        <div class="card-body-text text-center">
                            <p>Alarmas: Ninguno<br>
                            Último fallo: Ninguno<br>
                            <?php echo date("D M j G:i:s T Y"); ?></p><br>
                            <p class="text-center">Actualizado hasta: <?php echo date("m.d.y"); ?></p>
                        </div>
                        </div>
                    </div>
                </div>




                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <i class='bx bx-comment-check'></i> Disponibilidad
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                        <canvas
                            data-value="0"
                            data-type="radial-gauge"
                            data-width="150"
                            data-height="150"
                            data-units="OEE"
                            data-min-value="0"
                            data-start-angle="90"
                            data-ticks-angle="180"
                            data-value-box="false"
                            data-max-value="100"
                            data-major-ticks="0,25,50,75,100"
                            data-minor-ticks="4"
                            data-stroke-ticks="true"
                            data-highlights='[
                                {"from": 0, "to": 20, "color": "rgba(200, 50, 50, .75)"},
                                {"from": 21, "to": 50, "color": "rgba(240, 233, 29, .94)"},
                                {"from": 51, "to": 100, "color": "rgba(19, 142, 13, .56)"}
                            ]'
                            data-color-plate="#fff"
                            data-border-shadow-width="0"
                            data-borders="false"
                            data-needle-type="arrow"
                            data-needle-width="2"
                            data-needle-circle-size="7"
                            data-needle-circle-outer="true"
                            data-needle-circle-inner="false"
                            data-animation-duration="1000"
                            data-animation-rule="linear"
                            class="d-block mx-auto my-2"
                            id="medidor"
                        ></canvas>
                        <div class="card-body-text text-center">
                            <p>Tiempo operativo: 43.12 mins<br>
                            Tiempo disponible: 56.10 mins</p><br>
                            <p class="text-center">Actualizado hasta: <?php echo date("m.d.y"); ?></p>
                        </div>
                        </div>
                    </div>
                </div>



                <div class="card">
                    <div class="card-header" id="headingFive">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <i class='bx bx-tachometer'></i> Rendimiento
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                        <div class="card-body">
                            <canvas
                                data-value="0"
                                data-type="radial-gauge"
                                data-width="150"
                                data-height="150"
                                data-units="OEE"
                                data-min-value="0"
                                data-start-angle="90"
                                data-ticks-angle="180"
                                data-value-box="false"
                                data-max-value="100"
                                data-major-ticks="0,25,50,75,100"
                                data-minor-ticks="4"
                                data-stroke-ticks="true"
                                data-highlights='[
                                    {"from": 0, "to": 20, "color": "rgba(200, 50, 50, .75)"},
                                    {"from": 21, "to": 50, "color": "rgba(240, 233, 29, .94)"},
                                    {"from": 51, "to": 100, "color": "rgba(19, 142, 13, .56)"}
                                ]'
                                data-color-plate="#fff"
                                data-border-shadow-width="0"
                                data-borders="false"
                                data-needle-type="arrow"
                                data-needle-width="2"
                                data-needle-circle-size="7"
                                data-needle-circle-outer="true"
                                data-needle-circle-inner="false"
                                data-animation-duration="1000"
                                data-animation-rule="linear"
                                class="d-block mx-auto my-2"
                                id="medidor"
                            ></canvas>
                            <div class="card-body-text text-center">
                                <p>Producción real: 256 pzs.<br>
                                Producción prevista: 280 pzs.</p><br>
                                <p class="text-center">Actualizado hasta: <?php echo date("m.d.y"); ?></p>
                            </div>
                        </div>
                    </div>
                </div>




                <div class="card">
                    <div class="card-header" id="headingSix">
                        <h5 class="mb-0">
                            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <i class='bx bx-badge-check'></i> Calidad
                            </button>
                        </h5>
                    </div>
                    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                        <div class="card-body">
                            <canvas
                                data-value="0"
                                data-type="radial-gauge"
                                data-width="150"
                                data-height="150"
                                data-units="OEE"
                                data-min-value="0"
                                data-start-angle="90"
                                data-ticks-angle="180"
                                data-value-box="false"
                                data-max-value="100"
                                data-major-ticks="0,25,50,75,100"
                                data-minor-ticks="4"
                                data-stroke-ticks="true"
                                data-highlights='[
                                    {"from": 0, "to": 20, "color": "rgba(200, 50, 50, .75)"},
                                    {"from": 21, "to": 50, "color": "rgba(240, 233, 29, .94)"},
                                    {"from": 51, "to": 100, "color": "rgba(19, 142, 13, .56)"}
                                ]'
                                data-color-plate="#fff"
                                data-border-shadow-width="0"
                                data-borders="false"
                                data-needle-type="arrow"
                                data-needle-width="2"
                                data-needle-circle-size="7"
                                data-needle-circle-outer="true"
                                data-needle-circle-inner="false"
                                data-animation-duration="1000"
                                data-animation-rule="linear"
                                class="d-block mx-auto my-2"
                                id="medidor"
                            ></canvas>
                            <div class="card-body-text text-center">
                                <p>Producción real: 226 pzs.<br>
                                Producción OK: 226 pzs.</p><br>
                                <p class="text-center">Actualizado hasta: <?php echo date("m.d.y"); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->




        <div class="row">
            <div class="col-lg-3 my-2">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-center"><i class='bx bx-info-circle'></i> Información</h6>
                    </div>
                    <div class="card-body text-center">
                        <p>Área: <?php echo $row['TIPO_MAQUINA'] ?></p>
                        <p>Línea: <?php echo $maquina; ?></p>
                        <p class="my-4">Fecha: <?php echo date("m/d/y"); ?></p>
                        <p class="my-4">Hora: <?php echo date("H:i"); ?></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 my-2">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-center"><i class='bx bx-timer'></i> Tiempo muerto</h6>
                    </div>
                    <div class="card-body my-3">
                        <div class="card-text my-3">
                            <p>Tiempo muerto: 0.23 mins<br>
                            <p>Tiempo perdido: 2.03 mins<br>
                            <p>Tiempo ciclo: 12.43 mins</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 my-2">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-center"><i class='bx bxs-chevron-right-circle'></i> OEE</h6>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5">
                                <canvas
                                data-value="0"
                                data-type="radial-gauge"
                                data-width="150"
                                data-height="150"
                                data-units="OEE"
                                data-min-value="0"
                                data-start-angle="90"
                                data-ticks-angle="180"
                                data-value-box="false"
                                data-max-value="100"
                                data-major-ticks="0,25,50,75,100"
                                data-minor-ticks="4"
                                data-stroke-ticks="true"
                                data-highlights='[
                                    {"from": 0, "to": 20, "color": "rgba(200, 50, 50, .75)"},
                                    {"from": 21, "to": 50, "color": "rgba(240, 233, 29, .94)"},
                                    {"from": 51, "to": 100, "color": "rgba(19, 142, 13, .56)"}
                                ]'
                                data-color-plate="#fff"
                                data-border-shadow-width="0"
                                data-borders="false"
                                data-needle-type="arrow"
                                data-needle-width="2"
                                data-needle-circle-size="7"
                                data-needle-circle-outer="true"
                                data-needle-circle-inner="false"
                                data-animation-duration="1000"
                                data-animation-rule="linear"
                                class="d-block mx-auto my-2"
                                id="medidor"
                            ></canvas>
                            <script>
                                var number = 0;
                                    setInterval(function() {
                                        number= Math.floor(Math.random()*100);
                                        $("#medidor").attr("data-value",number);
                                    }, 1000);
                            </script>
                                </div>
                                <div class="col-lg-6 text-left">
                                    <p>Alarmas: Ninguno</p>
                                    <p>Último fallo: Ninguno</p>
                                    <p><?php echo date("D M j G:i:s T Y"); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>











            <div class="col-lg-4 my-2">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-center"><i class='bx bxs-chevron-right-circle'></i> Disponibilidad</h6>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <canvas
                                        data-value="0"
                                        data-type="radial-gauge"
                                        data-width="150"
                                        data-height="150"
                                        data-units="OEE"
                                        data-min-value="0"
                                        data-start-angle="90"
                                        data-ticks-angle="180"
                                        data-value-box="false"
                                        data-max-value="100"
                                        data-major-ticks="0,25,50,75,100"
                                        data-minor-ticks="4"
                                        data-stroke-ticks="true"
                                        data-highlights='[
                                            {"from": 0, "to": 20, "color": "rgba(200, 50, 50, .75)"},
                                            {"from": 21, "to": 50, "color": "rgba(240, 233, 29, .94)"},
                                            {"from": 51, "to": 100, "color": "rgba(19, 142, 13, .56)"}
                                        ]'
                                        data-color-plate="#fff"
                                        data-border-shadow-width="0"
                                        data-borders="false"
                                        data-needle-type="arrow"
                                        data-needle-width="2"
                                        data-needle-circle-size="7"
                                        data-needle-circle-outer="true"
                                        data-needle-circle-inner="false"
                                        data-animation-duration="1000"
                                        data-animation-rule="linear"
                                        class="d-block mx-auto my-2"
                                        id="medidor1"
                                    ></canvas>
                                    <script>
                                        var number1 = 0;
                                        setInterval(function() {
                                            number1 = Math.floor(Math.random()*100);
                                            $("#medidor1").attr("data-value",number1);
                                        }, 1000);
                                    </script>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <p>Tiempo operativo: 43.12 mins<br>
                                    Tiempo disponible: 56.10 mins</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>









            <div class="col-lg-4 my-2">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-center"><i class='bx bxs-chevron-right-circle'></i> Rendimiento</h6>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12">
                                    <canvas
                                        data-value="0"
                                        data-type="radial-gauge"
                                        data-width="150"
                                        data-height="150"
                                        data-units="OEE"
                                        data-min-value="0"
                                        data-start-angle="90"
                                        data-ticks-angle="180"
                                        data-value-box="false"
                                        data-max-value="100"
                                        data-major-ticks="0,25,50,75,100"
                                        data-minor-ticks="4"
                                        data-stroke-ticks="true"
                                        data-highlights='[
                                            {"from": 0, "to": 20, "color": "rgba(200, 50, 50, .75)"},
                                            {"from": 21, "to": 50, "color": "rgba(240, 233, 29, .94)"},
                                            {"from": 51, "to": 100, "color": "rgba(19, 142, 13, .56)"}
                                        ]'
                                        data-color-plate="#fff"
                                        data-border-shadow-width="0"
                                        data-borders="false"
                                        data-needle-type="arrow"
                                        data-needle-width="2"
                                        data-needle-circle-size="7"
                                        data-needle-circle-outer="true"
                                        data-needle-circle-inner="false"
                                        data-animation-duration="1000"
                                        data-animation-rule="linear"
                                        class="d-block mx-auto my-2"
                                        id="medidor2"
                                    ></canvas>
                                    <script>
                                        var number2 = 0;
                                        setInterval(function() {
                                            number2 = Math.floor(Math.random()*100);
                                            $("#medidor2").attr("data-value",number2);
                                        }, 1000);
                                    </script>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <p>Producción real: 256 pzs.<br>
                                    Producción prevista: 280 pzs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>











            <div class="col-lg-4 my-2">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-center"><i class='bx bxs-chevron-right-circle'></i> Calidad</h6>
                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row">
                            <div class="col-lg-12">
                                    <canvas
                                        data-value="0"
                                        data-type="radial-gauge"
                                        data-width="150"
                                        data-height="150"
                                        data-units="OEE"
                                        data-min-value="0"
                                        data-start-angle="90"
                                        data-ticks-angle="180"
                                        data-value-box="false"
                                        data-max-value="100"
                                        data-major-ticks="0,25,50,75,100"
                                        data-minor-ticks="4"
                                        data-stroke-ticks="true"
                                        data-highlights='[
                                            {"from": 0, "to": 20, "color": "rgba(200, 50, 50, .75)"},
                                            {"from": 21, "to": 50, "color": "rgba(240, 233, 29, .94)"},
                                            {"from": 51, "to": 100, "color": "rgba(19, 142, 13, .56)"}
                                        ]'
                                        data-color-plate="#fff"
                                        data-border-shadow-width="0"
                                        data-borders="false"
                                        data-needle-type="arrow"
                                        data-needle-width="2"
                                        data-needle-circle-size="7"
                                        data-needle-circle-outer="true"
                                        data-needle-circle-inner="false"
                                        data-animation-duration="1000"
                                        data-animation-rule="linear"
                                        class="d-block mx-auto my-2"
                                        id="medidor3"
                                    ></canvas>
                                    <script>
                                        var number3 = 0;
                                        setInterval(function() {
                                            number3 = Math.floor(Math.random()*100);
                                            $("#medidor3").attr("data-value",number3);
                                        }, 1000);
                                    </script>
                                </div>
                                <div class="col-lg-12 text-center">
                                    <p>Producción real: 226 pzs.<br>
                                    Producción OK: 226 pzs.</p>
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
