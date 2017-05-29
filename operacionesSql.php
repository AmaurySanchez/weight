<?php

        require_once "Conexion.php";
        require_once "Calculos.php";
      Class OperacionesSql extends Conexion{
        
        public function guardarUsuario($usuario){
            $resultado="";
            $conex= new Conexion();
            $db=$conex->conex();
            $sentencia=$db->prepare("insert into usuarios values (:nombre,:sexo,:pass,:email,:peso,:altura,:imc,:pesoIdeal,:estado)");
            $sentencia->bindParam(':nombre',$usuario->getNombre());
            $sentencia->bindParam(':sexo',$usuario->getSexo());
            $sentencia->bindParam(':pass',$usuario->getPass());
            $sentencia->bindParam(':email',$usuario->getEmail());
            $sentencia->bindParam(':peso',$usuario->getPeso());
            $sentencia->bindParam(':altura',$usuario->getAltura());
            $sentencia->bindParam(':imc',$usuario->getImc());
            $sentencia->bindParam(':pesoIdeal',$usuario->getPesoIdeal());
            $sentencia->bindParam(':estado',$usuario->getEstado());
            if($sentencia->execute()){
                $resultado="El usuario se ha creado correctamente";
            }
            else{
                $resultado="Ha habido un error y no se ha podido crear el usuario";
            }
            $db=null;
            return $resultado;
        }
    }
?>