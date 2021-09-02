<?php
include '../../databaseconnect/conection.php';

$id = intval($_GET['id']);

$update = "DELETE FROM TB_CAT_MADE_UP WHERE CAT_MADE_UP_ID = $id;";
$query = sqlsrv_query($conexion,$update);
if($query) {
    header('Location: ../../catalogo-compuestos.php');
} else {
    echo "error en el registro";
}