<?php
session_start();

$nombre = $_POST['nombreUsuario'];
$password = $_POST['contrasena'];

require_once 'conectar.php';

$conn= mysqli_connect("localhost", "root", "root", "tecfem");

$consulta = mysqli_query ($conn, "SELECT * FROM cliente WHERE nombreUsuario = '$nombre' AND contrasena = '$password'");

if(!$consulta){

    echo "Usuaria no existe: " . $nombre . " " . $password. " contraseña incorrecta" .
    
    //echo mysqli_error($mysqli);
    
    exit;
    
    }else{
    
    }
    
    
    if($user = mysqli_fetch_assoc($consulta)) {
    
    
    echo "Nombre de Usuaria y contraseña son correctas"
    //header "Location:index.php";
    
    } else {
    
    echo "Usuaria incorrecta o inexistente"
    
    }

?>