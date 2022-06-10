<?php
require('Joueur.php');
class Plateau {
   
    private int $nbMonstreParJoueur=5;
    private Joueur $joueurA ;
    private Joueur $joueurB ;
 
    public function __construct(Joueur $joueurA, Joueur $joueurB){
        $this->joueurA = $joueurA;
        $this->joueurA = $joueurB;
    }
 
   

    
    
}
