<?php

namespace Ejercicio1;

class visualizarcita
{
    /** @param cita $cita */
    public function mostrarcita(cita $cita)
    {
        echo $cita->mostrarcita();
    }

    public function mostrarseparador()
    {
        echo "<br>";
        echo str_repeat("-", 60);
        echo "<br>";
    }

    /** @param string $titulo */
    public function mostrartitulo($titulo)
    {
        echo "== {$titulo} ==";
        echo "<br>";
    }
}