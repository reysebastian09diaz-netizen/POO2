<?php
class Pelicula {
    private $titulo;
    private $genero;
    private $duracionMinutos;
    private $clasificacion;
    private $calificacionUsuarios;

    public function __construct($titulo, $genero, $duracionMinutos, $clasificacion, $calificacionUsuarios) {
        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->duracionMinutos = $duracionMinutos;
        $this->clasificacion = $clasificacion;
        $this->setCalificacionUsuarios($calificacionUsuarios);
    }

    public function getTitulo() {
         return $this->titulo; }
    public function getGenero() {
         return $this->genero; }
    public function getDuracionMinutos() {
         return $this->duracionMinutos; }
    public function getClasificacion() { 
        return $this->clasificacion; }
    public function getCalificacionUsuarios() { 
        return $this->calificacionUsuarios; }

    public function setCalificacionUsuarios($calificacion) {
        if ($calificacion >= 1 && $calificacion <= 5) {
            $this->calificacionUsuarios = $calificacion;
        } else {
            $this->calificacionUsuarios = 1; // valor por defecto si es inválido
        }
    }
    public function mostrarInfo() {
        echo "{$this->titulo} | Género: {$this->genero} | Duración: {$this->duracionMinutos} min | Clasificación: {$this->clasificacion} | Calificación: {$this->calificacionUsuarios}/5\n";
    }

    public static function convertirHorasAMinutos($horas) {
        return $horas * 60;
    }

}