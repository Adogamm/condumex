<?php
session_start();
if (!isset($_SESSION['loggedin']))
    header("location:./403.html");
?>
