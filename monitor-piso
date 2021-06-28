<?php 
include 'databaseconnect/conection.php';
$select = "SELECT DISTINCT TIPO_MAQUINA FROM MAQUINAS GROUP BY TIPO_MAQUINA;";
$query = mysqli_query($conexion,$select);

$select_avg = "SELECT TIPO_MAQUINA,ROUND(AVG(RENDIMIENTO), 2) AS RENDIMIENTO FROM MAQUINAS GROUP BY TIPO_MAQUINA";
$query1 = mysqli_query($conexion,$select_avg);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png" sizes="16x16">
    <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png" sizes="32x32">
    <link rel="stylesheet" href="styles/monitor-styles.css">
    <title>Monitor piso</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav mr-auto">
            <a class="nav-item nav-link active" href="monitor-piso.html">Monitor de piso</a>
            <a class="nav-item nav-link disabled" href="#">|</a>
            <a class="nav-item nav-link" href="recetas.html">Recetas</a>
            <a class="nav-item nav-link disabled" href="#">|</a>
            <a class="nav-item nav-link" href="analisis-disponibilidad.html">Analisis de disponibilidad</a>
            <a class="nav-item nav-link disabled" href="#">|</a>
            <a class="nav-item nav-link" href="bitacora-eventos.html">Bitacora de eventos</a>
            <a class="nav-item nav-link disabled" href="#">|</a>
            <a class="nav-item nav-link" href="maestros.html">Maestros</a>
          </div>
        </div>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Juan Sánchez
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="administracion-usuarios.html">Administración de usuarios</a>
                  <a class="dropdown-item" href="roles-privilegios.html">Roles y privilegios</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Cerrar sesión</a>
                </div>
            </li>
            <a class="mx-4 nav-item nav-link disabled" href="#">044513</a>
        </ul>
    </nav>



    <img src="images/condumex_logo.png" alt="condumex logo" class="navbar-icon">
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


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>