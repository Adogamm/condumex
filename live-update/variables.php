
<?php
    include("../databaseconnect/conection.php");
    $maquina = $_COOKIE['maquina'];
    $selectVariablesBool = "SELECT * FROM TB_MEASUREMENT_LIVE WHERE TIPO_VARIABLE = 'BOOL' AND ID_MACHINE = '$maquina';";
    $bools = sqlsrv_query($conexion,$selectVariablesBool);

    while($rowsBool = sqlsrv_fetch_array($bools)){
        $id = $rowsBool['ID_VARIABLE_SHOW'];;
        $value = $rowsBool['VALUE'];
?>
<input type="number" name="estado<?php echo $id ?>" id="estado<?php echo $id ?>" value="<?php echo $value ?>" hidden>
<img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" onload="
  var box<?php echo $id ?> = document.getElementById('estado<?php echo $id ?>');
  var led<?php echo $id ?> = document.getElementById('led<?php echo $id ?>');
  if(box<?php echo $id ?>.value == 1){
    led<?php echo $id ?>.classList.remove('red');
    led<?php echo $id ?>.classList.add('green');
  } else if (box<?php echo $id ?>.value == 0){
    led<?php echo $id ?>.classList.remove('green');
    led<?php echo $id ?>.classList.add('red');
  }
" hidden>
<?php } ?>

<?php
  $selectVariables = "SELECT * FROM TB_MEASUREMENT_LIVE WHERE ID_MACHINE = '$maquina' AND TIPO_VARIABLE <> 'BOOL';";
  $variables = sqlsrv_query($conexion,$selectVariables);

  while($rowsVariables = sqlsrv_fetch_array($variables)){
    $id = $rowsVariables['ID_VARIABLE_SHOW'];
    $tag = $rowsVariables['ID_VARIABLE'];
    $value = $rowsVariables['VALUE'];
    $unit = $rowsVariables['UNIT'];
?>
<input type="text" name="valor<?php echo $id ?>" id="valor<?php echo $id ?>" value="<?php echo $value ?>" hidden>
<img src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7" onload="
  var variable<?php echo $id ?> = document.getElementById('variable<?php echo $id ?>');
  variable<?php echo $id ?>.textContent = '<?php echo $tag ?>: <?php echo $value; echo ' '; echo $unit ?>';
" hidden>

<?php } ?>