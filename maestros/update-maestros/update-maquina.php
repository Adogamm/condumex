<?php
include '../../databaseconnect/conection.php';

$id = intval($_POST['id']);
$machine = $_POST['machine'];
$descripcion = $_POST['descripcion'];
$area = $_POST['area'];
$maquina = $_POST['maquina'];

$update = "UPDATE TB_CAT_MACHINE SET NAME = '$machine', DESCRIPTION = '$descripcion', AREA = '$area', MACHINE = '$maquina' WHERE MACHINE_ID = $id;";
$query = sqlsrv_query($conexion,$update);
if($query) {
    header('Location: ../../catalogo-maquinas.php');
} else {
    echo "error en el registro";
}