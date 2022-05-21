<?php
@include('modelo\conectar.php');

$nombreUsuario = $_POST["nombreUsuario"]; 
$contrasena = $_POST["contrasena"]; 

session_start();

$con = mysqli_connect("localhost","root","root","tecfem");

$sql = "SELECT*FROM cliente WHERE nombreUsuario = '$nombreUsuario' AND contrasena = $contrasena ";
$resultado = mysqli_query($con, $sql);  

if($filas = $resultado){
header("location:..\servicio.php"); 
}else{
    echo 'Error en la autentificación de los datos';
}    
?>
    



