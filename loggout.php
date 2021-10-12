<?php
session_start();
include ("seguridad.php");
session_unset();
session_destroy();
header("location:index.php");
?>
