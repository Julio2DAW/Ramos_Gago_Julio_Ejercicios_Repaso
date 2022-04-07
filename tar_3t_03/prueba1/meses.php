<?php

    /**
     * Creao la clase Meses, en la que tendré un atributo y dos métodos.
     * El atributo será $dias_meses
     * - Método 1: Mete los meses y sus días correspondientes en la array $dias_meses
     * - Método 2: Mostrará los meses y sus días
     */
    class Meses{

        //Atributo
        private $dias_meses;

        /**
         * @function introducir_valores()
         * - Creo este método para dar valores al atributo $dias_meses.
         */
        public function introducir_valores(){

            //$this-> hace referencia al objeto que ejecuta el código.
            $this->dias_meses = array(

                //indice => valor
                'enero' => '31',
                'febrero' => '28',
                'marzo' => '31',
                'abril' => '30',
                'mayo' => '31',
                'junio' => '30',
                'julio' => '31',
                'agosto' => '31',
                'septiembre' => '30',
                'octubre' => '31',
                'noviembre' => '30',
                'diciembre' => '31'
            );

            return $this->dias_meses;
        }

        /**
         * @function visualizar_valores()
         * - Creo este método para mostrar los valores del atributo $dias_meses.
         */
        public function visualizar_valores(){

            /**
             * Recorro el array con un foreach para visualizar los valores donde;
             * - $mes es el índice
             * - $dias es el valor
             */
            foreach ($this->dias_meses as $mes => $dias) {

                echo '<br>El mes de '.$mes.' tiene '.$dias.' dias.';
            }
        }
    }
?>