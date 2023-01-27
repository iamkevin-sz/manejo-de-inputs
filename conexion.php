<?php

    class Conexion{
        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $db = "pruebatecnica";
        private $conect;
    

        public function __construct(){

            try {
                $connectionString = "mysql:host=".$this->host.";dbname=".$this->db.";charset=utf8";
                $this->conect = new PDO($connectionString,$this->user,$this->password);
                $this-> conect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                // echo "Conexion Exitosa"; 
            } catch (PDOException $e) {
                $this->conect = "Error de conexion";
                echo "Error:". $e->getMessage();
            }
        }

        public function connect(){
            return $this->conect;
        }
    }

    // $conexiondb = new Conexion();
    // var_dump($conexiondb);
?>