<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Pruebas POO</title>
    </head>
    <body>
        <p>
            <strong>Prueba 2: </strong>Llamamos al método visualizar desde el archivo externo
            y dentro del método visualizar tendremos una llamada al método crear_array.
        </p>
        <h1>Esto son los meses del año y la cantidad de días que tiene cada uno</h1>
    </body>
</html>
<?php

    //LLamo al archivo meses.php con todo lo que este tiene.
    require('meses.php');

    //Creo una nueva variable que utiliza la clase Meses()
    $objetoMeses = new Meses();

    //Se ejecuta la función visualizar_valores(), que muestra los meses y dias de $this->introducir_valores()
    $objetoMeses->visualizar_valores();
?>