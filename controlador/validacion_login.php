<?php 

include('Tecfem\modelo\conectar.php');

session_start();

$nombreUsuario = $_POST["nombreUsuario"]; 
$contrasena = $_POST["contrasena"]; 

$sql = "SELECT*FROM cliente WHERE nombreUsuario = '$nombreUsuario' AND contrasena = $contrasena ";
$resultado = $conectar->query($sql);

$row = $resultado->fetch_assoc();

if($row['nombreUsuario'] == $nombre && $row['contrasena'] == $contrasena){
$_SESSION['nombreUsuario'] = $nombreUsuario;
header("Location:index.php"); 
}else{
echo "Error, los datos ingresados son incorrectos";
}


?>