<?php

    /**
     * Creao la clase Meses, en la que tendré un atributo y dos métodos.
     * - Método 1: Mete los meses y sus días correspondientes en la array $dias_meses.
     */
    class Meses{

        /**
         * @function introducir_valores()
         * - Creo este método para dar valores al atributo $dias_meses.
         */
        public function introducir_valores(){

            //Array de meses y sus días.
            $dias_meses = array(

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

            return $dias_meses;
        }
    }
?>