<?php 
//require_once "Modelo.php";
require_once "Calculos.php";

if(isset($_POST["peso"]) && isset($_POST["altura"])){
     echo round((Calculos::calcularImc($_POST["peso"],$_POST["altura"])),2);
}
else{
    echo "error";
}

?>