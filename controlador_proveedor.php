<?php
 include('modelo\servicio.php');
 include('modelo\proveedora.php');
 include('modelo\conectar.php');
//class controlador_proveedor{
 
  
    //Recibimos peticiones del usuario 
    //Creamos variables de clase servicio, proveedora y un array.

     
    //$proveedora= new proveedora();
     $listaServicios= array();

    //Crear un CRUD para los servicios de cada proveedor


    //Agregar servicio

   
 if(isset($_POST['funcion']) && !empty($_POST['funcion']) && $_POST["funcion"]=="agregar"){

   
    function agregarServicio($nombreServicio, $descripcion,$costo,$categoriaStem){
        session_start();

        $link = mysqli_connect("localhost","root","root","tecfem");
        if (mysqli_connect_errno()) {
            printf("Falló la conexión: %s\n", mysqli_connect_error());
            exit();
        }
        //Validar valores pasados en parámetros
       // var $nomusuaria= $_SESSION['nombreUsuario'];
       $nomusuaria="usuario1"; //solo para pruebas
       $resp;
        if( isset($nomusuaria)){
        if($nombreServicio!=""){
            if($categoriaStem=="Ciencia" || $categoriaStem=="Matematica"|| $categoriaStem=="Tecnologia"||$categoriaStem=="Ingenieria" || $categoriaStem=="Otros"){
                if($costo>0 && $costo!=null){
                    if($descripcion!="" && $descripcion!=null){

                            //Intanciar servicio
                             $nuevoServicio=new servicio($nomusuaria,$nombreServicio,$categoriaStem,$descripcion,$costo,date('dd-mm-yy'));

                            //Generar insert
                            
                         //  $sql="Insert into servicio value('".$nuevoServicio->get_idServicio()."','".$nuevoServicio->get_nombreCuenta()."','".$nuevoServicio->get_nombre()."','".$nuevoServicio->get_descripcion()."','".$nuevoServicio->get_costoPorHora()."','".$nuevoServicio->get_fechaPublicacion()."')";
                          $sql="sELECT * FROM SERVICIO";
                           $result=mysqli_query($link,$sql);

                           //Validar que se insertó
                           if(mysqli_num_rows($result)>0){
                            $resp=true;
                               
                           }else{
                            $resp= false;
                               
                           }

                    
                       

                    }else{$resp="Debe llevar una descripción";}
                }else{$resp="Agregué un costo válido";}
            }else{$resp="Elija una ctagoria";}
         }else{$resp="Ingrese nombre de servicio";}
        }else{$resp="No ha inicado sesión";}

        return $resp;
    }
}
    //Eliminar servicio


    //Modificar Servicio
/*
    //Listar Servicios de proveedor
    if( isset($_GET)){
        function listarServicios(){
           var $nomusuaria= $_SESSION['nombreUsuario'];
           var $usuaria=new proveedora();
         
            
           var $resultado=select("Select * from servicio where nombreUsuario=$nomusuaria");
            if ($resultado->data_seek(0)!=null){
                
                //cerar un for
                for ($i = 0; $i <= mysqli_num_rows($resultado); $i++) {
                    var $servicio=new servicio();
                    $servicio->set_nombreCuenta();
                    $servicio->set_nombre();
                    $servicio->set_categoria();
                    $servicio->get_categoria();
                    $servicio->set_descripcion();
                    $servicio->set_costoPorHora();
                    $servicio->set_fechaPublicacion();

                    //Añadir al array de la usuaria //Lo vamos a mostar
                }
            }else{

            }
        }
    }


//}
*/
?>