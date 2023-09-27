<?php

// print_r($_FILES);


if (!empty($_FILES)){



    $image = $_FILES['image']['name'];
    $tmpname = $_FILES['image']['tmp_name'];
    $iduser = $_SESSION['id_user'];
    $type = $_FILES['image']['type'];

    if( $type == "image/jpeg" || $type == "image/png" || $type == "image/webp"){

        $folder =  "img/avatar/";
        $upload = $folder.$image;

        if(move_uploaded_file($tmpname, $upload) ){
            echo "transfert réussi";
        }else{
            echo "Echec du transfert";
        }

        $sqlUpdateImage = "UPDATE user SET `user_image` = '$image' WHERE `id_user` = '$iduser' ";
        mysqli_query($db_connect, $sqlUpdateImage);

        $_SESSION['user_image'] = $image;

    }else{

        echo "Type d'image non pris en charge";
    }
}

?>