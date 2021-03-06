<?php 
//require_once "Modelo.php";
session_start();
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
        if(isset($persistencia->login($email,$contraseña)["nombre"])){
            //echo $persistencia->login($email,$contraseña)["nombre"];
            $_SESSION["email"]=$email;
            $_SESSION["contraseña"]=$contraseña;
            echo true;
        }
        else{
            // echo $persistencia->login($email,$contraseña)["error"];
        }
}

elseif(isset($_POST["desayunos"])){
    $desayunos=explode(',',$_POST["desayunos"]);
    
        $persistencia= new OperacionesSql();
        $persistencia->guardarComidas($_SESSION["email"],$desayunos[0],$desayunos[1]);
        if(isset($_POST["almuerzos"])){
            $almuerzos=explode(',',$_POST["almuerzos"]);
            $persistencia->guardarComidas($_SESSION["email"],$almuerzos[0],$almuerzos[1]);
        }
        elseif(isset($_POST["comidas"])){
            $comidas=explode(',',$_POST["comidas"]);
            $persistencia->guardarComidas($_SESSION["email"],$comidas[0],$comidas[1]);
        }
         elseif(isset($_POST["postres"])){
             $postres=explode(',',$_POST["postres"]);
            $persistencia->guardarComidas($_SESSION["email"],$postres[0],$postres[1]);
        }
         elseif(isset($_POST["meriendas"])){
             $meriendas=explode(',',$_POST["meriendas"]);
            $persistencia->guardarComidas($_SESSION["email"],$meriendas[0],$meriendas[1]);
        }
         elseif(isset($_POST["cenas"])){
             $cenas=explode(',',$_POST["cenas"]);
            $persistencia->guardarComidas($_SESSION["email"],$cenas[0],$cenas[1]);
        }

}



?>