<?php

class Destino {
    private $id;
    private $pais;
    private $ciudad;
    private $sitioshis;
    private $sitiospop;
    private $usuario;
    private $categoria;

    function __construct(){
        $this->sitioshis = new array();
        $this->sitiospop = new array();
    }
    function __construct($id,$pais,$ciudad,$sitioshis,$sitiospop,$usuario,$categoria){
        $this->id = $id;
        $this->pais = $pais;
        $this->ciudad = $ciudad;
        $this->sitiohis = $sitioshis;
        $this->sitiopop = $sitiopop;
        $this->usuario = $usuario;
        $this->categoria = $categoria;
    }

    public function setPais($pais){
        $this->pais = $pais;
    }
    public function getPais(){
        return $this->pais;
    }

    public function setCiudad($ciudad){
        $this->ciudad = $ciudad;
    }

    public function getCiudad(){
        return $this->ciudad;
    }

    public function setSitioshis($sitioshis){
        $this->sitioshis = $sitioshis;
    }

    public function getSitioshis(){
        return $this->sitioshis;
    }

    public function setSitiospop($sitiospop){
        $this->sitiospop = $sitiospop;
    }

    public function getSitiospop(){
        return $this->sitiospop;
    }

    public function setUsuario($usuario){
        $this->usuario = $usuario;
    }

    public function getUsuario(){
        return $this->usuario;
    }

    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }

    public function getCategoria(){
        return $this->categoria;
    }

}





?>