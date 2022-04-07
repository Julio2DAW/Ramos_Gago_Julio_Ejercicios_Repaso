<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Ejercicio Opcional POO</title>
    </head>
    <body>
        
        <h1>Esto son los meses del año y la cantidad de días que tiene cada uno</h1>
    </body>
</html>
<?php

    //LLamo al archivo meses.php con todo lo que este tiene.
    require('meses.php');

    //Creo una nueva variable que utiliza la clase Meses()
    $objetoMeses = new Meses();

    //Recoge el array retornado $this->dias_meses de la funcion introducir_valores(),
    //y ejecuta la función introducir_valores().
    $objetoMeses->introducir_valores();

    //LLamo al atributo $dias_meses para poder visualizar los meses y los días.
    //$objetoMeses->dias_meses
    foreach ($objetoMeses->dias_meses as $mes => $dias) {

        echo '<br>El mes de '.$mes.' tiene '.$dias.' dias.';
    }
?>