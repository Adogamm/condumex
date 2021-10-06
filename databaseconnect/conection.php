<?php

// $serverName='ADOGAMM-OMEN\MSSQLSERVER1';
// $conInfo=array("Database"=>"PRUEBAS");
// $conexion = sqlsrv_connect($serverName,$conInfo);

// if(!$conexion) {
//     echo "Conexion fallida";
// }

$serverName = '10.68.181.79';
$connectionInfo = array('Database'=>'CONDUMEX', 'UID' => 'UserDK', 'PWD' => 'iUx9090##Wer');
$conexion = sqlsrv_connect( $serverName, $connectionInfo);




?>


