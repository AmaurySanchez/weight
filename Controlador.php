<?php 
//require_once "Modelo.php";
require_once "Calculos.php";

if((isset($_POST["peso"]) && isset($_POST["altura"])) && !isset($_POST["nivelActividadFisica"])){
    $imc=round((Calculos::calcularImc($_POST["peso"],$_POST["altura"])),2);
    $estado=Calculos::resultadoImc($imc);
     echo $imc." : ".$estado;
}
elseif(isset($_POST["peso"]) && isset($_POST["altura"]) && isset($_POST["sexo"]) && isset($_POST["edad"]) && isset($_POST["nivelActividadFisica"])){
    $peso=$_POST["peso"];
    $altura=$_POST["altura"];
    $sexo=$_POST["sexo"];
    $edad=$_POST["edad"];
    $nivelActividadFisica=$_POST["nivelActividadFisica"];
    $pesoMantener=round(Calculos::caloriasDiariasMantener($peso,$altura,$sexo,$edad,$nivelActividadFisica),2);
    $pesoBajar=round(Calculos::caloriasDiariasBajar($peso,$altura,$sexo,$edad,$nivelActividadFisica),2);
    $pesoSubir=round(Calculos::caloriasDiariasSubir($peso,$altura,$sexo,$edad,$nivelActividadFisica),2);

    echo "Calorias para mantener el peso: ".$pesoMantener."<br/>Calorias para bajar de peso: ".$pesoBajar."<br/>Calorias para subir de peso: ".$pesoSubir;
}

?>