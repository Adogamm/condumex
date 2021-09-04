<?php
include '../../databaseconnect/conection.php';

$id = intval($_GET['id']);

$update = "DELETE FROM TB_CAT_SHUTDOWN WHERE CAT_SHUTDOWN_ID = $id;";
$query = sqlsrv_query($conexion,$update);
if($query) {
    header('Location: ../../catalogo-paros.php');
} else {
    echo "error en el registro";
}