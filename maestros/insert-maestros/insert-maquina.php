<?php
include '../../databaseconnect/conection.php';

$id = intval($_POST['id']);
$maquina = $_POST['maquina'];
$descripcion = $_POST['descripcion'];
$area = $_POST['area'];
$maquina = $_POST['maquina'];


$insert = "INSERT INTO TB_CAT_MACHINE (MACHINE_ID,NAME,DESCRIPTION,AREA,MACHINE) VALUES ($id,'$compuesto','$descripcion','$area','$maquina');";
$query = sqlsrv_query($conexion,$insert);
if($query) {
    header('Location: ../../catalogo-paros.php');
} else {
    echo "error en el registro";
}
