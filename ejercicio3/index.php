<?php
require_once __DIR__ . "/models/banco.php";
require_once __DIR__ . "/models/cliente.php";
require_once __DIR__ . "/models/empresa.php";
require_once __DIR__ . "/models/persona.php";
require_once __DIR__ . "/view/formbanco.php";
require_once __DIR__ . "/controller/controladorbanco.php";

// Crear banco, vista y controlador
$banco = new banco("Banco J");   // minúscula porque tu clase está definida así
$vista = new BancoVista();
$controller = new BancoController($banco, $vista);

// Mostrar formularios
$vista->formularioPersona();
$vista->formularioEmpresa();

// Mostrar resultados
$controller->mostrarClientes();
$controller->mostrarPersonas();
$controller->mostrarEmpresas();
$controller->mostrarMenoresEdad();
$controller->mostrarMasJoven();
$controller->mostrarMasViejo();
