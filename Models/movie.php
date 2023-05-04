<?php
class Movie{
    public $titolo;
    public $anno;
    public $genere;
    public $descrizione;

    public function __construct($titolo, $anno, $genere, $descrizione){
        $this->titolo = $titolo;
        $this->anno = $anno;
        $this->genere = $genere;
        $this->descrizione = $descrizione;
    }
    public function getInformazioni(){
        return 'Il titolo è: ' . $this->titolo . ', è uscito nel: ' . $this->anno . ', genere: ' . $this ->genere . ', trama: ' . $this -> descrizione ;
    }
}