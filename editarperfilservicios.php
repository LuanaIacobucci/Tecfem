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

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5 mb-3" width="150px" src="img\perfilmujer.jpg">  
                <span><button id="btnguardar"  type="button" class="btn btn-primary btn-sm">Cambiar imagen</button> </span><br>
                <span class="font-weight-bold">**NOMBRE**</span>
                <span class="text-black-50">**MAIL**</span><br>
                <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                    <button id="btnguardar" type="button" class="btn btn-primary btn-sm">Servicios</button>
                </div></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h1 class="text-right">Perfil Prestadora de Servicios</h1>
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
            <div  class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <div id="provfav" class="colest">
                    <h2 >Proveedoras de servicio favoritas</h2>
                </div>
                
            </div>
            <div  class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
          <div class="colest">
          <a href="blog.php">  <h2>Ir a mi blog</h2>
          </a>  </div>
                
            </div>
            <div  class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
                
            <div id="servreg" class="colest">
                    <h2>Registro de prestación de servicios</h2>
                </div>
                
            </div>

            <div   class="col-xs-3 col-sm-3 col-md-3 col-lg-3 col-xl-3">
            <div id="misserv" class="colest">
                    <h2>Mis servicios</h2>
                </div>
                
            </div>
            
  
  
        </div>
        <br>


        <!--Div para mostrar las funcionalidades-->
        <div id="contenedorfuncionalidades" class="row m-1">
            <div id="proveedorasfavoritas">
                <h3>Proveedoras favoritas</h3>
                <!--Lista de proveedoras favoritas-->
                    
                        <!--Inicio de tarjeta genérica-->
                    <div id="tarjetagenerica">
                        <div class="card p-4 mt-1">
                            <div class="first">
                                <h6 class="heading">NOMBRE PROVEEDORA</h6>
                               
    
                                    </div>
                                     <div class="second d-flex flex-row mt-2">
                                        <div class="image mr-3">
                                        <img src="img\perfilmujer.jpg" class="rounded-circle" width="60"/>
                                    </div>   

                                        <div class=" ms-4">

                                                <div class="d-flex flex-row  ms-1 mb-1">

                                                    <span>@Nombreusuario</span>

                                                                                                    
                                                </div>

                                                <div>

                                                    <button style="margin-left:2%; float:right" class="btn btn-outline-dark btn-sm px-2 m-1">Calificar</button>
                                                    <button style="margin-left:5%; float:right" class="btn btn-outline-dark btn-sm m-1">Ver su Blog</button>
                                                                                              
                                                </div>
                                        </div> 
                    </div>
                   <hr class="line-color">
                    <div class="third mt-4">
                    <button style="margin-left:5%; float:right" class="btn btn-success btn-block ms-5"><i class="fa fa-clock-o" ></i> Solicitar servicio</button>
                    </div>
                </div>         <!--Fin de la tarjeta -->
              
             
                </div>

             </div>
             <div id="registroservicios">
             <h3>Registro de prestación de servicios</h3>
                <!--Tabla de registros-->
                    <div class="container mt-1 px-2">
                                
                                <div class="mb-2 d-flex justify-content-between align-items-center">
                                    
                                    
                                        <input style="float:left;" class="form-control w-800" placeholder="Ordenar por fecha, nombre usuario, categoría, etc...">
                                        
                                    
                                   <button style="float:left;"> <span class="input-group-text border-0" id="search-addon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="white" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                        </svg>
                                        </span></button>

                                                             
                                </div>
                                <div class="table-responsive">
                                <table class="table table-responsive table-borderless">
                                    
                                <thead>
                                    <tr class="bg-light">
                                   
                                    <th scope="col" width="5%">ID</th>
                                    <th scope="col" width="20%">Fecha</th>
                                    <th scope="col" width="10%">Categoría</th>
                                    <th scope="col" width="20%">Customer</th>
                                    <th scope="col" width="20%">Descripción</th>
                                    <th scope="col" class="text-end" width="20%"><span>Valor</span></th>
                                    </tr>
                                </thead>
                            <tbody>
                                <tr>
                               
                                <td>12</td>
                                <td>1 Oct, 21</td>
                                <td><i class="fa fa-check-circle-o green"></i><span class="ms-1">Paid</span></td>
                                <td><img src="https://i.imgur.com/VKOeFyS.png" width="25"> Althan Travis</td>
                                <td>Wirecard for figma</td>
                                <td class="text-end"><span class="fw-bolder">$0.99</span> <i class="fa fa-ellipsis-h  ms-2"></i></td>
                                </tr>
                                
                                <tr>
                                
                                <td>14</td>
                                <td>12 Oct, 21</td>
                                <td><i class="fa fa-dot-circle-o text-danger"></i><span class="ms-1">Failed</span></td>
                                <td><img src="https://i.imgur.com/nmnmfGv.png" width="25"> Tomo arvis</td>
                                <td>Altroz furry</td>
                                <td class="text-end"><span class="fw-bolder">$0.19</span> <i class="fa fa-ellipsis-h  ms-2"></i></td>
                                </tr>
                                
                                
                                <tr>
                               
                                <td>17</td>
                                <td>1 Nov, 21</td>
                                <td><i class="fa fa-check-circle-o green"></i><span class="ms-1">Paid</span></td>
                                <td><img src="https://i.imgur.com/VKOeFyS.png" width="25"> Althan Travis</td>
                                <td>Apple Macbook air</td>
                                <td class="text-end"><span class="fw-bolder">$1.99</span> <i class="fa fa-ellipsis-h  ms-2"></i></td>
                                </tr>
                                
                                
                                <tr>
                                
                                <td>90</td>
                                <td>19 Oct, 21</td>
                                <td><i class="fa fa-check-circle-o green"></i><span class="ms-1">Paid</span></td>
                                <td><img src="https://i.imgur.com/VKOeFyS.png" width="25"> Travis head</td>
                                <td>Apple Macbook Pro</td>
                                <td class="text-end"><span class="fw-bolder">$9.99</span> <i class="fa fa-ellipsis-h  ms-2"></i></td>
                                </tr>
                                
                                
                                <tr>
                              
                                <td>12</td>
                                <td>1 Oct, 21</td>
                                <td><i class="fa fa-check-circle-o green"></i><span class="ms-1">Paid</span></td>
                                <td><img src="https://i.imgur.com/nmnmfGv.png" width="25"> Althan Travis</td>
                                <td>Wirecard for figma</td>
                                <td class="text-end"><span class="fw-bolder">$0.99</span> <i class="fa fa-ellipsis-h  ms-2"></i></td>
                                </tr>
                            
                           

                </tbody> 
                 
            </table> 
           <!--poner paginacion de tabla-->                 
                     </div>

                <!--FIn tabla de registros-->
                                <br>
             </div> </div>

             <div id="miservicios">
                 <div class="row">
            <div class="col">  
             <h3>Mis Servicios</h3>
             </div>

             <div  class="col">
                 <button  id="agregarserviciobtn" data-toggle="modal" data-target="#addServiceModal" style="float:right;" class="btn  btn-lg"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="36" fill="rgb(0,128,55)" class="bi bi-plus-circle" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg></button>
             </div>

             </div>
             <!--Inicio tarjeta modelo-->
                <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="card card-margin">
                                    <div class="card-header no-border">
                                        <h5 class="card-title ms-5 mt-3">Nombre servicio</h5>
                                       
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="widget-49">
                                            <div class="widget-49-title-wrapper">
                                                <div class="widget-49-date-primary">
                                                    <span class="widget-49-date-day">S</span>
                                                  
                                                </div>
                                                <div class="widget-49-meeting-info">
                                                    <span class="widget-49-pro-title">Fecha: </span>
                                                    <span class="widget-49-meeting-time">dd/mm/aa/<span>
                                                </div>
                                            </div>
                                            <ol class="widget-49-meeting-points">
                                                <li class="widget-49-meeting-item"><span>Descripción: </span></li> <li class="widget-49-meeting-item"><span></li>
                                                <li class="widget-49-meeting-item"><span>Costo:</span></li> <li class="widget-49-meeting-item"><span> <li class="widget-49-meeting-item"><span></li></li>
                                               
                                            </ol>
                                            <div class="widget-49-meeting-action">
                                            <button style=" float:right" class="btn btn-outline-dark btn-sm "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                              </svg></button>
                                                <button class="btn btn-sm btn-flash-border-primary">Editar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        

             <!--FIn tarjeta modelo-->

          
											<!-- Editar servicio Modal HTML -->
											<div id="editServiceModal" class="modal">
												<div class="modal-dialog">
													<div class="modal-content">
														<form>
															<div class="modal-header">						
																<h4 class="modal-title">Editar Servicio</h4>
																<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
															</div>
															<div class="modal-body">					
																<div class="form-group">
																	<label>Nombre</label>
																	<input type="text" class="form-control" required>
																</div>
																<div class="form-group">
																	<label>Descripción</label>
																	<textarea class="form-control" required></textarea>
																</div>
																<div class="form-group">
																	<label>Costo</label>
                                                                    <input type="number" class="form-control" required>
																	
																</div>
																<div class="form-group">
																	<label>Categoría</label>
																	<select name="cateservicio">
                                                                    <option value="value1">Ciencia</option>
                                                                    <option value="value2" >Tecnología</option>
                                                                    <option value="value3">Ingeniería</option>
                                                                    <option value="value4">Matemáticas</option>
                                                                    <option value="value5">Otra</option>
                                                                    </select>
																</div>					
															</div>
                                                            <div class="modal-footer">
                                                           
															
																<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
																<input type="submit" class="btn btn-info" value="Guardar"> 


															</div>
														</form>
													</div>
												</div>
											</div>


                                            <!--modal agregar servicio-->
                                            	<!-- Editar servicio Modal HTML -->
											<div id="addServiceModal" class="modal fade" role="dialog">
												<div class="modal-dialog">
													<div class="modal-content">
														<form>
															<div class="modal-header">						
																<h4 class="modal-title">Agregar Servicio</h4>
																<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
															</div>
															<div class="modal-body">					
																<div class="form-group">
																	<label>Nombre</label>
																	<input id="nombreadd" type="text" class="form-control" required>
																</div>
																<div class="form-group">
																	<label>Descripción</label>
																	<textarea id="descripcionadd" class="form-control" required></textarea>
																</div>
																<div class="form-group">
																	<label>Costo</label>
                                                                    <input id="costoadd" type="number" class="form-control" required>
																	
																</div>
																<div class="form-group">
																	<label>Categoría</label>
																	<select id="categoriaadd" name="cateservicio">
                                                                    <option value="ciencia">Ciencia</option>
                                                                    <option value="tecnologia" >Tecnología</option>
                                                                    <option value="ingenieria">Ingeniería</option>
                                                                    <option value="matematicas">Matemáticas</option>
                                                                    <option value="otra">Otra</option>
                                                                    </select>
																</div>					
															</div>
                                                            <div class="modal-footer">
                                                           
															
																<input id="cancel" type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
																<input id="guardar" type="submit" class="btn btn-info" value="Guardar"> 


															</div>
														</form>
													</div>
												</div>
											</div>

                                            <!-- -->
             </div>
                
           
       </div>
       <br>
  </div>







<br>
</div></div></div>
<?php
  @include('footer.php');
?>

<script src="js/perfilprestadora.js"></script>
</body>
</html>