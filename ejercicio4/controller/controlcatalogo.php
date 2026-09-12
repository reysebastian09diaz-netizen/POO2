<?php
class CatalogoController {
    private $catalogo;
    private $vista;

    public function __construct($catalogo, $vista) {
        $this->catalogo = $catalogo;
        $this->vista = $vista;

        if (isset($_POST['agregarPeliculas'])) {
            $titulos = $_POST['titulo'];
            $generos = $_POST['genero'];
            $horas = $_POST['horas'];
            $clasificaciones = $_POST['clasificacion'];
            $calificaciones = $_POST['calificacion'];

            for ($i = 0; $i < count($titulos); $i++) {
                if (!empty($titulos[$i])) { // solo si se llenó
                    $duracionMinutos = Pelicula::convertirHorasAMinutos(intval($horas[$i]));
                    $pelicula = new Pelicula(
                        $titulos[$i],
                        $generos[$i],
                        $duracionMinutos,
                        $clasificaciones[$i],
                        floatval($calificaciones[$i])
                    );
                    $this->catalogo->agregarPelicula($pelicula);
                }
            }
        }
    }

    public function mostrarResultados() {
        $this->vista->mostrarPeliculas($this->catalogo->getPeliculas());
        $this->vista->mostrarRecomendadas($this->catalogo->getPeliculas());
        $this->vista->mostrarPromedio($this->catalogo->calcularPromedioCalificaciones());
        $this->vista->mostrarTotal(Catalogo::getTotalPeliculas());
    }
}
