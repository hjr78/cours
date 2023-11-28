<?php

class Produit
{

    public $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function selectAll()
    {

        $select = $this->db->prepare("SELECT * FROM produit");
        $select->execute();

        $produits = $select->fetchAll(PDO::FETCH_ASSOC);
        return $produits;
    }

    public function selectLimit($limit){

        $select = $this->db->prepare("SELECT * FROM produit ORDER BY id_produit DESC LIMIT $limit");
        // SELECT * FROM article
        $select->execute();
        // objet row = 3, col = 4
        $produit = $select->fetchAll(PDO::FETCH_ASSOC);
        return $produit;

    }
    
    public function selectById($id_produit)
    {

        $idproduit = $id_produit;
        $select = $this->db->prepare("SELECT * FROM produit where id_produit = :idproduit ");
        $select->bindParam(':idproduit', $idproduit, PDO::PARAM_INT);
        $select->execute();
        $produit = $select->fetch(PDO::FETCH_ASSOC);
        return $produit;
    }

    public function insert($form, $files)
    {

        extract($form);
        // print_r($files);
        $image = $files['image']['name'];

        $insertProduit = $this->db->prepare('INSERT INTO `produit`(`title`, `description`, `price`, `city`, `postal_code`,`image`) VALUES (:title,:description,:price,:city,:postal_code,:image)');
        $insertProduit->bindParam(':title', $titre, PDO::PARAM_STR);
        $insertProduit->bindParam(':description', $description);
        $insertProduit->bindParam(':price', $prix);
        $insertProduit->bindParam(':city', $ville);
        $insertProduit->bindParam(':postal_code', $code_postal);
        $insertProduit->bindParam(':image', $image);
        $insertProduit->execute();

        $folder = "images/";
        $path = $folder . $image; // "images/upload/monimage.jpg
        $tmpName = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmpName, $path);
    }


    // public function articleSession($form){


    //     if(!array_key_exists('orders', $_SESSION)) { 
    //         $_SESSION['orders']= array();
    //     }

    //         $_SESSION['orders'] = array_merge($_SESSION['orders'], array ($form) );
    //         print_r($_SESSION);


    // }


}
