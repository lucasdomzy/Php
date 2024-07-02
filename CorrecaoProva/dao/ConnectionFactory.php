<?php

    class ConnectionFactory{
        static $connection;

        public static getConnection(){
            $host = "localhost";
            $banco = "vista";
            $user = "root";
            $password = "1234";
            $port = "3306";
            try{
                $connection = new PDO("mysql:host=$host;dbname=$banco;port=$port",$user, $pass);
                echo "Conectado";
                return $connection;
            }catch(PDOException $ex){
                echo "ERRO: " . $ex->getMessage();
            }
            return
        }
    }

?>