<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="css\consolaadmin2.css" rel="stylesheet">
<title>Tecfem Administrador</title>

</head>

<body>

<?php
    @include('headerlogged.php');
   
    ?>

	
    <!--Cuerpo-->
    <div id="bordes" class="row">
    <div  id="cuerpo" class="col col-xs-12 col-sm-10 col-md-9 col-lg-9 col-xl-9 ">
 
	
	<!-- Opciones de acciones -->
 <div id="acciones" class="row">
      <div id="accion" class="accion1" >
          <h2>Administrar cuentas de usuario</h2>
      </div>

      <div id="accion" class="accion2" >
          <h2>Administrar servicios publicados</h2>
      </div>

      <div id="accion" class="accion3" >
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
                    
                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="rgb(79, 3, 126,0.4)" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                    <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                </svg>
            
                    <h3>No se encontrarón usuarias con los parámetros encontregados.</h3>
              
                </div>
            <!-- Si se encuentran -->
            <div>

			      
	
		<div class="container-xl">
			<div class="table-responsive">
				<div class="table-wrapper">
					<div class="table-title">
						<div class="row">
							<div class="col-sm-6">
					<!--	<h2>Administrar  <b>Usuarias</b></h2> -->
							</div>
							<div class="col-sm-6">
								<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar usuaria</span></a>
								<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Eliminar</span></a>						
							</div>
							</div>
							</div>
									<table class="table table-striped table-hover">
								<thead>
									<tr>
										<th>
											<span class="custom-checkbox">
												<input type="checkbox" id="selectAll">
												<label for="selectAll"></label>
											</span>
										</th>
										<th>Nombre</th>
										<th>Email</th>
										<th>Dirección</th>
										<th>Teléfono</th>
										<th>Acciones</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
											<span class="custom-checkbox">
												<input type="checkbox" id="checkbox1" name="options[]" value="1">
												<label for="checkbox1"></label>
											</span>
										</td>
										<td>Thomas Hardy</td>
										<td>thomashardy@mail.com</td>
										<td>89 Chiaroscuro Rd, Portland, USA</td>
										<td>(171) 555-2222</td>
										<td>
											<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
											<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
										</td>
									</tr>
									<tr>
										<td>
											<span class="custom-checkbox">
												<input type="checkbox" id="checkbox2" name="options[]" value="1">
												<label for="checkbox2"></label>
											</span>
										</td>
										<td>Dominique Perrier</td>
										<td>dominiqueperrier@mail.com</td>
										<td>Obere Str. 57, Berlin, Germany</td>
										<td>(313) 555-5735</td>
										<td>
											<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
											<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
										</td>
									</tr>
									<tr>
										<td>
											<span class="custom-checkbox">
												<input type="checkbox" id="checkbox3" name="options[]" value="1">
												<label for="checkbox3"></label>
											</span>
										</td>
										<td>Maria Anders</td>
										<td>mariaanders@mail.com</td>
										<td>25, rue Lauriston, Paris, France</td>
										<td>(503) 555-9931</td>
										<td>
											<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
											<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
										</td>
									</tr>
									<tr>
										<td>
											<span class="custom-checkbox">
												<input type="checkbox" id="checkbox4" name="options[]" value="1">
												<label for="checkbox4"></label>
											</span>
										</td>
										<td>Fran Wilson</td>
										<td>franwilson@mail.com</td>
										<td>C/ Araquil, 67, Madrid, Spain</td>
										<td>(204) 619-5731</td>
										<td>
											<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
											<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
										</td>
									</tr>					
									<tr>
										<td>
											<span class="custom-checkbox">
												<input type="checkbox" id="checkbox5" name="options[]" value="1">
												<label for="checkbox5"></label>
											</span>
										</td>
										<td>Martin Blank</td>
										<td>martinblank@mail.com</td>
										<td>Via Monte Bianco 34, Turin, Italy</td>
										<td>(480) 631-2097</td>
										<td>
											<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
											<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
										</td>
									</tr> 
								</tbody>
							</table>

						</div></div>
			<div class="clearfix">
				<div class="hint-text">Mostrando <b>5</b> de <b>25</b> </div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Anterior</a></li>
					<li class="page-item active"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Siguiente</a></li>
				</ul>
				</div>
			</div>
	        

											<!-- Edit Modal HTML -->
											<div id="addEmployeeModal" class="modal fade">
												<div class="modal-dialog">
													<div class="modal-content">
														<form>
															<div class="modal-header">						
																<h4 class="modal-title">Agregar Usuaria</h4>
																<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
															</div>
															<div class="modal-body">					
																<div class="form-group">
																	<label>Nombre</label>
																	<input type="text" class="form-control" required>
																</div>
																<div class="form-group">
																	<label>Email</label>
																	<input type="email" class="form-control" required>
																</div>
																<div class="form-group">
																	<label>Dirección</label>
																	<textarea class="form-control" required></textarea>
																</div>
																<div class="form-group">
																	<label>Teléfono</label>
																	<input type="text" class="form-control" required>
																</div>					
															</div>
															<div class="modal-footer">
																<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
																<input type="submit" class="btn btn-success" value="Add">
															</div>
														</form>
													</div>
												</div>
											</div>
											<!-- Edit Modal HTML -->
											<div id="editEmployeeModal" class="modal fade">
												<div class="modal-dialog">
													<div class="modal-content">
														<form>
															<div class="modal-header">						
																<h4 class="modal-title">Editar Usuarias</h4>
																<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
															</div>
															<div class="modal-body">					
																<div class="form-group">
																	<label>Nombre</label>
																	<input type="text" class="form-control" required>
																</div>
																<div class="form-group">
																	<label>Email</label>
																	<input type="email" class="form-control" required>
																</div>
																<div class="form-group">
																	<label>Dirección</label>
																	<textarea class="form-control" required></textarea>
																</div>
																<div class="form-group">
																	<label>Teléfono</label>
																	<input type="text" class="form-control" required>
																</div>					
															</div>
															<div class="modal-footer">
																<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
																<input type="submit" class="btn btn-info" value="Save">
															</div>
														</form>
													</div>
												</div>
											</div>
											<!-- Delete Modal HTML -->
											<div id="deleteEmployeeModal" class="modal fade">
												<div class="modal-dialog">
													<div class="modal-content">
														<form>
															<div class="modal-header">						
																<h4 class="modal-title">Eliminar usuaria</h4>
																<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
															</div>
															<div class="modal-body">					
																<p>¿Está seguro que desea eliminar la usuaria?</p>
																<p class="text-warning"><small>Esta acción no se puede revertir.</small></p>
															</div>
															<div class="modal-footer">
																<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancelar">
																<input type="submit" class="btn btn-danger" value="Borrar">
															</div>
														</form>
													
												</div>
												</div>
											</div>


