$(document).ready(function(){

    
    $('#proveedorasfavoritas').hide();
    $('#registroservicios').hide();
    $('#miservicios').hide();

     
    $('#proveedorasfavoritas').hide();
    $('#registroservicios').hide();
    $('#miservicios').hide();
    
        $('#provfav').click(function(){

            $('#proveedorasfavoritas').toggle('slow');
            //Listar proveedoras
            //Borramos a la proveedora de la lista 
           $('#btnborrarProveedora').click(function(){
                    //Pedir nombre de usuaria
                    let nombreProveedora;
                    //Validar con alert
                    $.ajax({
                        url:"controlador\\controlador_cliente.php",
                        method: 'POST',
                        data: {funcion: 'eliminar',nombre: nombreProveedora},
                        success: function(response){
                            //Ver si se agregó o no
                            alert("Eliminado correctamente.");
                        console.log(response);
                            
                        },
                        error: 
                        function(error){
                            alert("Error al eliminar servicio");
                            console.log(error);
                        }
                                    
                    });


            }); 

        });


        $('#servreg').click(function(){

            $('#registroservicios').toggle('slow');

        });

        $('#misserv').click(function(){

            $('#miservicios').toggle('slow');
            listarServicios();
        });

  
        //Mostrar modal agregar al click boton
        $('#agregarserviciobtn').click(function(){

            $('#addServiceModal').modal("show");
        });
            //boton cancelar
            $('#cancel').click(function(){
                $('#addServiceModal').modal("hide");
            });

     //boton guardar
     $('#guardar').click(function(){
        

        //Capturamos valores
          //Falta validarlos!!!!!
        let nombre=$('#nombreadd').val();
        let descripcion=$('#descripcionadd').val(); 
        let costo=$('#costoadd').val();
        let categoria=$('#categoriaadd').val();
        //let  categoria=$('#categoriaadd option:selected').val();

        
                //Manda datos
                $.ajax({
                    url:"controlador\\controlador_proveedor.php",
                    method: 'POST',
                    data: {funcion: 'agregar',nom: nombre, desc: descripcion, cost: costo,cate: categoria},
                    //dataType : 'text',
                    //listar de nuevo servicios ,nom: nombre, desc: descripcion, cost: costo,cate: categoria
                    success: function(response){
                        //Ver si se agregó o no
                        alert("Agregado correctamente.");
                     console.log(response);
                    //listarServicios(); //Listamos de nuevo los servicios
                    listarServicios();
                    },
                    error: //Ver si se agregó o no
                    function(error){
                        alert("Error al agregar servicio");
                        //console.log(error);
                    }
                                
                });
                $('#addServiceModal').modal("hide");
               return false;


                 //listarServicios(); 
        });




    function listarServicios(){
    //Vamos a mandar una peticion ajax al controlador para que muestre mis servicios
        $.ajax({
            url:"controlador\\controlador_proveedor.php",
            method: 'GET',
            data: {funcion: 'listar'},
            contentType: 'json; charset=utf-8',
            success: function(response){
                try {
                    var listaServicios = JSON.parse(response);
                  } catch (err) {
                  
                    console.log('Error: ', err.message);
                  }
                
                let tarjetas=document.querySelector("#mostrartarjetas");
                  tarjetas.innerHTML='';

                  if (isEmpty(listaServicios)){
                      tarjetas.innerHTML+=`<h6>Parece que aun no tienes ningún servicio agregado.</h6>`;
                  }else{
                for(let servicio of listaServicios){
                    //console.log(servicio);
            ////  `  `  esas comillas dejan hacer el siguiente paso
                    
                  let cateSimbolo=valorCategoria(servicio.categoria);
                 
                    
                 tarjeta=document.createElement('div');
                    tarjeta.innerHTML =  `
                    
                    <div id=""serv"" value="${servicio.idServicio}" class="containerServicio" style="display:inline;float:left;width:33%;">
                    
                        <div class="col-lg-4">
                            <div class="card card-margin">
                                <div class="card-header no-border">
                                    <h5 id="nombreServicio" class="card-title ms-5 mt-3">${servicio.nombre}</h5>
                                   
                                </div>
                                <div class="card-body pt-0">
                                    <div class="widget-49">
                                        <div class="widget-49-title-wrapper">
                                            <div class="widget-49-date-primary">
                                                <span id="categoriaServicio" class="widget-49-date-day">${cateSimbolo}</span>
                                              
                                            </div>
                                            <div class="widget-49-meeting-info">
                                                <span class="widget-49-pro-title">Fecha: </span>  
                                                <span id="fecha" class="widget-49-meeting-time">${servicio.fechaPublicacion}<span>
                                            </div>
                                        </div>
                                        <ol class="widget-49-meeting-points">
                                            <li class="widget-49-meeting-item"><span>Descripción: </span></li> <li id="descripcion" class="widget-49-meeting-item">${servicio.descripcion}<span></li>
                                            <li class="widget-49-meeting-item"><span>Costo:</span></li> <li id="costo" class="widget-49-meeting-item"><span>${servicio.costo}<span></li>
                                           
                                        </ol>
                                        
                                </div>
                            
                       
                        
                    </div> </div> `; 

                    document.getElementById("mostrartarjetas").appendChild(tarjeta);
                 
                 }


                 document.addEventListener('click', function (e) {
                    if(e.target && e.target.id== 'serv'){
                        alert(hello);
                        servicioSeleccionado=document.querySelector('.containerServicio');
                        
                     let idServicio=servicioSeleccionado.value();
                   }
       
                }); 
                }
            },

            error: 
            function(error){
                alert("Error al listar servicios");
                console.log(error);
            }
            });


            //Vamos a crear una funcione que reaccione al selleccione un/os servicios para poder hacer el editar y el borrar
            /* La idea es poder borrar de a uno o de a varios (agrega a un array para borrar)
            Para editar es solo de a uno
            Se debe maracar el borde del seleccionado--> Capturamos su id de servicio (que esta en el css del elemento)*/

                 //agregar eventlistener para botones agregados dinamicamente EDITAR
                
                 // Append to another element:
              

              

                
            function abrirmodaledit(num){
                  //Mostar modal 
                  $('#editServiceModal').modal("show");
                
                        //boton cancelar
                        $('#canceledit').click(function(){
                            $('#editServiceModal').modal("hide");
                            });

                  $('#guardaredit').click(function(){
                    let nombre=$('#nombreedit').val();
                    let descripcion=$('#descripcionedit').val(); 
                    let costo=$('#costoedit').val();
                    let categoria=$('#categoriaedit').val();



                    $.ajax({
                        url:"controlador\\controlador_proveedor.php",
                        method: 'POST',
                        data: {funcion: 'editar',nom:nombre,desc:descripcion,cost:costo,cate:categoria,id:num},
                        success: function(response){
                            //Ver si se agregó o no
                            alert("Editado correctamente.");
                        console.log(response);
                            listarServicios();
                        },
                        error: 
                        function(error){
                            alert("Error al editar servicio");
                            console.log(error);
                        }

                    });
                    $('#editServiceModal').modal("hide");
                    return false;
                  });
                  
                  listarServicios();    
    
                 }

                  function abrirmodalborrar(num){
                    if (confirm("¿Seguro que quiere eliminar el registro?") == true) {

                        $.ajax({
                            url:"controlador\\controlador_proveedor.php",
                            method: 'POST',
                            data: {funcion: 'eliminar',id: num},
                            success: function(response){
                                //Ver si se agregó o no
                                alert("Eliminado correctamente.");
                            console.log(response);
                                listarServicios();
                            },
                            error: 
                            function(error){
                                alert("Error al eliminar servicio");
                                console.log(error);
                            }

                        });
                  }
                }



            //Funcion para ver si la consulta devuelve un array de servicios/ o cliente aun no tiene
            function isEmpty(value){
                return (value == null || value.length === 0);
              }

              //Funcion para determinar El simbolo a mostara en tarjeta segun cate
            function valorCategoria(categoria){
                if(categoria=="ciencia"){
                    return "C";
                }else if(categoria=="tecnologia"){
                 return "T";
                }else if(categoria=="ingenieria"){
                  return "I";
                }else if(categoria=="matematicas"){
                  return "M";
               }else if(categoria=="otra"){
                 return "O";
               }
        
             }
    }

    
 ///Vamos a listar las proveedoras favoritas
   
function listarProveedora(){
    //Vamos a mandar una peticion ajax al controlador para que muestre mis servicios
        $.ajax({
            url:"controlador\\controlador_cliente.php",
            method: 'GET',
            data: {funcion: 'listarP'},
            contentType: 'json; charset=utf-8',
            success: function(response){
                var listaProveedor = JSON.parse(response);
                //console.log(JSON.parse(response));
                let tarjeta=document.querySelector('#mostrartarjetasProveedores');
                  tarjeta.innerHTML='';

                  if (isEmpty(listaProveedores)){
                      tarjeta.innerHTML+=`<h6>Parece que aun no tienes ningún proveedor agregado.</h6>`;
                  }else{
                for(let proveedora of listaProveedor){
                    //console.log(servicio);
            ////  `  `  esas comillas dejan hacer el siguiente paso

                    tarjeta.innerHTML +=  `
                    <div id="${servicio.idServicio}" class="container" style="display:inline;float:left;width:33%;">
                    
                        <div class="col-lg-4">
                            <div class="card card-margin">
                                <div class="card-header no-border">
                                    <h5 id="nombreServicio" class="card-title ms-5 mt-3">${servicio.nombre}</h5>
                                   
                                </div>
                                <div class="card-body pt-0">
                                    <div class="widget-49">
                                        <div class="widget-49-title-wrapper">
                                            <div class="widget-49-date-primary">
                                                <span id="categoriaServicio" class="widget-49-date-day">${cateSimbolo}</span>
                                              
                                            </div>
                                            <div class="widget-49-meeting-info">
                                                <span class="widget-49-pro-title">Fecha: </span>  
                                                <span id="fecha" class="widget-49-meeting-time">${servicio.fechaPublicacion}<span>
                                            </div>
                                        </div>
                                        <ol class="widget-49-meeting-points">
                                            <li class="widget-49-meeting-item"><span>Descripción: </span></li> <li id="descripcion" class="widget-49-meeting-item">${servicio.descripcion}<span></li>
                                            <li class="widget-49-meeting-item"><span>Costo:</span></li> <li id="costo" class="widget-49-meeting-item"><span>${servicio.costo}<span></li>
                                           
                                        </ol>
                                        <div class="widget-49-meeting-action">
                                        <button id="btnborrar" style=" float:right" class="btn btn-outline-dark btn-sm "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                          </svg></button>
                                            <button id="btneditar"  data-toggle="modal" data-target="#editServiceModal" class="btn btn-sm btn-flash-border-primary">Editar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                       
                        
                    </div>  `;
                  
                 }
                  }
            },

            error: 
            function(error){
                alert("Error al listar servicios");
                console.log(error);
            }
            });
        
     
        }

});