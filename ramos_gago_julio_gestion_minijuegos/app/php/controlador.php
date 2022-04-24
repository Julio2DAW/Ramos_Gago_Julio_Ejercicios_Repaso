<?php
    class Controlador{

        public $modelo;
        function __construct(){
            /*Llamo a la clase Modelo del archivo modelo.php*/
            require_once 'modelo.php';
            $this->modelo = new Modelo();
        }

        function comprobarAlta(){

            /**
             * Compruebo que el elemento input text de nombre del formulario no esté en blanco.
             * Si lo está retorno un mensaje de advertencia.
             */
            if($_POST['nombre']==''){

                return "Debes de poner un nombre al minijuego";
            }

            /**
             * Compruebo que el elemento input text de icono del formulario no esté en blanco.
             * Si lo está hay que guardar en la base de datos el valor `NULL`.
             */
            if ($_POST['icono']=='') {
                
                $_POST['icono']='NULL';
            }

            /**
             * Compruebo que el elemento input text de ruta del formulario no esté en blanco.
             * Si lo está retorno un mensaje de advertencia.
             */
            if ($_POST['ruta']=='') {
                
                return "Debes de indicar la ruta del minijuego";
            }

            /*Llamo a la función alta_minijuegos de la clase modelo para ejecutar la consulta*/
            $this->modelo->alta_minijuegos();

            /**
             * Compruebo que no se repitan los nombres
             * En el caso de repetirse mando un mensaje de advertencia
             */
            if($this->modelo->conexion->errno==1062){

                return "Este nombre ya existe";
            }
        }
    }