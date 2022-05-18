<?php 

 include('modelo\conectar.php')

 $USUARIO=$_POST['nombreUsuario'];
 $PASSWORD=$_POST['password']; 

$consulta = "SELECT * FROM cliente where nombreUsuario = '$USUARIO' and password = '$PASSWORD' ";
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