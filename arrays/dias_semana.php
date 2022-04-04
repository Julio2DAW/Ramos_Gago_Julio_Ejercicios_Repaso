<?php

    echo '<h1>Dias de la Semana practicar arrays</h1>';

    //Días de la semana.
    $semana = array("lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo");

    echo '<h2>Días de la semana con "print_r"</h2>';

    /**
     *  Visualizo los días de la semana utilizando un print_r,
     *  en este caso muestra todos los días de una vez en forma
     *  de array.
     */
    print_r($semana);

    echo '<h2>Días de la semana con "foreach"</h2>';

    /**
     *  Visualizo los días de la semana utilizando un foreach,
     *  en este caso solo muestro el valor.
     *  num_dia es el índice.
     *  nombre_día es el valor.
     */
    echo '<br>Los dias de la semana son:';
    foreach ($semana as $num_dia => $nombre_dia) {

        echo ' '.$nombre_dia;
    }
    echo '<br>';

    /**
     *  En este caso quiero visualizar cada día de la semana
     *  a que día corresponde, al índice ($num_dia) le sumo 1 porque
     *  el índice empieza por 0, como se puede apreciar en el ejemplo
     *  del print_r.
     */
    foreach ($semana as $nombre_dia) {
        
        echo '<br> El día '.$num_dia +1 .' de la semana corresponde al '.$nombre_dia;
    }

    echo '<h2>Utilidades con Count()</h2>';

    echo '<h3>Contar los elementos de una array</h3>';

    /**
     *  Contar los elementos de la array $semana
     */
    echo 'Total de días que tiene una semana: ';
    print count($semana).'<br>';

    echo '<h3>For con count()</h3>';

    /**
     *  En este caso quiero visualizar el primer día de la semana
     *  a que día corresponde, al índice le sumo 1 porque el índice
     *  empieza por 0, como se puede apreciar en el ejemplo del print_r.
     *  Pero al utilizar for para recorrer el array si no utilizamos el
     *  count($semana) nos saldrá este error "Undefined array key".
     */
    for ($i=0; $i < count($semana); $i++) { 
        
        echo '<br> El día '.$i +1 .' de la semana corresponde al '.$semana[$i];
    }
?>