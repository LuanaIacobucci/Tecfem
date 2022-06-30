<!DOCTYPE HTML>
<html lang="es" >
<head>
    <meta charset="utf-8" />
  
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
    	<h1 class="mt-5 mb-5" id="=reseñas">Reseñas</h1>
    	<div class="card">
    		<div class="card-header">Calificación</div>
    		<div class="card-body">
    			<div class="row">
    				<div class="col-sm-4 text-center">
    					<h1 class="text-warning mt-4 mb-4">
    						<b><span id="avarage_rating">0.0</span> / 5</b>
    					</h1>
    					<div class="mb-3"> <!---Se mostrará las 5 estrellas en color gris --------->
    						<i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
	    				</div>
    					<h3><span id="total_review"> 0 </span> Comentarios </h3>
    				</div>
    				<div class="col-sm-4"> <!---Se verá el rango de las estrellas ded forma vertical------->
    					<p>
                            <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>
                            <!---text-warning es para darle el color amarillo--->
                            <!----la clase que tendrá span (total_five_star_review se crará dinamicamente el promedio de las estrellas en el lado derecho) -------->
                            <!----se desplegará el total de los rango dinamicamente usando ajax jquery  -------->
                            <!------------->
                            <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                            <div class="progress">
                                <!-----Con la clases progresbar se podra hacer un promedio progresivo dependiendo de las cantidad de estrellas-------->
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                            </div>
                        </p>
    					<p>
                            <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                            <!-----En en ID de span va cambiando el valor decendientemente , ahora será 4 estrellas-------->
                            <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                             <!-----En en ID de span va cambiando el valor decendientemente , ahora será 3 estrellas-------->
                            <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                             <!-----En en ID de span va cambiando el valor decendientemente , ahora será 2 estrellas-------->
                            <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                            </div>               
                        </p>
    					<p>
                            <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>
                             <!-----En en ID de span va cambiando el valor decendientemente , ahora será 1 estrellas-------->
                            <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                            </div>               
                        </p>
    				</div>
                    <!----Fin de la columna de calificación de estrellas------>


                     <!----Inicio Columna para la creración de agregar comnetario/reseña --------->
    				<div class="col-sm-4 text-center">
    					<h3 class="mt-4 mb-3">Comentar</h3>
    					<button type="button" name="add_review" id="add_review" class="btn btn-primary">Agregar</button>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="mt-5" id="review_content"></div>
    </div>
</body>
</html>

<!-----Creación de Modal para agregar comentario + la puntuación de 5 estrellas------------------------>
<div id="review_modal" class="modal" tabindex="-1" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title">Enviar Reseña</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>  <!----Creacion de "X" para cerrar Modal--------->
	        	</button>
	      	</div>


               <!----Al ingresar al Modal se podran ver Cant. de estrellas para elejir y agregar Nombre y Comentario--------->
	      	<div class="modal-body">
	      		<h4 class="text-center mt-2 mb-4">
	        		<i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        	</h4>
	        	<div class="form-group">
	        		<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Escriba su Nombre" />
	        	</div>
	        	<div class="form-group">
	        		<textarea name="user_review" id="user_review" class="form-control" placeholder="Escriba Comentario"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		<button type="button" class="btn btn-primary" id="save_review">Listo</button>
	        	</div>
	      	</div>

               <!-------Fin de la Modal--------->
    	</div>
  	</div>
</div>

<!----------CSS---------->
<style> 
.progress-label-left
{
    float: left;
    margin-right: 0.5em;
    line-height: 1em;
}
.progress-label-right
{
    float: right;
    margin-left: 0.3em;
    line-height: 1em;
}
.star-light
{
	color:#e9ecef;
}
</style>

<!----FIN DE CSS----->

<script>

