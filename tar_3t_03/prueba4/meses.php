<?php

    /**
     * Creao la clase Meses, en la que tendré un atributo y dos métodos.
     * El atributo será $dias_meses
     * - Método 1: Mostrará los meses y sus días
     */
    class Meses{
        /**
         * @function visualizar_valores()
         * - Creo este método para mostrar los valores de la variable $dias_meses.
         * - Le paso el parámetro $dias_meses
         */
        public function visualizar_valores($dias_meses){

            /**
             * Recorro el array $dias_meses del archivo index.php con un foreach para visualizar los valores donde:
             * - $mes es el índice
             * - $dias es el valor
             */
            foreach ($dias_meses as $mes => $dias) {

                echo '<br>El mes de '.$mes.' tiene '.$dias.' dias.';
            }
        }
    }
?>