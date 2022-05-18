<?php 

 include('modelo\conectar.php')

 $NOMUSUARIO=$_POST['nombreUsuario'];
 $CONTRASENA=$_POST['contrasena']; 

$consulta = "SELECT * FROM cliente where nombreUsuario = '$NOMUSUARIO' and contrasena = '$CONTRASENA' ";
$resultado = mysql_query($conexion, $consulta);

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