<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="author" content="Julio Antonio Ramos Gago ()jramosgago.guadalupe@alumnado.fundacionloyola.net" />
        <title>Select Minijuegos</title>
    </head>
    <body>
        <h1>Select de Minijuegos</h1>

        <form action="#" method="POST">
            
            <select name="select">
                <?php

                    require_once 'controlador.php';

                    $controlador = new Controlador();
                    $resultado = $controlador->mostrarMinijuegos();
                    
                    while ($registro=$resultado->fetch_array()) {

                        echo " <option value=$registro[id]>".$registro['nombre']."</option>";
                    }
                ?>

            </select>

            <input type="submit" value="Ver" name="ver" />
        </form>
        
        <?php

            if(isset($_POST['ver'])) {

                echo 'Visto';
            }else {

                echo 'Pulsa el botón ver para obtener los datos del minijuego.';
            }
        ?>
        <p><a href="../index.html">Volver</a></p>
    </body>
</html>