</div>

		
        <!--DIV CON ADMIN DE SERVICIOS-->
	<div id="adminserv"> 


		<h2> ADMINSITRAR CUENTAS DE SERVICIOS</h2>
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

			<div class="form-check">
			<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
			<label class="form-check-label" for="flexRadioDefault2">
			Categoría STEM
			</label>
			</div>

			<div class="form-check">
			<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
			<label class="form-check-label" for="flexRadioDefault2">
			Nombre servicio
			</label>
			</div>

      	 </div>

       </div>

       <!--Respuestas -->
            <!-- Si no se encuentra ninguna -->

                <div id="noResult" class="row">
                    
                <svg xmlns="http://www.w3.org/2000/svg" width="46" height="46" fill="rgb(79, 3, 126,0.4)" class="bi bi-person-bounding-box" viewBox="0 0 16 16">
                    <path d="M1.5 1a.5.5 0 0 0-.5.5v3a.5.5 0 0 1-1 0v-3A1.5 1.5 0 0 1 1.5 0h3a.5.5 0 0 1 0 1h-3zM11 .5a.5.5 0 0 1 .5-.5h3A1.5 1.5 0 0 1 16 1.5v3a.5.5 0 0 1-1 0v-3a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 1-.5-.5zM.5 11a.5.5 0 0 1 .5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 1 0 1h-3A1.5 1.5 0 0 1 0 14.5v-3a.5.5 0 0 1 .5-.5zm15 0a.5.5 0 0 1 .5.5v3a1.5 1.5 0 0 1-1.5 1.5h-3a.5.5 0 0 1 0-1h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 1 .5-.5z"/>
                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                </svg>
            
                    <h3>No se encontrarón servicios con los parámetros entregados.</h3>
              
                </div>
            <!-- Si se encuentran -->
            <div>

			      
	
<div class="container-xl">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
					
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Agregar usuaria</span></a>
						<a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Eliminar</span></a>						
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
						</th>
						<th>Nombre</th>
						<th>Email</th>
						<th>Categoría</th>
						<th>Descripcción</th>
						<th>Usuaria asociada</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
						</td>
						<td>Thomas Hardy</td>
						<td>thomashardy@mail.com</td>
						<td>89 Chiaroscuro Rd, Portland, USA</td>
						<td>(171) 555-2222</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox2" name="options[]" value="1">
								<label for="checkbox2"></label>
							</span>
						</td>
						<td>Dominique Perrier</td>
						<td>dominiqueperrier@mail.com</td>
						<td>Obere Str. 57, Berlin, Germany</td>
						<td>(313) 555-5735</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox3" name="options[]" value="1">
								<label for="checkbox3"></label>
							</span>
						</td>
						<td>Maria Anders</td>
						<td>mariaanders@mail.com</td>
						<td>25, rue Lauriston, Paris, France</td>
						<td>(503) 555-9931</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox4" name="options[]" value="1">
								<label for="checkbox4"></label>
							</span>
						</td>
						<td>Fran Wilson</td>
						<td>franwilson@mail.com</td>
						<td>C/ Araquil, 67, Madrid, Spain</td>
						<td>(204) 619-5731</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr>					
					<tr>
						<td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox5" name="options[]" value="1">
								<label for="checkbox5"></label>
							</span>
						</td>
						<td>Martin Blank</td>
						<td>martinblank@mail.com</td>
						<td>Via Monte Bianco 34, Turin, Italy</td>
						<td>(480) 631-2097</td>
						<td>
							<a href="#editEmployeeModal" class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
							<a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
						</td>
					</tr> 
				</tbody>
			</table>
			<div class="clearfix">
				<div class="hint-text">Mostrando <b>5</b> de <b>25</b> </div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Anterior</a></li>
					<li class="page-item active"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Siguiente</a></li>
				</ul>
			</div>
		</div>
	</div>        
</div>

</div>
        <!--DIV CON ADMIN DE CUENTAS CON PRIVILEGIOS-->
		<div id="cuentaadmin"></div>



		</div>



</div></div>




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

	  <br><br>
</div></div>

<?php
  @include('footer.php');
  ?>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
 

	<script src="js/consolaadmin.js"></script>
</body>
</html> 