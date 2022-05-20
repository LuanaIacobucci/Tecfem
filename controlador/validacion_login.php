<?php
session_start();
if(isset($_POST['enviar']))
{
    extract($_POST);
    include 'conectar.php';
    $sql=mysqli_query($conn,"SELECT * FROM cliente where nombreUsuario='$nombreUsuario' and contrasena='$contrasena'");
    $row  = mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["nombreUsuario"] = $row['nombreUsuario'];
        $_SESSION["contrasena"]=$row['contrasena'];
        header("Location: index.php"); 
    }
    else
    {
        echo "NombreUsuario / Contraseña incorrecta";
    }
}
?>