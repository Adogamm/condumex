<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar usuarios</title>
</head>
<body>
    <form action="usuarios/registrar.php" method="post">
        <label for="id">ID</label>
        <input type="text" name="id" id="id" required>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" id="nombre" required>
        <label for="pass">Contraseña</label>
        <input type="password" name="password" id="password" required>
        <label for="rol">Rol</label>
        <select name="rol" id="rol" placeholder="SELECCIONAR ROL" required>
            <option value="USUARIO">USUARIO</option>
            <option value="ADMINISTRADOR">ADMINISTRADOR</option>
            <option value="SUPERVISOR">SUPERVISOR</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>