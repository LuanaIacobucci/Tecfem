<?php
 include("../modelo/servicio.php");
 include('../modelo/proveedora.php');
 include('../modelo/db.php');

 
//class controlador_proveedor{
    session_start();
   
/* Para llamar a cada método desde ajax vamos a pasar un parametro llamado funcion=agregar
si esta setteada y es iguala a gergar va a llmara a la sotras variables desde ajax con post. Va a llmamar al método 
pasandole los nuevos valores */

if (isset($_POST["funcion"]) and $_POST["funcion"]=="agregar"){
    $nombre=$_POST['nom'];
    $descripcion=$_POST['desc'];
    $costo=$_POST['cost'];
    $categoria=$_POST['cate'];
    $usuaria=$_SESSION['nombreUsuario']; 
 

        $id=0;
      $validacion=false;
      while($validacion==false){
      $ids=rand(10,99);
     
      //Validamos que este ID no exista

      $sqlt = "SELECT `idServicio` FROM `servicio` WHERE  idServicio='$id'"; //Crear sentencia sql
 
      
      $resultadot = mysqli_query($conn, $sqlt); //Ejecutar query
        $rowst=mysqli_num_rows($resultadot);
      if($rowst==0){
        //SI devuelve cero filas es un id unico
        $id=$ids;
        $validacion=true;
        break;
        }
      }
       
   echo agregarServicio($id,$usuaria,$nombre,$descripcion,$costo,$categoria,$conn);

 }

 if (isset($_POST["funcion"]) and $_POST["funcion"]=="editar"){
    $nombre=$_POST['nom'];
    $descripcion=$_POST['desc'];
    $costo=$_POST['cost'];
    $categoria=$_POST['cate'];
  // var $usuaria=$_POST['usur']; 
    $id=$_POST['id'];
    echo modificarServicio($id,$nombre,$descripcion,$costo,$categoria,$conn);

 }


 if(isset($_GET["funcion"]) and $_GET["funcion"]=="listar"){
   // $usuaria=$_GET['usr'];
   $nomusuaria=$_SESSION['nombreUsuario']; 
   echo  listarServicios($conn,$nomusuaria);
    
 }


 if(isset($_POST["funcion"]) and $_POST["funcion"]=="eliminar"){
    // $usuaria=$_GET['usr'];
    $id=$_POST['id'];
    echo  eliminarServicio($conn,$id);
     
  }

  
    //Crear un CRUD para los servicios de cada proveedor
    //Agregar servicio
    function agregarServicio($id,$usuaria,$nombreServicio, $descripcion,$costo,$categoriaStem,$conn){
        
        //Validar valores pasados en parámetros
       // var $nomusuaria= $_SESSION['nombreUsuario'];
     
       $resp="";
        if( isset($usuaria)){
        if($nombreServicio!=""){
            if($categoriaStem=="ciencia" or $categoriaStem=="matematicas" or $categoriaStem=="tecnologia" or $categoriaStem=="ingenieria" or $categoriaStem=="otra"){
                if($costo>0 && $costo!=null){
                    if($descripcion!="" && $descripcion!=null){

                            //Intanciar servicio
                             $nuevoServicio=new servicio($usuaria,$nombreServicio,$categoriaStem,$descripcion,$costo,date('Y-m-d'));
                            
                            //Generar insert
                                          
                          $fecha=$nuevoServicio->get_fechaPublicacion();
                        
                       $sql="INSERT INTO `servicio`(`idServicio`, `nombreUsuario`, `nombre`, `descripcion`, `costo`, `fechaPublicacion`, `categoria`) VALUES('$id','$usuaria','$nombreServicio','$descripcion','$costo','$fecha','$categoriaStem')";
                       // $result=mysqli_query($link,$sql);
                                                  
                           
                            if (mysqli_query($conn, $sql)) {
                                  
                                    $resp="Insertado.";
                            } else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                    $resp="No insertado";
                            }
                           
                    }else{$resp="Debe llevar una descripción";}
                }else{$resp="Agregué un costo válido";}
            }else{$resp="Elija una categoría";}
         }else{$resp="Ingrese nombre de servicio";}
        }else{$resp="No ha inicado sesión";}

        return $resp;
    }

 //Eliminar servicio
 function eliminarServicio($conn,$id){
    $sql="DELETE FROM `servicio` WHERE idServicio='$id'";
                               
        
         if (mysqli_query($conn, $sql)) {
               
                 $respu="Eliminado.";
         } else {
                 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                 $respu="No Eliminado";
         }

         return $respu;
}

//Modificar Servicio
function modificarServicio($id,$nombre,$descripcion,$costo,$categoria,$conn){  
//Falta validar
    $sql="UPDATE `servicio` SET `nombre`='$nombre',`descripcion`='$descripcion',`costo`='$costo',`categoria`='$categoria' WHERE idServicio='$id'";

    if (mysqli_query($conn, $sql)) {
               
            $respu="Editado.";
    } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            $respu="No editado.";
    }

return $respu;

}


//Listar Servicios de proveedor
    function listarServicios($conn,$nomusuaria){
  // $nomusuaria= $_SESSION['nombreUsuario'];
    
    $listaServicios=array();
    $sql="SELECT `idServicio`, `nombreUsuario`, `nombre`, `descripcion`, `costo`, `fechaPublicacion`, `categoria` FROM `servicio` WHERE nombreUsuario='$nomusuaria'";
    $resultado=mysqli_query($conn,$sql);
        if ($resultado->num_rows!=0){
            while($row =mysqli_fetch_assoc($resultado)){
                $listaServicios[]=$row;
            }

        }

        return json_encode($listaServicios);
}



//}

function generarIdServicio($conn){
   
    $id=0;
      $validacion=false;
      do{
      $id=rand(100000000,999999999);
      //Validamos que este ID no exista

      $sql = "SELECT `idServicio` FROM `servicio` WHERE  idServicio='$id'"; //Crear sentencia sql

      
      $resultado = mysqli_query($conn, $sql); //Ejecutar query

      if($resultado->num_rows==0 and $id!=0){
        //SI devuelve cero filas es un id unico
        $validacion==true;
       
      }

      }while($validacion==false);
      echo $id;
  }

?>