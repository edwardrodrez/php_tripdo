<?php
class Usuarios extends CI_Controller {
    public function index(){  
        $data['titulo'] = 'Pagina Principal';


        $this->load->view("Plantilla/Header", $data);
        $this->load->view("Viajes/index");
        $this->load->view("Plantilla/Footer");
    }
    public function Allviajes(){  
        $data['titulo'] = 'Todos las viajes';


        $this->load->view("Plantilla/Header", $data);
        $this->load->view("Plantilla/Buscador");
        $this->load->view("Viajes/allviajes");
        $this->load->view("Viajes/mapa");
        $this->load->view("Viajes/cierreconte");
        $this->load->view("Plantilla/Footer");
    }

    public function Oneviaje(){
        $data['titulo'] = 'Ver viaje unico';
        
        
        $this->load->view("Plantilla/Header", $data);
        $this->load->view("Plantilla/Buscador");
        $this->load->view("Viajes/oneviaje");
        $this->load->view("Viajes/mapa");
        $this->load->view("Viajes/cierreconte");
        $this->load->view("Plantilla/Footer");
    }
}








?>