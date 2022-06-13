<?php
include('../modelo/db.php');
session_start();
$_SESSION["nombreUsuario"]="";
$_SESSION["nombre"]="";
$_SESSION["apellido"]="";


$nombreUsuario = $_POST["nombreUsuario"]; 
$contrasena = $_POST["contrasena"]; 

//$conn = mysqli_connect("localhost","root","root","tecfem");

$sql = "SELECT `nombreUsuario`, `nombre`, `apellido` FROM cliente WHERE nombreUsuario = '$nombreUsuario' AND contrasena = '$contrasena' ";
$resultado = mysqli_query($conn, $sql);  

$filas = mysqli_num_rows($resultado);

if($filas and $filas>0){
    //Descomprimir respuesta
    $datosUsuario= mysqli_fetch_array($resultado);

    //Crear variables de sesión
    $_SESSION["nombreUsuario"]=$datosUsuario["nombreUsuario"];
    $_SESSION["nombre"]=$datosUsuario["nombre"];
    $_SESSION["apellido"]=$datosUsuario["apellido"];


    //Ver qué tipo de cuenta trae y redirigirlo a ssu pagina correcta
    $sql2 = "SELECT `tipoDeCuenta` FROM `tipocuenta` WHERE nombreUsuario = '$nombreUsuario'";
    $resultado2 = mysqli_query($conn, $sql2);  
  

    $datosTipoCuenta= mysqli_fetch_array($resultado2);

    $tipo=$datosTipoCuenta["tipoDeCuenta"];
  
    $filas2 = mysqli_num_rows($resultado2);
    if($filas2 and $filas2>0){
        
        $_SESSION["tipoCuenta"]=$tipo;      
            //Redirigir al lugar apropiado
            if(isset( $_SESSION["tipoCuenta"]) and  $_SESSION["tipoCuenta"]=="cliente"){

                echo "Entraste mi reina cliente";
                 header("Location: ../editarperfilcliente.php");
            }else if(isset( $_SESSION["tipoCuenta"]) and  $_SESSION["tipoCuenta"]=="proveedor"){

                echo "Entraste mi reina proveedora";
                header("Location: ../editarperfilservicios.php");
            }
            
            


    }else{
        header("Location:..\login.php");
        echo "Hubo un problema con el inicio de sesión";
    }

    
}else{

    //Chequear si se trata de un administrador

    $sqladmin = "SELECT `nombreUsuario`,  `email`, `rut` FROM `administradores` WHERE nombreUsuario = '$nombreUsuario' AND contrasena = '$contrasena' ";
    $resultadoadmin = mysqli_query($conn, $sqladmin);  

    $filasadmin = mysqli_num_rows($resultadoadmin);

    if($filasadmin and $filasadmin>0){
        //Descomprimir respuesta
        $datosAdmin= mysqli_fetch_array ($resultadoadmin );
        //Crear variables de session
        $_SESSION["nombreUsuarioAdmin"]=$datosAdmin["nombreUsuario"];
        $_SESSION["email"]=$datosAdmin["email"];
        $_SESSION["rut"]=$datosAdmin["rut"];
        $_SESSION["tipoCuenta"]="admin"; 
        //Redireccionar a su consola
        header("Location:..\consolaadmin2.php");

    }else{
    header("Location:..\login.php");
    echo 'Los datos ingresados son incorrectos';
     } 
}    

mysqli_free_result($resultado);
mysqli_free_result($resultado2);
mysqli_free_result($resultadoadmin);
mysqli_close($conn);
?>
    



