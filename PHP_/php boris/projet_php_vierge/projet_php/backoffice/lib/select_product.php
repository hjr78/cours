<?php 

if ( !empty($_GET['category'])){

    $getKey = $_GET['category'];
    $sqlCategoryVerif = "SELECT * FROM category WHERE `id_category`= $getKey";
    $tableCategoryVerif = mysqli_query($db_connect, $sqlCategoryVerif);
    $category = $_GET['category'];

    if(mysqli_num_rows($tableCategoryVerif) == 1){
    $category = $_GET['category'];
    $sqlSelectProduct =  "SELECT * FROM `product` WHERE `id_category` = $category";
    $tableSelectProduct = mysqli_query($db_connect, $sqlSelectProduct);

    $products = mysqli_fetch_all( $tableSelectProduct, MYSQLI_ASSOC);

    }else{
        header('Location: index.php');
    }
    
}else{

    $sqlSelectProduct = "SELECT * FROM `product`";
    $tableSelectProduct = mysqli_query($db_connect, $sqlSelectProduct);

    $products = mysqli_fetch_all( $tableSelectProduct, MYSQLI_ASSOC);
}


// print_r($product);


?>