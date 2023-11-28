<?php 

Class User{

    public $db;

    public function __construct( PDO $db ){

        $this->db = $db;

    }

    public function register( $form ){
        // $form contient $_POST
        extract($form);

        if($password == $repeatPassword && strlen($password) >= 8 ){
            // echo "Vos mots de passe concordent.";
            $verifEmail = $this->db->prepare("SELECT * FROM user WHERE `email` = :email");
            $verifEmail->bindParam(':email', $email);
            $verifEmail->execute();
            $nb_ligne = $verifEmail->rowCount();
            // echo $nb_ligne;

            if( $nb_ligne == 0 ){
                // echo "Email valide";

                $cryptedPwd = md5($password);
                $power = 0;
                $insertUser = $this->db->prepare("INSERT INTO user (`firstname`,`lastname`,`email`,`password`,`power`) VALUES (:firstname, :lastname, :email, :password , :power)");

                $insertUser->bindParam(':firstname',$firstname);
                $insertUser->bindParam(':lastname',$lastname);
                $insertUser->bindParam(':email',$email);
                $insertUser->bindParam(':password',$cryptedPwd);
                $insertUser->bindParam(':power', $power);
            
                $insertUser->execute();



            }else{
                // echo "Email déjà existant !";
            
            
            }



        }else{
            // echo "Mot de passe pas indentique OU inférieur à 8 caractères.";
        }
    }

    public function login( $form ){

        extract($form);
        $cryptedPwd = md5($password);
        $verifUser = $this->db->prepare("SELECT * FROM user WHERE `email` = :email AND `password` = :password ");
        $verifUser->bindParam(':email', $email);
        $verifUser->bindParam(':password', $cryptedPwd);
        $verifUser->execute();
        $nb_ligne = $verifUser->rowCount(); // 1 = utilisateur existant, 0 = mauvais ID

        if( $nb_ligne == 1 ){
            
            $userInfo = $verifUser->fetch(PDO::FETCH_ASSOC); // on récupère le résultat de la requete sql, cette fois ci, sous forme de tableau associatif 

            $_SESSION['id_user'] = $userInfo['id_user'];
            $_SESSION['firstname'] = $userInfo['firstname'];
            $_SESSION['lastname'] = $userInfo['lastname'];
            $_SESSION['email'] = $userInfo['email'];
            $_SESSION['power'] = $userInfo['power'];

            header('Location: index.php');

        }else{
            echo "Mauvais Identifiant";
        }
    }
}









?>