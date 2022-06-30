<?php
session_start();

//if (isset($_POST[""])){
    
   // $_SESSION["nombre"] = ($_POST["nomobre"]);
    //$_SESSION["apellido"] = ($_POST["apellido"]);
   // $_SESSION['acercademi'] = ($_POST["acercademi"]);

   // header("Location:blog.php");
//}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/datos.css" >


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


    <title>Ingrese los datos</title>
</head>
<body>
  <!---- 
    <div style="width :40%; margin-left :auto; margin-right:auto; margin-top: 100px;  " >
    <form>  

  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
      <label class="form-label" >Nombre</label>
        <input type="text" id="nombre" class="form-control" placeholder="Ingrese su Nombre" />
      </div>
    </div>
    <div class="col">
      <div class="form-outline">
      <label class="form-label">Apellido</label>
        <input type="text" id="apellido" class="form-control" placeholder="Ingrese su Apellido" />
      </div>
    </div>
  </div>

  
    <div class="form-outline mb-4">
    <label class="form-label">Acerca de mi</label>
    <textarea class="form-control" id="acercademi" rows="4" placeholder="Describase"></textarea>
  </div>

<div>
<form name="subida-imagenes" type="POST" enctype="multipart/formdata" >
  <form name="subida-imagenes" type="POST" enctype="multipart/formdata" >
	<input type="file" name="imagen" />
</form>
<br>
<br>

<form name="subida-imagenes" type="POST" enctype="multipart/formdata" >
  <form name="subida-imagenes" type="POST" enctype="multipart/formdata" >
	<input type="file" name="imagen" />
</form>
<br>
<form name="subida-imagenes" type="POST" enctype="multipart/formdata" >
  <form name="subida-imagenes" type="POST" enctype="multipart/formdata" >
	<input type="file" name="imagen" />
</form>
<br>
<form name="subida-imagenes" type="POST" enctype="multipart/formdata" >
  <form name="subida-imagenes" type="POST" enctype="multipart/formdata" >
	<input type="file" name="imagen" />
</form>
<br>
<form name="subida-imagenes" type="POST" enctype="multipart/formdata" >
  <form name="subida-imagenes" type="POST" enctype="multipart/formdata" >
	<input type="file" name="imagen" />
    </form>
<br>

    <form name="subida-imagenes" type="POST" enctype="multipart/formdata" >
  <form name="subida-imagenes" type="POST" enctype="multipart/formdata" >
	<input type="file" name="imagen" />
</form>
<br>
</div>

<div class="row g-2">
  <div class="col-md">
  <label class="form-label">Describa sus Conocimiento</label>
    <div class="form-floating">
      <input type="text" class="form-control" id="descripcion" placeholder="Ej. Gasfiteria">
      <label for="floatingInputGrid">Ej. Gasfiteria</label>
    </div>
  </div>
  <div class="col-md">
  <label class="form-label">Rangos de conocimiento</label>
    <div class="form-floating">
      <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
        <option selected>Seleccione rango de conocimiento</option>
        <option value="1">10%</option>
        <option value="2">20%</option>
        <option value="3">30%</option>
        <option value="3">40%</option>
        <option value="3">50%</option>
        <option value="3">60%</option>
        <option value="3">70%</option>
        <option value="3">80%</option>
        <option value="3">90%</option>
        <option value="3">100%</option>
      </select>
    </div>
  </div>
</div>

<div class="button">
                <a href="#" onclick="AgregarConocimiento();">Agregar Conocimiento</a>
            </div>
    <div id="campos">
<br>

--->


<form action="controlador/controlador_blog.php" class="form-register" method="POST" enctype="multipart/form-data" >

  <h1 class="form__title"> Ingrese datos</h1>

  <div class="container--flex">
    <label for="" class="form__label">Nombre y Apellido</label>
    <input type="text" class="form__input" name="nombreapellido" required>
  </div>

  <div class="container--flex">
    <label for="" class="form__label">Fecha nacimiento</label>
    <input type="date" class="form__input" name="fecha">
  </div>

  <div class="form-outline mb-4">
    <label class="form-label">Acerca de mi</label>
    <textarea class="form-control" name="acercademi" rows="4" placeholder="Describase brevemenete"></textarea>
  </div> 

  

  <input type="file" name="archivo" class="form__file" required>



  <!-- Submit button -->
  <button type="submit" class="btn_blog">Crear Blog </button>

</form>
    </div>

  <script src="js/menu.js"></script>
</body>
</html>