$(document).ready(function(){

	var rating_data = 0;

//Cuando la usuaria de click al boton se ejecutará
    $('#add_review').click(function(){

 //Se abrira y se mostrará el modal cuando la usuaria haga click en el boton Agregar
        $('#review_modal').modal('show');

    });
//Las estrellas que se encuentran en del modal cambie de color al pasar 
//el mouse arriba de ellas.
    $(document).on('mouseenter', '.submit_star', function(){

        var rating = $(this).data('rating');

        reset_background();

//se incrementará la calificación a uno cada ves. 
        for(var count = 1; count <= rating; count++)
        {
//mediante esta variable se cambiara de color las estrellas en la modal al elegirlas
            $('#submit_star_'+count).addClass('text-warning');

        }

    });

//en el caso de que queremos devolver el mouse y se muestre las estrellas grises y no marcadas  
    function reset_background()
    {
        //condicion para decrementación = contar hacia atrás
        for(var count = 1; count <= 5; count++)
        {
            //loop....agregar una estrella elegida
            $('#submit_star_'+count).addClass('star-light');

            //eleminar estrella 
            $('#submit_star_'+count).removeClass('text-warning');

        }
    }


//funcion para devolver el valor / cambiar valor 
    $(document).on('mouseleave', '.submit_star', function(){

        reset_background();

        for(var count = 1; count <= rating_data; count++)
        {

            $('#submit_star_'+count).removeClass('star-light');

            $('#submit_star_'+count).addClass('text-warning');
        }

    });


//metodo para que el usuario al hacer click en las estrellas del modal
//quede guardada 
    $(document).on('click', '.submit_star', function(){

//
        rating_data = $(this).data('rating');

    });

//Evento en el cual la usuaria hacr click en el boton "Listo"
//se guardará los datos de la usuaria
$('#save_review').click(function(){

//Variables del nombre de la usuaria y comentario
        var user_name = $('#user_name').val();

        var user_review = $('#user_review').val();

        //si la usuaria no ha escrito en los dos campos se le 
        //mostrará este mensaje 
        if(user_name == '' || user_review == '')
        {
            alert("Por Favor complete los campos vacíos");
            return false;
        }

        // Y si se cumple la condición los datos se guardaran 
        //en otra carpeta 
        else
        {
            $.ajax({
                url:"submit_rating.php",
                method:"POST",
                data:{rating_data:rating_data, user_name:user_name, user_review:user_review},
                success:function(data)
                {
                    $('#review_modal').modal('hide');

                    load_rating_data();

                    alert(data);
                }
            })
        }

    });


    //funcion para guardar informacion sin perderla
    //funsion de datos de calificacion de carga
    load_rating_data();

    //bajo esta funcion comienza a escribir la solicitud de ajax
    //para obtener los datos de la BD
    function load_rating_data()
    {

        $.ajax({
            url:"submit_rating.php",
            method:"POST",
            data:{action:'load_data'}, //datos que le enviaremos al servidor
            dataType:"JSON", //ajax recibira los datos de forma JSON
            success:function(data) //

            
            {
                $('#average_rating').text(data.average_rating);
                $('#total_review').text(data.total_review);

                var count_star = 0;

                $('.main_star').each(function(){
                    count_star++;
                    if(Math.ceil(data.average_rating) >= count_star)
                    {
                        $(this).addClass('text-warning');
                        $(this).addClass('star-light');
                    }
                });

                $('#total_five_star_review').text(data.five_star_review);

                $('#total_four_star_review').text(data.four_star_review);

                $('#total_three_star_review').text(data.three_star_review);

                $('#total_two_star_review').text(data.two_star_review);

                $('#total_one_star_review').text(data.one_star_review);

                $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');

                $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');

                $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');

                $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');

                $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');

                if(data.review_data.length > 0)
                {
                    var html = '';

                    for(var count = 0; count < data.review_data.length; count++)
                    {
                        html += '<div class="row mb-3">';

                        html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';

                        html += '<div class="col-sm-11">';

                        html += '<div class="card">';

                        html += '<div class="card-header"><b>'+data.review_data[count].user_name+'</b></div>';

                        html += '<div class="card-body">';

                        for(var star = 1; star <= 5; star++)
                        {
                            var class_name = '';

                            if(data.review_data[count].rating >= star)
                            {
                                class_name = 'text-warning';
                            }
                            else
                            {
                                class_name = 'star-light';
                            }

                            html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                        }

                        html += '<br />';

                        html += data.review_data[count].user_review;

                        html += '</div>';

                        html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';

                        html += '</div>';

                        html += '</div>';

                        html += '</div>';
                    }

                    $('#review_content').html(html);
                }
            }
        })
    }

});

</script>