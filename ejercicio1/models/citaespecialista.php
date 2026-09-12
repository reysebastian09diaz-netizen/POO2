<?php
require_once __DIR__ . "/cita.php";

class citaespecialista extends cita{


	public function __construct(int $numero, int $tipo)
    {
        parent:: __construct($numero, $tipo);
}



	public function gettipo(): string
    {
        return "especialista";
    }




    

	public function getvalorfinal(): float
{
    return ($this->gettarifa() * 0.5)+$this->gettarifa();
}

public function mostrarcita(){
    return " el número de la cita es: {$this->getnumero()}, Esta cita es de tipo: {$this->gettipo()}, Su tarifa normal es: {$this->gettarifa()} Pero por ser de tipo {$this->gettipo()} queda con un valor final de {$this->getvalorfinal()}.
";
}

}