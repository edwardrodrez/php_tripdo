<?php
class Voto
{
    
    public $voto;
    public $usuario;
   

    // Declaración de un método

  function set_voto($voto) {
    $this->voto = $voto;
  }
  function get_voto() {
    return $this->voto;
  }
    function set_usuario($usuario) {
    $this->usuario = $usuario;
  }
  function get_usuario() {
    return $this->usuario;
  }
  

////////////

  function __construct($usuario,$voto) {
    $this->voto = $voto;
    $this->usuario = $usuario;

  }

   function __destruct() {
  }

}
?>
