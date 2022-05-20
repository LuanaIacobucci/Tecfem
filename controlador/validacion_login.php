<?php
@include('modelo\conectar.php');

$nombreUsuario = $_POST["nombreUsuario"]; 
$contrasena = $_POST["contrasena"]; 

session_start();

$con = mysqli_connect("localhost","root","root","tecfem");

$sql = "SELECT*FROM cliente WHERE nombreUsuario = '$nombreUsuario' AND contrasena = $contrasena ";
$resultado = mysqli_query($con, $sql);  

$filas = $resultado;

if($filas){
header("location:..\index.php"); 
}else{
    ?>
    <?php
header("location:login.php");
?>
<p>Error en la autentificación de los datos</p>
<?php
}
mysqli_free_result($resultado);
mysqli_close($con);
?>


