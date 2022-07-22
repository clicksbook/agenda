<?php
require_once("mdlConexion.php");
class mdlTemplate extends Conexion{
    static public function getURl($url){
        try{
            $pdo = new Conexion();
            $pdo->mysql->beginTransaction();
            $stmt=$pdo->mysql->prepare("SELECT * FROM tb_template WHERE url = :url AND status=1");
            $stmt->bindParam(":url",$url,PDO::PARAM_STR);
            $stmt->execute();
            return $stmt->fetch();
            $pdo->mysql->commit();
            $pdo=null;
            $stmt=null;
        }catch(PDOException $ex){
            echo 'La base de datos a generado el siguiente error: '.$ex->getMessage();
        }
    }
}