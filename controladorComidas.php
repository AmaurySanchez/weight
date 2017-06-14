<?php
session_start();
require_once "Calculos.php";
require_once "operacionesSql.php";
$persistencia= new OperacionesSql();
$desayuno= $persistencia->listaComidas("Desayuno");
$almuerzo= $persistencia->listaComidas("Almuerzo");
$comida= $persistencia->listaComidas("Comida");
$postre= $persistencia->listaComidas("Postre");
$merienda= $persistencia->listaComidas("Merienda");
$cena= $persistencia->listaComidas("Cena");
$fechas= $persistencia->fechas("reimy316@hotmail.com");

/* foreach($listado as $lista){
            echo $lista["nombre"]." ".$lista["calorias"]."<br/>";
}*/
?>