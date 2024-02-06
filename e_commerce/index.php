<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>e_commerce</title>

    <!-- lien css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- lienn cdnjs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- lien bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- lien google apis -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<!-- lien google fonts (pour lecriture) -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

</head>


<body>

    <header>
        <!-------- navbar ------------>
        <?php
        include('composants/nav.php');
        ?>
        <!---------fin navbar----------->

        <!------------- carousel ----------->

        <div class="image">
            <h1 style="text-align: center;"> Une cuisine, une histoire ! <br> Prenez goût à cuisiner</h1>
            <a class="btn btn-dark mt-4" href="new.php">Découvrez</a>
        </div>

        <!-------------fin carousel-------------->
    </header>


    <!-- body -->


    <!-- <h1 class="text-center fst-italic mt-4 mb-4">Notre histoire</h1> -->

    <div id="container" >
        <!-- <div id="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure quaerat, accusantium asperiores commodi, at assumenda placeat cupiditate dolores quae autem neque ut maxime? Dignissimos harum aspernatur alias! Autem, quia numquam magni adipisci labore ullam perferendis expedita soluta cumque distinctio! Esse architecto cumque sapiente libero nobis magni ipsam debitis accusamus adipisci ex! Modi autem molestias saepe aspernatur, itaque laudantium officiis voluptate tempora aperiam tempore illum accusantium vero omnis reiciendis? Beatae, veniam!</div>
    <img id="image" src="./image/artisan-notrehistoire.jpg" alt="Image"> -->
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./image/artisan-notrehistoire.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./image/groupe-notrehistoire.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./image/artisan-notrehistoire.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="carousel-description">
            <h2>A Propos de Nous</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni aperiam perferendis iusto voluptatem mollitia itaque temporibus, laborum odit assumenda fugit veniam rerum magnam voluptatum, architecto recusandae sed. Incidunt, commodi quas!</p>
        </div>
    </div>

<!-- best seller -->

    <div id="bestseller">
        <h2>Nos Best-Seller</h2>
        

<section class="hero-section">
  <div class="card-grid">
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(./image/Cuisine2.jpg)"></div>
      <div class="card__content">
        <p class="card__category">BEST SELLER</p>
        <h3 class="card__heading"></h3>
      </div>
    </a>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(./image/cuisine_en_noir_et_bois.jpg)"></div>
      <div class="card__content">
        <p class="card__category">BEST SELLER</p>
        <h3 class="card__heading"></h3>
      </div>
    </a>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(./image/Cuisine2.jpg)"></div>
      <div class="card__content">
        <p class="card__category">BEST SELLER</p>
        <h3 class="card__heading">  </h3>
      </div>
    </li>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(./image/cuisine_d_accueil.jpg)"></div>
      <div class="card__content">
        <p class="card__category">BEST SELLER</p>
        <h3 class="card__heading"></h3>
      </div>
    </a>
  <div>
</section>
    </div>

<!-- fin best seller -->

<!-- contactez-nous -->
<div id="contact" class="d-flex">
  
    <div class="descriptioncontact">
      <h2>Contactez Nous</h2>
      <p class="textcontact" style="text-align: center;">Besoin d'aide ou d'informations?<br> Notre équipe est à votre écoute ! <br> Contactez-nous pour une assistance personnalisée et rapide. </p>
      <a class="btn btn-dark mt-4" href="contact.php">Contactez-nous</a>
    </div>

    <div class="imagecontact">
      <img src="./image/teleconseiller2.jpg" alt="">
    </div>

</div>
    <!-- fin body -->

    <!-- footer -->
<?php
        include('composants/footer.php');
        ?>

    <!-- fin footer -->
    <!-- SCRIPT -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="./JS/script.js"></script>
</body>

</html>