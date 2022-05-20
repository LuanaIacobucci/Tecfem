<?php
@include('conectar.php');

$nombreUsuario = $_POST['nombreUsuario'];
$password = $_POST['contrasena'];

if(empty($nombreUsuario) || empty($password)){
echo 'Debe ingresar los datos';
exit();
}

$sql = "SELECT*FROM cliente WHERE nombreUsuario = '$nombreUsuario' AND contrasena = $password ";
$resultado = $conectar->query($sql);

$row = $resultado->fetch_assoc();

if($row['nombreUsuario'] == $nombre && $row['contrasena'] == $password){
$_SESSION['nombreUsuario'] = $nombreUsuario;
header("Location:servicios.php"); 
}else{
header("Location: login.php");
}


?>