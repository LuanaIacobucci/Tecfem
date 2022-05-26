<?php
include('modelo\cliente.php');
class proveedora extends cliente{
  public $listaServicios=[];
  public  $categoriaStem; //ENUM categoria_stem

  //Constructores
  function __construct($categoriaStem) {
    $this->categoriaStem = $categoriaStem;

  }
         
  //Destructor
  function __destruct() {
   //Agregar codigo
  }

  //Getter y setter
  function add_servicio($servicio) {
      $resp=false; //Validamos si se agrega

   $listaServicios=array($servicio); //Agregamos

   foreach($listaServicios as $valor){ 
       if ($valor->get_idServicio() == $servicio->get_idServicio()){ //Si existe??
        $resp=true;
        break;
       }
    }
       
    return $resp;
  }


  function get_listaServicios() {
    return $this->listaServicios;
  }

  function set_categoriaStem($categoriaStem) {
    $this->categoriaStem = $categoriaStem;
  }


  function get_categoriaStem() {
    return $this->categoriaStem;
  }

}
?>