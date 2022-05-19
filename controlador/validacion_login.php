<?php 

session_start();

require "modelo\conectar.php";

$conectar = conectar();

$nombreUsuario = $_POST["nombreUsuario"]; 
$contrasena = $_POST["contrasena"]; 

$sql = "SELECT * FROM cliente WHERE nombreUsuario = '$nombreUsuario' AND contrasena = $contrasena ";
$result = mysqli_query($conectar,$sql);

if(mysqli_num_rows($result)>0){
header("Location:index.php");
}else{
header("Location:login.php");
echo:"Error al ingresar datos";

}

?>