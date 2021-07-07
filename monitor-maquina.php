<?php
    include('databaseconnect/conection.php');
    $maquina = $_GET['maquina'];
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
                <h4 class="text-center">Monitor de máquina: <?php echo $maquina ?></h4>
            </div>
            <div class="col-lg-3">
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
            </div>
        </div>
    </div>

        <div class="row">
            <div class="col-lg-3 my-2">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-center"><i class='bx bx-info-circle'></i> Información</h6>
                    </div>
                    <div class="card-body text-center">
                        <p class="my-5">Maquina: <?php echo $maquina; ?></p>
                        <p class="my-3">Más información: Sin información para mostrar</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 my-2">
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-center"><i class='bx bx-timer'></i> Tiempo muerto</h6>
                    </div>
                    <div class="card-body my-5">
                        <div class="card-text my-2">
                            <p>Tiempo muerto: 0.23 mins</p>
                        </div>
                        <div class="card-text my-2">
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
                                <div class="progress" style="height: 25px;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" id="progress" style="width: 0%; min-width: 25%;" id="progress-bar"><span>0%</span></div>
                                </div>
                                <script>
                                    var barra = document.getElementById("progress");
                                    var number = 0
                                    setInterval(function() {
                                        number = Math.floor(Math.random()*100);
                                        $("#progress").css("width",number+"%").attr("aria-valuenow",number).text(number+"%");
                                        if(number >= 0 && number <= 10){
                                           barra.classList.toggle("bg-danger");
                                        } else if(number >= 21 && number <= 50){
                                            barra.classList.toggle("bg-warning");
                                        } else if(number >= 51 && number <= 100){
                                            barra.classList.toggle("bg-success");
                                        }
                                    }, 2500);
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
                    <div class="card-footer">
                        <p class="text-center">Actualizado hasta: <?php echo date("m.d.y"); ?></p>
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
                                <div class="col-lg-5">

                                <div class="progress my-4" style="height: 25px;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" id="progress1" style="width: 0%; min-width: 25%;" id="progress-bar"><span>0%</span></div>
                                </div>
                                <script>
                                    var number1 = 0;
                                    setInterval(function() {
                                        number1 = Math.floor(Math.random()*100);
                                        $("#progress1").css("width",number1+"%").attr("aria-valuenow",number1).text(number1+"%");
                                    }, 2500);
                                </script>
                                </div>
                                <div class="col-lg-6 text-left">
                                    <p>Tiempo operativo: <br>43.12 mins</p>
                                    <p>Tiempo disponible: <br>56.10 mins</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="text-center">Actualizado hasta: <?php echo date("m.d.y"); ?></p>
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
                                <div class="col-lg-5">
                                <div class="progress my-4" style="height: 25px;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" id="progress2" style="width: 0%; min-width: 25%;" id="progress-bar"><span>0%</span></div>
                                </div>
                                <script>
                                    var number2 = 0
                                    setInterval(function() {
                                        number2 = Math.floor(Math.random()*100);
                                        $("#progress2").css("width",number2+"%").attr("aria-valuenow",number2).text(number2+"%");
                                    }, 2500);
                                </script>
                                </div>
                                <div class="col-lg-7 text-left my-1">
                                    <p class="my-4">Producción real: <br>256 pzs.</p>
                                    <p class="my-4">Producción prevista: <br>280 pzs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="text-center">Actualizado hasta: <?php echo date("m.d.y"); ?></p>
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
                                <div class="col-lg-5">
                                <div class="progress my-4" style="height: 25px;">
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" id="progress3" style="width: 0%; min-width: 25%;" id="progress-bar"><span>0%</span></div>
                                </div>
                                <script>
                                    var number3 = 0
                                    setInterval(function() {
                                        number3 = Math.floor(Math.random()*100);
                                        $("#progress3").css("width",number3+"%").attr("aria-valuenow",number3).text(number3+"%");
                                    }, 2500);
                                </script>
                                </div>
                                <div class="col-lg-6 text-left my-1">
                                    <p class="my-4">Producción real: <br>226 pzs.</p>
                                    <p class="my-4">Producción OK: <br>226 pzs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <p class="text-center">Actualizado hasta: <?php echo date("m.d.y"); ?></p>
                    </div>
                </div>
            </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/monitor.js"></script>
  </body>
</html>
