<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet" >
<link href="css/servicios.css" rel="stylesheet" >
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
<title>Servicios TECFEM</title>
</head>
<body>
<?php
    @include('header.php');
   
    ?>

    <div id="cuerpo" class="row">
    <div id="bordes" class="col">

    

<!---<div class="container-fluid" id="contenedorprincipal"> Contenedor fluido página----->
<div class="row">
<div class="col">

</div>
</div>
<br>
<h1 class="text-center">Servicios</h1>
<br>
<div class="container flexible" id="categorias"> <!---Contenedor categorías STEM----->
<h2>Categoría servicios</h2>
<p>Seleccione la categoría del servicio</p>
<br>
<div class="row">
<div class="col">
<div class="flip-card">
<div class="flip-card-inner">
<div class="flip-card-front">
<img src="img/S.png" alt="Ciencias" style="width:215px;height:200px;">
</div>
<div class="flip-card-back">
<br>
<h3>Ciencias</h3>
<p>Servicios relacionados al área de Ciencias</p>
<button class="btn-servicio" name="btnciencias">Ver Servicios</button> <!--Botón que permite desplegar los servicios del área de Ciencias--->
</div>
</div>
</div> 
</div> <!--Fin columna-->

<div class="col">
<div class="flip-card">
<div class="flip-card-inner">
<div class="flip-card-front">
<img src="img/T.png" alt="Tecnologia" style="width:215px;height:200px;">
</div>
<div class="flip-card-back">
<br>
<h3>Tecnología</h3>
<p>Servicios relacionados al área de Tecnología</p>
<button class="btn-servicio" name="btntecnologia">Ver Servicios</button> <!--Botón que permite desplegar los servicios del área de Tecnología--->
</div>
</div>
</div> 
</div> <!--Fin columna-->
<div class="col">
<div class="flip-card">
<div class="flip-card-inner">
<div class="flip-card-front">
<img src="img/E.png" alt="Ingenieria" style="width:215px;height:200px;">
</div>
<div class="flip-card-back">
<br>
<h3>Ingeniería y Servicios Técnicos</h3>
<p>Servicios relacionados al área de Ingeniería</p>
<button class="btn-servicio" name="btningenieria">Ver Servicios</button> <!--Botón que permite desplegar los servicios del área de Ingeniería y servicios ténicos--->
</div>
</div>
</div> 
</div> <!--Fin columna--->
<div class="col">
<div class="flip-card">
<div class="flip-card-inner">
<div class="flip-card-front">
<img src="img/M.png" alt="Matematicas" style="width:215px;height:200px;">
</div>
<div class="flip-card-back">
<br>
<h3>Matemáticas</h3>
<p>Servicios relacionados al área de Matemáticas</p>
<button class="btn-servicio" name="btnmatematicas">Ver Servicios</button> <!--Botón que permite desplegar los servicios del área de matemáticas--->
</div>
</div>
</div> 
</div> <!--Fin columna-->
</div> <!---Fin fila--->
</div> <!---Fin Contenedor categorías STEM----->
<br>
<br>
<a class="boton_otroservicio" name="btnotrosservicios" href="#">Otros Servicios</a> 
<br>
<br>
<br>
<div class="container" id="servicios"> <!--Contenedor lista servicios--->
<br>
<h4>Servicios STEM</h4>
<p>Servicios que pertenecen al área de STEM</p>
<br>
<div class="row"> <!--Servicios fila1-->
<div class="col">
 <!--Box transformado en link--->
<div class="card" style="width: 18rem;"> <!--Direcciona a detalleservicio.php---->
<a id="tarjetaservicio" href="detalleservicio.php">
<div class="card-body">
<p class="card-text">Proveedora:</p>
<p class="card-text">Servicio:</p>
<p class="card-text">Costo:</p>
</a> 
<br>
<button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
</svg></button>
</div>
</div>
<!--Fin enlace servicio1---->
</div>
<div class="col">
 <!--Box transformado en link--->
<div class="card" style="width: 18rem;">
<a id="tarjetaservicio" href="detalleservicio.php">
<div class="card-body"> <!------Tarjeta cuerpo--->
<p class="card-text">Proveedora:</p>
<p class="card-text">Servicio:</p>
<p class="card-text">Costo:</p>
</a>
<br>
<button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
</svg></button>
</div>
</div>
 <!--Fin enlace servicio2---->
</div>
</div> <!--Fin servicios fila1-->
<br>
<div class="row"> <!--Servicios fila2-->
<div id="tarjetaservicio" class="col">
 <!--Box transformado en link--->
<div class="card" style="width: 18rem;">
<a id="tarjetaservicio" href="detalleservicio.php">
<div class="card-body">
<p class="card-text">Proveedora:</p>
<p class="card-text">Servicio:</p>
<p class="card-text">Costo:</p>
</a> 
<br>
<button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
</svg></button>
</div>
</div>
<!--Fin enlace servicio3---->
</div>
<div id="tarjetaservicio" class="col">
 <!--Box transformado en link--->
<div class="card" style="width: 18rem;">
<a id="tarjetaservicio" href="detalleservicio.php">
<div class="card-body">
<p class="card-text">Proveedora:</p>
<p class="card-text">Servicio:</p>
<p class="card-text">Costo:</p>
</a>
<br>
<button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
</svg></button>
</div>
</div>
 <!--Fin enlace servicio4---->
</div>
</div> <!--Fin servicios fila2-->
<br>
<div class="row"> <!--Servicios fila3-->
<div class="col">
 <!--Box transformado en link--->
<div class="card" style="width: 18rem;">
<a id="tarjetaservicio" href="detalleservicio.php">
<div class="card-body">
<p class="card-text">Proveedora:</p>
<p class="card-text">Servicio:</p>
<p class="card-text">Costo:</p>
</a>
<br>
<button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
</svg></button>
</div>
</div>
 <!--Fin enlace servicio5---->
</div>
<div class="col">
 <!--Box transformado en link--->
<div class="card" style="width: 18rem;">
<a id="tarjetaservicio"  href="detalleservicio.php">
<div class="card-body">
<p class="card-text">Proveedora:</p>
<p class="card-text">Servicio:</p>
<p class="card-text">Costo:</p>
</a>
<br>
<button><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
  <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
</svg></button>
</div>
</div>
 <!--Fin enlace servicio6---->
</div>
</div> <!--Fin servicios fila3-->
<br>
</div>


<!-- </div> Fin contenedor página--->



</div><!--fin bordes-->
    </div><!--fin cuerpo-->
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