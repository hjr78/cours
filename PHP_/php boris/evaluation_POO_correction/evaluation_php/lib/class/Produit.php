<?php 

Class Produit{

    public $db;

    public function __construct( PDO $db){

        $this->db = $db;

    }

    public function insertProduit( $post, $files){

        // print_r($post);
        extract($post);

        $image = $files['image']['name'];
        $tmp_image = $files['image']['tmp_name'];

        $sql = $this->db->prepare('INSERT INTO produit (`title`,`description`,`price`,`city`,`postal_code`,`image`) VALUES (:title,:description,:price,:city,:postal_code,:image)');
        $sql->bindParam(':title', $title, PDO::PARAM_STR);
        $sql->bindParam(':description', $description, PDO::PARAM_STR);
        $sql->bindParam(':price', $price, PDO::PARAM_INT);
        $sql->bindParam(':city', $city, PDO::PARAM_STR);
        $sql->bindParam(':postal_code', $postal_code, PDO::PARAM_INT);
        $sql->bindParam(':image', $image, PDO::PARAM_STR);
        $sql->execute();

        $path = "assets/image/upload/";
        $pathTotal = $path.$image;
        move_uploaded_file($tmp_image, $pathTotal);

        header('Location: index.php');
    }

    public function selectAllProduit(){

        $sql = $this->db->prepare('SELECT * FROM produit ORDER BY `id_produit` DESC LIMIT 15');
        $sql->execute();
        $resultat = $sql->fetchAll(PDO::FETCH_ASSOC);

        return $resultat;

    }

    public function selectById($get){
        $id_produit = $get['id_produit'];

        $sql = $this->db->prepare('SELECT * FROM produit WHERE `id_produit` = :id_produit');
        $sql->bindParam(':id_produit', $id_produit, PDO::PARAM_INT);
        $sql->execute();

        $produit = $sql->fetch(PDO::FETCH_ASSOC);
        
        return $produit;

    }

    public function updateById( $post ){

        $id_produit = $post['id_produit'];
        $reservation_text = $post['reservation_text'];

        $sql = $this->db->prepare('UPDATE produit SET `reservation_text` = :reservation_text WHERE `id_produit` = :id_produit ');
        $sql->bindParam(':reservation_text', $reservation_text, PDO::PARAM_STR);
        $sql->bindParam(':id_produit', $id_produit, PDO::PARAM_INT);
        $sql->execute();

        header('Location: index.php');

    }

}









?>