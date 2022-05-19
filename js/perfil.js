$(document).ready(function(){

    
        $('#proveedorasfavoritas').hide();
        $('#registroservicios').hide();


        
    $('#provfav').click(function(){

        $('#proveedorasfavoritas').toggle('slow');

    });


    $('#servreg').click(function(){

        $('#registroservicios').toggle('slow');

    });
  
       
  });