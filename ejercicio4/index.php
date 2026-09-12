<?php
require_once __DIR__ . "/models/pelicula.php";
require_once __DIR__ . "/models/catalogo.php";
require_once __DIR__ .  "/view/vistapeli.php";
require_once __DIR__ . "/controller/controlcatalogo.php";



$catalogo = new Catalogo();
$vista = new PeliculaVista();
$controller = new CatalogoController($catalogo, $vista);

// Mostrar formulario con 3 películas
$vista->formularioPeliculas(3);

// Mostrar resultados
$controller->mostrarResultados();
