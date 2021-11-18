<?php
require 'Client.php';

class Student extends Client{

public $facultate;
public $anStudiu;

public function __construct($categorie,$nume,$nrCartiImprum,$dataRetur,$facultate,$anStudiu)
{
    $this->categorie=$categorie;
    $this->nume=$nume;
    $this->nrCartiImprum=$nrCartiImprum;
    $this->dataRetur=$dataRetur;
    $this->facultate=$facultate;
    $this->anStudiu=$anStudiu;
    
}

function afiseaza(){
    echo " Clientul este {$this->categorie} se numeste {$this->nume} are {$this->nrCartiImprum} imprumutate si le returneaza
     pe data de {$this->dataRetur} . El este la  facultatea {$this->facultate} in anul {$this->anStudiu} ";
    }

function insert($categorie,$nume,$nrCartiImprum,$dataRetur,$facultate,$anStudiu){
    //Conectare::connect();
    try{
        $pdo=new PDO('mysql:host=127.0.0.1; dbname=biblioteca', 'root' ,'camera601');
        
            echo "conectare reusita <br>";
            }catch(PDOException $e){
            die($e->getMessage());
            }
    
    try{
        
        $sql = "INSERT INTO `clienti` (`categorie`, `nume`,`nrCarti`, `dataRetur`,`facultate`,`anStudiu`) 
        VALUES (?,?,?,?,?,?)";
        $statement= $pdo->prepare($sql);
        $statement->execute([$categorie,$nume,$nrCartiImprum,$dataRetur,$facultate,$anStudiu]);
        echo 'Sa inserat studentul <br>';
        }
        catch(PDOException $e){
            
         echo  'Student existent';
    
    }


    

}

}

//$abc= new Student('student','Ange', 3,'24.03.2021', 'ASE',3);
//echo '\nAici se termina';
//$abc->insert('student','Ange', 3,'24.03.2021', 'ASE',3);
$acb= new Student('Student','Ali Livian',1,'09.03.2021','Litere',2);
 $acb->insert('Student','Ali Livian',1,'09.03.2021','Litere',2);

