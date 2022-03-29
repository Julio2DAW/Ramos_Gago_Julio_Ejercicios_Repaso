<?php

    echo '<h1>Meses del año</h1>';
    echo '<h4>Array asociativo</h4>';

    $meses = array(

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

    foreach ($meses as $mes => $dias) {

        echo '<br>El mes de '.$mes.' tiene '.$dias.' dias.';
    }
?>