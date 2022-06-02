<?php
 //include("../modelo/servicio.php");
 include('../modelo/proveedora.php');
 include('../modelo/db.php');

session_start();

/**CRUD para lista de proveedores favoritos */

if (isset($_POST["funcion"]) and $_POST["funcion"]=="agregarP"){
    $nombre=$_POST['nom'];
   agregarProveedoresFavoritos($nombre);

 }


 if(isset($_GET["funcion"]) and $_GET["funcion"]=="listarP"){
   // $usuaria=$_GET['usr'];
   echo  listarProveedoresFavoritos($conn);
    
 }


 if(isset($_POST["funcion"]) and $_POST["funcion"]=="eliminarP"){
    // $usuaria=$_GET['usr'];
    $nomUsuaria=$_POST['cliente'];
    $nombreProveedor=$_POST['proveedor'];
    echo  eliminarProveedoresFavoritos($nomUsuaria, $nombreProveedor);
     
  }

 
    function agregarProveedoresFavoritos($nombreProveedor){
        
       // var $nomusuaria= $_SESSION['nombreUsuario'];
       $nomusuaria="usuario1"; //solo para pruebas
       $resp="";
                                            
     $sql="INSERT INTO `proveedoresfavoritos`(`nombreUsuarioCliente`, `nombreUsuarioProveedor`) VALUES ('$nomusuaria','$nombreProveedor')";
                                                  
                           
                            if (mysqli_query($conn, $sql)) {
                                  
                                    $resp="Insertado.";
                            } else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                    $resp="No insertado";
                            }
                           
               
        return $resp;
    }


 function eliminarProveedoresFavoritos($nomUsuaria, $nombreProveedor){
    $sql="DELETE FROM `proveedoresfavoritos` WHERE nombreUsuarioCliente='$nomUsuaria' and nombreUsuarioProveedor='$nombreProveedor'";
                               
        
         if (mysqli_query($conn, $sql)) {
               
                 $respu="Eliminado.";
         } else {
                 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                 $respu="No Eliminado";
         }

         return $respu;
}

 function listarProveedoresFavoritos($conn){
  // $nomusuaria= $_SESSION['nombreUsuario'];
    $nomusuaria= "usuario1";
    $listaServicios=array();
    $sql="SELECT * FROM `proveedoresfavoritos` WHERE  nombreUsuario='$nomusuaria'";
    $resultado=mysqli_query($conn,$sql);
        if ($resultado->num_rows!=0){
            while($row =mysqli_fetch_assoc($resultado)){
                $listaProveedoras[]=$row;
            }

        }

        return json_encode($listaServicios);
}


/***Crud de servicios favoritos */

if (isset($_POST["funcion"]) and $_POST["funcion"]=="agregarS"){
    $idServicio=$_POST['id'];
   agregarServicioFavoritos($idServicio);

 }


 if(isset($_GET["funcion"]) and $_GET["funcion"]=="listarS"){
   // $usuaria=$_GET['usr'];
   echo  listarServicioFavoritos($conn);
    
 }


 if(isset($_POST["funcion"]) and $_POST["funcion"]=="eliminarS"){
    // $usuaria=$_GET['usr'];
    $nomUsuaria=$_POST['cliente'];
    $idservicio=$_POST['servicio'];
    echo  eliminarServicioFavoritos($nomUsuaria, $idservicio);
     
  }

  
 
    function agregarServicioFavoritos($idServicio){
        
       // var $nomusuaria= $_SESSION['nombreUsuario'];
       $nomusuaria="usuario1"; //solo para pruebas
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


 function eliminarServicioFavoritos($nomUsuaria, $idServicio){
    $sql="DELETE FROM `serviciosfavoritos` WHERE nombreUsuarioCliente='$nomUsuaria' and idServicio='$idServicio'";
                               
        
         if (mysqli_query($conn, $sql)) {
               
                 $respu="Eliminado.";
         } else {
                 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                 $respu="No Eliminado";
         }

         return $respu;
}

 function listarServicioFavoritos($conn){
  // $nomusuaria= $_SESSION['nombreUsuario'];
    $nomusuaria= "usuario1";
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