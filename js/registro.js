function TipoCuenta() {
  var x = document.getElementById("tipocuenta");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function DatosPersonales() {
  var x = document.getElementById("datospersonales");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function Servicios() {
  var x = document.getElementById("servicios");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
  
  $(document).ready(function(){
    $('[data-toggle="popover"]').popover();
  


  $('#finishRegistro').click(function(){
alert("wenas");
    //Capturamos valores
          //Falta validarlos!!!!!
          let nombreUsuario=$('#nombreUsuario').val();
          let contrasenna=$('#contrasena').val(); 
          let tipo=$("input[name='tipocuenta']:checked").val();
          let nombre=$('#nombre').val();
          let apellido=$('#apellido').val();
  $.ajax({
    url:"controlador\\controlador_cliente.php",
    method: 'POST',
    data: {funcion: 'registrarse',nombreusuario:nombreUsuario, contrasena: contrasenna, tipoUsuario:tipo, nombre:nombre,apellido:apellido},
    contentType: 'json; charset=utf-8',
    success: function(response){
        try {
            alert("Agregado "+response);
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
