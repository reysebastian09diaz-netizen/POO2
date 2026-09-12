<?php
require_once "Persona.php";
class administrativo extends persona {
    public function gestionarProceso($proceso) {
        echo " Administrativo $this->nombre gestiona: $proceso<br>";
    }

    public function mostrarInfo() {
        echo "Administrativo: $this->nombre | Doc: $this->documento | Correo: $this->correo<br>";
    }
}
