<?php

Class User{

    public $lastname;
    public $firstname;
    public $email;
    public $age;

    public function __construct($prenom, $nom, $email, $age){
         $this->firstname = $prenom; 
         $this->lastname = $nom;
         $this->email = $email;
         $this->age = $age;
    }

    public function presentation(){
        echo $this->firstname." ".$this->lastname;
    }

    public function verifAge(){
        if($this->age >= 18){
            echo " Utilisateur Majeur";
        }else{
            echo " Utilisateur Mineur";
        }
    }
}

$user1 = new User('Damien', 'Dupont', 'damien.dupont@gmail?com',15);
$user2 = new User('Boris', 'Aubrun', 'brois.aubrun@gmail.com', 27);

$user1 -> presentation();
$user1 ->verifAge();
?>
