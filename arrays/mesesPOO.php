<?php

    class MesesPOO{

        private $dias_meses;

        public function dar_valores(){

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

        }

        public function ver_valores(){

            foreach ($this->dias_meses as $mes => $dias) {

                echo '<br>El mes de '.$mes.' tiene '.$dias.' dias.';
            }
        }
    }

    $objetoMeses = new MesesPoo();

    $objetoMeses -> dar_valores();

    $objetoMeses -> ver_valores();
?>