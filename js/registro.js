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
  });
