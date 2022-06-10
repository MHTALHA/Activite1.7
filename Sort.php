<?php
require_once('Monstre.php');
class Sort {

 private int $coutMana;
 private int $nbDegat;

 
 public function __construct(int $coutMana,int $nbDegat){

        $this->coutMana=$coutMana;
        $this->nbDegat=$nbDegat;
 }

public function getNbDegat(){

   return $this->nbDegat;
}

 


 public function attaquer(Monstre $monstre){

    $monstre->minusNbVie($this->nbDegat);
 }

 

}
$monstre1 = new Monstre(2,10,5);
$sort1 = new Sort(2,6);
//echo $sort2->getNbDegat().PHP_EOL;
echo $sort1->attaquer($monstre1);
