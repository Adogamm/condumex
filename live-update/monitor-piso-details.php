<?php
    include("../databaseconnect/conection.php");
    $tipo_maquina = $_COOKIE['Prueba'];
?>



<div class="container">
    <div class="row">
            <?php 
            $select = "SELECT * FROM MAQUINAS WHERE TIPO_MAQUINA = '$tipo_maquina'";
            $query = mysqli_query($conexion, $select);
    while($row = mysqli_fetch_array($query)){

        $maquina = $row["MAQUINA"];
        $rendimiento = $row["RENDIMIENTO"];
        $velocidad = $row["VELOCIDAD"];
        $paro = $row["PARO"];
        $evento = $row["EVENTO"];
        $paroactual = $row["PAROACTUAL"];
        $eventoactual = $row["EVENTOACTUAL"];
        $oe = $row["OE"];
 ?>

        <div class="col-lg-4 my-3 text-center d-block mx-auto">
            <div class="card">
                <div class="card-header">
                    <img src="images/trabajador.png" alt="maquina" class="d-block mx-auto top-img">
                    <h6 class="text-center"><?php echo $maquina?></h6>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo $maquina; ?></li>
                    <li class="list-group-item"><?php echo $rendimiento; ?></li>
                    <li class="list-group-item"><?php echo $velocidad; ?></li>
                    <li class="list-group-item"><?php echo $paro; ?></li>
                    <li class="list-group-item"><?php echo $evento; ?></li>
                    <li class="list-group-item"><?php echo $paroactual; ?></li>
                    <li class="list-group-item"><?php echo $eventoactual; ?></li>
                    <li class="list-group-item"><?php echo $oe; ?></li>
                </ul>
            </div>
        </div>
<?php } ?>
    </div>
</div>
