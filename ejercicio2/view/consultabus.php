<?php

class consultabus
{
    public function consultar()
    {
        echo '
        <form method="post">

            <label for="placa">Ingrese la placa</label>
            <input type="text" name="placa" id="placa" required>
            <br><br>

            <label>Seleccione el tipo de bus</label><br>
            <input type="radio" name="tam" value="pequeño" required> Pequeño
            <input type="radio" name="tam" value="mediano"> Mediano
            <input type="radio" name="tam" value="grande"> Grande

            <br><br>

            <h3>Parada 1</h3>
            Suben:
            <input type="number" name="suben1" min="0" required>

            <br><br>

            <h3>Parada 2</h3>
            Bajan:
            <input type="number" name="bajan2" min="0" required>

            Suben:
            <input type="number" name="suben2" min="0" required>

            <br><br>

            <h3>Parada 3</h3>
            Bajan:
            <input type="number" name="bajan3" min="0" required>

            Suben:
            <input type="number" name="suben3" min="0" required>

            <br><br>

            <h3>Parada 4</h3>
            Bajan:
            <input type="number" name="bajan4" min="0" required>

            Suben:
            <input type="number" name="suben4" min="0" required>

            <br><br>

            <input type="submit" name = "enviar" value="Procesar recorrido">

        </form>';
    }
}