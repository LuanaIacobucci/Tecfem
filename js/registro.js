$(document).ready(function(){
  var tipoCuenta="";
  //Cuando se toque tipo de cuenta se abre el tipo de cuenta
  $("#ContenedorCuenta").click(function() {
    $("#tipocuenta").show();
  });
  //Si preciona siguiente 
  $("#buttonSeguir").click(function() {
   
  if( $('input:radio[name=tipocuenta]:checked').is(':checked') ){
    tipoCuenta=$('input:radio[name=tipocuenta]:checked').val();
    
   
      $("#datospersonales").show();
    

    
}
else{
  alert("Debe elegir tipo de cuenta para continuar");
}


    
  });
 
  $("#buttonSeguir2").click(function() {
//Validar de que haya completado todos los campos
nombreUsuario=$('#nombreUsuario').val();
contra=$('#contrasena').val();
fechanacimiento=$('#edad').val();
nombre=$('#nombre').val();
apellido=$('#apellido').val();
comuna=$('#comuna').val();
direccion=$('#direccion').val();
rut=$('#rut').val();
region=$('#region').val();
telefono=$('#telefono').val();
fotoperfil=$('#imgperfil').val();
catestem=$('input:radio[name=area]:checked').val();
correo=$('#email').val();

if(nombreUsuario!=undefined && contra!=undefined && fechanacimiento!=undefined && nombre!=undefined && apellido!=undefined && comuna!=undefined && direccion!=undefined && rut!=undefined && region!=undefined && telefono!=undefined && fotoperfil!=undefined && catestem!=undefined && correo!=undefined){
  if (tipoCuenta=="proveedor"){
    $("#servicios").show();
  }else{
    alert("Ya ha completado todos los campos necesarios para su tipo de usuario. Porfavor envie sus datos.");
  }

}else{
  alert("Rellene todos los campos por favor");
}

});


  $('#finishRegistro').click(function(){

    //Capturamos valores
          //Falta validarlos!!!!!
          nombreUsuario=$('#nombreUsuario').val();
          contra=$('#contrasena').val();
          fechanacimiento=$('#edad').val();
          nombre=$('#nombre').val();
          apellido=$('#apellido').val();
          comuna=$('#comuna').val();
          direccion=$('#direccion').val();
          rut=$('#rut').val();
          region=$('#region').val();
          telefono=$('#telefono').val();
          fotoperfil=$('#imgperfil').val();
          catestem=$('input:radio[name=area]:checked').val();
          correo=$('#email').val();

          //si es proveedora capturamos sobre lso servicios
          if (tipoCuenta=="proveedor"){
            profesion=$('#profesion').val();
           desc=$('#descripcion').val();
            cert=$('#Certificaciones').val();
            gradAcad=$('#descGradoAcad').val();
            excel=$('#excel').val();
            ofi=$('#ofimatica').val();
           

          }

  $.ajax({
    url:"controlador\\controlador_cliente.php",
    method: 'POST',
    data: {funcion: 'registrarse',nombreusuario:nombreUsuario, contrasena: contra, tipoUsuario:tipoCuenta, nombre:nombre,apellido:apellido, nacimiento:fechanacimiento,comuna:comuna,direccion:direccion,rut:rut,region:region,telefono:telefono,correo:correo},
    contentType: 'json; charset=utf-8',
    success: function(response){
        try {
            console.log(response);
          } catch (err) {
          
            console.log('Error: ', err.message);
          }
   },
  
  error: function(error){
        alert("Error al listar servicios");
        console.log(error);
    }


    });
  

  }); 
});
