<?php 

Class Article{

    public $db;

    public function __construct( PDO $db ){
        $this->db = $db;
    }
    
    public function selectAll(){

        $select = $this->db->prepare("SELECT * FROM article");
        // SELECT * FROM article
        $select->execute();
        // objet row = 3, col = 4
        $articles = $select->fetchAll(PDO::FETCH_ASSOC);
        return $articles;

    }

    public function selectById( $id_article ){
        
        $idarticle = $id_article; 
        $select = $this->db->prepare("SELECT * FROM article where `id_article` = :idarticle ");
        $select->bindParam(':idarticle', $idarticle, PDO::PARAM_INT); 
        $select->execute();
        $article = $select->fetch(PDO::FETCH_ASSOC);
        return $article;

    }

    public function insert($form, $files, $id_user, $userPower){

        if ($userPower == 1) {
        // print_r($form);
        extract($form);
        // print_r($files);
        $image = $files['image']['name'];

        $insertArticle = $this->db->prepare('INSERT INTO article ( `title`, `price`, `image`, `id_user`) values ( :title, :price, :image, :id_user )');
        $insertArticle->bindParam(':title', $title, PDO::PARAM_STR);
        $insertArticle->bindParam(':price', $price);
        $insertArticle->bindParam(':image', $image);
        $insertArticle->bindParam(':id_user', $id_user);
        $insertArticle->execute();
    
        $folder = "images/upload/"; 
        $path = $folder.$image; // "images/upload/monimage.jpg
        $tmpName = $_FILES['image']['tmp_name'];
        move_uploaded_file($tmpName, $path); 

    }else{
        echo"Vous n'avez pas les droits nécessaires pour pouvoir créer un article.";
    }
}


    public function articleSession($form){
        

        if(!array_key_exists('orders', $_SESSION)) { 
            $_SESSION['orders']= array();
        }

            $_SESSION['orders'] = array_merge($_SESSION['orders'], array ($form) );
            print_r($_SESSION);
        
        
    }

}


?>