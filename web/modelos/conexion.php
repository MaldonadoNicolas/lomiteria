<?php
    class conexion{
        public function conectar(){
            $host= "localhost";
            $usuario = "root";
            $password = "";
            $bd = "lomiteria";
            $conectar= new mysqli($host,$usuario,$password,$bd);
            return $conectar;
        }
    }
?>