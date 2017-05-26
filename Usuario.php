<?php 
    class Usuario{
        private $nombre="";
        private $sexo="";
        private $pass="":
        private $email="";
        private $peso=0.0;
        private $altura=0;
        private $imc=0;
        private$pesoIdeal=0;
        private $estado="";

        public function __construct($nombre,$sexo,$pass,$email,$peso,$altura){
            this->nombre=$nombre;
            this->sexo=$sexo;
            this->pass=$pass;
            this->email=$email;
            this->peso=$peso;
            this->altura=$altura;
        }

        //Getters
        public function getNombre(){
            return this->nombre;
        }

        public function getSexo(){
            return this->sexo;
        }

        public function getPass(){
            return this->pass;
        }

        public function getEmail(){
            return this->email;
        }

        public function getpeso(){
            return this->peso;
        }

        public function getAltura(){
            return this->altura;
        }

        public function getimc(){
            return this->imc;
        }

        public function getPesoIdeal(){
            return this->pesoIdeal;
        }

        public function getEstado(){
            return this->estado;
        }

        //Setters

        public function setNombre($nombre){
            this->nombre=$nombre;
        }

        public function setSexo($sexo){
            this->sexo=$sexo;
        }

        public function setPass($pass){
            this->pass=$pass;
        }

        public function setEmail($email){
            this->email=$email;
        }

        public function setPeso($peso){
            this->peso=$peso;
        }

        public function setAltura($altura){
            this->altura=$altura;
        }

        public function setImc($imc){
            this->imc=$imc;
        }

        public function setEstado($estado){
            this->estado=$estado;
        }

    }
?>