<?php 

// Class User
// enregistrer les donnés de l'utilisateur dans un fichier jason
// à laide dune fonctionpubliques saveUser() 


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

     public function saveUser() {
        $data = json_encode($this, JSON_PRETTY_PRINT);
        file_put_contents('utilisateur.json', $data);
        echo "Données utilisateur enregistrées avec succès dans le fichier JSON.";
    }

}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $user = new User($firstname, $lastname, $email, $age);

    $user->saveUser();
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form method="post">

        <label for="">Prénom</label>
        <input type="text" name="firstname">

        <br>

        <label for="">Nom</label>
        <input type="text" name="lastname">

        <br>

        <label for="">Email</label>
        <input type="text" name="email">

        <br>

        <label for="">Age</label>
        <input type="text" name="age">

        <br>

        <button type="submit">Enregistrer</button>

    </form>
    
</body>
</html>