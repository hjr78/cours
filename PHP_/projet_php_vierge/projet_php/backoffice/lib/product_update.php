<?php

if(!empty($_POST)){

    extract($_POST);
    $image = $_FILES['image']['name'];
    $iduser = $_SESSION['id_user'];

    if(  !empty($title) && !empty($price) && !empty($stock) && !empty($description) && !empty($image) && !empty($categorie)){

        $sqlUpdate = "UPDATE product SET `title` = '$title', `price` = '$price', `description` = '$description', `image` = '$image', `stock` = '$stock', `discount` = '$discount', `id_category` = $categorie WHERE `id_product` = $idprd";

        mysqli_query($db_connect, $sqlUpdate); 
    }
     $folder = "img/upload/";
        $imgResult = $folder.$image;
        $tmpName = $_FILES['image']['tmp_name'];

        $type = $_FILES['image']['type'];

        if($type == "image/jpeg" || $type == "image/png" || $type == "image/webp"){

            
            if( move_uploaded_file( $tmpName, $imgResult)) {
                echo "Image Upload avec succes";
            }else{
                echo "Erreur image non conforme";
            }

        }else{
            echo "Mauvais format d'image, JPEG,PNG ou WEBP only !";
        }

    }





?>