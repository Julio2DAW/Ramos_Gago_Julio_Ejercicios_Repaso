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

            include_once 'alta.php';
            /**
             * Compruebo que el elemento input text de nombre del formulario no esté en blanco.
             * Si lo está retorno un mensaje de advertencia.
             */
            if(empty($_POST['nombre'])) {

                return "Debes de poner un nombre al minijuego";
            }else {

                $nombre="'".$_POST['nombre']."'";
            }

            /**
             * Compruebo que el elemento input text de icono del formulario esté en blanco.
             * Si lo está guardo en la base de datos 'NULL'.
             */
            if (empty($_POST['icono'])) {

                $icono = 'NULL';
            }else {

                $icono="'".$_POST['icono']."'";
            }


            /**
             * Compruebo que el elemento input text de ruta del formulario no esté en blanco.
             * Si lo está retorno un mensaje de advertencia.
             */
            if (empty($_POST['ruta'])) {
                
                return "Debes de indicar la ruta del minijuego";
            }else {

                $ruta="'".$_POST['ruta']."'";
            }

            /*Llamo a la función alta_minijuegos de la clase modelo para ejecutar la consulta y le paso los atributos*/
            $this->modelo->alta_minijuegos($nombre, $icono, $ruta);

            /*Compruebo el número de filas afectadas*/
            if($this->modelo->conexion->affected_rows>0){

                return $this->modelo->conexion->affected_rows." fila afectada.";
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

        function mostrar_minijuegos(){

            /*Llamo a la función listar_minijuegos de la clase modelo para ejecutar la consulta y retorno el resultado a listar.php*/
            return $this->modelo->listar_minijuegos();
        }
    }