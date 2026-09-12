<?php
class consultausuario{

public function mostrar(){

echo  '<form  method="post">
        <label for="numero">Ingrese el numero de cita</label>
        <input type="number" name="numero" id="numero" required>
        <label  for="tipo">ingrese el tipo de cita (recuerde que los valores van de 1 hasta 5)</label>
        <input type="number" name="tipo" id="tipo" required>
        <input type="submit" value="enviar">
    </form>';
}

}




