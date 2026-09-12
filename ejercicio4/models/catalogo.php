<?php
class Catalogo {
    private $peliculas = [];
    private static $totalPeliculas = 0;

    public function agregarPelicula(Pelicula $p) {
        $this->peliculas[] = $p;
        self::$totalPeliculas++;
    }

    public function mostrarPeliculas() {
        echo "\nPelículas registradas:\n";
        foreach ($this->peliculas as $p) {
            $p->mostrarInfo();
        }
    }

    public function calcularPromedioCalificaciones() {
        $suma = 0;
        foreach ($this->peliculas as $p) {
            $suma += $p->getCalificacionUsuarios();
        }
        return count($this->peliculas) > 0 ? $suma / count($this->peliculas) : 0;
    }

    public function mostrarRecomendadas() {
        echo "\n Películas recomendadas (calificación ):\n";
        foreach ($this->peliculas as $p) {
            if ($p->getCalificacionUsuarios() >= 4) {
                $p->mostrarInfo();
            }
        }
    }

    public static function getTotalPeliculas() {
        return self::$totalPeliculas;
    }

    public function getPeliculas() { 
    return $this->peliculas; 
}

}