<?php

try{
    $db= new PDO("mysql:host=localhost;dbname=forma");
}catch(PDOException $e){
    echo "Se ha producido un error al intentar conectar al servidor MySQL: ".$e->getMessage();
}

?>