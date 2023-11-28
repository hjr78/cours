<?php

class Vehicule {
    private $litreEssence;

    public function setlitreEssence($arg){
        $this->litreEssence = $arg;
    }
    public function getlitreEssence(){
        return $this->litreEssence;
    }
}

$vehicule1 = new Vehicule;
$vehicule1->setlitreEssence(5);

echo '<br> Le véhicule 1 possède  : ' . $vehicule1->getlitreEssence() . " Litres d'essence. <br>";


class Pompe {
    private $litreEssence;

    public function setlitreEssence($arg){
        $this->litreEssence = $arg;
    }
    public function getlitreEssence(){
        return $this->litreEssence;
    }
    public function donnerEssence(Vehicule $v){
        
    }
}

$pompe1 = new Pompe;
$pompe1->setlitreEssence(800);

echo '<br> La pompe possède : ' . $pompe1->getlitreEssence() . " Litres d'essence .<br>"



?>