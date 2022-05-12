<?php
class cliente {
  public $nombreCuenta; //PK
  public $rut;
  public $nombre;
  public $apellido;
  public $email;
  public $contrasena;
  public $nmrotelefono;
  public  $region; //enum regiones_chile
  public $comuna;
  public  $tipoCuenta; // enum tipo_cuenta
  public $listacalificaciones=[]; //Arrays
  public $proveedoresfavoritos=[]; //Array--> usar funcion array() para asiganrle los valores

  //Constructores
  function __construct($nombreCuenta, $rut, $nombre, $apellido, $email, $contrasena, $nmrotelefono, $region,$comuna,$tipoCuenta) {
    $this->nombreCuenta = $nombreCuenta;
    $this->rut = $rut;
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->contrasena = $contrasena;
    $this->nmrotelefono= $nmrotelefono;
    $this->region = $region;
    $this->comuna = $comuna;
    $this->tipoCuenta = $tipoCuenta;
  }
            //contructor con datos mínimos para crearse una cuenta 
  function __construct($nombreCuenta, $rut, $nombre, $apellido, $email, $contrasena,$tipoCuenta) {
    $this->nombreCuenta = $nombreCuenta;
    $this->rut = $rut;
    $this->nombre = $nombre;
    $this->apellido = $apellido;
    $this->contrasena = $contrasena;
    $this->tipoCuenta = $tipoCuenta;
  }


  //Destructor
  function __destruct() {
   //Agregar codigo
  }

  //Getter y setter
  function set_nombreCuenta($nombreCuenta) {
    $this->nombreCuenta = $nombreCuenta;
  }


  function get_nombreCuenta() {
    return $this->nombreCuenta;
  }

  function set_rut($rut) {
    $this->rut = $rut;
  }


  function get_rut() {
    return $this->rut;
  }

  function set_nombre($nombre) {
    $this->nombre = $nombre;
  }


  function get_nombre() {
    return $this->nombre;
  }

  function set_apellido($apellido) {
    $this->apellido = $apellido;
  }


  function get_apellido() {
    return $this->apellido;
  }

  function set_email($email) {
    $this->email = $email;
  }


  function get_email() {
    return $this->email;
  }


  function set_contrasena($contrasena) {
    $this->contrasena=$contrasena;
  }


  function get_contrasena() {
    return $this->contrasena;
  }

  function set_nmrotelefono($nmrotelefono) {
    $this->nmrotelefono = $nmrotelefono;
  }


  function get_nmrotelefono() {
    return $this->nmrotelefono;
  }

  function set_comuna($comuna) {
    $this->comuna = $comuna;
  }


  function get_comuna() {
    return $this->comuna;
  }

  function set_tipoCuenta($tipoCuenta) {
    $this->tipoCuenta = $tipoCuenta;
  }


  function get_tipoCuenta() {
    return $this->tipoCuenta;
  }

  
  function set_region($region) {
    $this->region = $region;
  }


  function get_region() {
    return $this->region;
  }

 
  function add_calificaciones($calificacion) {

    //metodo donde se agrega al array una calificación
    $resp=false; //Validamos si se agrega

    $listacalificaciones=array($calificacion); //Agregamos
   
    foreach($listacalificaciones as $valor){ 
        if ($valor.idCalificacion = $listacalificaciones.idCalificacion){ //Si existe??
         resp=true;
         break;
        }
     }
        
     return resp;
}


  function get_listacalificaciones() {
    return $this->listacalificaciones;
  }



  function add_proveedorFavorito($proveedora) {

    //metodo donde se agrega al array una calificación
    $resp=false; //Validamos si se agrega

    $proveedoresfavoritos=array($proveedora); //Agregamos
   
    foreach($proveedoresfavoritos as $valor){ 
        if ($valor.nombreCuenta = $proveedoresfavoritos.nombreCuenta){ //Si existe??
         resp=true;
         break;
        }
     }
        
     return resp;
}


  function get_proveedoresFavoritos() {
    return $this->proveedoresfavoritos;
  }

}

?>