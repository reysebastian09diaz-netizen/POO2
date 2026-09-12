<?php
class cita {
    private int $numero;
    private int $tipo;
    private float $tarifa;
    private float $valorfinal;

    public function __construct(int $numero, int $tipo)
    {
      $this->numero = $numero;
      $this->tipo = $tipo;
      $this->tarifa = 300000;
     
    }


    public function getnumero():int {
        return $this->numero;
    }

    public function gettipo():string{
        return $this->tipo;
    }

    public function gettarifa():float{
        return $this->tarifa;
    }

    public function getvalorfinal(){
        return $this->valorfinal;
    }




      public function setnumero($numero):int {
        return $this->numero;
    }

    public function settipo($tipo):string{
        return $this->tipo = $tipo;
    }

    public function settarifa($tarifa):float{
        return $this->tarifa = $tarifa;
    }

    public function setvalorfinal($valorfinal){
        return $this->valorfinal = $valorfinal;
    }







    public function calcularvalorfinal(){
        return $this->valorfinal;
    }


public function mostrarcita(){
    return " el número de la cita es: {$this->numero}, Esta cita es de tipo: {$this->tipo} Su tarifa normal es: {$this->tarifa} Pero por ser de tipo {$this->tipo} queda con un valor final de {$this->valorfinal}.
";
}

}