<?php
class administrador{
  public $nombreUsuario; //String PK
  public  $contrasena; 
  public $rut;
  public $email;
  public $nombre;
  public $apellido;

  //Para el super administrador (default) solo se requiere nombre y usuario.
  // Los demás atributos aplican para cuenta con privilegios de administrador.

  //Constructores
  function __construct($nombreUsuario, $contrasena,$rut,$email,$nombre,$apellido ) {
    $this->nombreUsuario = $nombreUsuario;
    $this->contrasena = $contrasena;
    $this->rut = $rut;
    $this->email = $email;
    $this->nombre = $nombre;
    $this->apellido = $apellido;

  }

        //Super admin
        function __construct2($nombreUsuario, $contrasena) {
            $this->nombreUsuario = $nombreUsuario;
            $this->contrasena = $contrasena;
          }
         
  //Destructor
  function __destruct() {
   //Agregar codigo
  }

  //Getter y setter
  
  function set_nombreUsuario($nombreUsuario) {
    $this->nombreUsuario = $nombreUsuario;
  }


  function get_nombreUsuario() {
    return $this->nombreUsuario;
  }

  function set_contrasena($contrasena) {
    $this->contrasena = $contrasena;
  }


  function get_contrasena() {
    return $this->contrasena;
  }

  function set_rut($rut) {
    $this->rut = $rut;
  }


  function get_rut() {
    return $this->rut;
  }

  function set_email($email) {
    $this->email = $email;
  }


  function get_email() {
    return $this->email;
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

}
?>