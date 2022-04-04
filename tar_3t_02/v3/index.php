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

    //Si pulso el botón enviar se realizará las siguientes acciones.
    if (isset($_POST['boton'])) {
        
        require("funciones.php");
        
        //Clase del archivo funciones.php
        $formulario = new Formulario();
        
        /*
            Creo la variable $alta_actividades.
            De la clase Formulario utilizo la función cogerDatos() para utilizar el array $alta_formulario.
        */
        $alta_actividades = $formulario -> cogerDatos();

        /*
            Utilizo la función visualizarDatos() para mostrar los datos del array $alta_formulario.
        */
        $formulario -> visualizarDatos($alta_actividades);
    }
?>