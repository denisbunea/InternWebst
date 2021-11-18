<?php

require 'Client.php';

class Profesor extends Client{

public $materiePredata;

public function __construct($categorie,$nume,$nrCartiImprum,$dataRetur,$materiePredata)
{
    $this->categorie=$categorie;
    $this->nume=$nume;
    $this->nrCartiImprum=$nrCartiImprum;
    $this->dataRetur=$dataRetur;
    $this->materiePredata=$materiePredata;
  
    
}

function afiseaza(){
    echo " Clientul este {$this->categorie} se numeste  {$this->nume} are {$this->nrCartiImprum} imprumutate si le returneaza
     pe data de {$this->dataRetur} . El preda {$this->materiePredata}";
    
}

function insert($categorie,$nume,$nrCartiImprum,$dataRetur,$materiePredata){
    //Conectare::connect();
    try{
        $pdo=new PDO('mysql:host=127.0.0.1; dbname=biblioteca', 'root' ,'camera601');
        
            echo "<br>Conectare reusita <br>";
            }catch(PDOException $e){
            die($e->getMessage());
            }
    
    try{
        
        $sql = "INSERT INTO `clienti` (`categorie`, `nume`,`nrCarti`, `dataRetur`,`materiePredata`) 
        VALUES (?,?,?,?,?)";
        $statement= $pdo->prepare($sql);
        $statement->execute([$categorie,$nume,$nrCartiImprum,$dataRetur,$materiePredata]);
        echo 'Sa inserat Profesorul <br>';
        }
        catch(PDOException $e){
            
         echo  'Profesor existent';
    
    }


    

}
}

$prof= new Profesor('Profesor','Mircea Ioan',1,'','Geologie');
 $prof->insert('Profesor','Mircea Ioan',1,'1','Geologie');




