<?php
class visualizarbus {
    /** @param bus $bus */

    public function mostrarbus(bus $bus){
        echo $bus->mostrar();
    }


        public function mostrarseparador(){
        echo"<br>";
        echo str_repeat( "-",60);
        echo"<br>";
    }


        /** @param string $titulo */
    public function mostrartitulo($titulo){
        echo "== {$titulo} ==";
        echo"<br>";
    }

}