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
  // var $usuaria=$_POST['usur']; 

   agregarServicio($nombre,$descripcion,$costo,$categoria,$conn);

 }


 if(isset($_GET["funcion"]) and $_GET["funcion"]=="listar"){
   // $usuaria=$_GET['usr'];
   echo  listarServicios($conn);
    
 }

    //Crear un CRUD para los servicios de cada proveedor
    //Agregar servicio
    function agregarServicio($nombreServicio, $descripcion,$costo,$categoriaStem,$conn){
        
        //Validar valores pasados en parámetros
       // var $nomusuaria= $_SESSION['nombreUsuario'];
       $nomusuaria="usuario1"; //solo para pruebas
       $resp="";
        if( isset($nomusuaria)){
        if($nombreServicio!=""){
            if($categoriaStem=="ciencia" or $categoriaStem=="matematica" or $categoriaStem=="tecnologia" or $categoriaStem=="ingenieria" or $categoriaStem=="otras"){
                if($costo>0 && $costo!=null){
                    if($descripcion!="" && $descripcion!=null){

                            //Intanciar servicio
                             $nuevoServicio=new servicio($nomusuaria,$nombreServicio,$categoriaStem,$descripcion,$costo,date('d-m-y'));
                            
                            //Generar insert
                            // $id=$nuevoServicio->generarIdServicio($conn);
                             $fecha=$nuevoServicio->get_fechaPublicacion();
                            
                        $sql="INSERT INTO `servicio`(`nombreUsuario`, `nombre`, `descripcion`, `costo`, `fechaPublicacion`, `categoria`) VALUES ('$nomusuaria','$nombreServicio','$descripcion','$costo','$fecha','$categoriaStem')";
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
 function eliminarSerivico($id){

}

//Modificar Servicio
function modificarSerivico($id){    
}


//Listar Servicios de proveedor
    function listarServicios($conn){
  // $nomusuaria= $_SESSION['nombreUsuario'];
    $nomusuaria= "usuario1";
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

?>