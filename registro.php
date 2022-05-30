<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/registro.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 
    <title>Tecfem</title>
</head>
<body>
<?php
    @include('header.php');
   
    ?>

    <!--Cuerpo-->
    <div id="bordes" class="row">
    <div  id="cuerpo" >

   <!--- <div id="container-fluid"> Contenedor fluido---->
 
<br>
<br>
<h1 class="text-center">Bienvenida a Registro TECFEM</h1> <!--Titulo principal-->
<br>
<br>
<div class="container border" id="ContenedorCuenta"> <!--Contenedor tipo de cuenta-->
    <br>
  <div class="row"> <!--Inicio fila tipo cuenta-->
      <div class="col-4">
         <br>
            <button onclick="TipoCuenta()" id="showcuenta"><svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="white" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
          <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
          <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
          </svg></button> 
            </div>
          <div id="CategoriaDatos" class="col-5">
            <br>
              <br>
                 <h3>Tipo de Cuenta</h3> 
                   </div>

    </div> <!---Fin fila--->
<br>
<br>
    <br>
    
    <div id="tipocuenta">
      <form name="form1" method="post">
    <p>Seleccione el tipo de cuenta con el que se desea registrar:</p>
    <div class="row">
        <div class="col"> <!---Columna Checkbox Cliente--->
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="rgb(125,35,182)" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
              <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
              <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
            </svg>
           <label><input type="radio" id="cliente" value="cliente" name="tipocuenta">Cliente</label><br> 
        </div> <!----Fin Columna Cliente---->
        <div class="col"> <!---Columna Checkbox Proveedor de servicio--->
              <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="rgb(125,35,182)" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
            <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
          </svg>
          <label><input type="radio" id="proveedor" value="proveedor" name="tipocuenta">Proveedor de Servicio</label><br>
                </div>
  </div> <!----Fin fila----->
</form>
<br>
<a class="siguiente" type="submit" name="siguiente" href="#">Siguiente</a> 
<br>
</div> <!------Fin id tipo cuenta---->
</div> <!---Fin contenedor tipo cuenta----->

<br>
<br>
<div class="container border" id="ContenedorDatos"> <!---Contenedor DatosPersonales---->
<br>
<div class="row"> <!--Fila datos-->
<div class="col-4"> <!--Columna botón-->
<br>
<button onclick="DatosPersonales()"><svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="white" class="bi bi-file-person-fill" viewBox="0 0 16 16">
  <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z"/>
</svg>
</svg></button> 
</div> <!--Fin columna botón-->
<div id="CategoriaDatos" class="col-5"> <!--Columna titulo-->
<br>
<br>
<h3>Datos Personales</h3>
</div> <!--Fin columna titulo-->
</div>  <!--Fin fila-->
<br>
<br>    
<div id="datospersonales"> <!---ID Datos personales--->
    <br>

    <form name="form2" method="post">

    <div class="row"> <!---Contenedor fila1----> 
  <p>Ingrese sus datos personales:</p>
    <div class="col">
        <label>RUT:</label>
      <input type="text" name="rut" class="form-control" placeholder="Ingrese su rut">
    </div>
    <div class="col">
    <label>Nombre:</label>
    <input type="text" name="nombre" class="form-control" placeholder="Ingrese su nombre">
    </div>
  </div><!--Contenedor fin de la fila1 "row"-->
  <br>
  <div class="row"> <!--Contenedor fila2 "row"-->
    <div class="col">
        <label>Apellido:</label>
      <input type="text" name="apellido" class="form-control" placeholder="Ingrese su apellido">
    </div>
    <div class="col"> 
    <label>Edad:</label>
    <input type="number" name="edad" class="form-control" placeholder="Ingrese su edad" id="edad">
    </div>
  </div> <!--Fin contenedor fila2 "row"-->
  <br>
  <div class="row"> <!--Contenedor fila3 "row"-->
    <div class="col">
        <label>Correo Electrónico:</label>
      <input type="text" name="email" class="form-control" placeholder="Ingrese su correo">
    </div>
    <div class="col"> 
    <label>Número de telefono:</label>
    <input type="text" name="telefono" class="form-control" placeholder="Ingrese nro de telefono">
    </div>
  </div> <!--Fin contenedor fila3 "row"-->
  <br>
  <div class="row"> <!--Contenedor fila4 "row"-->
    <div class="col">
        <label>Dirección:</label>
      <input type="text" name="direccion" class="form-control" placeholder="Ingrese su direccion">
    </div>
    <div class="col"> 
    <label>Región:</label>
    <select class="form-select" aria-label="Default select example">
  <option selected>Seleccione su región correspondiente</option>
  <option value="aricaparinacota">Arica-Parinacota</option>
  <option value="tarapaca">Tarapacá</option>
  <option value="antofagasta">Antofagasta</option>
  <option value="atacama">Atacama</option>
  <option value="coquimbo">Coquimbo</option>
  <option value="valparaiso">Valparaíso</option>
  <option value="metropolitana">Metropolitana</option>
  <option value="OHiggins">O'Higgins</option>
  <option value="Maule">Maule</option>
  <option value="ñuble">Ñuble</option>
  <option value="biobio">Bío Bío</option>
  <option value="araucania">Araucanía</option>
  <option value="losrios">Los Ríos</option>
  <option value="loslagos">Los Lagos</option>
  <option value="aysen">Aysén</option>
  <option value="magallanesantartica">Magallanes y Antártica Chilena</option>
