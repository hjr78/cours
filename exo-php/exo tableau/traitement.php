<?php

//verifie si le formulaire a été soumis (lorsque le bouton 'Envoyer' est cliqué)

if(isset($_POST['Envoyer'])){
    //Initialise une variable pour stocker les erreurs du formulaire
    $erreur = "";
    // La fonction exttract ($_POST) permet d'extraire les donnnées du tableau $_POST et de créer des variables avec les noms correspondants.
    extract($_POST);


    $nom = filter_var($nom,FILTER_SANITIZE_SPECIAL_CHARS);  //filter= nettoie le nom  et le prénom en supprimant les caractères spéciaux
    $prenom = filter_var($prenom,FILTER_SANITIZE_SPECIAL_CHARS);

    //pour chaque caractère special, il effectue l'une des actions suivantes:
        //*Il le supprime s'il est dangereux ou non désiré
        //*Il se convertit en son équivalent html entité, ce qui signifie qu'il le remplace par une séquence de caractères HTML qui est sécuritaire à afficher dans une page web
        
        //Validation de l'email en utilisant la fonction filter_var
        if(filter_var($email,FILTER_VALIDATE_EMAIL) === false){
            $erreur .= "Email incorrect <br>";
        }

        //Vérifie si le champ 'domaine' n'est pas défini

        if(!isset($domaine)){
            $erreur .= "Vous devez choisir un domaine <br>";
        }

        // Vérifie si le champs 'lang' n'est pas définis
        if(!isset($lang)){
            $erreur .= "Vous devez choisir au moin un langage <br>";
        }

        //Vérifie si le champs pays n'est pas défini ou est vide
        if(!isset($pays) || empty($pays)){
            $erreur .="Vous devez choisir votre pays <br>";
        }

        //Vérifie si le champs sexe n'est pas défini ou est vide 
        if(!isset($sexe)){
            $erreur .= "vous devez choisir votre sexe<br>";
        }

        //aficher les erreurs s'il y en a 
        if($erreur !=""){
            die($erreur); //la fonction die arrête immédiatement l'éxécution du script PHP et affiche le contenu de la variable $erreur
        }else{
            //si le formulaire est valide, affiche les résultats dans un tableau html
            $resultat ="<table table border>";
            $resultat .="<tr><td>Champs</td><td>Valeur</td></tr>";
            $resultat .="<tr><td>Nom</td><td>$nom</td></tr>";
            $resultat .="<tr><td>Prenom</td><td>$prenom</td></tr>";
            $resultat .="<tr><td>Email</td><td>$email</td></tr>";
            $resultat .="<tr><td>Sexe</td><td>$sexe</td></tr>";

            //La fonction implode pour rassembler les éléments du tableau 'domaine' en une chaîne séparée par des virgules
            $resultat .="<tr><td>Domaine</td><td>" .implode(",",$domaine)."</td></tr>";
            $resultat .="<tr><td>Pays</td><td>$pays</td></tr>";
            $resultat .="<tr><td>Langage</td><td>" .implode(",",$lang)."</td></tr>";

            $resultat .="</table>";

            echo $resultat;
        }
}


?>