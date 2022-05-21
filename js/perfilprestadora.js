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

});
   
});