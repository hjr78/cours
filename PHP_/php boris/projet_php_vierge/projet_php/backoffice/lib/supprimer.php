<?php

require_once('db.php');

$idproduit = $_GET['idproduit']; //id du programme 

//1) requete sql
$sqlDeleteProduct = "DELETE FROM product WHERE `id_product` = $idproduit";
if(mysqli_query($db_connect, $sqlDeleteProduct)){

    // echo"Le produit a bien été supprimé";
    header('Location: ../index.php');

}else{

    // echo "Echec lors de la supression du produit";


}

//2)redirection sur page deashboard


?>