<?php
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $password = md5($_POST['password']);
    $rol = $_POST['rol'];
    $insert = "INSERT INTO USUARIOS (ID,NOMBRE,CONTRASENA,ROL) VALUES ('$id','$nombre','$password','$rol');";
    $query = sqlsrv_query($conexion, $insert);
    if($query) {
        header('Location: ../index.php');
    } else {
        echo "error en el registro";
    }
?>