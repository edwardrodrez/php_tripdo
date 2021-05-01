<?php

class Viaje{

    private $viajeId;
    private $nombre;
    private $descripcion;
    private $privado;
    private $colaboradores;
    private $viajeros;
    private $ejecutado;
    private $invitados;
    private $sugerenciasPlan;
    private $planesAprobados;
    private $sugerenciaDestino;
    private $destinosAprobados;
    private $registroActividad;

    public function __construct($nombre,$descripcion,$privado)
    {
        $this->nombre=$nombre;
        $this->descripcion=$descripcion;
        $this->privado=$privado;
        $this->colaboradores= array();
        $this->viajeros= array();
        $this->ejecutado=false;
        $this->invitados= array();
        $this->sugerenciasPlan= array();
        $this->sugerenciaDestino= array();
        $this->planesAprobados= array();
        $this->destinosAprobados= array();
        $this->registroActividad= array();
    }

    
    public function listarDestinos()
    {
    }

    public function listarPlanes()
    {
    }

    public function compartirViaje()
    {
    }

    public function listarColaboradores()
    {
    }

    public function listarViajeros()
    {
    }

    public function votarPlan()
    {
    }

    public function votarDestino()
    {
    }




    public function getViajeId()
    {
        return $this->viajeId;
    }

   
    public function setViajeId($viajeId)
    {
        $this->viajeId = $viajeId;

        return $this;
    }

  
    public function getNombre()
    {
        return $this->nombre;
    }

   
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

   
    public function getDescripcion()
    {
        return $this->descripcion;
    }

  
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

   
    public function getPrivado()
    {
        return $this->privado;
    }

  
    public function getColaboradores()
    {
        return $this->colaboradores;
    }

  
    public function setColaboradores($colaboradores)
    {
        $this->colaboradores = $colaboradores;

        return $this;
    }

  
    public function getViajeros()
    {
        return $this->viajeros;
    }

 
    public function setViajeros($viajeros)
    {
        $this->viajeros = $viajeros;

        return $this;
    }

    public function getEjecutado()
    {
        return $this->ejecutado;
    }

    public function setEjecutado($ejecutado)
    {
        $this->ejecutado = $ejecutado;

        return $this;
    }


    public function getInvitados()
    {
        return $this->invitados;
    }


    public function setInvitados($invitados)
    {
        $this->invitados = $invitados;

        return $this;
    }


    public function getSugerenciasPlan()
    {
        return $this->sugerenciasPlan;
    }


    public function setSugerenciasPlan($sugerenciasPlan)
    {
        $this->sugerenciasPlan = $sugerenciasPlan;

        return $this;
    }

 
    public function getPlanesAprobados()
    {
        return $this->planesAprobados;
    }

 
    public function setPlanesAprobados($planesAprobados)
    {
        $this->planesAprobados = $planesAprobados;

        return $this;
    }


    public function getSugerenciaDestino()
    {
        return $this->sugerenciaDestino;
    }


    public function setSugerenciaDestino($sugerenciaDestino)
    {
        $this->sugerenciaDestino = $sugerenciaDestino;

        return $this;
    }


    public function getDestinosAprobados()
    {
        return $this->destinosAprobados;
    }

  
    public function setDestinosAprobados($destinosAprobados)
    {
        $this->destinosAprobados = $destinosAprobados;

        return $this;
    }

    public function getRegistroActividad()
    {
        return $this->registroActividad;
    }

    public function setRegistroActividad($registroActividad)
    {
        $this->registroActividad = $registroActividad;

        return $this;
    }
}
