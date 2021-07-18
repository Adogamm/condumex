<?php
    include("../databaseconnect/conection.php");
    $tipo_maquina = $_COOKIE['Prueba'];
?>
<div class="container">
    <div class="row">
            <?php 
            $select = "SELECT * FROM MAQUINAS WHERE TIPO_MAQUINA = '$tipo_maquina'";
            $query = sqlsrv_query($conexion, $select);
    while($row = sqlsrv_fetch_array($query)){

        // Asignacion a nombre de variables
        $maquina = $row["MAQUINA"];
        $rendimiento = $row["RENDIMIENTO"];
 ?>

<!-- Input para actualizar los medidores -->
        <input type="number" name="rendimiento<?php echo $maquina ?>" id="rendimiento<?php echo $maquina ?>" value="<?php echo $rendimiento ?>" hidden>

<!-- Script para actualizar los medidores y el titulo -->
        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" onload="
        var rendimiento = document.getElementById('rendimiento<?php echo $maquina ?>').value;
        var titulo = document.getElementById('text<?php echo $maquina ?>');
        titulo.textContent = 'Rendimiento: <?php echo $rendimiento ?>'+' %'
        $('#medidor<?php echo $maquina ?>').attr('data-value',rendimiento);
        " hidden>
<?php } ?>
    </div>
</div>



