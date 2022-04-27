<?php

    /**
     * @file modelo.php
     * Archivo del modelo.
     * @author Julio Antonio Ramos Gago (jramosgago.guadalupe@alumnado.fundacionloyola.net)
     * @license GPLv3 2021.
     */
    class Modelo{

        public $conexion;

        function __construct(){

            require_once 'config_db.php';
            /*Conexión con la base de datos*/
            $this->conexion = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
        }

        /**
         * @function altaMinijuegos
         * Función que realiza una consulta sql (insert), para introducir los datos del formulario a la base de datos.
         */
        function altaMinijuegos($nombre, $icono, $ruta) {

            /*Consulta sql para dar de alta al minijuego*/
            $sql = "INSERT INTO minijuego (nombre, icono, ruta) VALUES ($nombre, $icono, $ruta);";

            /*Ejecuto la consulta*/
            $this->conexion->query($sql);
            
        }

        /**
         * @function listarMinijuegos
         * Función que realiza una consulta (select), para mostrar los datos de la tabla minijuegos.
         */
        function listarMinijuegos(){

            /*Consuta sql para obtener los datos*/
            $sql = "SELECT * FROM minijuego";

            
            /*Ejecuto la consulta y la retorno*/
            return $this->conexion->query($sql);
        }

        function consultarMinijuego($id){

            $sql = "SELECT * FROM minijuego WHERE id=$id";
            return $this->conexion->query($sql);
        }
        /**
         * @function borrar_minijuegos
         * Función que realiza una consulta (delete), para borrar el juego marcado.
         */
        function borrarMinijuegos($id){

            /*Consulta sql para borrar los datos*/
            $sql = "DELETE FROM minijuego WHERE id=$id";
            $this->conexion->query($sql);
        }
    }