<?php
@include('modelo\conectar.php');

$nombreUsuario = $_POST["nombreUsuario"]; 
$contrasena = $_POST["contrasena"]; 

session_start();

$con = mysqli_connect("localhost","root","root","tecfem");

$sql = "SELECT*FROM cliente WHERE nombreUsuario = '$nombreUsuario' AND contrasena = $contrasena ";
$resultado = mysqli_query($con, $sql);  

$filas = mysqli_num_rows($resultado);

if($filas['nombreUsuario'] == $nombre && $filas['contrasena'] == $contrasena){
$_SESSION['nombreUsuario'] = $nombreUsuario;
header("Location:index.php"); 
}else{
header("Location: login.php");
}

if($resultado->filas > 0){
echo 'Usuaria ha ingresado correctamente';
}else{
echo 'Usuaria no existente';
} 


?>