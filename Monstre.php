<?php
declare(strict_type=1);

class Monstre {

 private int $coutMana;
 protected int $ptsVie;
 private int $nbDegat;

 
 public function __construct(int $coutMana,int $ptsVie,int $nbDegat){

        $this->coutMana=$coutMana;
        $this->ptsVie=$ptsVie;
        $this->nbDegat=$nbDegat;
 }

 public function getPtsVie(){
   return $this->ptsVie;
   
}
public function getNbDegat(){

   return $this->nbDegat;
}
public function minusNbVie($nbDegat){

    return $this->ptsVie-=$nbDegat;
 }
 


 public function attaquer(Monstre $monstre){
        if($this->nbDegat>$monstre->ptsVie){
            return 0;
        }else
    return $monstre->minusNbVie($this->nbDegat);
 }

 

}
$monstre1 = new Monstre(2,10,5);
$monstre2 = new Monstre(2,8,2);
//echo $monstre2->getPtsVie().PHP_EOL;
echo $monstre1->attaquer($monstre2);
//echo $monstre2->getPtsVie();