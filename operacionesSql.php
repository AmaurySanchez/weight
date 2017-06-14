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
                $resultado="Ha habido un error y no se ha podido Mostrar el usuario";
            }
            $db=null;
            return $resultado;
        }

        public function login($email, $contraseña){
            $resultado="";
            $conex= new Conexion();
            $db=$conex->conex();
            $sql="select * from usuarios where email="."'".$email."'"." AND "."pass='".$contraseña."'";
            $stmt=$db->prepare($sql);
            $stmt->execute();
           
            if($res=$stmt->fetch(PDO::FETCH_ASSOC)){
                $resultado=$res;
            }
            else{
                $resultado=array();
            }
            $db=null;
            return $resultado;
        }

         public function listaComidas($tipo){
            $resultado=array();
            $conex= new Conexion();
            $db=$conex->conex();
            $sql="select * from comidas where tipo='".$tipo."'";
            $stmt=$db->prepare($sql);
            $stmt->execute();
           
            if($res=$stmt->fetchall(PDO::FETCH_ASSOC)){
                $resultado=$res;
            }
            else{
                $resultado=array();
            }
            $db=null;
            return $resultado;
        }
        
        public function guardarComidas($email,$codigoComida,$tipoComida){
            $fecha_actual = date("Y-m-d");
            $resultado=array();
            $conex= new Conexion();
            $db=$conex->conex();
            if($this->existeComida($email,$codigoComida,$fecha_actual)){
     
            }
            else{
                $sql="update usuarios_comidas set codigo_comida='".$codigoComida."', tipo_comida='".$tipoComida."' where fecha='$fecha_actual' and email='$email' and tipo_comida='$tipoComida'";
                $stmt=$db->prepare($sql);
                if($stmt->execute()){

                    if($stmt->rowCount()==0){
                        $sentencia=$db->prepare("insert into usuarios_comidas values (:fecha,:email,:codigo_comida,:tipo_comida)");
                        $sentencia->bindParam(':fecha',$fecha_actual);
                        $sentencia->bindParam(':email',$email);
                        $sentencia->bindParam(':codigo_comida',$codigoComida);
                        $sentencia->bindParam(':tipo_comida',$tipoComida);
                        $sentencia->execute();
                        $resultado=true;
                    }
                    
                    
                }
            }
           
            $db=null;
            return $resultado;
        }

         public function existeComida($email,$codigoComida){
            $resultado=false;
            $fechaComprobar = date("Y-m-d");
            $conex= new Conexion();
            $db=$conex->conex();
            $sql="select * from usuarios_comidas where email="."'".$email."' and fecha="."'".$fechaComprobar."' and codigo_comida="."'".$codigoComida."'";
            $stmt=$db->prepare($sql);
            $stmt->execute();
           
            if($res=$stmt->fetch(PDO::FETCH_ASSOC)){
                $resultado=true;
            }
            
            $db=null;
            return $resultado;
        }

          public function fechas($email){
            $resultado=array();
            $conex= new Conexion();
            $db=$conex->conex();
            $sql="select distinct fecha from usuarios_comidas where email="."'".$email."'";
            $stmt=$db->prepare($sql);
            $stmt->execute();
           
            if($res=$stmt->fetchAll(PDO::FETCH_ASSOC)){
                $resultado=$res;
            }
            
            $db=null;
            return $resultado;
        }

         public function caloriasDia($email,$codigoComida,$tipoComida){
            $resultado=array();
            $conex= new Conexion();
            $db=$conex->conex();
            $sql="select distinct fecha from usuarios_comidas where email="."'".$email."'";
            $stmt=$db->prepare($sql);
            $stmt->execute();
           
            if($res=$stmt->fetchAll(PDO::FETCH_ASSOC)){
                $resultado=$res;
            }
            
            $db=null;
            return $resultado;
        }


    }
?>