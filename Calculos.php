<?php
    class Calculos{

       static public function calcularImc($peso,$altura){
            return ($peso/(pow($altura,2)));
        }

        static public function resultadoImc($imc){
            $resultado;
            if($imc<16){
                $resultado="Delgadez severa";
            }
            elseif($imc>=16 && $imc<17){
                $resultado="Delgadez moderada";
            }
            elseif($imc>=17 && $imc<18.50){
                $resultado="Delgadez leve";
            }
            elseif($imc>=18.50 && $imc<25){
                $resultado="Peso normal";
            }
            elseif($imc>=25 && $imc<30){
                $resultado="Sobrepeso";
            }
            elseif($imc>=30 && $imc<35){
                $resultado="Obesidad: Tipo I";
            }
            elseif($imc>=35 && $imc<40){
                $resultado="Obesidad: Tipo II";
            }
            elseif($imc>45){
                $resultado="Obesidad: Tipo III";
            }
            
            return $resultado;
        }
        //Devuelve el peso ideal, en caso de no especificarse el sexo se devuelve cero.
        static public function pesoIdeal($peso,$altura,$sexo){
            $pesoIdeal=0;
            $sexo=strtolower($sexo);
            $altura=$altura*100;
            if($sexo=="hombre"){
                $pesoIdeal=((($altura-150)*0.75)+50);
            }
            elseif($sexo=="mujer"){
                $pesoIdeal=((($altura-150)*0.6)+50);
            }
            else{
                $pesoIdeal=0;
            }

            return $pesoIdeal;
        }
    }
?>