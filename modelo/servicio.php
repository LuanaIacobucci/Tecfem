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
  function __construct($nombre, $categoria,$descripcion,$costoPorHora) {
    //Mas adelante podemos dejarle que suab un archivo
    $this->idServicio = generarIdServicio(); //Metodo a programar !!!!
    $this->nombreCuenta = $_SESSION['nombreCuenta']; //toma el nombre de usuario del que ha iniciado sesion.
    $this->nombre = $nombre;
    $this->categoria = $categoria;
    $this->descripcion = $descripcion;
    $this->costoPorHora = $costoPorHora;
    $this->fechaPublicacion = date('m/d/Y'); //metodo que llama a la fecha actual. No se necesita ingresar. 
  }
           
  //Destructor
  function __destruct() {
   //Agregar codigo
  }

  //Getter y setter

 //no necesita setter pq es autogenerado al instanciar (ver constructor).
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
        if ($valor.idCalificacion = $calificaciones.idCalificacion){ //Si existe??
         resp=true;
         break;
        }
     }
        
     return resp;
}



  function get_calificaciones() {
    return $this->calificaciones;
  }

 //No necesita setter pq es autogenerado (ver constructor)
  function get_fechaPublicacion() {
    return $this->fechaPublicacion;
  }

 
  //Metodos de la clase
  //Para generar un id unico para el servicio
  function generarIdServicio(){
      $id;
      //Crear un bucle que genere un id de 10 digitos aleatorios. Al terminar chequee que no existe en la base de datos. 
      return id;
  }

}
?>