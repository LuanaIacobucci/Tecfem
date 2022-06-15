<?php

//submit_rating.php

//conexion a la base de datos 
$connect = new PDO("mysql:host=localhost;dbname=rating", "root", "root");

//inicializacion 
if(isset($_POST["rating_data"]))
{
/*
	$data = array(
		':user_name'		=>	$_POST["user_name"],
		':user_rating'		=>	$_POST["rating_data"],
		':user_review'		=>	$_POST["user_review"]/*,
		':datetime'			=>	time() */
	//);
/*
	$query = "INSERT INTO review_table 
	(user_name, user_rating, user_review) 
	VALUES (:user_name, :user_rating, :user_review, :datetime)";

	//ejecucion de Jquery
	$statement = $connect->prepare($query);
    
	//inserta datos en la tabla mysql
	$statement->execute($data);

	echo "Su comentario y calificación a sido agregada con exito";
*/
$user_name=$_POST["user_name"];
$stars_num=$_POST["rating_data"];
$comment=$_POST["user_review"];

$query = "INSERT INTO review_table 
	(user_name, user_rating, user_review) 
	VALUES ('$user_name', '$stars_num','$comment')";


   $statement = $connect->prepare($query);
   $statement->execute();

if($statement){
	echo "Su comentario y calificación a sido agregada con exito";
}else{
	echo "Su comentario y calificación  NO a sido agregada";
}


}

if(isset($_POST["action"]))
{
	//variables 
	$average_rating = 0;
	$total_review = 0;
	$five_star_review = 0;
	$four_star_review = 0;
	$three_star_review = 0;
	$two_star_review = 0;
	$one_star_review = 0;
	$total_user_rating = 0; //almacena total de datos de rating 
	$review_content = array();//variable de reviews/ comentarios 

	// variable de consulta obtendrá los datos de la tabla review_table
	//de forma decendiente  
	$query = " SELECT * FROM review_table 
	ORDER BY review_id DESC ";

  
//para la ejecución y obtencion de consulta 
	$result = $connect->query($query, PDO::FETCH_ASSOC);

	foreach($result as $row)
	{
		$review_content[] = array(
			'user_name'		=>	$row["user_name"],
			'user_review'	=>	$row["user_review"],
			'rating'		=>	$row["user_rating"],
			/*'datetime'		=>	date('l jS, F Y h:mi:s A', $row["datetime"]) */
			
			'datetime'		=>	$row["datetime"]
		);

		if($row["user_rating"] == '5')
		{
			$five_star_review++;
		}

		if($row["user_rating"] == '4')
		{
			$four_star_review++;
		}

		if($row["user_rating"] == '3')
		{
			$three_star_review++;
		}

		if($row["user_rating"] == '2')
		{
			$two_star_review++;
		}

		if($row["user_rating"] == '1')
		{
			$one_star_review++;
		}

		$total_review++;

		$total_user_rating = $total_user_rating + $row["user_rating"];

	}

	$average_rating = $total_user_rating / $total_review;

	$output = array(
		'average_rating'	=>	number_format($average_rating, 1),
		'total_review'		=>	$total_review,
		'five_star_review'	=>	$five_star_review,
		'four_star_review'	=>	$four_star_review,
		'three_star_review'	=>	$three_star_review,
		'two_star_review'	=>	$two_star_review,
		'one_star_review'	=>	$one_star_review,
		'review_data'		=>	$review_content
	);

	echo json_encode($output);

}

?>