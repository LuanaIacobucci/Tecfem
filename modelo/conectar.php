<?php
//Clase para generar una conexion a la BD MySQL de Tecfem
class conectar extends mysqli{
$servername = "localhost";
$username = "root";
$password = "root";



try {
    // Create connection
         $conn = new PDO("mysql:host=$servername;dbname=tecfem", $username, $password);
        // set the PDO error mode to exception
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "DB Connected successfully";

    }catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
     }


  function cerrarConexion(){
      try{
        $conn = null;
      }catch(PDOException $e){
        echo "Connection failed to close: " . $e->getMessage();
      }

      echo "Se desconectó la DB."
  }

}

?>