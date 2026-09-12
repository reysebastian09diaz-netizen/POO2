<?php
class BancoVista {

    public function mostrarPersonaActual($persona, $titulo) {
    echo "<h3>$titulo</h3>";
    echo "- " . $persona->getNombre() . " (Cédula: " . $persona->getIdentificacion() . ", Edad: " . $persona->getEdad() . ")<br>";
}

    // Formulario para agregar persona
    public function formularioPersona() {
        echo '
        <h3>Agregar Persona</h3>
        <form method="post">
            Cédula: <input type="text" name="cedula"><br>
            Nombre: <input type="text" name="nombre"><br>
            Edad: <input type="number" name="edad"><br>
            <input type="submit" name="agregarPersona" value="Agregar Persona">
        </form>';
    }

    // Formulario para agregar empresa
    public function formularioEmpresa() {
        echo '
        <h3>Agregar Empresa</h3>
        <form method="post">
            NIT: <input type="text" name="nit"><br>
            Nombre: <input type="text" name="nombre"><br>
            Representante: <input type="text" name="representante"><br>
            <input type="submit" name="agregarEmpresa" value="Agregar Empresa">
        </form>';
    }

    // Mostrar clientes
    public function mostrarClientes($clientes) {
        echo "<h3>Clientes del banco</h3>";
        foreach ($clientes as $c) {
            echo "- " . $c->getNombre() . "<br>";
        }
    }

    public function mostrarPersonas($personas) {
        echo "<h3>Personas</h3>";
        foreach ($personas as $p) {
            echo "- " . $p->getNombre() . " (Cédula: " . $p->getIdentificacion() . ", Edad: " . $p->getEdad() . ")<br>";
        }
    }

    public function mostrarEmpresas($empresas) {
        echo "<h3>Empresas</h3>";
        foreach ($empresas as $e) {
            echo "- " . $e->getNombre() . " (Representante: " . $e->getRepresentante() . ")<br>";
        }
    }
}
