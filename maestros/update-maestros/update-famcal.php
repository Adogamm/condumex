<?php
include '../../databaseconnect/conection.php';

$id = intval($_POST['id']);
$famcal = $_POST['famcal'];
$descripcion = $_POST['descripcion'];
$area = $_POST['area'];
$maquina = $_POST['maquina'];

$update = "UPDATE TB_CAT_FAM_CALIBER SET NAME = '$famcal', DESCRIPTION = '$descripcion', AREA = '$area', MACHINE = '$maquina' WHERE CAT_FAM_CALIBER_ID = $id;";
$query = sqlsrv_query($conexion,$update);
if($query) {
    header('Location: ../../catalogo-maquinas.php');
} else {
    echo "error en el registro";
}