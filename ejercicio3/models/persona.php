<?php
require_once __DIR__ . "/cliente.php";



class persona extends cliente {
    private $cedula;
    private $edad;

    
    public function __construct($cedula, $nombre, $edad)
    {
       parent::__construct($nombre);
       $this->cedula = $cedula;
       $this->edad = $edad;
    }

    
    public function getIdentificacion()
    {
        return $this->cedula;
    }

    public function getEdad(){
        return $this->edad;
    }

    public function cumpliraños(){
        $this->edad++;
    }


   
}