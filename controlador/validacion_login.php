<?php 

 include('modelo\conectar.php')

 $nombreUsuario=$_POST['nombreUsuario'];
 $contrasena=$_POST['contrasena']; 

$consulta = "SELECT * FROM cliente where nombreUsuario = '$nombreUsuario' and contrasena = '$contrasena' ";
$resultado = mysql_query($conectar, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
header("location: index.php");

}else{
header("location:login.php");
?>

<h3>Error de autentificacion</h3>
<?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>