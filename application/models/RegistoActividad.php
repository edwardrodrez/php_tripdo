<?php
class RegistroActividad
{
    
    public $id;
    public $usuario;
    public $actividad;

    // Declaración de un método

  function set_id($id) {
    $this->id = $id;
  }
  function get_id() {
    return $this->id;
  }
    function set_usuario($usuario) {
    $this->usuario = $usuario;
  }
  function get_usuario() {
    return $this->usuario;
  }
  function set_actividad($actividad) {
    $this->actividad = $actividad;
  }
  function get_actividad() {
    return $this->actividad;
  }

////////////

  function __construct($id, $usuario,$actividad) {
    $this->id = $id;
    $this->usuario = $usuario;
    $this->actividad = $actividad;
  }

   function __destruct() {
  }

}
?>

