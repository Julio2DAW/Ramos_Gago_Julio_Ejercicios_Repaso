<?php

    //Contar cuantos dias tiene una semana.
    echo '<h1>Dias de la Semana</h1>';
    echo '<h4>Practicar el count()</h4>';


    $semana = array("lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo");

    //Muestra todo el contenido de la array de una vez.
    print_r($semana);

    /*foreach ($semana as $num_dia => $nombre_dia) {
        echo '<br>Los dias de la semana son: ';
        echo $nombre_dia;
    };*/

    echo '<br>';
    //Cuenta el número de celdas en la que está partido el array.
    var_dump(count($semana))
?>