</select>
    </div>
  </div> <!--Fin contenedor fila4 "row"-->
  <br>
  <div class="row"> <!--Contenedor fila5 "row"-->
    <div class="col">
        <label>Comuna:</label>
      <input type="text" name="comuna" class="form-control" placeholder="Ingrese su comuna">
    </div>
    <div class="col"> 
    <label>Nombre de Usuario:</label>
    <input type="text" name="nombreUsuario" class="form-control" placeholder="Ingrese un nombre de usuario">
    </div>
  </div> <!--Fin contenedor fila5 "row"-->
  <br>
  <div class="row"> <!--Contenedor fila6 "row"-->
  <div class="col"> 
    <label>Contraseña:</label>
    <input type="password" name="contrasena" class="form-control" placeholder="Ingrese su contraseña">
    </div>
    <div class="col">
    <label class="form-label" for="customFile">Ingrese una imagen para su foto de perfil</label>
<input type="file" class="form-control" id="imgperfil" name="imgperfil" />
    </div>
  </div> <!--Fin contenedor fila6 "row"-->
  <br>
  <p>¿Pertenece al área STEM? ( Si su respuesta es si: Marque una categoría / No: Marque Otros)</p>
  <div class="row"> <!--Contenedor fila7 "row"-->
    <div class="col">
        <label>Ciencias</label>
        <input type="checkbox" name="area[]" id="cboxcien" value="ciencias">
    </div>
    <div class="col"> 
    <label>Tecnología</label>
    <input type="checkbox" name="area[]" id="cboxtec" value="tecnologia">
    </div>
    <div class="col">
        <label>Ingeniería y Servicios técnicos</label>
      <input type="checkbox" name="area[]" class="cboxing" value="ingenieria">
    </div>
    <div class="col"> 
    <label>Matemáticas</label>
    <input type="checkbox" name="area[]" class="cboxmate" value="matematicas">
    <br>
    </div>
    <div class="col"> 
    <label>Otros</label>
    <input type="checkbox" name="area[]" class="cboxotros"  value="otros">
    <br>
    <br>
    </div>
  </div> <!--Fin contenedor fila7 "row"-->
  <br>
</form>
</div><!--Fin datos personales--->
</div> <!---Fin Contendor DatosPersonales--->    
<br>
<br>
<div class="container border" id="ContenedorServicios"> <!---Prestación de servicios---->
<br>
<div class="row"> <!--Fila-->
<div class="col-4"> <!--Columna botón-->
<br>
<button onclick="Servicios()"><svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="white" class="bi bi-tools" viewBox="0 0 16 16">
  <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
</svg></button>
</div> <!--Fin columna botón-->
<div id="CategoriaDatos" class="col-5"> <!--Columna titulo-->
<br>
<br>
<h3>Prestación de Servicios</h3>
</div> <!--Fin columna titulo-->
</div> <!--Fin fila-->
<br>
<br>
<div id="servicios"> <!--ID servicios--->
<form name="form3" method="post">
  <div class="row"> <!---Contenedor fila1 servicio y profesión---->
    <div class="col">
        <label>Nombre del Servicio:</label>
      <input type="text" name="servicio" class="form-control" placeholder="NombreServicio">
    </div>
    <div class="col">
    <label>Profesión:</label>
    <input type="text" name="profesion" class="form-control" placeholder="Profesion">
    </div>
  </div><!--Contenedor fin de la fila1 "row"-->
  <br>
  <div class="row"> <!--Contenedor fila2 "row"descripción servicio certficiaciones-->
    <div class="col">
        <label>Breve Descripción del Servicio:</label>
      <input type="textarea" name="descripcion" class="form-control" placeholder="Descripcion">
    </div>
    <div class="col">
      <label>Certificaciones:</label>
      <input type="text" name="certificacion" class="form-control" placeholder="Certificaciones">
