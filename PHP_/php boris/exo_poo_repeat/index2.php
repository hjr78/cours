<?php 

Class User{

    public $name;
    public $firstname;
    public $email;

    public function __construct($nom, $prenom, $email){
        $this->name = $nom;
        $this->firstname = $prenom;
        $this->email = $email; 
    }

    public function presentation(){
        echo $this->firstname;
    }

}


if( !empty($_POST) ){
    
    if( !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) ){

       $utilisateur = new User($_POST['lastname'], $_POST['firstname'], $_POST['email']);
       $utilisateur->presentation();

    }

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
        <label for="">Prenom</label>
        <input type="text" name="firstname">

        <label for="">Nom</label>
        <input type="text" name="lastname">

        <label for="">Email</label>
        <input type="text" name="email">

        <input type="submit" value="Newsletter">
    </form>
</body>
</html>