<?php
//Vamos a cerrar las sesiones 
session_start();

header("Location: index.php");

// Eliminar todas las sesiones:
session_unset();

// Terminar la sesión:
session_destroy();

?>