<?php

class Categoria {
    private $id;
    private $tipo;

    function __construct(){

    }
    function __construct($id,$tipo){
        $this->id = $id;
        $this->tipo = $tipo;
    }

    public function setTipo($tipo){
        $this->tipo = $tipo;
    }
    
    public function getTipo(){
        return $this->tipo;
    }
    
}





?>