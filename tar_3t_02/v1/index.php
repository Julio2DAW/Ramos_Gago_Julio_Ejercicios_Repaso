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
                <input type="radio" name="actividad" /> Actividad de Sección
            </div>
            <div>
                <input value="Enviar" type="submit" name="boton" />
            </div>
        </form>
    </body>
</html>
<?php
    
    //isset->Determina si una variable está definida y no es null
    if(isset($_POST['boton'])){

        echo $_POST["categoria"];
        echo "<br>";
        if(isset($_POST["etapas"])){

            print_r($_POST["etapas"]); /* 
            Uso print_r para que me muestre los valores de la array,
            si fuese un array asociativo utilizaría foreach
            */
        }
        echo "<br>";
        if(isset($_POST["actividad"])){

            echo $_POST["actividad"];
        }
    }
?>