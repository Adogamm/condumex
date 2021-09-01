<?php
// Datos de la BDD
$serverName = "laboratoriosql.c829vdik7kmt.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "labsql01";
$database = "CONDUMEX";
// Conexion bdd con PDO
try {
    $conn = new PDO("sqlsrv:server = $serverName; Database = $database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Ocurrió un error con la base de datos: " . $e->getMessage();
}

// Query con PDO
$options = array(PDO::SQLSRV_ATTR_ENCODING => PDO::SQLSRV_ENCODING_SYSTEM);
// Usuario y contraseña obtenidos desde el formulario
$user = $_POST['user'];
$pass = $_POST['pass'];
// Setencia SQL a ejecutar
$sql = "SELECT ID, NOMBRE, ROL, CONVERT(VARCHAR(MAX), CONTRASENA) AS PASS FROM USUARIOS WHERE NOMBRE = :user AND CONTRASENA = CONVERT(varbinary,:pass);";
// Setencia preparada
$result = $conn->prepare($sql,$options);
// Parametros de la setencia
$result->bindParam(':user',$user);
$result->bindParam(':pass',$pass);
// Ejecución de la setencia preparada
$result->execute();
// Otención de resultados el query
$rows = $result->fetchAll(PDO::FETCH_ASSOC);
// Validación de resultados
if(!$rows){
    $message = "Datos incorrectos. Verifica tu nombre de usuario y contraseña";
    header("Location:./index.php?");
}else{
    foreach ($rows as $row) {
        // Incio de la sesión y guardado de datos dentro de la misma
        session_start();
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['ID'] = $row['ID'];
        $_SESSION['ROL'] = $row['ROL'];
        $_SESSION['NOMBRE'] = $row['NOMBRE'];
    }
    header("Location:./monitor.php?");
}

// Para insertar un nuevo usuario
// insert into USUARIOS(ID,NOMBRE,CONTRASENA,ROL) VALUES ('PRA002','INVITADO',convert(varbinary,'Paydequeso16'),'PRADIOTUSER');

?>