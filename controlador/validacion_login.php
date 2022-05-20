<?php

$nombre = $_POST['nombreUsuario'];
$password = $_POST['contrasena'];

if(empty($nombre) || empty($password)){
header("Location: index.php");
exit();
}

mysql_connect('localhost','root','root') or die("Error al conectar " . mysql_error());

$result = mysql_query("SELECT * FROM cliente WHERE nombreUsuario = '$nombre' AND contrasena = '$password'");

if($row = mysql_fetch_array($result)){
if($row['nombreUsuario'] == $nombre && $row['contrasena'] == $password){
session_start();
$_SESSION['nombreUsuario'] = $nombre;
header("Location: index.php");
}else{
header("Location: login.php");
exit();
}
}

?>