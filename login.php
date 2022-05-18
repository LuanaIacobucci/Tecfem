<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="bootstrap-5.1.3-dist\css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="css\login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
  
    <title>Tecfem</title>
</head>

<body>
  
  <?php
    @include('header.php');
    ?>
<!---include--->

    <!--Div del cuerpo-->
  
    <!--Cuerpo-->
    <div id="bordes" class="row">
    <div  id="cuerpo" class="col col-xs-12 col-sm-12 col-md-10 col-lg-9 col-xl-5 ">

   

    <div id="contenido" class="row">
    
    <div id="contenido1" class="col col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-2">
   
    <form method="post">

    <h1>Iniciar Sesión</h1>
  <div  class="row mb-3">

    <label  class="col-xs-1 col-sm-3 col-md-12 col-form-label">Nombre de usuario</label>
    <div class="col-xs-4 col-sm-10 col-md-3 col-lg-10 col-xl-12">
      <input type="text" class="form-control" id="inputEmail3" name="nombreUsuario" placeholder="Nombre Usuario">
    </div>
  </div>
  <div  class="row mb-3">
    <label for="inputPassword3" class="col-xs-1 col-sm-3 col-md-12 col-form-label">Contraseña</label>
    <div class="col-xs-4 col-sm-10 col-md-3 col-lg-10 col-xl-12">
      <input type="password"  placeholder="Contraseña" name="contrasena" class="form-control" id="inputPassword3">
    </div>
  </div>
  
  <a id="noregistrado" href="#">No tengo una cuenta aun.</a>
  <br>
  <button id="btngrande" type="submit" class="btn btn-primary">Iniciar</button>
</form>

    </div>


    <div id="contenido2" class="col col-xs-2 col-sm-3 col-md-2 col-lg-4 col-xl-6 ">
        <img  id="imglog" src="img\login.jpg" alt="Foto de Vlada Karpovich en Pexels">
    </div>
    </div>

</div>

</div>

<!-- Div sin bordes para disp pequeños-->

<div id="dispPequeños">
<div  id="cuerpo" class="col col-xs-10 col-sm-10 col-md-9 col-lg-9 col-xl-9 ">

   

    <div id="contenido" class="row">
    
    <div id="contenido1" class="col col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
   
    <form action="controlador\validacion_login.php" method="post">

    <h1>Iniciar Sesión</h1>
  <div  class="row mb-3">

    <label  class="col-xs-1 col-sm-3 col-form-label">Nombre de usuario</label>
    <div class="col-xs-2 col-sm-5">
      <input type="text" class="form-control" name="nombreUsuario" id="inputEmail3" placeholder="Nombre Usuario">
    </div>
  </div>
  <div  class="row mb-3">
    <label for="inputPassword3" class="col-xs-1 col-sm-3 col-form-label" placeholder="Contraseña">Contraseña</label>
    <div class="col-xs-2 col-sm-5">
      <input type="password" class="form-control" name="contrasena" id="inputPassword3">
    </div>
  </div>
  
  <a id="noregistrado" href="#">No tengo una cuenta aun.</a>
  <br>
  <button id="btninit" type="submit" class="btn btn-primary">Iniciar</button>
</form>

    </div>


    <div id="contenido2" class="col col-xs-2 col-sm-2 col-md-4 col-lg-4 col-xl-4 ">
        <img  id="imglog" src="img\login.jpg" alt="Foto de Vlada Karpovich en Pexels">
    </div>
    </div>

</div>
</div>
    
</div> <!--Fin Div del cuerpo-->
</div>
    <!--Inicio del footer-->
  <footer>
    <?php
    @include('footer.php');

    ?>
  </footer>
    <!--Fin de footer -->

      <!--js de bootstap-->
  <script src="\bootstrap-5.1.3-dist\js"></script>
    
  
  </body>

</html>