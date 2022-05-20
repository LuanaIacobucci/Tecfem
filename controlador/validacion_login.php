<?php
session_start();

$nombre = $_POST['nombreUsuario'];
$password = $_POST['contrasena'];

(include 'modelo/conectar.php');

$conn= mysqli_connect("localhost", "root", "root", "tecfem");

$consulta = mysqli_query ($conn, "SELECT * FROM cliente WHERE nombreUsuario = '$nombre' AND contrasena = '$password'");

if(!$consulta){

    echo "Usuaria no existe: " . $nombre . " " . $password. " contraseña incorrecta" .
    
    //echo mysqli_error($mysqli);
    
    exit;
    
    }else{
    
    }
    
    
    if($user = mysqli_fetch_assoc($consulta)) {
    
    header ("Location:TECFEM01/Tecfem/index.php");
    
    } else {
    
    echo "Usuaria incorrecta o inexistente";
    
    }

?>