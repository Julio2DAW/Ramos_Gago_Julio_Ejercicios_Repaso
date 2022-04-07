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
            <strong>Prueba 4: </strong>Creamos el array en el archivo externo y se llama
            al método visualizar para que muestre los datos
        </p>
        <h1>Esto son los meses del año y la cantidad de días que tiene cada uno</h1>
    </body>
</html>
<?php

    //LLamo al archivo meses.php con todo lo que este tiene.
    require('meses.php');

    //Creo una nueva variable que utiliza la clase Meses()
    $objetoMeses = new Meses();

    //Creo la variable $dias_meses que es un array con los meses del año y sus días.
    $dias_meses = array(

        //indice => valor
        'enero' => '31',
        'febrero' => '28',
        'marzo' => '31',
        'abril' => '30',
        'mayo' => '31',
        'junio' => '30',
        'julio' => '31',
        'agosto' => '31',
        'septiembre' => '30',
        'octubre' => '31',
        'noviembre' => '30',
        'diciembre' => '31'
    );

    //LLamo a la función visualizar_valores de la clase Meses() y le paso la variable $dias_meses.
    $objetoMeses->visualizar_valores($dias_meses);
?>