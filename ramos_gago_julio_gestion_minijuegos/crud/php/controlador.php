<?php
    
    /**
     * @file controlador.php
     * Archivo del controlador.
     * @author Julio Antonio Ramos Gago (jramosgago.guadalupe@alumnado.fundacionloyola.net)
     * @license GPLv3 2021.
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
            if (empty($_POST['ruta'])) {
                
                return "Debes de indicar la ruta del minijuego";
            }

            /*Llamo a la función alta_minijuegos de la clase modelo para ejecutar la consulta*/
            $this->modelo->alta_minijuegos();

            /*Compruebo el número de filas afectadas*/
            if($this->modelo->conexion->affected_rows>0){

                return $this->modelo->conexion->affected_rows." filas afectadas.";
            }else{

                /**
                 * Compruebo que los nombres no se repitan.
                 * En caso de repetirse mando un mensaje.
                 */
                if($this->modelo->conexion->errno==1062){
                    return "El nombre ya existe";
                }
            }
        }
    }