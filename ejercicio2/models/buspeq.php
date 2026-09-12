<?php
require_once __DIR__ . "/bus.php";

class buspequeño extends bus {


	public function __construct(string $placa)
    {
        return parent::__construct($placa, 14);

   
    }

}