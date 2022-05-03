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

            /*Llamo a la función altaMinijuegos de la clase modelo para ejecutar la consulta y le paso los atributos*/
            $this->modelo->altaMinijuegos($nombre, $icono, $ruta);

            /*Compruebo el número de filas afectadas*/
            if($this->modelo->conexion->affected_rows>0){

                //return $this->modelo->conexion->affected_rows." fila afectada.";
                return "El minijuego se agregó correctamente.";
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

        /**
         * @function mostrarMinijuegos()
         * Función para mostrar los minijuegos.
         */
        function mostrarMinijuegos(){

            /*Llamo a la función listar_minijuegos de la clase modelo para ejecutar la consulta y retorno el resultado a listar.php*/
            return $this->modelo->listarMinijuegos();
        }

        function verMinijuego(){

            if(isset($_GET['id'])) {

                $id = $_GET['id'];
                return $this->modelo->consultarMinijuego($id);
            }else {

                return 'Ha sucedido un problema';
            }
        }
        /**
         * @function eliminarMinijuegos()
         * Función para eliminar los minijuegos.
         */
        function eliminarMinijuegos($id){

            $this->modelo->borrarMinijuegos($id);

            if($this->modelo->conexion->affected_rows > 0) {

                return "Minijuego eliminado";
            }else {

                return "El minijuego no se pudo borrar";
            }
        }

        /**
         * @function actualizarMinijuegos()
         * Función para modificar los minijuegos.
         */
        function actualizarMinijuegos($id) {

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

            /*Llamo a la función altaMinijuegos de la clase modelo para ejecutar la consulta y le paso los atributos*/
            $this->modelo->modificarMinijuegos($id, $nombre, $icono, $ruta);

            /*Compruebo el número de filas afectadas*/
            if($this->modelo->conexion->affected_rows>0){

                //return $this->modelo->conexion->affected_rows." fila afectada.";
                return "El minijuego se modificó correctamente.";
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