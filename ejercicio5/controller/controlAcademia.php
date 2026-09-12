<?php
class academiaControl {
    private $personas = [];
    private $vista;

    public function __construct($vista) {
        $this->vista = $vista;

        if (isset($_POST['registrarPersonas'])) {
            $nombres = $_POST['nombre'];
            $documentos = $_POST['documento'];
            $correos = $_POST['correo'];
            $tipos = $_POST['tipo'];

            for ($i = 0; $i < count($nombres); $i++) {
                if (!empty($nombres[$i])) {
                    switch ($tipos[$i]) {
                        case "estudiante":
                            $this->personas[] = new Estudiante($nombres[$i], $documentos[$i], $correos[$i]);
                            break;
                        case "docente":
                            $this->personas[] = new Docente($nombres[$i], $documentos[$i], $correos[$i]);
                            break;
                        case "administrativo":
                            $this->personas[] = new Administrativo($nombres[$i], $documentos[$i], $correos[$i]);
                            break;
                    }
                }
            }
        }
    }

    public function mostrarResultados() {
        $this->vista->mostrarPersonas($this->personas);
        $this->vista->mostrarTotal();
    }
}
