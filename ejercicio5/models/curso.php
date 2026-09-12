<?php
class curso {
    private $nombre;
    private $docente;
    private $estudiantes = [];

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function asignarDocente(Docente $docente) {
        $this->docente = $docente;
        $docente->asignarCurso($this->nombre);
    }

    public function inscribirEstudiante(Estudiante $estudiante) {
        $this->estudiantes[] = $estudiante;
        $estudiante->inscribirCurso($this->nombre);
    }

    public function mostrarInfo() {
        echo "Curso: $this->nombre<br>";
        if ($this->docente) echo "Docente: " . $this->docente->getNombre() . "<br>";
        echo "Estudiantes inscritos: " . count($this->estudiantes) . "<br>";
    }
}
