<?php

require_once __DIR__ . "/view/consultabus.php";
require_once __DIR__ . "/view/visualizarbus.php";
require_once __DIR__ . "/controller/controladorbus.php";





if (!isset($_POST["placa"], $_POST["tam"], $_POST["suben1"], $_POST["suben2"], $_POST["bajan2"])) {

    $consulta = new consultabus();
    $consulta->consultar();
} else {

    $vista = new visualizarbus();

    $controlador = new controladorbus($vista);
    $controlador->desarrollar();
}
