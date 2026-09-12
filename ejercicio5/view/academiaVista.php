<?php
class AcademiaVista {
    public function formularioPersonas($cantidad = 3) {
        echo "<h3>Registrar Personas</h3>";
        echo '<form method="post">';
        for ($i = 0; $i < $cantidad; $i++) {
            echo "<fieldset><legend>Persona #" . ($i+1) . "</legend>";
            echo "Nombre: <input type='text' name='nombre[$i]'><br>";
            echo "Documento: <input type='text' name='documento[$i]'><br>";
            echo "Correo: <input type='text' name='correo[$i]'><br>";
            echo "Tipo: <select name='tipo[$i]'>
                    <option value='estudiante'>Estudiante</option>
                    <option value='docente'>Docente</option>
                    <option value='administrativo'>Administrativo</option>
                  </select><br>";
            echo "</fieldset><br>";
        }
        echo "<input type='submit' name='registrarPersonas' value='Registrar Personas'>";
        echo "</form>";
    }

    public function mostrarPersonas($personas) {
        echo "<h3>Personas registradas</h3>";
        foreach ($personas as $p) {
            $p->mostrarInfo();
        }
    }

    public function mostrarTotal() {
        echo "<h3>Total de personas: " . Persona::getTotalPersonas() . "</h3>";
    }
}
