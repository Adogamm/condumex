<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/login-styles.css">
    <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png"
        sizes="16x16">
    <link rel="icon" href="https://www.condumex.com.mx/wp-content/uploads/2020/05/favicon.png" type="image/png"
        sizes="32x32">
    <title>Iniciar Sesión</title>
</head>

<body>
    <div class="container-all">
        <div class="ctn-form border shadow">
            <img src="images/condumex_logo.png" alt="Condumex Logo" class="logo"><br>
            <h2 class="title">Iniciar Sesión</h2>
            <form action="login-check.php" method="POST">
                <label for="">Nombre de usuario</label>
                <input type="text" name="user" id="user">
                <label for="">Contraseña</label>
                <input type="password" name="pass" id="user">
                <input type="submit" value="Iniciar">
            </form>
        </div>

        <div class="ctn-text border shadow">
            <div class="capa"></div>
            <h1 class="title-description">Bienvenido al sistema de gestión de Condumex</h1>
            <p class="text-description mt-5">Por medio de este sistema se tiene acceso a la
                información en tiempo real sobre la maquinaria existente, para obtener datos como
                valocidad, los paros, eventos, etc. Para poder acceder utiliza tus credenciales.
            </p>
            <div class="organization">
                <a href="https://pradiot.com/">Developed by: <img src="images/logo-final.png" alt="Pradiot SAS de CV"
                        class="logo-organization"></a>
            </div>
        </div>
    </div>

  <script src="js\bootstrap\jquery-3.5.1.slim.min.js"></script>
  <script src="js\bootstrap\bootstrap.bundle.min.js"></script>
</body>

</html>