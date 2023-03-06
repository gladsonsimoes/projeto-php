<?php
namespace App;

class Connection{

// public $host = "locahost";
// $user = "root"
// $dbname = "mvc";
// $pass = "";
// $port = "3306";
// $charset = "utf8";

    public function getDb(){
        try{
            $conn = new PDO ("mysql:host=locahost;dbname=mvc;charset=utf8");

            return $conn;
        }catch(\PDOException $e){
            //tratar erros
        }
    }
}
?>