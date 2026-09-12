<?php
require_once __DIR__ . "/models/persona.php";
require_once __DIR__ . "/models/estudiante.php";
require_once __DIR__ . "/models/docente.php";
require_once __DIR__ . "/models/administrativo.php";
require_once __DIR__ . "/models/curso.php";
require_once __DIR__ . "/view/academiaVista.php";
require_once __DIR__ . "/controller/controlAcademia.php";


$vista = new AcademiaVista();
$controller = new academiaControl($vista);

// Mostrar formulario con 3 personas
$vista->formularioPersonas(3);

// Mostrar resultados
$controller->mostrarResultados();