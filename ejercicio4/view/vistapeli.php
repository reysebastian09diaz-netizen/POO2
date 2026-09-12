<?php
class PeliculaVista {
    public function formularioPeliculas($cantidad = 3) {
        echo "<h3>Registrar Películas</h3>";
        echo '<form method="post">';
        for ($i = 0; $i < $cantidad; $i++) {
            echo "<fieldset><legend>Película #" . ($i+1) . "</legend>";
            echo "Título: <input type='text' name='titulo[$i]'><br>";
            echo "Género: <input type='text' name='genero[$i]'><br>";
            echo "Duración en horas: <input type='number' name='horas[$i]'><br>";
            echo "Clasificación: <input type='text' name='clasificacion[$i]'><br>";
            echo "Calificación (1-5): <input type='number' name='calificacion[$i]' min='1' max='5'><br>";
            echo "</fieldset><br>";
        }
        echo "<input type='submit' name='agregarPeliculas' value='Registrar Películas'>";
        echo "</form>";
    }

    public function mostrarPeliculas($peliculas) {
        echo "<h3>Películas registradas</h3>";
        foreach ($peliculas as $p) {
            echo "🎬 " . $p->getTitulo() . " | Género: " . $p->getGenero() .
                 " | Duración: " . $p->getDuracionMinutos() . " min | Clasificación: " .
                 $p->getClasificacion() . " | Calificación: " . $p->getCalificacionUsuarios() . "/5<br>";
        }
    }

    public function mostrarRecomendadas($peliculas) {
        echo "<h3>Películas recomendadas (≥4)</h3>";
        foreach ($peliculas as $p) {
            if ($p->getCalificacionUsuarios() >= 4) {
                echo "⭐ " . $p->getTitulo() . " (" . $p->getCalificacionUsuarios() . "/5)<br>";
            }
        }
    }

    public function mostrarPromedio($promedio) {
        echo "<h3>Promedio de calificaciones: $promedio</h3>";
    }

    public function mostrarTotal($total) {
        echo "<h3>Total de películas registradas: $total</h3>";
    }
}
