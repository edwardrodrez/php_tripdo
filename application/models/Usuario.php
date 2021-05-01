<?php
class Usuario
{
    // Declaración de una propiedad
    private  $nickname;
    private  $email;    
    private  $telefono;
    private  $nombre;
    private  $imagen;
    private  $biografia;
    private  $viajes;


    function __construct($nick,$email,$telefono,$nombre,$imagen,$biografia) {
        $this->nickname = $nick;
        $this->$email = $email;    
        $this->$telefono = $telefono;
        $this->$nombre = $nombre;
        $this->$imagen = $imagen;
    }
    
    // Declaración de un método
    public function mostrarVar() {
    }

    /**
     * Get the value of nickname
     */ 
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set the value of nickname
     *
     * @return  self
     */ 
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of telefono
     */ 
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set the value of telefono
     *
     * @return  self
     */ 
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set the value of nombre
     *
     * @return  self
     */ 
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get the value of imagen
     */ 
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set the value of imagen
     *
     * @return  self
     */ 
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }
    /**
     * Get the value of biografia
     */ 
    public function getBiografia()
    {
        return $this->biografia;
    }

    /**
     * Set the value of biografia
     *
     * @return  self
     */ 
    public function setBiografia($biografia)
    {
        $this->biografia = $biografia;

        return $this;
    }

    /**
     * Get the value of viajesCreados
     */ 
    public function getViajesCreados()
    {
        return $this->viajesCreados;
    }

    /**
     * Set the value of viajesCreados
     *
     * @return  self
     */ 
    public function setViajesCreados($viajesCreados)
    {
        $this->viajesCreados = $viajesCreados;

        return $this;
    }
}
?>