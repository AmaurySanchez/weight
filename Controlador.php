<?php 
//require_once "Modelo.php";
require_once "Calculos.php";
require_once "operacionesSql.php";
require_once "Usuario.php";

if(((isset($_POST["peso"]) && $_POST["peso"]!="") && (isset($_POST["altura"]) && $_POST["altura"]!="")) && !isset($_POST["nivelActividadFisica"]) && !isset($_POST["sexo"])){
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
    $pesoMantener=round(Calculos::caloriasDiariasMantener($peso,$altura,$sexo,$edad,$nivelActividadFisica));
    $pesoBajar=round(Calculos::caloriasDiariasBajar($peso,$altura,$sexo,$edad,$nivelActividadFisica));
    $pesoSubir=round(Calculos::caloriasDiariasSubir($peso,$altura,$sexo,$edad,$nivelActividadFisica));

    echo "Calorias para mantener el peso: ".$pesoMantener."<br/>Calorias para bajar de peso: ".$pesoBajar."<br/>Calorias para subir de peso: ".$pesoSubir;
}
elseif((isset($_POST["altura"]) && $_POST["altura"]!="") && (isset($_POST["sexo"]) && $_POST["sexo"]!="")){
    $altura=$_POST["altura"];
    $sexo=$_POST["sexo"];
    $pesoIdeal=Calculos::pesoIdeal($altura,$sexo);

    echo "Tu peso ideal es: ".$pesoIdeal;
}
elseif((isset($_POST["username"]) && $_POST["username"]!="") && (isset($_POST["weight"]) && $_POST["weight"]!="") && (isset($_POST["age"]) && $_POST["age"]!="") && (isset($_POST["height"]) && $_POST["height"]!="") && (isset($_POST["nivelActividadFisica"]) && $_POST["nivelActividadFisica"]!="") && (isset($_POST["email"]) && $_POST["email"]!="") && ((isset($_POST["password"]) && $_POST["password"]!="") && ($_POST["password"]==$_POST["confirm-password"])) && (isset($_POST["sexo"]) && $_POST["sexo"]!="")){
    $nombreUsuario=$_POST["username"];
    $peso=$_POST["weight"];
    $altura=$_POST["height"];
    $sexo=$_POST["sexo"];
    $edad=$_POST["age"];
    $nivelActividadFisica=$_POST["nivelActividadFisica"];
    $contraseña=$_POST["password"];
    $email=$_POST["email"];

        $user = new Usuario ($nombreUsuario,$sexo,$contraseña,$email,$peso,$altura,$edad,$nivelActividadFisica);
        $persistencia= new OperacionesSql();
        echo $persistencia->guardarUsuario($user);
}
elseif((isset($_POST["email"]) && $_POST["email"]!="") && (isset($_POST["password"]) && $_POST["password"]!="")){
    $contraseña=$_POST["password"];
    $email=$_POST["email"];
        $persistencia= new OperacionesSql();
        echo $persistencia->login($email,$contraseña)["nombre"];
}

?>