</div>
  </div> <!--Fin contenedor fila2 "row"-->
<br>
<div class="row"> <!--Contenedor fila3 "row" grado académico y expertiz excel-->
    <div class="col">
        <label>Descripción del grado académico:</label>
      <input type="textarea" name="gradoacademico" class="form-control" placeholder="Descripcion Grado Académico">
    </div>
    <div class="col">
      <label>Nivel de expertiz en Excel:</label>
      <br>
      <select class="form-select" aria-label="Default select example" name="dominioexcel">
  <option selected>Seleccione el nivel de dominio en Excel</option>
  <option value="avanzado">Avanzado</option>
  <option value="intermedio">Intermedio</option>
  <option value="basico">Básico</option>
  <option value="sinexperiencia">Sin experiencia</option>
</select>
</div>
  <br>
  </div> <!--Fin contenedor fila3 "row"-->
  <br>
  <div class="row"> <!--Contenedor fila4 "row" grado académico y expertiz excel-->
    <div class="col"> <!--Columna 1---->
      <label>Nivel en uso de herramientas Ofimáticas:</label> <a href="#" data-toggle="popover" title="Ofimáticas: Herramientas Office(Word, PowerPoint, otros)">?</a>
</span>
      <br>
      <select class="form-select" aria-label="Default select example" name="dominioofimatica">
  <option selected>Seleccione su nivel</option>
  <option value="avanzado">Avanzado</option>
  <option value="intermedio">Intermedio</option>
  <option value="basico">Básico</option>
  <option value="sinexperiencia">Sin experiencia</option>
</select>
</div>
  
  <div class="col">
        <label>Costo del servicio:</label>
      <input type="text" name="costo" class="form-control" placeholder="Ingrese el costo apróximado a cobrar por servicio">
    </div>
    <br>
  </div> <!--Fin contenedor fila4 "row"-->
  <br>
  <p>Seleccione los idiomas:</p>
  <div class="row"> <!--Contenedor fila5 "row"-->
    <div class="col">
    <label>Inglés</label>
        <input type="checkbox" name="ingles" id="cboxing" value="ingles">
    </div>
    <div class="col"> 
    <label>Mandarín</label>
    <input type="checkbox" name="mandarin" id="cboxmand" value="mandarin">
    </div>
    <div class="col">
        <label>Francés</label>
      <input type="checkbox" name="frances" class="cboxfran" value="frances">
    </div>
    <div class="col"> 
    <label>Alemán</label>
    <input type="checkbox" name="aleman" class="cboxalem" value="aleman">
    <br>
    </div>
    <div class="col"> 
    <label>Portugués</label>
    <input type="checkbox" name="portugues" class="cboxport" value="portugues">
    <br>
</div>
<div class="col"> 
    <label>Otros</label>
    <input type="checkbox" name="otros" class="cboxport" value="otros">
    <br>
</div>
  </div> <!--Fin contenedor fila5 "row"-->
<br>
<div class="row"> <!---Contenedor fila6 "row"---->
<div class="col-6">
  <label>Nivel de conocimiento en Idiomas:</label>
  <br>
  <select class="form-select" aria-label="Idioma">
  <option selected>Seleccione su nivel</option>
  <option value="avanzado">Avanzado</option>
  <option value="intermedio">Intermedio</option>
  <option value="basico">Básico</option>
  <option value="sinexperiencia">Sin experiencia</option>
</select>
  <br>
</div><!--Fin columna 1 fila6-->
</div> <!----Fin fila 6----->
<br>
</form>
</div> <!---Fin ID servicios--->
</div>    
<!---Fin Prestación de servicios---->
<br>
<br>
<div class="container">
<div class="row"> 
  <div class="col">
  <a class="boton_enviarregistro" type="submit" name="enviar" href="#">Enviar</a> 
</div>
</div>
</div>
<br>
<br>


 <!---</div>Fin container-fluid----->
</div></div>
    <!--Inicio del footer-->
 
  <footer>
    <?php
    @include('footer.php');

    ?>
  </footer>
    <!--Fin de footer -->
<script src="js/registro.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> 
</body>
</html>