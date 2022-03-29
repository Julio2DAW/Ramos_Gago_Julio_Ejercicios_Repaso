<?php

    echo '<h1>Dias de la Semana</h1>';
    echo '<h4>Practicar el count()</h4>';

    $semana = array("lunes", "martes", "miercoles", "jueves", "viernes", "sabado", "domingo");

    foreach ($semana as $num_dia => $nombre_dia) {
        echo '<br>Los dias de la semana son: ';
        echo $nombre_dia;
    }
?>