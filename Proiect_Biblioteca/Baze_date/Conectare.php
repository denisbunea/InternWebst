<?php

class Conectare
{
    public static function connect(){
        $pdo = null;

        try{
            $pdo = new PDO('mysql:host=127.0.0.1; dbname=biblioteca', 'root' ,'camera601');
        }catch(PDOException $e){
            die($e->getMessage());
        }

        return $pdo;
    }
}



