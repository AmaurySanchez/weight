<?php 
//require_once "Modelo.php";
require_once "Calculos.php";

if((isset($_POST["peso"]) && isset($_POST["altura"])) && !isset($_POST["sexo"])){
    $imc=round((Calculos::calcularImc($_POST["peso"],$_POST["altura"])),2);
    $estado=Calculos::resultadoImc($imc);
     echo $imc." : ".$estado;
}
elseif(isset($_POST["peso"]) && isset($_POST["altura"]) && isset($_POST["sexo"]) && isset($_POST["edad"]) && isset($_POST["nivelActividadFisica"])){
    echo "Holaaa";
}

?>