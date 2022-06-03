<?php 
include('../modelo/db.php');
class servicio {
  public $idServicio; //int 10
  public $nombreCuenta; //fk del proveedor
  public $nombre; //string nombre servicio
  public $categoria; //enum categoria_stem
  public $descripcion; //string
  public $costoPorHora; //int
  public $calificaciones=[]; //array de objeto de calificaciones
  public $fechaPublicacion; //date

  //Constructores
  function __construct($nombreCuenta, $nombre, $categoria,$descripcion,$costoPorHora,  $fechaPublicacion) {
    //Mas adelante podemos dejarle que suab un archivo
    //$this->idServicio =$idServicio;
    $this->nombreCuenta = $nombreCuenta; 
    $this->nombre = $nombre;
    $this->categoria = $categoria;
    $this->descripcion = $descripcion;
    $this->costoPorHora = $costoPorHora;
    $this->fechaPublicacion =  $fechaPublicacion; 
  }
           
  //Destructor
  function __destruct() {
   //Agregar codigo
  }

  //Getter y setter

 
 function set_idServicio($idServicio) {
  $this->idServicio = $idServicio;
}
  function get_idServicio() {
    return $this->idServicio;
  }

  function set_nombreCuenta($nombreCuenta) {
    $this->nombreCuenta = $nombreCuenta;
  }
    function get_nombreCuenta() {
    return $this->nombreCuenta;
  }

  function set_nombre($nombre) {
    $this->nombre = $nombre;
  }


  function get_nombre() {
    return $this->nombre;
  }

  function set_categoria($categoria) {
    $this->categoria = $categoria;
  }


  function get_categoria() {
    return $this->categoria;
  }

  function set_descripcion($descripcion) {
    $this->descripcion = $descripcion;
  }


  function get_descripcion() {
    return $this->descripcion;
  }

  function set_costoPorHora($costoPorHora) {
    $this->costoPorHora = $costoPorHora;
  }


  function get_costoPorHora() {
    return $this->costoPorHora;
  }

  function add_calificaciones($calificacion) {

    //metodo donde se agrega al array una calificación
    $resp=false; //Validamos si se agrega

    $calificaciones=array($calificacion); //Agregamos
  
    foreach($calificaciones as $valor){ 
      $posiarr=0;
        if ($valor->get_idCalificacion() == $calificaciones[$posiarr]->get_idCalificacion()){ //Si existe??
         $resp=true;
         $posiarr++;
         break;
        }
     }
        
     return $resp;
}



  function get_calificaciones() {
    return $this->calificaciones;
  }

 
 function set_fechaPublicacion($fechaPublicacion) {
  $this->fechaPublicacion = $fechaPublicacion;
}
  function get_fechaPublicacion() {
    return $this->fechaPublicacion;
  }

 
  //Metodos de la clase
  //Para generar un id unico para el servicio
  function generarIdServicio($conn){
    $id=0;
      $validacion=false;
      do{
      $id=rand(100000000,999999999);
      //Validamos que este ID no exista

      $sql = "Select idServicio from servicio where idServicio='$id'"; //Crear sentencia sql
      $resultado = mysqli_query($conn, $sql); //Ejecutar query

      if($resultado->num_rows==0){
        //SI devuelve cero filas es un id unico
        $validacion==true;
        break;
      }

      }while($validacion==false);
      return $id;
  }



}
?>