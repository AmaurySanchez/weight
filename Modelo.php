<?php
    require_once "Calculos.php";
    require_once "Usuario.php";
    require_once "operacionesSql.php";

    $user = new Usuario ("Amaury","Hombre","124587","reimy316@hotmail.com",94,1.73);
    $persistencia= new OperacionesSql();

    //echo round((Calculos::calcularImc($user->getPeso(),$user->getAltura())),2);
    //echo Calculos::resultadoImc(Calculos::calcularImc($user->getPeso(),$user->getAltura()));
    //echo Calculos::pesoIdeal($user->getPeso(),$user->getAltura(),$user->getSexo());

        echo $persistencia->guardarUsuario($user);

?>