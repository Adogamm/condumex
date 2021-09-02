<?php
$user = 'Patty';
$pass = 'Paydequeso16';
// Proceso de ecriptación de contraseñas
// Clave segura
$key = 'Pradiot.2021';
// Nueva
$newpass = md5($key)."%".md5($user)."._".md5($pass);
?>
