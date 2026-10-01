<?php

namespace Ejercicio1;

require_once __DIR__ . "/../view/consultausuario.php";
require_once __DIR__ . "/../view/visualizarcita.php";

class controladorcita
{
    private $vista;

    public function __construct(\visualizarcita $vista)
    {
        $this->vista = $vista;
    }

    public function demostrar()
    {
        $citas = [];

        $this->vista->mostrartitulo("citas con POO (MVC)");

        if (isset($_POST["numero"], $_POST["tipo"])) {

            $numeroform = $_POST["numero"];
            $tipoform = $_POST["tipo"];

            if ($tipoform == 1 || $tipoform == 2 || $tipoform == 3) {

                $citas[] = new citageneral($numeroform, $tipoform);

            } elseif ($tipoform == 4 || $tipoform == 5) {

                $citas[] = new citaespecialista($numeroform, $tipoform);
            }
        }

        $this->vista->mostrarseparador();

        foreach ($citas as $cita) {
            $this->vista->mostrarcita($cita);
            echo "<br>";
        }

        $this->vista->mostrarseparador();

        echo "<br>";
    }
}