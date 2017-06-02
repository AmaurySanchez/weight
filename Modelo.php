<?php
    require_once "Calculos.php";
    require_once "Usuario.php";
    require_once "operacionesSql.php";

    $user = new Usuario ("Amaury","Hombre","124587","reimy316@hotmail.com",89,1.73,28,2);
    $user2 = new Usuario ("Webster","Hombre","124587","sokerone@hotmail.com",75,1.85,22,3);
    $user3 = new Usuario ("Eva","Mujer","124587","eva29@gmail.com",46,1.56,26,2);
    $user4 = new Usuario ("Casi","Mujer","124587","eva29@gmail.com",62,1.57,56,2);
    $persistencia= new OperacionesSql();

    //echo round((Calculos::calcularImc($user4->getPeso(),$user4->getAltura())),2);
    //echo Calculos::resultadoImc(Calculos::calcularImc($user4->getPeso(),$user4->getAltura()));
    echo Calculos::pesoIdeal($user4->getPeso(),$user4->getAltura(),$user4->getSexo());

        echo $persistencia->guardarUsuario($user2);
        echo $persistencia->guardarUsuario($user);
        //echo $persistencia->borrarUsuario($user);
       // echo $persistencia->mostrarUsuarios($user);
       /*$usuarios=$persistencia->mostrarUsuarios();
       foreach($usuarios as $usuario){
            echo $usuario["nombre"]." ".$usuario["email"]."<br/>";
       }*/

     //  $usuario=$persistencia->mostrarUsuario("sokerone@hotmail.com");
       //echo $usuario["nombre"];

       echo Calculos::caloriasDiariasMantener($user4->getPeso(),$user4->getAltura(),$user4->getSexo(),$user4->getEdad(),$user4->getNivelActividadFisica())."<br/>";
       echo Calculos::caloriasDiariasBajar($user4->getPeso(),$user4->getAltura(),$user4->getSexo(),$user4->getEdad(),$user4->getNivelActividadFisica())."<br/>";
       echo Calculos::caloriasDiariasSubir($user4->getPeso(),$user4->getAltura(),$user4->getSexo(),$user4->getEdad(),$user4->getNivelActividadFisica())."<br/>";

?>