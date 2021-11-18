<?php



class  Conectare
{
    

    public static function connect(){
        try{
            $pdo=new PDO('mysql:host=127.0.0.1; dbname=biblioteca', 'root' ,'camera601');
            
                echo "conectare reusita";
                }catch(PDOException $e){
                die($e->getMessage());
                }

    }


    

}



