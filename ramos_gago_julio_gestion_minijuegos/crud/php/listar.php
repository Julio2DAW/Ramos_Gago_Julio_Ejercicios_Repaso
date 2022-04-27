<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="author" content="Julio Antonio Ramos Gago ()jramosgago.guadalupe@alumnado.fundacionloyola.net" />
        <title>Listado Minijuegos</title>
    </head>
    <body>
        <h1>Listado de Minijuegos</h1>
        <?php

            require_once 'controlador.php';

            $controlador = new Controlador();
            $resultado = $controlador->mostrar_minijuegos();

            while ($registro=$resultado->fetch_array()) {
                
                echo "<p>".$registro['nombre']." ".$registro['icono']." ".$registro['ruta']."</p>";
            }
        ?>
        <p><a href="../index.html">Volver</a></p>
    </body>
</html>
