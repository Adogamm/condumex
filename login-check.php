<?php
include 'databaseconnect/conection.php';
$user = $_POST['user'];
$pass = md5($_POST['pass']);

$select = "SELECT * FROM USUARIOS WHERE NOMBRE = '$user' AND CONTRASENA = '$pass';";
$query = sqlsrv_query($conexion,$select);
while($rows = sqlsrv_fetch_array($query)){
	session_start();
    $_SESSION['loggedin'] = TRUE;
    $_SESSION['ID'] = $rows['ID'];
    $_SESSION['ROL'] = $rows['ROL'];
    $_SESSION['NOMBRE'] = $rows['NOMBRE'];
}
header("Location:./monitor.php?");
?>