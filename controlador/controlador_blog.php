<?php
$conexion = mysqli_connect("localhost", "","", "bd_blog");

$nombreapellido = $_POST["nombreapellido"];
$fecha = $_POST["fecha"];
$acercademi = $_POST["acercademi"];

if(!empty($nombreapellido) || !empty($fecha) || !empty($acercademi)){
    //
    $host ="localhost";
    $dbusername = "root";
    $dbpasword = "";
    $dbname = "blog";
    
    //Conexion con los datos que estan reflejados en la base datos 
    $conn = new mysqli($host, $dbusername, $dbpasword, $dbname);
   //verificacion de error en la ultima conexion y veremos 
   //sifunciona con los datos disponibles con la BD
    if(mysqli_connect_error()){
        die('connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    //ingresar los datos que si lo permiten
    else{

    }

}
else{
    echo "Complete los campos por favor";
    //parA Que el mensaje sea visible

}
//Recibe campo de archivo
//condicion si no hay campo de archivo
if($_FILES["archivo"]){
    //obtencion del nombre del archivo que la usuaria adjuntará
    //y se guardará en la variable 'nombre' 
    $nombre_base = basename($_FILES["archivo"]["name"]);
    //agregar la hora en donde se agrego el archivo adjunto
    // junto al nombre del arvhivo
    $nombre_final = date ("d-m-y"). "-". date("H-i-s"). "-". $nombre_base;
    //
    $insertar = "INSERT INTO bd_blog (nombreapellido, fecha, acercademi, archivo) VALUES ('$nombreapellido', '$fecha' , '$acercademi', '$nombre_final')";

    $resultado = mysqli_query($conexion, $insertarSQL);
    if ($resultado){
        echo "<script> alert('Se ha creado su Blog'); window.location='blog.php'</script>";
    }
    else{//para saber cualquier error que tenga
        printf("Errormessage: %s\n",mysqli_error($conexion));
    }

}


?>