<?php
$serverName = 'ADOGAMM-OMEN\CONDUMEX'; //Seleccionar el servidor
$connectionInfo = array('Database'=>'CONDUMEX', 'UID' => 'pradiot', 'PWD' => 'pradiot'); //Cadena de conexión
$conexion = sqlsrv_connect( $serverName, $connectionInfo); //Conexion a SQL Server

//Pruebas de conexion
if(!$conexion) {
    echo "Conexion fallida";
} else {
    echo "Conexion exitosa";
}


?>

<?php

// Conexion del servidor
// $serverName = 'CONCDX2\IRFLEX';
// $connectionInfo = array('Database'=>'CONDUMEX', 'UID' => 'UserDK', 'PWD' => 'iUx9090##Wer');
// $conexion = sqlsrv_connect( $serverName, $connectionInfo);
//if(!$conexion) {
//    echo "Conexion fallida";
//} else {
//   echo "Conexion exitosa";
//}

?>



