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


//Codigo esconder cajas

    $('#contenidoModi').hide();
    $('#cuentausr').hide();
    $('#adminserv').hide();
    $('#cuentasadmin').hide();

    //ADMIN USUARIAS 
$('.accion1').click(function(){
    $('#contenidoModi').toggle();

    $('#cuentausr').show();
    $('#adminserv').hide();
    //si aun no hace busqueda esocncdr el de no respuesta
    $('#noResult').hide();
    

    $('#cuentasadmin').hide();

});

//ADMIN SERIVICIOS
$('.accion2').click(function(){
    $('#contenidoModi').toggle();
    $('#contenidoModi').show();
    $('#cuentausr').hide();

    $('#adminserv').show();
    
    //si aun no hace busqueda esocncdr el de no respuesta
    $('#noResult').hide();
    
    $('#cuentasadmin').hide();

});


//CERAR CUENTAS ADMIN 
$('.accion3').click(function(){
    $('#contenidoModi').toggle();

    $('#cuentausr').hide();


    $('#adminserv').hide();

    $('#cuentaadmin').show();
    

});



});