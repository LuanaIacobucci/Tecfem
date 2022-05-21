<?php
@include('modelo\conectar.php');

$nombreUsuario = $_POST["nombreUsuario"]; 
$contrasena = $_POST["contrasena"]; 

session_start();

$con = mysqli_connect("localhost","root","root","tecfem");

$sql = "SELECT*FROM cliente WHERE nombreUsuario = '$nombreUsuario' AND contrasena = $contrasena ";
$resultado = mysqli_query($con, $sql);  

if(!$resultado){
    echo 'Error en la autentificación de los datos';
}else{
    header("location:..\servicio.php"); 
}    
?>
    



