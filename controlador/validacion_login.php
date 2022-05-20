<?php 

include "modelo\conectar.php";

$usuario = $_POST['nombreUsuario'];
$pass = $_POST['contrasena'];

if(empty($usuario) || empty($pass)){
header("Location:Tecfem\index.php");
exit();
}

$sql = mysql_query("SELECT * FROM cliente WHERE $usuario='nombreUsuario' AND $pass='contrasena'");

if($row = mysql_fetch_array($sql)){
if($row['nombreUsuario'] && $row['contrasena'] == $pass){
session_start();
$_SESSION['usuario'] = $usuario;
header("Location: contenido.php");
}else{
header("Location: index.php");
exit();
}
}else{
header("Location: index.php");
exit();
}



?>