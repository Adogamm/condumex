<?php

$servername = "laboratoriosql.c829vdik7kmt.us-east-1.rds.amazonaws.com";
$connectionInfo = array("Database"=>"CONDUMEX","UID"=>"admin","PWD"=>"labsql01");
$conexion = sqlsrv_connect($servername,$connectionInfo);

?>
