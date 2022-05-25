<?php

class controlador_proveedor{
  include('modelo\servicio.php');
  include('modelo\proveedora.php');
  include('modelo\conectar.php');
  
    //Recibimos peticiones del usuario 
    //Creamos variables de clase servicio, proveedora y un array.

    $servicio= new servicio();
    //$proveedora= new proveedora();
    $listaServicios= array();

    //Crear un CRUD para los servicios de cada proveedor


    //Agregar servicio
if(isset($_POST)){
   
    function agregarServicio($nombreServicio, $descripcion,$costo,$categoriaStem){
        //Validar valores pasados en parámetros
        if($nombreServicio!=""){
            if($categoriaStem=="Ciencia" || $categoriaStem=="Matematica"|| $categoriaStem=="Tecnologia"||$categoriaStem=="Ingenieria" || $categoriaStem=="Otros"){
                if($costo>0 && $costo!=null){
                    if($descripcion!="" && $descripcion!=null){

                        //Capturamos usuaria loggeada
                        var $usuaria=$_SESSION['nombreUsuario'];
                        if(!empty($usuaria)){

                            //Intanciar servicio
                            var $nuevoServicio=new servicio($usuaria,$nombreServicio,$categoriaStem,$descripcion,$costo);

                            //Generar insert
                            
                           $sql="Insert into servicio value('"$nuevoServicio->get_idServicio()"','"$nuevoServicio->get_nombreCuenta()"','"$nuevoServicio->get_nombre()"','"$nuevoServicio->get_descripcion()"','"$nuevoServicio->get_costoPorHora()"','"$nuevoServicio->get_fechaPublicacion()"')";
                        
                           $result=mysqli_query( $conn,$sql);

                           //Validar que se insertó
                           if($result){
                               return true;
                           }else{
                               return false;
                           }

                        }
                       

                    }
                }
            }
        }

        


        return ;
    }
}
    //Eliminar servicio


    //Modificar Servicio

    //Listar Servicios de proveedor
    if( isset($_GET)){
        function listarServicios(){
           var $usuaria= $_SESSION['nombreUsuario'];

           var $resultado=select("Select * from servicio where nombreUsuario=$usuaria",$usuaria);
            if (isset($resultado)){
                
                return echo "success";
            }
        }
    }


}

?>