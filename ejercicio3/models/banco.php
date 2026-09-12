<?php

class banco
{
    private string $nombre;
    private int $numeroDeClientes;
    private $clientes = [];

    public function __construct($nombre)
    {
        $this->nombre = $nombre;
        $this->numeroDeClientes = 0;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function cambiarNombre($nombre)
    {
        $this->nombre = $nombre;
    }

    public function addCliente(cliente $clientes)
    {
        $this->clientes[] = $clientes;
        $this->numeroDeClientes++;
    }

    public function getNumClientes()
    {
        return $this->numeroDeClientes;
    }

    public function getCliente($posicion)
    {
        if (isset($this->clientes[$posicion])) {
            return $this->clientes[$posicion];
        } else {
            return null;
        }
    }

    public function getClientes(){
        return $this->clientes;
    }
}
