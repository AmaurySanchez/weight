<?php
    require_once "Calculos.php";
    require_once "Usuario.php";

    $user = new Usuario ("Amaury","Hombre","124587","reimy316@hotmail.com",85,1.73);

    echo round(Calculos::calcularImc($user->getPeso(),$user->getAltura()));
?>