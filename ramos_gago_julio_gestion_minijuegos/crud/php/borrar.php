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
            /**
             * Llamo a la función verMinijuego() de la clase Controlador.
             * Muestro el juego a borrar recorriendo el resultado con un fetch_array().
             */
            $resultado = $controlador->verMinijuego();

            while ($registro=$resultado->fetch_array()) {
                
                echo    "<p>"
                            .$registro['nombre']." ".$registro['icono']." ".$registro['ruta'].
                        "</p>";

                $id = $registro['id'];
            }
        ?>

        <p>¿Estás seguro de que deseas eliminar este minijuego?</p>

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
        //Redireccionar a la vista listar.php a los dos segundos, para que al usuario le de tiempo
        //a poder ver que le ha saltado por pantalla el mensaje de confirmación de que ese minijuego ha sido borrado.
        header("refresh:2; url=listar.php");
        
    }else {

        if (isset($_POST['cancelar'])) {

            //Redireccionar a la vista listar.php a los 0,5 segundos, ya que el usuario no ha querido eliminar el minijuego.
            header ("refresh:0.5; url=listar.php");
        }
    }