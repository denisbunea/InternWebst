<?php

abstract class Client{
    public $cod;
    public $categorie;
    public $nume;
    public $nrCartiImprum;
    public $dataRetur;

    public function __construct($cod,$categorie,$nume,$nrCartiImprum,$dataRetur)
    {
        $this->cod=$cod;
        $this->categorie=$categorie;
        $this->nume=$nume;
        $this->nrCartiImprum=$nrCartiImprum;
        $this->dataRetur=$dataRetur;
    }

}



