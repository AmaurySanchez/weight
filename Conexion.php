<?php
    Class Conexion{
        
        public function conex(){
        try{
            $db= new PDO("mysql:host=localhost;dbname=training","root");
        }
        catch(PDOException $e){
            echo "Se ha producido un error al intentar conectar al servidor MySQL: ".$e->getMessage();
        }
            return $db;
        }
}
?>