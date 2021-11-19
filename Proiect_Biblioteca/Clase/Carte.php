<?php

class Carte {
    public $titlu;
    public $autor;
    public $gen;
    public $nrPagini;
    public $carteImprumutata;

    function __construct($titlu,$autor,$gen,$nrPagini,$carteImprumutata)
    {
        $this->$titlu=$titlu;
        $this->$autor=$autor;
        $this->$gen=$gen;
        $this->$nrPagini=$nrPagini;
        $this->$carteImprumutata=$carteImprumutata;
    }

    function insert()
    {
        $pdo = Conectare::connect();

        if ($pdo) {
            try{
                $sql = "INSERT INTO `carte` (`titlu`, `autor`,`gen`, `nrPag`,`carteDisponibila`) VALUES (?,?,?,?,?)";
                $statement= $pdo->prepare($sql);
                $statement->execute([$this->titlu,$this->autor,$this->gen,$this->nrPagini,$this->carteImprumutata]);
                echo 'Sa inserat Cartea <br>';
            }
            catch(PDOException $e){
                echo  'Carte existenta';
            }
        }
    }
}