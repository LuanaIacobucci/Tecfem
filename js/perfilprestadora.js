$(document).ready(function(){
var cajaServicio;//Para llamarle el event listener
var idServicioOperar="";//Guaradamos un id para hacer funciones CRUD
var  nomUsuarioOpera=""; //Nombre usuario proveedora favorita 
var cajaProvFav; //Para llamar al event listener de proveedora favorita  
    $('#proveedorasfavoritas').hide();
    $('#registroservicios').hide();
    $('#miservicios').hide();

     
    $('#proveedorasfavoritas').hide();
    $('#registroservicios').hide();
    $('#miservicios').hide();
    
        $('#provfav').click(function(){

            $('#proveedorasfavoritas').toggle('slow');
            //Listar proveedoras
            listarProveedora()
          
 

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
                  
            ////  `  `  esas comillas dejan hacer el siguiente paso
              
                    
                  let cateSimbolo=valorCategoria(servicio.categoria);
                 
                    
                 tarjeta=document.createElement('div');
                 tarjeta.classList.add('contenedorServicioEvent');
                 tarjeta.value=servicio.idServicio;
                    tarjeta.innerHTML =  `
                    
                    <div  value="${servicio.idServicio}" class="containerServicio" style="display:inline;float:left;width:33%;margin-right:2%;">
                    
                        <div  class="col-lg-4">
                            <div  id="${servicio.idServicio}" class="card card-margin">
                                <div class="card-header no-border">
                                    <h5  id="nombreServicio" class="card-title ms-5 mt-3">${servicio.nombre}</h5>
                                   
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
                 //Seleccionar div de servicio para operaciones crud. Agregar Event Listener
             cajaServicio = Array.from(document.getElementsByClassName('contenedorServicioEvent'));
             
            cajaServicio.forEach(box => {
                //Si no ha sido clickeado
                var clickDeServico=false
                
                box.addEventListener('click', function handleClick(event) {
                  let valId=box.value;
                // alert(valId);

                 //Aca voy a settear css para que se vea que servicio he seleccionado
                 conte1=document.getElementById(valId);
                if(clickDeServico==false){
                    //Selecciono el servicio
                  conte1.setAttribute('style', 'box-shadow: 5px 5px 20px 5px rgb(174, 51, 240,0.2);');
                  clickDeServico=true;
                  idServicioOperar=valId; //Le asigno a esta variable global el id;


                    //Deseleccionar otros servicios
                    cajaServicio.forEach(box => { 
                        let valIdNoSelect=box.value;
                        if(valId!=valIdNoSelect){
                        conteNoSelect=document.getElementById(valIdNoSelect);
                        conteNoSelect.setAttribute('style', 'box-shadow: none;');
                        }
                    });
                  

                }else{
                    //Deselecciono el servicio
                    conte1.setAttribute('style', 'box-shadow: none;');
                    clickDeServico=false;
                    idServicioOperar=""; //Quito el id de var global para eviatr errores
                }
                     }); });
                }
            },

            error: 
            function(error){
                alert("Error al listar servicios");
                console.log(error);
            }
            });

            

              

            $('#btneditar').click(function(){    
           // function abrirmodaledit(){
                  //Mostar modal 
                  
                
                        //boton cancelar
                        $('#canceledit').click(function(){
                            $('#editServiceModal').modal("hide");
                            });


                let num=idServicioOperar;
                    if(num==""){
                        alert("Debes primero seleccionar un servicio.");
                    }else{
                        $('#editServiceModal').modal("show");

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
                                        $('#editServiceModal').modal("hide");
                                        idServicioOperar="";
                                    },
                                    error: 
                                    function(error){
                                        alert("Error al editar servicio");
                                        console.log(error);
                                        idServicioOperar="";
                                    }

                                        
                                
                                });
                                return false; }); 
                    
                       }});
                  
             


                $('#btnborrar').click(function(){

                    num=idServicioOperar;

                    if(num==""){
                        alert("Debes seleccionar un servicio primero.");
                    }else{
                        
                    if (confirm("¿Seguro que quiere eliminar el registro?") == true) {

                        $.ajax({
                            url:"controlador\\controlador_proveedor.php",
                            method: 'POST',
                            data: {funcion: 'eliminar',id: num},
                            success: function(response){
                                //Ver si se agregó o no
                                alert("Eliminado correctamente.");
                           // console.log(response);
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

                });



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
              
                var listaProveedores = JSON.parse(response);
                console.log(JSON.parse(response));
                let tarjetas=document.querySelector('#mostrartarjetasProveedora');
                  tarjetas.innerHTML='';

                  if (isEmpty(listaProveedores)){
                      tarjetas.innerHTML+=`<h6>Parece que aun no tienes ningún proveedor agregado.</h6>`;
                  }else{
                for(let proveedora of listaProveedores){
                    //console.log(servicio);
            ////  `  `  esas comillas dejan hacer el siguiente paso
            tarjeta=document.createElement('div');
            tarjeta.classList.add('contenedorProveedoraFavorita');
            tarjeta.value=proveedora.nombreUsuario;
               
                    tarjeta.innerHTML +=  `
                    
                    <div  style="display:inline;float:left;width:28%;margin-right:2%;">
                        <div  id="${proveedora.nombreUsuario}" class="card p-4 mt-1">
                            <div class="first">
                                <h6 class="heading">${proveedora.nombre} ${proveedora.apellido}</h6>
                               
    
                                    </div>
                                     <div class="second d-flex flex-row mt-2">
                                        <div class="image mr-3">
                                        <img src="img\\perfilmujer.jpg" class="rounded-circle" width="60"/>
                                    </div>   

                                        <div class=" ms-4">

                                                <div class="d-flex flex-row  ms-1 mb-1">

                                                    <span>@${proveedora.nombreUsuario}</span>

                                                                                                    
                                                </div>

                                                <div>

                                                    <button id="irBlog" tyle="margin-left:2%; float:right" class="btn btn-outline-dark btn-sm px-2 m-1">Calificar</button>
                                                    <button id="calificar" style="margin-left:5%; float:right" class="btn btn-outline-dark btn-sm m-1">Ver su Blog</button>
                                                                                              
                                                </div>
                                        </div> 
                    </div>
                   <hr class="line-color">
                    <div class="third mt-4">
                    <button id="btnborrarProveedora" class="btn btn-outline-dark btn-sm "><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                   <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                    </svg></button>
                    <button id="contactar"style="margin-left:5%; float:right" class="btn btn-success btn-block ms-5"><i class="fa fa-clock-o" ></i>Contactar</button>
                    </div>
                </div>  
                    `;

                    document.getElementById("mostrartarjetasProveedora").appendChild(tarjeta);

                  
                 }

                 ///Vamos a agregar event listeners a botones
                 
                 //Seleccionar div de servicio para operaciones crud. Agregar Event Listener
                cajaProvFav = Array.from(document.getElementsByClassName('contenedorProveedoraFavorita'));
             
                cajaProvFav.forEach(box => {
                 //Si no ha sido clickeado
                 var clickDeProv=false
                 
                 box.addEventListener('click', function handleClick(event) {
                   let nomUser=box.value;
                  
                  //Aca voy a settear css para que se vea que servicio he seleccionado
                  conte1=document.getElementById(nomUser);
                 if(clickDeProv==false){
                     //Selecciono el servicio
                   conte1.setAttribute('style', 'box-shadow: 5px 5px 20px 5px rgb(174, 51, 240,0.2);');
                   clickDeProv=true;
                   nomUsuarioOperar=nomUser; //Le asigno a esta variable global el id;
 
 
                     //Deseleccionar otros servicios
                     cajaProvFav.forEach(box => { 
                         let nombreUsuarioNoSelect=box.value;
                         if(nomUser!=nombreUsuarioNoSelect){
                         conteNoSelect=document.getElementById(nombreUsuarioNoSelect);
                         conteNoSelect.setAttribute('style', 'box-shadow: none;');
                         }
                     });


                    }else{
                        //Deselecciono el servicio
                        conte1.setAttribute('style', 'box-shadow: none;');
                        clickDeProv=false;
                        nomUsuarioOpera=""; //Quito el id de var global para evitar errores
                    } 


                


                });


                
                   //Agregar funcionalidad de botones
                    //Borrar
                    btnborrar=document.getElementById('btnborrarProveedora');
                    btnborrar.addEventListener('click', function handleClick(event) {

                        let nombreProveedora=box.value;;
                        //Validar con alert
                        $.ajax({
                            url:"controlador\\controlador_cliente.php",
                            method: 'POST',
                            data: {funcion: 'eliminarP',nombre: nombreProveedora},
                            success: function(response){
                                //Ver si se agregó o no
                                alert("Eliminado correctamente.");
                             
                                listarProveedora();
                            },
                            error: 
                            function(error){
                                alert("Error al eliminar servicio");
                                console.log(error);
                            }
                                        
                        });
                    });

                    //Wspp

                    btnwspp=document.getElementById('contactar');
                    btnwspp.addEventListener('click', function handleClick(event) {

                        let nombreProveedora=box.value;

                        alert("Requiere configuración");
                    
                    });
                    //Blog
                    btnblog=document.getElementById('irBlog');
                    btnblog.addEventListener('click', function handleClick(event) {

                        let nombreProveedora=box.value;

                        alert("Requiere configuración");
                       
                    });

                    //calificar
                    btncalificar=document.getElementById('calificar');
                    btncalificar.addEventListener('click', function handleClick(event) {

                        let nombreProveedora=box.value;

                        alert("Requiere configuración");
                        
                    });


            
            });



        }
            },

            error: 
            function(error){
                alert("Error al listar servicios");
                console.log(error);
            }
            });
        
     
        }

        function isEmpty(value){
            return (value == null || value.length === 0);
          }

});