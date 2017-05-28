<?php
    require_once "Calculos.php";
    require_once "Usuario.php";

    $user = new Usuario ("Evilla","Mujer","124587","reimy316@hotmail.com",45,1.56);

    //echo round((Calculos::calcularImc($user->getPeso(),$user->getAltura())),2);
    //echo Calculos::resultadoImc(Calculos::calcularImc($user->getPeso(),$user->getAltura()));
    echo Calculos::pesoIdeal($user->getPeso(),$user->getAltura(),$user->getSexo());
?>