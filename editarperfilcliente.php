<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link href="css\editarperfilcliente.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Tecfem</title>
  </head>
  <body>
      <?php
        @include('headerlogged.php');
      ?>

<!--Cuerpo-->
<div id="bordes" class="row">
    <div  id="cuerpo" >


<div class="container rounded bg-white mt-5 mb-5 pb-3">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5 mb-3" width="150px" src="img\perfilmujer.jpg"><span><button type="button" class="btn btn-secondary btn-sm">Cambiar imagen</button> </span><br><span class="font-weight-bold">**NOMBRE**</span><span class="text-black-50">**MAIL**</span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h1 class="text-right">Perfil</h1>
                </div>
                <div class="row mt-2">
                    <div class="col-md-6"><label class="labels">Nombre</label><input type="text" class="form-control" placeholder="Nombre" value=""></div>
                    <div class="col-md-6"><label class="labels">Apellidos</label><input type="text" class="form-control" value="" placeholder="Apellidos"></div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-12"><label class="labels">Número de Télefono</label><input type="text" class="form-control" placeholder="Número telefónico" value=""></div>
                    <div class="col-md-12"><label class="labels">Región</label>
                        <form action="#">   
                            <select name="region" id="region">
                                <!--mysql_connect('hostname','username''password');
                                mysql_select_db('database-name');

                                $sql = "SELECT username FROM unregistration";
                                $result = mysql_query($sql);

                                echo "<slect name='username'>";
                                while ($row = mysql_fetch_array($result)){
                                    echo "<option value> .
                                }-->
                            </select>
                        </form>
                        <div class="col-md-12"><label class="labels">Comuna</label>
                        <form action="#">
                            <select name="comuna" id="comuna">

                            </select>
                        </form>
                    <div class="col-md-12"><label class="labels">Dirección</label><input type="text" class="form-control" placeholder="Dirección" value=""></div>
                    <div class="col-md-12"><label class="labels">Correo Elecrtónico</label><input type="text" class="form-control" placeholder="Correo electrónico" value=""></div><br>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                            <button id="btnguardar" class="btn btn-primary me-md-2" type="button">Guardar Cambios</button>
                        </div>
                </div>


        </div>
    </div>
</div>
</div>
</div>



<!--Div acciones de cuentas-->
        <div id="estadisticas" class="row">
            <div  class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                <div id="provfav" class="colest">
                    <h2 >Proveedoras de servicio favoritas</h2>
                </div>
                
            </div>
           <div id="estadistica" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
          <div class="colest">
          <a href="blog.php">  <h2>Ir a mi blog</h2>
          </a>  </div>
                
            </div>
            <div id="estadistica" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                
            <div id="servreg" class="colest">
                    <h2>Registro de prestación de servicios</h2>
                </div>
                
            </div>
  
        </div>


        <!--Div para mostrar las funcionalidades-->
        <div class="row">
            <div id="proveedorasfavoritas">
                <h3>Proveedoras favoritas</h3>
             </div>
             <div id="registroservicios">
             <h3>Proveedoras favoritas</h3>
             </div>
                
        <div>
</div>


<br><br>

</div>
</div></div>
<?php
  @include('footer.php');
?>

<script src="js/perfil.js"></script>
</body>
</html>
