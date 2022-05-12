<?php
class blog{
  public $nombreCuenta; //String FK cliente asociado //Proveedor
  public  $titulo=[]; //Titulo profesional, universitario o de profesion
  public $certificaciones=[];
  public $otrosCursos=[];
  public $idiomas=[];
  public $nivelExcel; //Enum nivel
  public $nivelDeIngles;//Enum nivel
  public $descripcion; //Para que se pueda expresar
  public $galeriaDeFotos;  //Archivos sobre servicios
  public $formasDePago=[]; //Enum de metodo de pago
  public $redSocial=[]; //Agregar dentro de cada instancia del array el atributo red social (enum) y el link a su perfil.
  public $nivelHerramientasTic; //Enum nivel

  
  //Constructores

  //Agregue por defecto vacio por si no agrega datos. Puede fallar si se agrega uno y otros no.
  function __construct($titulo ="",$certificaciones="",$otrosCursos="",$idiomas="",$nivelExcel="",$nivelDeIngles="",$descripcion="", $galeriaDeFotos="",$formasDePago="",$redSocial="", $nivelHerramientasTic="" ) {
    $this->nombreCuenta = $_SESSION['nombreCuenta'];
    $this->titulo = $titulo;
    $this->certificaciones = $certificaciones;
    $this->otrosCursos = $otrosCursos;
    $this->idiomas = $idiomas;
    $this->nivelExcel = $nivelExcel;
    $this->nivelDeIngles = $nivelDeIngles;
    $this->descripcion = $descripcion;
    $this->galeriaDeFotos = $galeriaDeFotos;
    $this->formasDePago = $formasDePago;
    $this->redSocial = $redSocial;
    $this->nivelHerramientasTic = $nivelHerramientasTic;
  }

         
  //Destructor
  function __destruct() {
   //Agregar codigo
  }

  //Getter y setter


  //no necesita setter pq es autogenerado al instanciar (ver constructor).
    function get_nombreCuenta() {
    return $this->nombreCuenta;
  }

  function set_titulo($titulo) {
    $this->titulo = $titulo;
  }


  function get_titulo() {
    return $this->titulo;
  }

  function set_certificaciones($certificaciones) {
    $this->certificaciones = $certificaciones;
  }


  function get_certificaciones() {
    return $this->certificaciones;
  }

  function set_otrosCursos($otrosCursos) {
    $this->otrosCursos = $otrosCursos;
  }


  function get_otrosCursos() {
    return $otrosCursos->otrosCursos;
  }


  function set_idiomas($idiomas) {
    $this->idiomas = $idiomas;
  }


  function get_idiomas() {
    return $this->idiomas;
  }
  function set_nivelExcel($nivelExcel) {
    $this->nivelExcel = $nivelExcel;
  }


  function get_nivelExcel() {
    return $this->nivelExcel;
  }

  function set_nivelDeIngles($nivelDeIngles) {
    $this->nivelDeIngles = $nivelDeIngles;
  }


  function get_nivelDeIngles() {
    return $this->nivelDeIngles;
  }
  function set_descripcion($descripcion) {
    $this->descripcion= $descripcion;
  }


  function get_descripcion() {
    return $this->descripcion;
  }
  function set_galeriaDeFotos($galeriaDeFotos) {
    $this->galeriaDeFotos = $galeriaDeFotos;
  }


  function get_galeriaDeFotos() {
    return $this->galeriaDeFotos;
  }
  function set_formasDePago($formasDePago) {
    $this->formasDePago = $formasDePago;
  }


  function get_formasDePago() {
    return $this->formasDePago;
  }

  function set_redSocial($redSocial) {
    $this->redSocial = $redSocial;
  }


  function get_redSocial() {
    return $this->redSocial;
  }
  function set_nivelHerramientasTic($nivelHerramientasTic) {
    $this->nivelHerramientasTic = $nivelHerramientasTic;
  }


  function get_nivelHerramientasTic() {
    return $this->nivelHerramientasTic;
  }
  

}
?>