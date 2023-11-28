<?php



Class Orders{

    public $db;

    public function __construct($db){
        $this->db = $db;
    } 


    
    public function newOrder($post, $session){
        
        extract($post);
        $id_user = $session['id_user'];
        $quantity=1;
        
        $sql = $this->db->prepare('INSERT INTO orders (`id_article`,`id_user`,`quantity`) VALUES (:id_article, :id_user, :quantity)');
        $sql->bindParam(':id_article', $id_article, PDO::PARAM_INT);
        $sql->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        $sql->bindParam(':quantity', $quantity,PDO::PARAM_INT);
        $sql->execute();
        
    }
    

    
    public function selectAll($session){

        $id_user = $session['id_user'];

        $sql = $this->db->prepare('SELECT * FROM `orders` INNER JOIN `article` ON orders.id_article = article.id_article WHERE orders.id_user = :id_user;');
        print_r($sql);
        $sql->bindParam(':id_user', $id_user, PDO::PARAM_INT);
        $sql->execute();

        $orders = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $orders;

        
    }


    public function deleteOrder($post){

        extract($post);
        // $id_orders

        $sql = $this->db->prepare('DELETE FROM orders WHERE `id_orders` = :id_orders');
        $sql->bindParam(':id_orders', $id_orders, PDO::PARAM_INT);
        $sql->execute();


        $success = "La commande  été retirée";
        return $success;

        

    }


   public function modifOrder($post, $session){

   extract($post);

    $id_orders = $session['id_orders'];
    $quantity = $new_quantity;

    $sql = $this->db->prepare('UPDATE orders SET `quantity` = :quantity WHERE `id_orders` = :id_orders');
    $sql->bindParam(':quantity', $quantity, PDO::PARAM_INT);
    $sql->bindParam(':id_orders', $id_orders, PDO::PARAM_INT);
    $sql->execute();

    $success = "La commande a été modifiée";
    return $success;
}


}



?>


<!-- delete from order inner join -> requete sql pour supp -->