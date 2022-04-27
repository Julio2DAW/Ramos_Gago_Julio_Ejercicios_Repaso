<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="author" content="Julio Antonio Ramos Gago ()jramosgago.guadalupe@alumnado.fundacionloyola.net" />
        <title>Borrar Minijuego</title>
    </head>
    <body>
        <h1>Borrar Minijuego</h1>
        <?php
            require_once 'controlador.php';

            $controlador = new Controlador();
            $resultado = $controlador->verMinijuego();

            while ($registro=$resultado->fetch_array()) {
                
                echo    "<p>"
                            .$registro['nombre']." ".$registro['icono']." ".$registro['ruta'].
                        "</p>";

                $id = $registro['id'];
            }
        ?>

        <form action="#" method="POST">
            <input type="submit" value="Eliminar" name="eliminar" />
            <input type="submit" value="Cancelar" name="cancelar" />
        </form>
    </body>
</html>
<?php

    if(isset($_POST['eliminar'])) {
            
        $resultado = $controlador->eliminarMinijuegos($id);
        echo $resultado;
        echo "<p><a href='../index.html'>Volver</a></p>";
        
    }else {

        if (isset($_POST['cancelar'])) {

            header("Location: ../index.html");
        }
    }