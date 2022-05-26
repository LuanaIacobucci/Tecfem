///JS pq odio jquery

function esconderopciones() {
    var x = document.getElementById("contenidoModi");
  
      x.style.display = "none";
   
  } 

function mostrarUsuarios() {
    
    var y=document.getElementById("adminserv");
    var z=document.getElementById("cuentadmin");
    var c = document.getElementById("noResult");
    y.style.display = "none";
    z.style.display = "none";

    var x = document.getElementById("cuentasUsr");
    var a = document.getElementById("contenidoModi");
    if (x.style.display === "none") {
      a.style.display = "block";
      x.style.display = "block";
     

      c.style.display=="none";
     
    } else {
      x.style.display = "none";
      a.style.display = "none";
    }
 
   
  } 
  

  function mostrarservicios() {
       
    var y=document.getElementById("cuentasUsr");
    var z=document.getElementById("cuentadmin");
    y.style.display = "none";
    z.style.display = "none";

    var x = document.getElementById("adminserv");
    var a = document.getElementById("contenidoModi");
    if (x.style.display === "none") {
      a.style.display = "block";
      x.style.display = "block";
      var c = document.getElementById("noResult");

      c.style.display=="none";

    } else {
      x.style.display = "none";
      a.style.display = "none";
    }
   
   
  } 

  function mostraradmins() {
    var y=document.getElementById("cuentasUsr");
    var z=document.getElementById("adminserv");
    y.style.display = "none";
    z.style.display = "none";


    var x = document.getElementById("cuentadmin");
var a = document.getElementById("contenidoModi");
if (x.style.display === "none" ) {
  a.style.display = "block";
  x.style.display = "block";

  
} else {
  x.style.display = "none";
  a.style.display = "none";
}



  } 

//Para no mostrar las tablas ni el no rsult hasta que sea apropiado

function contentFirst(){
  
  
}

//Servicios


//Admins




  $(document).ready(function(){
	
    // Activate tooltip
    $('[data-toggle="tooltip"]').tooltip();
        
    // Select/Deselect checkboxes
    var checkbox = $('table tbody input[type="checkbox"]');
    $("#selectAll").click(function(){
        if(this.checked){
            checkbox.each(function(){
                this.checked = true;                        
            });
        } else{
            checkbox.each(function(){
                this.checked = false;                        
            });
        } 
    });
    checkbox.click(function(){
        if(!this.checked){
            $("#selectAll").prop("checked", false);
        }
    });
    
    
    
    });