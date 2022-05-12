<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link href="css\consolaadmin.css" rel="stylesheet">
    <title>Tecfem-Administrador</title>
  </head>
  <body>
      <?php
        @include('header.php');
      ?>
  
  
<div id="bordes" class="row">
    <div id="cuerpo">


    <!-- Opciones de acciones -->
  <div id="acciones" class="row">
      <div id="accion" >
          <h2>Administrar cuentas de usuario</h2>
      </div>

      <div id="accion">
          <h2>Administrar servicios publicados</h2>
      </div>

      <div id="accion">
          <h2>Cuentas con privilegios</h2>
      </div>
  </div>

  <!--Div donde se cargan las opciones -->
<div class="row">
    <div id="contenidoModi" class="col col-xs-11 col-sm-11 col-md-11 col-lg-11 col-xl-11">
        <!--Divs escondidos donde realizar las acciones-->
    
        <!--DIV CON ADMIN DE CUENTAS DE USUARIO-->

        <div id="cuentasUsr">

        <h2> ADMINSITRAR CUENTAS DE USUARIO</h2>
        <!--BUSCADOR -->
        <div  class="row">
            <div  id="buscador" class="col col-xs-7 col-sm-7 col-md-7 col-lg-7">
        <div class="input-group rounded">
         <input type="search" class="form-control rounded" placeholder="Buscar usuaria" aria-label="Search" aria-describedby="search-addon" />
         <span class="input-group-text border-0" id="search-addon">
         <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
        </svg>
         </span>
       </div>
       </div>

       <!--FILTROS DE BUSQUEDA-->
       <div id="filtrar" class="col col-xs-4 col-sm-4 col-md-4 col-lg-4">
           <h6>Realizar busqueda por:</h6>
             <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
             Nombre de usuario
                </label>
            </div>

          <div class="form-check">
        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
        <label class="form-check-label" for="flexRadioDefault2">
         Rut
         </label>
        </div>

       </div>

       </div>

       <!--Respuestas -->
            <!-- Si no se encuentra ninguna -->

                <div id="noResult" class="row">
                    <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 m-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="rgb(79, 3, 126,0.4)" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                    <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                </svg>
                </div>
                <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 m-0">
                    <h3>No se encontrarón usuarias con los parámetros encontregados.</h3>
                </div>
                </div>
            <!-- Si se encuentran -->
            <div>


            </div>

        </div>

        <!--DIV CON ADMIN DE SERVICIOS-->



        <!--DIV CON ADMIN DE CUENTAS CON PRIVILEGIOS-->

    </div>
</div>

<!--Div con estadísticas de cuentas-->
    <div id="estadisticas" class="row">
            <div id="estadistica" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="colest">
                    <h2 id="idNumeroCuentas">N°</h2>
                </div>
                <div class="colest">
                    <p>Cuentas bloqueadas o eliminadas hasta la fecha.</p>
                </div>
            </div>
            <div id="estadistica" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="colest">
                    <h2 id="idNumeroServicio">N°</h2>
                </div>
                <div class="colest">
                    <p>Servicios bloqueados o eliminados hasta la fecha.</p>
                </div>
            </div>
            <div id="estadistica" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div class="colest">
                    <h2 id="idNumeroAdmins">N°</h2>
                </div>
                <div class="colest">
                    <p>Cuentas de administrador creadas.</p>
                </div>
            </div>
    </div>


  
<div style="heigh: 20px; width:100%; position:sticky;"></div>
</div></div><!--Cierre de cuerpo y bordes-->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>

  <?php
  @include('footer.php');
  ?>
</html>