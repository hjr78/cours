<?php

session_start();
// se connecter a la base de donner require_once
require_once('backoffice/lib/db.php');
// appeler select_product_by_id.php
require_once('backoffice/lib/select_product.php');

$sqlSelectCategory = "SELECT * FROM `category` c WHERE EXISTS ( SELECT 1 FROM `product` p WHERE p.`id_category` = c.`id_category` )";
$tableSelectCategory = mysqli_query($db_connect, $sqlSelectCategory);
$category = mysqli_fetch_all($tableSelectCategory, MYSQLI_ASSOC);
//reutiliser dans une boucle foreach le tablea $product qui se trouve dans ce que jia appeler au dessus
// print_r($product);
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MyShop</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>

 

    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">MyCar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    </ul>


                    <?php 
                    
                    if(empty($_SESSION)){
                    ?>
                    <form class="d-flex" style="    margin-right: 10px;">
                        <a class="btn btn-outline-dark" href="backoffice/login.php">
                            <i class="bi-box-arrow-in-right me-1"></i>
                            connection
                            <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                        </a>
                    </form>
                    <form class="d-flex">
                        <a class="btn btn-outline-dark" href="backoffice/register.php">
                            <i class="bi-file-earmark-diff me-1"></i>
                            registration
                            <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                        </a>
                    </form>

                    <?php } else{ ?>


                     <form class="d-flex">
                        <a class="btn btn-outline-dark" href="backoffice/lib/deconnexion.php">
                            <i class="bi-file-earmark-diff me-1"></i>
                            Déconnexion
                            <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                        </a>


                    <?php } ?>

                    <?php 
                    if(!empty($_SESSION)){
                    if( $_SESSION['user_statut'] != 0){ 
                    ?>


                     <form class="d-flex" style=" margin-right: 10px;">
                        <a class="btn btn-outline-dark" href="backoffice/lib/deconnexion.php">
                            <i class="bi-file-earmark-diff me-1"></i>
                            Dashboard
                            <!-- <span class="badge bg-dark text-white ms-1 rounded-pill">0</span> -->
                        </a>


                    <?php 
                        }
                    }
                    ?>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Shop your car</h1>
                    <p class="lead fw-normal text-white-50 mb-0">family business since the 1980s</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">

            <div class="mb-4">
            
            <a href="index.php"></a>

                    <?php 
                    
                    foreach($category as $key){

                        echo '<a href="index.php?category='.$key["id_category"].'" class="btn btn-outline-primary">'.$key["category_name"].' </a>';

                         if(mysqli_num_rows($tableSelectCategory) === 0 ){

                            header("Location : index.php");
                            exit;
                         }
                       
                    }
                    ?>
           
           
           
           

            </div>


                    
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php foreach($products as $key){?>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">SALE <?php echo $key['discount']; ?>%</div>
                                <!-- Product image-->
                                <img class="card-img-top" src="backoffice/img/upload/<?php echo $key['image']; ?>" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><?php echo $key['title']; ?></h5>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Product price-->
                                        <span class="<?php if(!empty($key['discount'])){
                                            echo "text-muted text-decoration-line-through"; } ?>" >
                                        
                                        <?php 
                                        
                                        $nombre_format_francais = number_format($key['price'], 2, ',', ' ');
                                        echo $nombre_format_francais;
                                        ?>$</span>

                                        <?php 
                                        if(!empty($key['discount']) ){
                                        $prixTotal= $key['price']-($key['price'] * $key['discount'] / 100); 
                                        $nombre_format_francais = number_format($prixTotal, 2, ',', ' ');
                                        echo $nombre_format_francais. '$';
                                           } ?>

                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="./single_article/index.php?idproduct=<?php echo $key['id_product'] ?>">View product</a></div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
