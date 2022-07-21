<?php
    class Conexion{
        public $mysql = null;
        function __construct() {
            try{
            $this->mysql = $this->getConnection();
            }catch(PDOException $ex){
                echo $ex->getMessage();
            }
        }
        private function getConnection(){
            $host = "localhost";
            $user = "root";
            $pass = "";
            $post=3306;
            $database = "agenda";
            $charset = "utf8";
            $opt = [PDO::ATTR_DEFAULT_FETCH_MODE =>PDO::FETCH_ASSOC];
            //pdo(dsn)
            $pdo = new PDO("mysql:host={$host};port={$post};dbname={$database};user=$user;password=$pass;");
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
    }