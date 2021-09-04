<?php
include '../../databaseconnect/conection.php';

$id = intval($_POST['id']);
$compuesto = $_POST['compuesto'];
$descripcion = $_POST['descripcion'];
$area = $_POST['area'];
$maquina = $_POST['maquina'];


$insert = "INSERT INTO TB_CAT_MADE_UP (CAT_MADE_UP_ID,NAME,DESCRIPTION,AREA,MACHINE) VALUES ($id,'$compuesto','$descripcion','$area','$maquina');";
$query = sqlsrv_query($conexion,$insert);
if($query) {
    header('Location: ../../catalogo-compuestos.php');
} else {
    echo "error en el registro";
}
