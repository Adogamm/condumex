<?php
include '../../databaseconnect/conection.php';

$id = intval($_POST['id']);
$compuesto = $_POST['compuesto'];
$descripcion = $_POST['descripcion'];
$area = $_POST['area'];
$maquina = $_POST['maquina'];

$update = "UPDATE TB_CAT_MADE_UP SET NAME = '$compuesto', DESCRIPTION = '$descripcion', AREA = '$area', MACHINE = '$maquina' WHERE CAT_MADE_UP_ID = $id;";
$query = sqlsrv_query($conexion,$update);
if($query) {
    header('Location: ../../catalogo-compuestos.php');
} else {
    echo "error en el registro";
}