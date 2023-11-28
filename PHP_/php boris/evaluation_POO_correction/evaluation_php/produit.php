<?php 

require_once('lib/db.php');
require_once('lib/class/Produit.php');

$produit = new Produit($db);
$prd = $produit->selectById($_GET);

// print_r($prd);

if( !empty($_POST) ){

    $produit->updateById($_POST);

}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        
        <!-- Navigation -->
        <?php include('composant/nav.php'); ?>

        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Amazon From Scratch</h1>
                </div>
            </div>
        </header>

        <!-- Section Articles-->

        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100" style="width: 400px;">
                            <?php if( !empty($prd['reservation_text']) ){ ?>
                                <!-- Sale badge-->
                                <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">reserver</div>  
                            <?php } ?>
                            <!-- Product image-->
                            <img class="card-img-top" src="assets/image/upload/<?php echo $prd['image'];?>" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $prd['title'];?></h5>
                                    <!-- Product price-->
                                    <?php echo $prd['price'];?>€
                                </div>
                                <div class="text-center">
                                    <h6><?php echo $prd['description'];?></h6>
                                </div>
                                <div class="text-center">
                                    <h6><?php echo $prd['city'];?></h6>
                                </div>
                                <div class="text-center">
                                    <h6><?php echo $prd['postal_code'];?></h6>
                                </div>

                                <?php if( !empty($prd['reservation_text']) ){ ?>
                                    <div class="text-center">
                                        <h6>Produit réservé : <?php echo $prd['reservation_text'];?></h6>
                                    </div>
                                <?php } ?>

                                <?php if( empty($prd['reservation_text']) ){ ?>
                                    <div class="text-center">
                                        <form method="post">
                                            <label>Reservé le produit</label>
                                            <input type="textarea" name="reservation_text">
                                            <input type="hidden" name="id_produit" value="<?php echo $prd['id_produit']; ?>">
                                            <input type="submit" value="Je réserve">
                                        </form>
                                    </div>
                                <?php } ?>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="">Consulter un produit</a></div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </section>

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Amazon From Scratch 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
