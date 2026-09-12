<?php
require_once "persona.php";
class estudiante extends persona {
    private $cursos = [];
    private $notas = [];

    public function inscribirCurso($curso) {
        $this->cursos[] = $curso;
        $this->notas[$curso] = [];
    }

    public function registrarNota($curso, $nota) {
        if (isset($this->notas[$curso])) {
            $this->notas[$curso][] = $nota;
        }
    }

    public function calcularPromedio($curso) {
        if (!isset($this->notas[$curso]) || count($this->notas[$curso]) == 0) return 0;
        return array_sum($this->notas[$curso]) / count($this->notas[$curso]);
    }

    public function mostrarInfo() {
        echo " Estudiante: $this->nombre | Doc: $this->documento | Correo: $this->correo<br>";
    }
}
