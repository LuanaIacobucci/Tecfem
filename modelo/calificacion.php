<?php
class calificacion {
  public $idCalificacion; //int 10
  public $nomCuentaCalificador; //FK 
  public $idServicio; //FK int 10
  public $numeroEstrellas; //int
  public $fecha;
  public $comentario;
  

  //Constructores
  function __construct($idServicio, $numeroEstrellas, $comentario) {
    $this->idCalificacion = generarIdCalificacion(); //Metodo a programar !!!!
    $this->nomCuentaCalificador=$_SESSION['nombreCuenta'];
    $this->idServicio=$idServicio;
    $this->numeroEstrellas=$numeroEstrellas;
    $this->comentario=$comentario;
    $this->fecha = date('m/d/Y'); //metodo que llama a la fecha actual. No se necesita ingresar. 
  }
           
  //Destructor
  function __destruct() {
   //Agregar codigo
  }

  //Getter y setter

   //no necesita setter pq es autogenerado al instanciar (ver constructor).
  function get_idCalificacion() {
    return $this->idCalificacion;
  }

   //no necesita setter pq es autogenerado al instanciar (ver constructor).
  function get_nomCuentaCalificador() {
    return $this->nomCuentaCalificador;
  }

 //no necesita setter pq no cambia.
  function get_idServicio() {
    return $this->idServicio;
  }

  function set_numeroEstrellas($numeroEstrellas) {
    $this->numeroEstrellas = $numeroEstrellas;
  }


  function get_numeroEstrellas() {
    return $this->numeroEstrellas;
  }


//Sirve por si más adelante permitimos editar comentarios (guardar fecha edición).
  function set_fecha($fecha) {
    $this->fecha= $fecha;
  }


  function get_fecha() {
    return $this->fecha;
  }

  function set_comentario($comentario) {
    $this->comentario = $comentario;
  }


  function get_comentario() {
    return $this->comentario;
  }


    //Metodos de la clase

  //Para generar un id unico para el servicio
  function generarIdCalificacion(){
    $id;
    //Crear un bucle que genere un id de 10 digitos aleatorios. Al terminar chequee que no existe en la base de datos. 
    return id;
    }

    
}
  ?>