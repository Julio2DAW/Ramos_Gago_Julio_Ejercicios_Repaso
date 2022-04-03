<?php
    
    /*
        Si existe enviar['boton'], agrego un array llamado "alta_actividades",
        que recoge los datos rellenados del formulario por el método $_POST.
    */
    if (isset($_POST["boton"])) {

        foreach ($_POST as $campo=>$valor) {

            $formulario["$campo"]=$valor;
        }
    }

    //Recorro el array del formulario y muestro los valores de los elementos.
    if (isset($formulario['boton'])) {
        
        //Elimino el campo botón para que no se muestre.
        unset($formulario["boton"]);
        foreach ($formulario as $campo=>$valor) {

            /*
                Compruebo que el campo 'nombre_actividad' no esté vacío, si está mando un mensaje de advertencia
                diciendo que ese campo debe rellenarse.
            */
            if (empty($formulario["nombre_actividad"]) && $formulario["nombre_actividad"]==$formulario["$campo"]) {

                echo "<p>No has rellenado el nombre de la actividad</p>";
            } else {
                
                //Compruebo que existe el campo 'etapas' y si existe muestro los datos seleccionados.
                if (isset($formulario["etapas"]) && $formulario["etapas"]==$formulario["$campo"]) {

                    foreach ($formulario["etapas"] as $valor) {

                        echo "$valor <br>";
                    }
                } else {

                    //Compruebo que existe actividad_seccion y si está seleccionada mando el nombre actividad_seccion.
                    if (isset($formulario["actividad_seccion"]) && $formulario["actividad_seccion"]==$formulario["$campo"]) {
                        
                        echo "actividad_seccion <br>";
                    } else {

                        //Si no se cumple lo anterior muestro el campo y su valor.
                        echo "$campo: $valor<br>";
                    }
                }
            }
        }
    }
?>