<?php
 include('modelo\servicio.php');
 include('modelo\proveedora.php');
 include('modelo\conectar.php');
//class controlador_proveedor{
 
  
/* Para llamar a cada método desde ajax vamos a pasar un parametro llamado funcion=agregar
si esta setteada y es iguala a gergar va a llmara a la sotras variables desde ajax con post. Va a llmamar al método 
pasandole los nuevos valores */

 var $funcion=$_POST['funcion'];

 $method = $_SERVER['REQUEST_METHOD'];
//$request = explode("/", substr(@$_SERVER['PATH_INFO'], 1));

switch ($method) {
  case 'PUT':
    modificarSerivico();
    break;

  case 'POST':
    var $nombre=$_POST['nom'];
    var $descripcion=$_POST['desc'];
    var $costo=$_POST['cost'];
    var $categoria=$_POST['cate'];
   // var $usuaria=$_POST['usur']; 

   agregarServicio($nombre,$descripcion,$costo,$categoriaStem);
    break;

  case 'GET':
    listarServicios();
    break;

    case 'DELETE':
        eliminarServicios();
        break;
  default:
    handle_error($request);  
    break;
}

    //Crear un CRUD para los servicios de cada proveedor


    //Agregar servicio

    function agregarServicio($nombreServicio, $descripcion,$costo,$categoriaStem){
        session_start();
        //Validar valores pasados en parámetros
       // var $nomusuaria= $_SESSION['nombreUsuario'];
       $nomusuaria="usuario1"; //solo para pruebas
       $resp;
        if( isset($nomusuaria)){
        if($nombreServicio!=""){
            if($categoriaStem=="Ciencia" or $categoriaStem=="Matematica" or $categoriaStem=="Tecnologia" or $categoriaStem=="Ingenieria" or $categoriaStem=="Otras"){
                if($costo>0 && $costo!=null){
                    if($descripcion!="" && $descripcion!=null){

                            //Intanciar servicio
                             $nuevoServicio=new servicio($nomusuaria,$nombreServicio,$categoriaStem,$descripcion,$costo,date('dd-mm-yy'));
                            
                            //Generar insert
                            var $id=$nuevoServicio->get_idServicio();
                            var $fecha=$nuevoServicio->get_fechaPublicacion();
                            
                        $sql="INSERT INTO servicio  VALUES ($id,'$nomusuaria','$nombre','$descripcion',$costo,'$fecha','$categoriaStem')";
                       // $result=mysqli_query($link,$sql);
                       $conn = mysqli_connect("localhost","root","root","tecfem");
                
                                if (!$conn) {
                                    die("Connection failed: " . mysqli_connect_error());
                            }
                            
                            echo "Connected successfully";
                            
                           
                            if (mysqli_query($conn, $sql)) {
                                    echo "New record created successfully";
                                    $resp="Insertado."
                            } else {
                                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                                    $resp="No insertado".
                            }
                            mysqli_close($conn);

                    }else{$resp="Debe llevar una descripción";}
                }else{$resp="Agregué un costo válido";}
            }else{$resp="Elija una ctagoria";}
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
   
        function listarServicios(){
            $conn = mysqli_connect("localhost","root","root","tecfem");
                
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
        }
        
        echo "Connected successfully";




           var $nomusuaria= $_SESSION['nombreUsuario'];
          
            $listaServicios=array();
            
           var $resultado=select("Select * from servicio where nombreUsuario=$nomusuaria");
            if ($resultado->data_seek(0)!=null){
                
                //cerar un for
                for ($i = 0; $i <= mysqli_num_rows($resultado); $i++) {


                    while($row = mysql_fetch_array($resultado, MYSQL_ASSOC)) {
                                             
                    var $servicio=new servicio();
                    $servicio->set_nombreCuenta($row[1]);
                    $servicio->set_nombre($row[2]);
                    $servicio->set_categoria($row[6]);
                    $servicio->set_descripcion($row[3]);
                    $servicio->set_costoPorHora($row[4]);
                    $servicio->set_fechaPublicacion($row[5]);

                    //Añadir al array de la usuaria //Lo vamos a mostar
                    $listaServicios[]=$servicio;
                    $servicio=null;
                }
             }
            }else{
                echo "No se hallaron datos."
            }

            return $listaServicios;
        }
    


//}

?>