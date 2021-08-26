<?php

date_default_timezone_set("America/Mexico_City");



    include("../databaseconnect/conection.php");
    $maquina = $_COOKIE['maquina'];
    $select = "SELECT TB_CAT_LINE.NAME AS 'MAQUINA', TB_CAT_AREA.NAME AS 'TIPO_MAQUINA' FROM TB_CAT_LINE INNER JOIN TB_CAT_AREA ON TB_CAT_AREA.CAT_AREA_ID = TB_CAT_LINE.CAT_AREA_ID WHERE TB_CAT_LINE.NAME= '$maquina'";
    // $select = "SELECT * FROM TB_CAT_LINE WHERE NAME = '$maquina'";
    $query = sqlsrv_query($conexion, $select);
    while($row = sqlsrv_fetch_array($query)){
        $area = $row['TIPO_MAQUINA'];
        $linea = $row['MAQUINA'];
?>
    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" onload="
        var area = document.getElementById('area');
        var linea = document.getElementById('linea');
        var fecha = document.getElementById('fecha');
        var hora = document.getElementById('hora');
        var tiempo_muerto = document.getElementById('tiempo_muerto');
        var tiempo_perdido = document.getElementById('tiempo_perdido');
        var tiempo_ciclo = document.getElementById('tiempo_ciclo');

        area.textContent = 'Área: <?php echo $area ?>'
        fecha.textContent = 'Fecha: <?php echo date("m/d/y") ?>'+', Hora: <?php echo date("H:i:s"); ?>'

        " hidden>
<?php } ?>