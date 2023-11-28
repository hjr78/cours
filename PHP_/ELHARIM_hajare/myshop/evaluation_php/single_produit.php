<?php 

require_once('lib/db.php');
// require_once('components/produit_byid.php');
require_once('lib/product.php');


$id = $_GET['idproduit'];

$classProduit = new Produit($db);
$produit = $classProduit->selectById($id);


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
    <!-- Navigation-->
    <?php include('components/nav.php'); ?>
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

                <?php include('components/produit_byid.php'); ?>
                <form method="post">
						<input type="hidden" name="id_article" value="<?php echo $produit['id_produit'];?>">
						<input type="hidden" name="title" value="<?php echo $produit['title'];?>">
						<input type="hidden" name="price" value="<?php echo $produit['price'];?>">
						<input type="hidden" name="image" value="<?php echo $produit['image'];?>">
				</form>

            </div>
        </div>
    </section>


    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Amazon From Scratch 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>