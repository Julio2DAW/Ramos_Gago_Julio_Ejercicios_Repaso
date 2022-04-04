<?php

    echo '<h1>Meses del año con "foreach"</h1>';

    //Meses del año y sus dias
    $meses = array(
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

    /**
     *  Con el foreach recorro el array $meses y muestro los datos.
     *  En este caso muestro el índice y el valor.
     */
    echo '<h2>Foreach con Índice y Valor</h2>';
    foreach ($meses as $mes => $dias) {

        echo '<br>El mes de '.$mes.' tiene => '.$dias.' dias.';
    }

    /**
     *  Con el foreach recorro el array $meses y muestro los datos.
     *  En este caso muestro solo el valor.
     */
    echo '<h2>Foreach con solo Valor</h2>';
    foreach ($meses as $mes => $dias) {

        echo '<br> El valor es => '.$dias;
    }

?>