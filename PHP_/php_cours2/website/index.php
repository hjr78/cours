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
    <?php
    if (!empty($_POST)) {
        $file2 = fopen('log/color.txt', 'w');

        $logColor = $_POST["color"];

        fwrite($file2, $logColor);
        fclose($file2);
        $fileColor = file_get_contents('./log/color.txt');
        // echo $fileColor;
    }
    ?>
    <?php

    if (!empty($_POST)) {

        if (!empty($_POST["titleSite"]) && !empty($_POST["titleHeader"]) && !empty($_POST["subTitleHeader"])) {

            $formTable = array(
                "titreSite" => $_POST["titleSite"],
                "titreHeader" => $_POST["titleHeader"],
                "sousTitreSite" => $_POST["subTitleHeader"],
                "imgCard" => $_FILES["fileImg"]['name'],
            );
            // echo print_r($formTable);

            $jsonFormTable = json_encode($formTable);

            file_put_contents('admin/donnees.json', $jsonFormTable);

            $jsonData = file_get_contents('admin/donnees.json');
            $decodeFormTable = json_decode($jsonData, true);
            // echo $decodeFormTable['titreSite'];
        }
    }

    ?>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">
                
            <?php
                if (!empty($decodeFormTable['titreSite'])) {
                echo $decodeFormTable['titreSite'];
                } else {
                echo "Titre du site";
                }
             ?></a>

             
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">All Products</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                            <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi-cart-fill me-1"></i>
                        Cart
                        <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Header-->
    <header style="background-color:<?php echo "$fileColor"; ?>!important;" class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">
                <?php
                    if (!empty($decodeFormTable['titreHeader'])) {
                     echo $decodeFormTable['titreHeader'];
                    } else {
                    echo "Titre du header";
                    }
                ?></h1>

                <p class="lead fw-normal text-white-50 mb-0">  
                <?php
                    if (!empty($decodeFormTable['sousTitreSite'])) {
                    echo $decodeFormTable['sousTitreSite'];
                    } else {
                    echo "Sous-titre";
                    }
                ?></p>
            </div>
        </div>
    </header>
    
    <!-- Section-->
    <section class="py-5">
        <div class="container px-4 px-lg-5 mt-5">


            <!-- Formulaire -->
            <form method="POST">
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" placeholder="Insérer votre Email @">
                <br>
                <label for="firstname">Prénom</label>
                <input type="text" id="firstname" name="firstname" placeholder="Votre prénom">
                <br>
                <label for="lastname">Nom</label>
                <input type="text" id="lastname" name="lastname" placeholder="Votre nom">
                <br>
                <input type="submit" value="je m'inscris"></input>
                <!-- <button type="submit">Je m'inscris</button> -->
            </form>


<br>
<br>



            <?php
echo "<pre>";
print_r($_FILES);
echo "</pre>";

$uploadImage = "assets/images/";
$uploadFile = $uploadImage.$_FILES['fileImg']['name'];

if(move_uploaded_file($_FILES['fileImg']['tmp_name'], $uploadFile)){
    echo "image niquel !";

}else{
    echo "!!!! Image Hacker !!!!";
}

if (!empty($_POST["firstname"])) {
    if (strlen($_POST["firstname"]) < 5) {
        echo "<p style='color:red;'>ERREUR</p>";
    } else {
        echo "<p style='color:green;'>Valide</p>";
        $dateActuelle = date("[d-m-Y H:i:s]");
        $file = fopen('log/data.txt', 'a+');
        
        $log = "$dateActuelle L'utilisateur : " . $_POST["email"] . " a réussi à s'inscrire";
        
        fwrite($file, $log . PHP_EOL);
        fclose($file);
    }
}

?>


<!-- Formulaire couleur -->
<form method="POST" enctype="multipart/form-data">
    <label for="color">Changer la couleur du header</label>
    <input type="color" name="color" id="color">
    <br>
    <label for="titleSite">Changer le Titre du site</label>
    <input type="text" name="titleSite" id="titleSite">
    <br>
    <label for="titleHeader">Changer le Titre du header</label>
    <input type="text" name="titleHeader" id="titleHeader">
    <br>
    <label for="subTitleHeader">Changer le Sous-Titre du header</label>
    <input type="text" name="subTitleHeader" id="subTitleHeader">
    <br>
    <label for="fileImg">Changer l'image de la carte</label>
    <input type="file" name="fileImg" id="fileImg">
    <br>
    <button type="submit">Mettre à jour</button>
</form>

<br>







            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">

                <div class="col mb-5">
                    <div class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="assets/images/<?php echo $decodeFormTable['imgCard']; ?>" alt="..." />
                        <!-- https://dummyimage.com/450x300/dee2e6/6c757d.jpg -->
                        <!-- Product details-->
                        <div class="card-body p-4">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Popular Item</h5>
                                <!-- Product reviews-->
                                <div class="d-flex justify-content-center small text-warning mb-2">
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                    <div class="bi-star-fill"></div>
                                </div>
                                <!-- Product price-->
                                $40.00
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>