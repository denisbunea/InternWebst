<?php

class Carte {
    //public $id;
    public $titlu;
    public $autor;
    public $gen;
    public $nrPagini;
    public $carteImprumutata;

    function __construct( $titlu,$autor,$gen,$nrPagini,$carteImprumutata)
    {
//        $this->$id=$id;
        $this->$titlu=$titlu;
        $this->$autor=$autor;
        $this->$gen=$gen;
        $this->$nrPagini=$nrPagini;
        $this->$carteImprumutata=$carteImprumutata;
    }

    
function insert($titlu,$autor,$gen,$nrPagini,$carteImprumutata){
    //Conectare::connect();
    try{
        $pdo=new PDO('mysql:host=127.0.0.1; dbname=biblioteca', 'root' ,'camera601');
        
            echo "<br>Conectare reusita <br>";
            }catch(PDOException $e){
            die($e->getMessage());
            }
    
    try{
        
        $sql = "INSERT INTO `carte` (`titlu`, `autor`,`gen`, `nrPag`,`carteDisponibila`) 
        VALUES (?,?,?,?,?)";
        $statement= $pdo->prepare($sql);
        $statement->execute([$titlu,$autor,$gen,$nrPagini,$carteImprumutata]);
        echo 'Sa inserat Cartea <br>';
        }
        catch(PDOException $e){
            
         echo  'Carte existenta';
    
        }
    }
}


$Carte1=new Carte('Salut','Miri Oane','Drama',144,1);
$Carte1->insert('Salut','Miri Oane','Drama',144,1);


$Carte2=new Carte('Salut viteaz','Miri Oane','Drama',230,1);
$Carte2->insert('Salut viteaz','Miri Oane','Drama',230,1);
