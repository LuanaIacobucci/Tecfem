<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet" >
<link href="css/detalleservicio.css" rel="stylesheet" >
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<title>Tecfem- Detalle de Servicio</title>
</head>
<body>

<!--header-->

<?php
    @include('header.php');
   
    ?>

<!--fin header--> 
<div class="container-fluid"> <!--Container principal página--->


<br>
<h1 class="text-center">Detalles Servicio</h1>
<br>
<br>
<div class="container"> <!--Perfil proveedora servicio---->
<div class="row"> <!---Fila 1---->
<div class="col"> <!----Columna 1 de la fila 1 imagen perfil--->
<div class="card" style="width: 16rem;">
<img src="IMG/proveedorservicio.png" class="card-img-top" alt="FotoProveedora">
</div>
</div> <!-----Fin columna 1----->
<div class="col"> <!----Columna 2 de la fila 1 datospersonales--->
<br>
<?php 
//Realizó la conexión a la base de datos en PHPMyAdmin
$conn = mysqli_connect("localhost","root","root","tecfem");
//Genero la consulta sql para listar los datos 
$sql = "SELECT*FROM servicio WHERE 'idServicio' = $idServicio"; //Tabla servicios
$sql = "SELECT*FROM clienteemail WHERE 'email' = '$email'"; // Tabla Emailcliente
$sql = "SELECT*FROM clientetelefono WHERE 'telefono' = '$telefono'"; // Tabla telefonocliente
$resultado = $mysqli->query($conn, $sql); 
?>
<div class="table-responsive-xxl">
<table class="table table-borderless"> <!---Tabla datos proveedora--->
<tbody>
<?php while($row=$resultado->fetch_assoc()) { ?>
<tr>
<th scope="row">Nombre Proveedora:<?php echo $row["nombreUsuario"] ?></th>
</tr>
<tr>
<th scope="row">Teléfono:<?php echo $row["telefono"] ?></th>
</tr>
<tr>
<th scope="row">Email:</th><?php echo $row["email"] ?>
</tr>
<tr>
<th scope="row">Servicio:<?php echo $row["nombre"] ?></th>
</tr>
<tr>
<th scope="row">Costo:<?php echo $row["costo"] ?></th>
</tr>
</tbody>
<?php } ?>
</table> <!---Fin tabla--->
</div>  
<br>      
</div> <!-----Fin columna 2----->
</div> <!--Fin fila 1---->
</div> <!---Fin contenedor perfil---->
<br>
<div class="container"> <!---Sección comentarios---->
<br>
<h4>¿Desea evaluar el servicio que solicitó?</h4>
<br>
<p>Esta sección se encuentra destinada para leer experiencias de otros clientes que han solicitado el servicio. Además, si lo desea puede comentar su experiencia 
  personal respecto al servicio realizado por la proveedora.
</p>
<br>
<div class="container" id="coment">
<div class="row"> <!--Fila1 comentarios---->
<div class="col-2"> <!--Columna1 Imagen/NombreUsuaria perfilcuenta---->
<img src="IMG/clienteregistro.png" class="img-thumbnail" alt="Fotoperfil" style="width:80px;">
</div> <!--Fin columna1---->
<div class="col"> <!--Columna2 comentario usuario---->
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique dolores perferendis, repellat explicabo possimus nobis voluptatum sequi, voluptatibus alias nostrum beatae rem laborum magni placeat aliquid corporis ex officiis veritatis recusandae assumenda</p>
</div>
</div> <!--Fin columna2---->
</div> <!--Fin fila1 comentarios-->
<br>
<div class="row"> <!--Fila para escribir comentario-->
<div class="col">
<div class="input-group mb-3">
<input type="text" class="form-control" aria-label="With textarea" placeholder="Ingrese sus comentarios" aria-describedby="button-addon2">
<button class="btn btn-outline-secondary" type="button" id="button-addon2">Enviar</button>
</div>
</div> 
</div> <!--Fin fila--->
</div> <!--Fin contenedor comentarios--->
</div> 


</div> <!---Fin container fluid--->  

    <!--Inicio del footer-->
    <br><br>
  <footer>
    <?php
    @include('footer.php');

    ?>
  </footer>
    <!--Fin de footer -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</body>
</html>