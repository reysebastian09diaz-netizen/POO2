<?php
class BancoController {
    private $banco;
    private $vista;

    public function __construct($banco, $vista) {
        $this->banco = $banco;
        $this->vista = $vista;

        // Procesar formularios directamente en el constructor
        if (isset($_POST['agregarPersona'])) {
            $cedula = $_POST['cedula'];
            $nombre = $_POST['nombre'];
            $edad   = $_POST['edad'];
            $this->agregarPersona($cedula, $nombre, $edad);
        }

        if (isset($_POST['agregarEmpresa'])) {
            $nit          = $_POST['nit'];
            $nombre       = $_POST['nombre'];
            $representante = $_POST['representante'];
            $this->agregarEmpresa($nit, $nombre, $representante);
        }
    }

    // Agregar persona
    public function agregarPersona($cedula, $nombre, $edad) {
        $persona = new persona($cedula, $nombre, $edad); // minúscula
        $this->banco->addCliente($persona);
    }

    // Agregar empresa
    public function agregarEmpresa($nit, $nombre, $representante) {
        $empresa = new empresa($nit, $nombre, $representante); // minúscula
        $this->banco->addCliente($empresa);
    }

    // Mostrar todos los clientes
    public function mostrarClientes() {
        $clientes = $this->banco->getClientes();
        $this->vista->mostrarClientes($clientes);
    }

    // Mostrar solo personas
    public function mostrarPersonas() {
        $clientes = $this->banco->getClientes();
        $personas = [];
        foreach ($clientes as $cliente) {
            if (get_class($cliente) === "persona") { // minúscula
                $personas[] = $cliente;
            }
        }
        $this->vista->mostrarPersonas($personas);
    }

    // Mostrar solo empresas
    public function mostrarEmpresas() {
        $clientes = $this->banco->getClientes();
        $empresas = [];
        foreach ($clientes as $cliente) {
            if (get_class($cliente) === "empresa") { // minúscula
                $empresas[] = $cliente;
            }
        }
        $this->vista->mostrarEmpresas($empresas);
    }

    // Mostrar menores de edad
    public function mostrarMenoresEdad() {
        $clientes = $this->banco->getClientes();
        $menores = [];
        foreach ($clientes as $cliente) {
            if (get_class($cliente) === "persona" && $cliente->getEdad() < 18) { // corregido
                $menores[] = $cliente;
            }
        }
        $this->vista->mostrarPersonas($menores);
    }

    // Mostrar el más joven
    public function mostrarMasJoven() {
        $clientes = $this->banco->getClientes();
        $masJoven = null;
        foreach ($clientes as $cliente) {
            if (get_class($cliente) === "persona") {
                if ($masJoven === null || $cliente->getEdad() < $masJoven->getEdad()) {
                    $masJoven = $cliente;
                }
            }
        }
        if ($masJoven !== null) {
            $this->vista->mostrarPersonaActual($masJoven, "Más joven");
        }
    }

    // Mostrar el más viejo
    public function mostrarMasViejo() {
        $clientes = $this->banco->getClientes();
        $masViejo = null;
        foreach ($clientes as $cliente) {
            if (get_class($cliente) === "persona") {
                if ($masViejo === null || $cliente->getEdad() > $masViejo->getEdad()) {
                    $masViejo = $cliente;
                }
            }
        }
        if ($masViejo !== null) {
            $this->vista->mostrarPersonaActual($masViejo, "Más viejo");
        }
    }
}
