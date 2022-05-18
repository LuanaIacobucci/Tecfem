<?php 
 
 include('conectar.php')

 $NOMUSUARIO=$_POST['nombreUsuario'];
 $CONTRASENA=$_POST['contrasena']; 

$consulta = "SELECT * FROM cliente"

?>