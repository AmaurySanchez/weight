<?php
    class Calculos{

       static public function calcularImc($peso,$altura){
            return ($peso/(pow($altura,2)));
        }
    }
?>