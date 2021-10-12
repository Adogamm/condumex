<?php

// $serverName='ADOGAMM-OMEN\MSSQLSERVER1';
// $conInfo=array("Database"=>"PRUEBAS");
// $conexion = sqlsrv_connect($serverName,$conInfo);

// if(!$conexion) {
//     echo "Conexion fallida";
// }

$serverName = 'ADOGAMM-OMEN\CONDUMEX';
$connectionInfo = array('Database'=>'CONDUMEX', 'UID' => 'pradiot', 'PWD' => 'pradiot');
$conexion = sqlsrv_connect( $serverName, $connectionInfo);

if(!$conexion) {
    echo "Conexion fallida";
} else {
    echo "Conexion exitosa";
}


?>


