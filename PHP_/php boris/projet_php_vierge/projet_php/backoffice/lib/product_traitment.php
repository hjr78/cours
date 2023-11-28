<?php
require_once("db.php");

if(!empty($_POST)){
    extract($_POST);
    $image = $_FILES['image']['name'];

    if( !empty($title) && !empty($description) && !empty($price) && !empty($stock) && !empty($image) && !empty($categorie)){
        

        $iduser = $_SESSION['id_user'];

        $title = str_replace("'", "'", $title);
        $description = str_replace("'", "''", $description);

        $sqlProductInsert = "INSERT INTO `product`(`title`, `price`, `description`, `image`, `stock`, `id_user`, `discount`, `id_category`) VALUES ('$title','$price','$description','$image','$stock','$iduser','$discount', '$categorie')";

        echo $sqlProductInsert;

        mysqli_query($db_connect, $sqlProductInsert);


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


}

?>