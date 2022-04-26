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

        function alta_minijuegos($icono) {

            /*Consulta sql para dar de alta al minijuego*/
            $sql = "INSERT INTO minijuego (nombre, icono, ruta) VALUES ('".$_POST['nombre']."',$icono,'".$_POST['ruta']."');";

            /*Ejecuto la consulta*/
            $this->conexion->query($sql) or die("error");
            
        }
    }