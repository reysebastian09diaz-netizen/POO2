<?php
require_once "Persona.php";
class docente extends persona {
    private $cursosDictados = [];

    public function asignarCurso($curso) {
        $this->cursosDictados[] = $curso;
    }

    public function registrarCalificacion($estudiante, $curso, $nota) {
        $estudiante->registrarNota($curso, $nota);
    }

    public function mostrarInfo() {
        echo " Docente: $this->nombre | Doc: $this->documento | Correo: $this->correo<br>";
    }
}
