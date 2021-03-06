<?php require('modelo\conectar.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Bootstrap CSS -->
     <link href="bootstrap-5.1.3-dist\css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css\login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  
    <title>Registro usuarias TECFEM</title>
</head>
<body>
<div class="row">
    <div class="col">
    <h1>Captura de Datos Registro</h1>

    <?php  
    //Captura de datos
    //Variables tipo de cuenta y Datos Personales
    $rut = $_REQUEST["rut"];
    $nombre = $_REQUEST["nombre"];
    $apellido = $_REQUEST["apellido"];
    $edad = $_REQUEST["edad"];
    $email = $_REQUEST["email"];
    $telefono = $_REQUEST["telefono"];
    $direccion = $_REQUEST["direccion"];
    //$region
    $comuna = $_REQUEST["comuna"];
    $nombreUsuario = $_REQUEST["nombreUsuario"];
    $contrasena = $_REQUEST["contrasena"];
    $imgperfil = $_REQUEST["imgperfil"]; 
    //area STEM
    
//Captura de datos de prestación de servicios
$servicios = $_REQUEST["servicios"];
$profesion = $_REQUEST["profesion"];
$descripcion = $_REQUEST["descripcion"];
$certificacion = $_REQUEST["certificacion"];
$gradoacademico = $_REQUEST["gradoacademico"];
$dominioexcel = $_REQUEST["dominioexcel"]; 
$dominioofimatica = $_REQUEST["dominioofimatica"];
$costo = $_REQUEST["costo"];

//Verificar si correo electrónico esta bien escrito
$email = mysql_escape_string($_POST['email']);            
if(!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$", $email)){
    // Devuelve error
    $msg = 'El correo ingresado es inválido, intente nuevamente.';
}else{
    // Retorno exitoso 
    $msg = 'Su cuenta ha sido creada, <br /> verificar a través del link de activación enviado a su correo.';
}

if(isset($msg)){  // Check if $msg is not empty
    echo '<div class="statusmsg">'.$msg.'</div>'; // Display our message and wrap it with a div with the class "statusmsg".
} 

 //Consultas a la base de datos para ingresar la información de registro de clienta
 //Realizar JOINS
    $consulta1 = "INSERT INTO cliente (nombreUsuario,nombre,apellido,contrasena) VALUES ($nombreUsuario,$nombre,$apellido,$contrasena)";
    $consulta2 = "INSERT INTO clienterut (nombreUsuario,rut) VALUES ($nombreUsuario,$rut)";
    $consulta3 = "INSERT INTO clienteemail (nombreUsuario,email) VALUES ($nombreUsuario,$email)";
    $consulta4 = "INSERT INTO clientetelefono (nombreUsuario,telefono) VALUES ($nombreUsuario,$telefono)";
    //Consulta5 Direccion
    //Consulta6 comuna
    $consulta6 = "INSERT INTO imagen (imgperfil) VALUES ($imgperfil)";
    //creo variable de resultado
    //$resultado1 = $mysqli->query($consulta);
    //redirecciona hacia la tabla de listar usuarios
    
    //dispatcher
    header('Location:listarClientes.php');

   ?>
  
    </div>
  </div>


<script src="\bootstrap-5.1.3-dist\js"></script> 
</body>
</html>