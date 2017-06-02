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

         public function deNivelActividadASuplemento($nivelActividadFisica){
            $multiplicador=0;

            if($nivelActividadFisica==1){
                $multiplicador= 1.2;
            }
            elseif($nivelActividadFisica==2){
                $multiplicador= 1.375;
            }
             elseif($nivelActividadFisica==3){
                $multiplicador= 1.55;
            }
             elseif($nivelActividadFisica==4){
                $multiplicador= 1.725;
            }
             elseif($nivelActividadFisica==5){
                $multiplicador= 1.9;
            }
            return $multiplicador;
        }

         static public function caloriasDiariasMantener($peso,$altura,$sexo,$edad,$nivelActividadFisica){
            $caloriasDiarias=0;
            $multiplicador=calculos::deNivelActividadASuplemento($nivelActividadFisica);
            $sexo=strtolower($sexo);
            $altura=$altura*100;
            if($sexo=="hombre"){
                $caloriasDiarias=((66 + (13.7 * $peso))  +  ((5 * ($altura))) - ((6.8 * $edad)))*$multiplicador;
            }
            elseif($sexo=="mujer"){
                $caloriasDiarias=((655 + (9.6 * $peso))  +  ((1.8 * ($altura))) - ((4.7 * $edad)))*$multiplicador;
            }
            else{
                $caloriasDiarias=0;
            }

            return $caloriasDiarias;
        }

        static public function caloriasDiariasBajar($peso,$altura,$sexo,$edad,$nivelActividadFisica){
            $caloriasDiarias=0;
            $multiplicador=calculos::deNivelActividadASuplemento($nivelActividadFisica);
            $sexo=strtolower($sexo);
            $altura=$altura*100;
            if($sexo=="hombre"){
                $caloriasDiarias=(((66 + (13.7 * $peso))  +  ((5 * ($altura))) - ((6.8 * $edad)))*$multiplicador)*0.85;
            }
            elseif($sexo=="mujer"){
                $caloriasDiarias=(((655 + (9.6 * $peso))  +  ((1.8 * ($altura))) - ((4.7 * $edad)))*$multiplicador)*0.85;
            }
            else{
                $caloriasDiarias=0;
            }

            return $caloriasDiarias;
        }

         static public function caloriasDiariasSubir($peso,$altura,$sexo,$edad,$nivelActividadFisica){
            $caloriasDiarias=0;
            $multiplicador=calculos::deNivelActividadASuplemento($nivelActividadFisica);
            $sexo=strtolower($sexo);
            $altura=$altura*100;
            if($sexo=="hombre"){
                $caloriasDiarias=(((66 + (13.7 * $peso))  +  ((5 * ($altura))) - ((6.8 * $edad)))*$multiplicador)/0.85;
            }
            elseif($sexo=="mujer"){
                $caloriasDiarias=(((655 + (9.6 * $peso))  +  ((1.8 * ($altura))) - ((4.7 * $edad)))*$multiplicador)/0.85;
            }
            else{
                $caloriasDiarias=0;
            }

            return $caloriasDiarias;
        }

       
    }


?>