<?php

        require_once "Conexion.php";
        require_once "Calculos.php";
      Class OperacionesSql extends Conexion{
        
        public function guardarUsuario($usuario){
            $resultado="";
            $conex= new Conexion();
            $db=$conex->conex();
            $sentencia=$db->prepare("insert into usuarios values (:nombre,:sexo,:pass,:email,:peso,:altura,:imc,:pesoIdeal,:estado,:edad,:nivelActividadFisica)");
            $sentencia->bindParam(':nombre',$usuario->getNombre());
            $sentencia->bindParam(':sexo',$usuario->getSexo());
            $sentencia->bindParam(':pass',$usuario->getPass());
            $sentencia->bindParam(':email',$usuario->getEmail());
            $sentencia->bindParam(':peso',$usuario->getPeso());
            $sentencia->bindParam(':altura',$usuario->getAltura());
            $sentencia->bindParam(':imc',$usuario->getImc());
            $sentencia->bindParam(':pesoIdeal',$usuario->getPesoIdeal());
            $sentencia->bindParam(':estado',$usuario->getEstado());
            $sentencia->bindParam(':edad',$usuario->getEdad());
            $sentencia->bindParam(':nivelActividadFisica',$usuario->getNivelActividadFisica());
            if($sentencia->execute()){
                $resultado="El usuario se ha creado correctamente";
            }
            else{
                $resultado="Ha habido un error y no se ha podido crear el usuario";
            }
            $db=null;
            return $resultado;
        }

        public function borrarUsuario($usuario){
            $resultado="";
            $conex= new Conexion();
            $db=$conex->conex();
            $sql="delete from usuarios where email="."'".$usuario->getEmail()."'";
           
            if($db->exec($sql)){
                $resultado="El usuario se ha borrado correctamente";
            }
            else{
                $resultado="Ha habido un error y no se ha podido borrar el usuario";
            }
            $db=null;
            return $resultado;
        }

        public function mostrarUsuarios(){
            $resultado="";
            $conex= new Conexion();
            $db=$conex->conex();
            $sql="select * from usuarios";
            $stmt=$db->prepare($sql);
            $stmt->execute();
           
            if($res=$stmt->fetchall(PDO::FETCH_ASSOC)){
                $resultado=$res;
            }
            else{
                $resultado="Ha habido un error y no se ha podido mostrar a los usuarios el usuario";
            }
            $db=null;
            return $resultado;
        }

        public function mostrarUsuario($campo){
            $resultado="";
            $conex= new Conexion();
            $db=$conex->conex();
            $sql="select * from usuarios where email="."'".$campo."'";
            $stmt=$db->prepare($sql);
            $stmt->execute();
           
            if($res=$stmt->fetch(PDO::FETCH_ASSOC)){
                $resultado=$res;
            }
            else{
                $resultado="Ha habido un error y no se ha podido borrar el usuario";
            }
            $db=null;
            return $resultado;
        }
        


    }
?>