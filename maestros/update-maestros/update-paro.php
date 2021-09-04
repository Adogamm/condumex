<?php
include '../../databaseconnect/conection.php';

$id = intval($_POST['id']);
$paro = $_POST['paro'];
$descripcion = $_POST['descripcion'];
$area = $_POST['area'];
$maquina = $_POST['maquina'];

$update = "UPDATE TB_CAT_SHUTDOWN SET NAME = '$paro', DESCRIPTION = '$descripcion', AREA = '$area', MACHINE = '$maquina' WHERE CAT_SHUTDOWN_ID = $id;";
$query = sqlsrv_query($conexion,$update);
if($query) {
    header('Location: ../../catalogo-paros.php');
} else {
    echo "error en el registro";
}