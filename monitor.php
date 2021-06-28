<?php 
include 'databaseconnect/conection.php';
$select = "SELECT DISTINCT TIPO_MAQUINA FROM MAQUINAS GROUP BY TIPO_MAQUINA;";
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
    <link rel="stylesheet" href="styles/styles-monitor.css">
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
                <a href="monitor.php">
                    <i class='bx bx-grid-alt' ></i>
                    <span class="link-name">Monitor de piso</span>
                </a>
            </li>
            <li>
                <a href="recetas.html">
                    <i class='bx bx-book-bookmark'></i>
                    <span class="link-name">Recetas</span>
                </a>
            </li>
            <li>
                <a href="analisis-disponibilidad.html">
                    <i class='bx bx-line-chart'></i>
                    <span class="link-name">Analisis disponibilidad</span>
                </a>
            </li>
            <li>
                <a href="bitacora-eventos.html">
                    <i class='bx bx-calendar-event'></i>
                    <span class="link-name">Bitacora de eventos</span>
                </a>
            </li>
            <li>
                <a href="maestros.html">
                    <i class='bx bx-wrench'></i>
                    <span class="link-name">Maestros</span>
                </a>
            </li>
            <li>
                <a href="#">
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

    <div class="home-content">
        <h3 class="text-center title">Monitor de piso</h3>
        <div class="container">
            <div class="row">
                <?php while($maquinas = mysqli_fetch_assoc($query) AND $porcentaje = mysqli_fetch_assoc($query1)){ ?>
                <div class="col-lg-5 mt-5 text-end">
                    <a href="monitor-piso-details.php?tipo_maquina=<?php echo $maquinas['TIPO_MAQUINA'] ?>"><?php echo $maquinas['TIPO_MAQUINA'] ?></a>
                </div>
                
                <div class="col-lg-5 mt-5">
                    <div class="progress" style="height: 25px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: <?php echo $porcentaje['RENDIMIENTO']; ?>%;" aria-valuenow="<?php echo $porcentaje['RENDIMIENTO'];?>" aria-valuemin="0" aria-valuemax="100" id="estirado-grueso"><?php echo $porcentaje['RENDIMIENTO']; ?> %</div>
                      </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="js/monitor.js"></script>
</body>
</html>