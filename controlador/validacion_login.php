<?php
include "conectar.php";

if(isset($_POST['btngrande'])){

    $user = mysqli_real_escape_string($con,$_POST['nombreUsuario']);
    $password = mysqli_real_escape_string($con,$_POST['contrasena']);

    if ($user != "" && $password != ""){

        $sql_query = "select count(*) from cliente where nombreUsuario='".$user."' and contrasena='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['nombreUsuario'] = $ser;
            header('Location: index.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>