<?php
@include('modelo\conectar.php');

$nombreUsuario = $_POST["nombreUsuario"]; 
$contrasena = $_POST["contrasena"]; 

session_start();

$conn = mysqli_connect("localhost","root","root","tecfem");

$sql = "SELECT*FROM cliente WHERE nombreUsuario = '$nombreUsuario' AND contrasena = '$contrasena' ";
$resultado = mysqli_query($conn, $sql);  

$filas = mysqli_num_rows($resultado);

if($filas){
    header("Location:..\servicios.php");
}else{
    header("Location:..\login.php");
    echo 'Los datos ingresados son incorrectos'; 
}    

mysqli_free_result($resultado);
mysqli_close($con);
?>
    



