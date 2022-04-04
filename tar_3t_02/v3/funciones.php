<?php
    
    class Formulario{

        /**
         *  @function cogerDatos: Función para coger los datos del formulario
         */
        function cogerDatos() {
            
            /*
                Creo el array llamado $alta_formulario.
                Categoría es el índice.
                Con el método POST cojo el valor de categoria y añado la categoría a la array.
            */
            $alta_formulario['Categoría'] = $_POST['categoria'];

            /*
                Compruebo que el campo 'nombre_actividad' no está vacío, en este caso lo añado a la array.
                Actividad es el índice.
                En el caso de estar vacío mando un mensaje de advertencia.
            */
            if (empty($_POST['nombre_actividad'])) {

                echo '<p>Debes de poner un nombre a la actividad</p>';
            } else {
                
                $alta_formulario['Actividad'] = $_POST['nombre_actividad'];
            }

            /*
                Compruebo que haya una etapa al menos seleccionada 'etapas.
                Utilizo un foreach para recorrer el array de etapas[] y muestro las que ha seleccionado.
                En caso de haber seleccionado ninguna, muestro un mensaje por pantalla.
            */
            if(isset($_POST['etapas'])) {

                foreach ($_POST['etapas'] as $valor) {
                    
                    $alta_formulario[] = $valor;
                }
            } else {

                echo '<p>No has seleccionado ninguna etapa</p>';
            }

            /*
                Compruebo que el radio 'actividad_seccion' está seleccionado mando a la array que está seleccionado.
                En el caso de no estar seleccionado agrego al array un mensaje.
                Seccion es el índice.
            */
            if(isset($_POST['actividad_seccion'])) {

                $alta_formulario['Seccion'] = $_POST['actividad_seccion'];
            } else {

                $alta_formulario['Seccion'] = 'La actividad es para los alumnos';
            }

            //Retorno el array $alta_formulario
            return $alta_formulario;
        }

        /**
         *  @function visualizarDatos: Función para visualizar los datos del formulario
         */
        function visualizarDatos($alta_formulario) {

            //Recorro el array del formulario y muestro el valor de cada elemento.
            foreach ($alta_formulario as $valor) {
                
                echo "$valor<br>";
            }
        }
    }
?>