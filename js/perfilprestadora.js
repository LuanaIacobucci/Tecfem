$(document).ready(function(){

    
    $('#proveedorasfavoritas').hide();
    $('#registroservicios').hide();
    $('#miservicios').hide();

    
$('#provfav').click(function(){

    $('#proveedorasfavoritas').toggle('slow');

});


$('#servreg').click(function(){

    $('#registroservicios').toggle('slow');

});

$('#misserv').click(function(){

    $('#miservicios').toggle('slow');

    //Mostrar modal agregar al click boton
    $('#agregarserviciobtn').click(function(){

    $('#addServiceModal').modal("show");

    //boton cancelar
    $('#cancel').click(function(){
        $('#addServiceModal').modal("hide");
     });

     //boton guardar
     $('#guardar').click(function(){
        $('#addServiceModal').modal("hide");

        //Capturamos valores
          //Falta validarlos!!!!!
        let nombre=$('#nombreadd').val();
        let descripcion=$('#descripcionadd').val(); 
        let costo=$('#costoadd').val();
        let categoria=$('#categoriaadd').val();
        
        //Manda datos
        $.ajax({
            url:'controlador_proveedor.php',
            type: 'POST',
            data: {nombre,descripcion,costo,categoria},
            //listar de nuevo servicios 
            success: function(response){
                //Ver si se agregó o no
                if(response){
                    alert("Se agregó a la bd");
                }else{
                    alert("No se agregó a la bd");
                }
             }
            
        })
        
        });
    });

    //Vamos a mandar una peticion ajax al controlador para que muestre mis servicios

    $.ajax({
        url:'controlador_proveedor.php',
        type:'GET'
       // success: 
        
    })

});
   
});