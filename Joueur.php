<?php
require_once('Monstre.php');

class Joueur {
    private string $pseudo;
    private int $ptsVie = 30;
    private int $ptsMana = 10;
    private array $monstresPlace = array();
 
    public function __construct($pseudo){
        $this->pseudo = $pseudo;
    }
 
    public function getMonstresPlace(){
        return $this->monstresPlace;
    }
 
    public function placerMonstre(Monstre $monstre){
 
        if( count($this->monstresPlace)  < 5 ){
            $this->monstresPlace[] = $monstre;
        }
    }
}