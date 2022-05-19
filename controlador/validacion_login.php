<?php 
session_start();

$conn= mysqli_connect("localhost", "root", "root", "tecfem");

 $NOMBREUSUARIO=$_POST['nombreUsuario'];
 $PASSWORD=$_POST['contrasena']; 

$consulta = "SELECT * FROM cliente where nombreUsuario = '$NOMBREUSUARIO' and contrasena = '$PASSWORD' ";

$resultado = mysql_query($conn, $consulta);

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