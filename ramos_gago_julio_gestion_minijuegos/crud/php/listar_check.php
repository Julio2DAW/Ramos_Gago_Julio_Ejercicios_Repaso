<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="author" content="Julio Antonio Ramos Gago ()jramosgago.guadalupe@alumnado.fundacionloyola.net" />
        <title>Check Minijuegos</title>
    </head>
    <body>
        <h1>Checkbox Minijuegos</h1>

        <form action="#" method="POST">
            
            <?php

                require_once 'controlador.php';

                $controlador = new Controlador();
                /**
                 * Llamo a la función mostrarMinijuegos() de la clase Controlador.
                 * Genero dinámicamente los checkbox con un while.
                 */
                $resultado = $controlador->mostrarMinijuegos();

                /**
                 * Recorro el array y los muestros.
                 */
                while($registro=$resultado->fetch_array()) {

                    echo "<div>
                            <label>".$registro['nombre']."</label>
                            <input type=checkbox name=".$registro['nombre']." value=".$registro['id']." />
                        </div>";
                }
            ?>

            <input type="submit" value="Mostrar" name="mostrar" />
        </form>
        
        <?php

            if (isset($_POST['mostrar'])) {
                
                $resultado = $controlador->minijuegosCheck();

                foreach($resultado as $valor) {

                    while($registro=$valor->fetch_array()) {

                        echo "<p>".$registro['nombre']." ".$registro['icono']." ".$registro['ruta']."</p>";
                    }
                }
            }
        ?>

        <p><a href="../index.html">Volver</a></p>
    </body>
</html>
