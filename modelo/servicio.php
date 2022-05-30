<?php
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
  function __construct($idServicio,$nombreCuenta, $nombre, $categoria,$descripcion,$costoPorHora,  $fechaPublicacion) {
    //Mas adelante podemos dejarle que suab un archivo
    $this->idServicio =$idServicio;
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

 //no necesita setter pq es autogenerado al instanciar (ver constructor).
 function set_nombreCuenta($nombreCuenta) {
  $this->nombreCuenta = $nombreCuenta;
}
  function get_idServicio() {
    return $this->idServicio;
  }

 //no necesita setter pq es autogenerado al instanciar (ver constructor).
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
        if ($valor->get_idCalificacion() == $calificaciones->get_idCalificacion()){ //Si existe??
         $resp=true;
         break;
        }
     }
        
     return resp;
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
  function generarIdServicio(){
      $id;
      $validacion==false;
      do{
      $id=rand(1000000000,9999999999);
      //Validamos que este ID no exista

      //Crear conexion bd
      $conn = mysqli_connect("localhost","root","root","tecfem"); //Iniciar conexión BD
      $sql = "Select idServicio from servicio where idServicio=$id"; //Crear sentencia sql
      $resultado = mysqli_query($conn, $sql); //Ejecutar query

      if($resultado->num_rows =0){
        //SI devuelve cero filas es un id unico
        $validacion==true;
        break;
      }

      }while($validacion==false);
      return $id;
  }



}
?>