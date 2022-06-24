<?php
 //include("../modelo/servicio.php");
 include('../modelo/proveedora.php');
 include('../modelo/db.php');

session_start();

//Crear una nueva usuaria--> Registro
if (isset($_POST["funcion"]) and $_POST["funcion"]=="registrarse"){
        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        $tipoCuenta=$_POST['tipoUsuario'];
        $pass=$_POST['contrasena'];
        $nombreUsario=$_POST['nombreusuario'];
       

       crearcuenta($nombreUsario,$conn, $pass, $tipoCuenta, $nombre, $apellido);
    
     }

     function crearcuenta($nombreUsario,$conn, $pass, $tipoCuenta, $nombre, $apellido){
        $resp="";
                                            
        $sql="INSERT INTO `cliente`(`nombreUsuario`, `nombre`, `apellido`, `contrasena`) VALUES ('$nombreUsario','$nombre','$apellido','$pass')";
                                                     
                              
                               if (mysqli_query($conn, $sql)) {
                                     
                                       $resp="Insertado.";

                                       $sql2="INSERT INTO `tipocuenta`(`nombreUsuario`, `tipoDeCuenta`) VALUES ('$nombreUsario','$tipoCuenta')";
                                       if (mysqli_query($conn, $sql2)) {
                                        $resp="Insertado completo.";
                                       }else{
                                        $resp="Insertado incompleto.";
                                       }
                               } else {
                                      
                                       $resp="No insertado";
                               }
                              
                  
           return $resp;
     }
    

/**CRUD para lista de proveedores favoritos */

if (isset($_POST["funcion"]) and $_POST["funcion"]=="agregarP"){
    $nombre=$_POST['nom'];
    $nomusuaria= $_SESSION['nombreUsuario'];
   agregarProveedoresFavoritos($nombre,$conn, $nomusuaria);

 }

 if (isset($_POST["funcion"]) and $_POST["funcion"]=="irBlog"){
        $nombre=$_POST['nombreUsuario'];

        //header("Location:..\blog.php");
        Header("Location: ..\blog.php?user=".$nombre); //Redirecciona pasando el usuario
        //Así debemos capturar en el blog
        //$user = $_REQUEST['user'];
    
     }


 if(isset($_GET["funcion"]) and $_GET["funcion"]=="listarP"){
   // $usuaria=$_GET['usr'];
   $nomusuaria= $_SESSION['nombreUsuario'];
   echo  listarProveedoresFavoritos($conn,$nomusuaria);
    
 }


 if(isset($_POST["funcion"]) and $_POST["funcion"]=="eliminarP"){
    // $usuaria=$_GET['usr'];
    $nomUsuaria=$_SESSION['nombreUsuario'];
    $nombreProveedor=$_POST['nombre'];
    echo  eliminarProveedoresFavoritos($conn,$nomUsuaria, $nombreProveedor);
     
  }

 
    function agregarProveedoresFavoritos($nombreProveedor,$conn,$nomusuaria){
    
       $resp="";
                                            
     $sql="INSERT INTO `proveedoresfavoritos`(`nombreUsuarioCliente`, `nombreUsuarioProveedor`) VALUES ('$nomusuaria','$nombreProveedor')";
                                                  
                           
                            if (mysqli_query($conn, $sql)) {
                                  
                                    $resp="Insertado.";
                            } else {
                                   
                                    $resp="No insertado";
                            }
                           
               
        return $resp;
    }


 function eliminarProveedoresFavoritos($conn,$nomUsuaria, $nombreProveedor){
    $sql="DELETE FROM `proveedoresfavoritos` WHERE nombreUsuarioCliente='$nomUsuaria' and nombreUsuarioProveedor='$nombreProveedor'";
                               
        
         if (mysqli_query($conn,$sql)) {
               
                 $respu="Eliminado.";
         } else {
                 
                 $respu="No Eliminado";
         }

         return $respu;
}

 function listarProveedoresFavoritos($conn,  $nomusuaria){
  
   
    $listaProveedoras=array();
    
   $sql="SELECT cliente.nombre, cliente.apellido, cliente.nombreUsuario FROM `cliente` CROSS JOIN `proveedoresfavoritos` ON cliente.nombreUsuario=proveedoresfavoritos.nombreUsuarioProveedor WHERE  proveedoresfavoritos.nombreUsuarioCliente='$nomusuaria'";
    $resultado=mysqli_query($conn,$sql);
        if ($resultado){
            while($row =mysqli_fetch_assoc($resultado)){
                $listaProveedoras[]=$row;
            }

        }

        return json_encode($listaProveedoras);
}


/***Crud de servicios favoritos */

if (isset($_POST["funcion"]) and $_POST["funcion"]=="agregarS"){
    $idServicio=$_POST['id'];
    $nomusuaria= $_SESSION['nombreUsuario'];
   agregarServicioFavoritos($idServicio,$conn, $nomusuaria);

 }


 if(isset($_GET["funcion"]) and $_GET["funcion"]=="listarS"){
  
   $nomusuaria= $_SESSION['nombreUsuario'];
   echo  listarServicioFavoritos($conn, $nomusuaria);
    
 }


 if(isset($_POST["funcion"]) and $_POST["funcion"]=="eliminarS"){
   $nomusuaria= $_SESSION['nombreUsuario'];
    $idservicio=$_POST['servicio'];
    echo  eliminarServicioFavoritos($nomusuaria, $idservicio, $conn);
     
  }

  
 
    function agregarServicioFavoritos($idServicio,$conn, $nomusuaria){
        $resp="";
                                            
     $sql="INSERT INTO `serviciosfavoritos`(`nombreUsuarioCliente`, `idServicio`) VALUES ('$nomusuaria','$idServicio')";
                                                  
                           
                            if (mysqli_query($conn, $sql)) {
                                  
                                    $resp="Insertado.";
                            } else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                    $resp="No insertado";
                            }
                           
               
        return $resp;
    }


 function eliminarServicioFavoritos($nomUsuaria, $idServicio, $conn){
    $sql="DELETE FROM `serviciosfavoritos` WHERE nombreUsuarioCliente='$nomUsuaria' and idServicio='$idServicio'";
                               
        
         if (mysqli_query($conn, $sql)) {
               
                 $respu="Eliminado.";
         } else {
                 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                 $respu="No Eliminado";
         }

         return $respu;
}

 function listarServicioFavoritos($conn, $nomusuaria){

    $listaServicios=array();
    $sql="SELECT * FROM `serviciosfavoritos` WHERE nombreUsuario='$nomusuaria'";
    $resultado=mysqli_query($conn,$sql);
        if ($resultado->num_rows!=0){
            while($row =mysqli_fetch_assoc($resultado)){
                $listaProveedoras[]=$row;
            }

        }

        return json_encode($listaServicios);
}

?>