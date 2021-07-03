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
                <div class="card-body">
                    <h6>Rendimiento</h6>
                    <div class="progress" style="height: 25px;">
                        <div class="progress-bar" role="progressbar" style="width: <?php echo $rendimiento; ?>%;" aria-valuenow="99.9" aria-valuemin="0" aria-valuemax="100" id="progress-bar<?php echo $maquina ?>"><?php echo $rendimiento; ?> %</div>
                    </div>
                    <a href="monitor-maquina.html?maquina=<?php echo $maquina?>" class="btn btn-warning d-block mx-auto mt-4 text-white">OEE</a>
                </div>
            </div>
        </div>


        <input type="number" name="" id="rendimiento<?php echo $maquina ?>" value="<?php echo $rendimiento; ?>" hidden>
        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" onload="
        var rendimiento =  document.getElementById('rendimiento<?php echo $maquina ?>').value;
        var ProgressBar = document.getElementById('progress-bar<?php echo $maquina ?>');
        if(rendimiento < 11){
            ProgressBar.classList.toggle('bg-danger');
        } else if (rendimiento >= 11 && rendimiento <= 50){
            ProgressBar.classList.toggle('bg-warning');
        } else {
            ProgressBar.classList.toggle('bg-success');
        }
        " hidden>


<?php } ?>
    </div>
</div>



