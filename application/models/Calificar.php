<?php

class Calificar {
    private $id;
    private $puntaje;
    private $texto;
    
    function __construct(){

    }
    function __construct($id,$puntaje,$texto){
        $this->id = $id;
        $this->puntaje = $puntaje;
        $this->texto = $texto;
    }

    public function setPuntaje($puntaje){
        $this->puntaje = $puntaje;
    }

    public function getPuntaje(){
        return $this->puntaje;
    }

    public function setTexto($texto){
        $this->texto = $texto;
    }

    public function getTexto(){
        return $this->texto;
    }
}





?>