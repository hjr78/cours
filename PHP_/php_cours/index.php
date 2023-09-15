<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP</h1>
    <h2>Premier cours</h2>

    <?php
        $prenom = "hajare"; //string
        echo $prenom;

        $age = 19; //int

        $vrai = TRUE; //BOOL

        $float = 19.99; //float

        if( $age >= 18){
            echo " <br> L'utilisateur est majeur";
        }else{
            echo "<br> L'utilisateur est mineur";
        }

        for($i=0; $i < 10; $i++){
            echo " <div>Produit numero ".$i." </div> ";
        }

        $color = array('red', 'blue', 'green');
        print_r($color);
        echo "<br>";
        var_dump($color);

        foreach($color as $c){
            echo "<br>" .$c;
        }

        for($o = 0; $o < count($color); $o++){
            echo "<br>" .$color[$o];
        }

        $nbrDiv = 3;
        $color = array('red', 'blue', 'green', 'yellow');

        for($i = 0; $i <=$nbrDiv; $i++){
            echo '<div style="background-color:' .$color[$i]. '; width: 50px; height: 50px ;"></div>';
        }


        function verifAge( $age ){
            // SI $age >= 18
            if($age >= 18){
                echo " <br> OK";
            }else{
                echo " <br> Refusé <br>";
            }
        }

        verifAge(22);
        echo "<br>";
        verifAge(15);

        // Creer une fonction "initiales" qui prend
        // en paramètre votre Nom et Prenom
        // et qui renvoie la première lettre de chaque chaine 

        // exemple

        function nameInit($prenom, $nom){
            echo "<p>$prenom[0] $nom[0]</p>" ;
        }


        nameInit("Boris", "Aubrun");
        // resultat: BA


        function dice(){
            $result = random_int(0, 20);
            echo $result;

            if ($result==20){
                echo "<br>reussite";

            }elseif ($result == 0){
                echo "<br>echec";
            }else{
                echo "<br>".$result;
            }
        }

        dice();

        // Créer une fonction qui prend en paramètre "Couleur"
        // qui aura pour but de créer un bloc html (div) avec les dimensions précedement données via les paramètres 
        // largeur devra etre aleatoire enrtre 10px et 140px
        // longueur devra etre aleatoire entr e10 et 140px
        // Couleur devra etre definies par vos soins

        function createDiv($bgcolor){
            $height = random_int(10, 140);
            $width = random_int(10, 140);

            echo "<div style='height:".$height."px;width:".$width."px; background-color:".$bgcolor."'> </div>";
        }

        createDiv ('red');

        // exo bonus
        // Créer une fonction calculatrice

        function calculette($nombre1, $nombre2, $operation){
            if($operation == "+") {
                echo $nombre1 + $nombre2;
            }elseif($operation == "-"){
                echo $nombre1 - $nombre2;
            }elseif($operation == "*"){
                echo $nombre1 * $nombre2;
            }elseif($operation == "/"){
                echo $nombre1 / $nombre2;
            }
        }

        calculette(5, 3, '+');
        calculette(11, 5, '-');
        calculette(577, 33, '*');
        calculette(200, 5, '/');


    ?>
</body>
</html>