<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Alta getión actividades</title>
        <!--CSS-->
        <link rel="stylesheet" href="../css/estilos.css" />
    </head>
    <body>
        <h1>Alta de Gestión de Actividades</h1>
        <!--Formulario-->
        <form action="#" method="post">
            <div>
                <label for="">Categorías</label>
                <select name="categoria">
                    <option value="navidad">Navidad</option>
                    <option value="semana_ignaciana">Semana Ignaciana</option>
                    <option value="fiestas_escolares">Fiestas Escolares</option>
                </select>
            </div>
            <div>
                <label>Nombre Actividad: </label>
                <input type="text" name="nombre_actividad" />
            </div>
            <div>
                <label for="">Etapas</label>
                <div for="">
                    <input type="checkbox" name=etapas[] value=primaria /> Primaria
                </div>
                <div for="">
                    <input type="checkbox" name=etapas[] value=eso /> ESO
                </div>
                <div for="">
                    <input type="checkbox" name=etapas[] value=bachillerato /> Bachillerato
                </div>
                <div for="">
                    <input type="checkbox" name=etapas[] value=cfgm /> CFGM
                </div>
                <div for="">
                    <input type="checkbox" name=etapas[] value=cfgs /> CFGS
                </div>
            </div>
            <div>
                <input type="radio" name="actividad_seccion" /> Actividad de Sección
            </div>
            <div>
                <input value="Enviar" type="submit" name="boton" />
            </div>
        </form>
    </body>
</html>
<?php
    

    //isset => Determina si una variable está definida y no es null.
    //Si pulsas el botón enviar haces lo siguiente:
    if(isset($_POST['boton'])) {

        //Mensaje que le muestro al usuario.
        echo '<p>Has dado de alta a la siguiente actividad</p>';

        //Coge la categoría seleccionada en el select y la muestra.
        echo 'Categoría: '.$_POST['categoria'].'<br>';

        //empty => Determinar si una variable está vacía.
        //Coge el nombre de la actividad introducida por teclado y la muestra, siempre que este campo no este vacio.
        if (empty($_POST['nombre_actividad'])) {
            
            //Mensaje de aviso al usuario.
            echo 'Debes de poner un nombre a la actividad';
        } else {
            
            //Muestro el nombre de la actividad.
            echo 'Nombre Actividad: '.$_POST['nombre_actividad'].'<br>';
        }
        
        //Si selecciona al menos una etapa:
        if(isset($_POST['etapas'])) {

            //Recorre el array de las etapas con un foreach y muestra las seleccionadas.
            echo '<br>Has seleccionado las siguientes etapas:';
            foreach ($_POST['etapas'] as $valor) {
                
                echo ' '.$valor;
            }
        } else {

            echo 'No has seleccionado ninguna etapa';
        }

        /*
            Si se selecciona la actividad_seccion aparecerá un mensaje de información,
            en el caso de no seleccionarse, aparecerá otro.
        */
        if (isset($_POST['actividad_seccion'])) {
            
            echo '<br>Has seleccionado la para una clase';
        } else {

            echo '<br>La actividad es para los alumnos';
        }
    }
?>