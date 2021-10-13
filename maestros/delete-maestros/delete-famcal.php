<?php
include '../../databaseconnect/conection.php';

$id = intval($_GET['id']);

$update = "DELETE FROM TB_CAT_FAMCALIBER WHERE CAT_FAM_CALIBER_ID = $id;";
$query = sqlsrv_query($conexion,$update);
if($query) {
    header('Location: ../../catalogo-compuestos.php');
} else {
    echo "error en el registro";
}