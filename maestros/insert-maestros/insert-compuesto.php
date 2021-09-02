<?php
include '../../databaseconnect/conection.php';

$id = intval($_POST['id']);
$compuesto = $_POST['compuesto'];
$descripcion = $_POST['descripcion'];
$area = $_POST['area'];


$insert = "INSERT INTO TB_CAT_MADE_UP (CAT_MADE_UP_ID,NAME,DESCRIPTION,AREA) VALUES ($id,'$compuesto','$descripcion','$area');";
$query = sqlsrv_query($conexion,$insert);
if($query) {
    header('Location: ../../catalogo-compuestos.php');
} else {
    echo "error en el registro";
}
