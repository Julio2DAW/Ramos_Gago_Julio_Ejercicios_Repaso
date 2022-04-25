<?php
    /**
     * utilizar errno
     * utilizar affected rows
     */
    class Controlador{

        public $modelo;

        function __construct(){
            /*Llamo a la clase Modelo del archivo modelo.php*/
            require_once 'modelo.php';
            $this->modelo = new Modelo();
        }

        /**
         * @function comprobarAlta()
         * Función para comprobar el alta de los minijuegos.
         */
        function comprobarAlta(){

            /**
             * Compruebo que el elemento input text de nombre del formulario no esté en blanco.
             * Si lo está retorno un mensaje de advertencia.
             */
            if(empty($_POST['nombre'])) {

                return "Debes de poner un nombre al minijuego";
            }

            /**
             * Compruebo que el elemento input text de ruta del formulario no esté en blanco.
             * Si lo está retorno un mensaje de advertencia.
             */
            if (empty($_POST['nombre'])) {
                
                return "Debes de indicar la ruta del minijuego";
            }

            /*Llamo a la función alta_minijuegos de la clase modelo para ejecutar la consulta*/
            $this->modelo->alta_minijuegos();

        }
    }