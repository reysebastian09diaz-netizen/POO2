<?php
abstract class cliente{
    private $nombre;

    public function __construct($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }


    public abstract function getIdentificacion();

}
   