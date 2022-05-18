<?php 

 include('modelo\conectar.php')

 $NOMBREUSUARIO=$_POST['nombreUsuario'];
 $CONTRASENA=$_POST['contrasena']; 

$consulta = "SELECT * FROM cliente where nombreUsuario = '$NOMBREUSUARIO' and contrasena = '$CONTRASENA' ";
$resultado = mysql_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
header("location:index.php");

}else{
include("login.php");
?>

<p>Error de autentificacion</p>
<?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);

?>