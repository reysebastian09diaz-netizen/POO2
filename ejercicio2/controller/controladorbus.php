<?php

require_once __DIR__ . "/../models/bus.php";
require_once __DIR__ . "/../models/busgrande.php";
require_once __DIR__ . "/../models/busmediano.php";
require_once __DIR__ . "/../models/buspeq.php";

require_once __DIR__ . "/../view/visualizarbus.php";
require_once __DIR__ . "/../view/consultabus.php";

class controladorbus
{
    private $vista;

    public function __construct(visualizarbus $vista)
    {
        $this->vista = $vista;
    }

    public function desarrollar()
    {
        if (isset($_POST["enviar"])) {

            $placa = $_POST["placa"];
            $tam = $_POST["tam"];

            switch ($tam) {

                case "pequeno":
                    $bus = new buspequeño($placa);
                    break;

                case "mediano":
                    $bus = new busmediano($placa);
                    break;

                case "grande":
                    $bus = new busgrande($placa);
                    break;

                default:
                    echo "El tamaño del bus no es valido";
                    return;
            }

            $suben1 = $_POST["suben1"];
            $suben2 = $_POST["suben2"];
            $suben3 = $_POST["suben3"];
            $suben4 = $_POST["suben4"];

            $totalSuben = $suben1 + $suben2 + $suben3 + $suben4;

            if ($totalSuben <= $bus->getcapacidad()) {

                $bus->subirpasajeros($suben1);
                $bus->subirpasajeros($suben2);
                $bus->subirpasajeros($suben3);
                $bus->subirpasajeros($suben4);

            } else {

                echo $bus->errorcapacidad();
            }

            $bajan2 = $_POST["bajan2"];
            $bajan3 = $_POST["bajan3"];
            $bajan4 = $_POST["bajan4"];

            $totalBajan = $bajan2 + $bajan3 + $bajan4;

            if ($totalBajan <= $bus->getpasajerosactuales()) {

                $bus->bajarpasajeros($bajan2);
                $bus->bajarpasajeros($bajan3);
                $bus->bajarpasajeros($bajan4);

            } else {

                echo $bus->errorpasajeros0();
            }

            $this->vista->mostrartitulo("RESULTADO FINAL");
            $this->vista->mostrarbus($bus);
        }
    }
}