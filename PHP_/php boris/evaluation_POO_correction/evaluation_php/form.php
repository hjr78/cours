<?php 

require_once('lib/db.php');
require_once('lib/class/Produit.php');

$produit = new Produit($db);

if( !empty($_POST)){

    if( !empty($_POST['title']) && !empty($_POST['description']) && !empty($_POST['price']) && !empty($_POST['city']) && !empty($_POST['postal_code']) && !empty($_FILES['image']) ){

        $produit->insertProduit($_POST, $_FILES);

    }

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

        <section class="py-5" style="width:100%;max-width:400px;margin:0 auto">
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleInputEmail1">Titre</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <input type="text" name="description" class="form-control" id="exampleInputPassword1" required>
                </div> 
                <div class="form-group">
                    <label for="exampleInputPassword1">prix</label>
                    <input type="number" name="price" class="form-control" id="exampleInputPassword1" required>
                </div> 
                <div class="form-group">
                    <label for="exampleInputPassword1">ville</label>
                    <input type="text" name="city" class="form-control" id="exampleInputPassword1"  required>
                </div> 
                <div class="form-group">
                    <label for="exampleInputPassword1">Code Postal</label>
                    <input type="text" name="postal_code" class="form-control" id="exampleInputPassword1" required>
                </div> 
                <div class="form-group">
                    <label for="exampleInputPassword1">Image</label>
                    <input type="file" name="image" class="form-control" id="exampleInputPassword1" required >
                </div>
                <input id='validate' type='submit' name='submit' value='Créer le produit'>
                </form>
            </section>

        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Amazon From Scratch 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        
        <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
