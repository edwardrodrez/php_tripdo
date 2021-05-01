<?php
class Plan
{
    
    public $id;
    public $nombre;
    public $descripcion;
    public $ubicacion;
    public $link;
    public $usuario;




    // Declaración de un método
////////////////////////////////////
  function set_id($id) {
    $this->id = $id;
  }
  function get_id() {
    return $this->id;
  }

  ////////////////////////////////////
  function set_nombre($nombre) {
    $this->nombre = $nombre;
  }
  function get_nombre() {
    return $this->nombre;
  }
  ////////////////////////////////////
  function set_descricion($descripcion) {
    $this->descripcion = $descripcion;
  }
  function get_descrpcion() {
    return $this->descrpcion;
  }
////////////////////////////////////
  function set_ubicacion($ubicacion) {
    $this->ubicacion = $ubicacion;
  }
  function get_id() {
    return $this->id;
  }


///////////////////////////////////
  function set_link($link) {
    $this->link = $link;
  }
  function get_link() {
    return $this->link;
  }
  /////////////////////////
  function set_usuario($usuario) {
    $this->usuario = $usuario;
  }
  function get_usuario() {
    return $this->usuario;
  }

////////////



  function __construct($id,$nombre,$descripcion,$ubicacion,$link, $usuario) {
    $this->id = $id;
    $this->nombre = $nombre;
    $this->descripcion = $descripcion;
    $this->ubicacion = $ubicacion;
    $this->link = $link;
    $this->usuario = $usuario;
   
  }

   function __destruct() {
  }

}
?>
