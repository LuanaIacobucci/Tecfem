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



///JS pq odio jquery

function esconderopciones() {
    var x = document.getElementById("contenidoModi");
  
      x.style.display = "block";
   
  } 

function mostrarUsuarios() {
    var x = document.getElementById("myDIV");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  } 