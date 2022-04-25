<?php

    class Modelo{

        public $conexion;
        
        function __construct(){

            require_once 'config_db.php';
            /*Conexión con la base de datos*/
            $this->conexion = new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
        }

        function alta_minijuegos(){

            /*Consulta sql para dar de alta al minijuego*/
            $sql = "INSERT INTO minijuego (nombre, icono, ruta) VALUES ('".$_POST['nombre']."','".$_POST['icono']."','".$_POST['ruta']."');";

            /*Ejecuto la consulta*/
            $this->conexion->query($sql);
        }
    }