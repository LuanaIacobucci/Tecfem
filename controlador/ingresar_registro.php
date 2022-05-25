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
    <h1>Captura de Datos</h1>

    <?php  
    $rut = $_REQUEST["rut"];
    $nombre = $_REQUEST["nombre"];
    $apellido = $_REQUEST["apellido"];
    $edad = $_REQUEST["edad"];
    $email = $_REQUEST["email"];
    $telefono = $_REQUEST["telefono"];
    $direccion = $_REQUEST["direccion"];
    $comuna = $_REQUEST["comuna"];
    $nombreUsuario = $_REQUEST["nombreUsuario"];
    $contrasena = $_REQUEST["contrasena"];
    //$region


    $consulta = "INSERT INTO clientes(rut_cliente,nombre,apellido,telefono,email)VALUE('$rut_cliente','$nombre','$apellido','$telefono','$email')";
    //creo variable de resultado
    $resultado1 = $mysqli->query($consulta);
    //redirecciona hacia la tabla de listar usuarios
    //dispatcher
    header('Location:listarClientes.php');

   ?>
  
    </div>
  </div>


<script src="\bootstrap-5.1.3-dist\js"></script> 
</body>
</html>