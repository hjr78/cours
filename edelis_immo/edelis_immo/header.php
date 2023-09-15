<?php session_start(); ob_start(); error_reporting(0);

require_once("lib/var.php");

require_once("lib/functions.php");



// récupère le tracking

$track = tracking("nomDuProgramme",$_GET['utm_campaign'],$_GET['utm_medium'],$_GET['utm_source'],$_GET['utm_content'], $_GET['utm_term']);

?>

<!DOCTYPE html>

<html lang="fr">

<head>

    <!-- Google Tag Manager -->
 <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

    })(window,document,'script','dataLayer','GTM-W7SXMQV');</script> 

    <!-- End Google Tag Manager -->



    <title>Edelis - Immobilier neuf en France</title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <meta name="description" content="Edelis vous accompagne dans votre projet immobilier : achat d’un appartement neuf pour habiter ou pour investir, découvrez notre offre.">



    <link rel="apple-touch-icon" sizes="57x57" href="favicon/apple-icon-57x57.png">

    <link rel="apple-touch-icon" sizes="60x60" href="favicon/apple-icon-60x60.png">

    <link rel="apple-touch-icon" sizes="72x72" href="favicon/apple-icon-72x72.png">

    <link rel="apple-touch-icon" sizes="76x76" href="favicon/apple-icon-76x76.png">

    <link rel="apple-touch-icon" sizes="114x114" href="favicon/apple-icon-114x114.png">

    <link rel="apple-touch-icon" sizes="120x120" href="favicon/apple-icon-120x120.png">

    <link rel="apple-touch-icon" sizes="144x144" href="favicon/apple-icon-144x144.png">

    <link rel="apple-touch-icon" sizes="152x152" href="favicon/apple-icon-152x152.png">

    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-icon-180x180.png">

    <link rel="icon" type="image/png" sizes="192x192"  href="favicon/android-icon-192x192.png">

    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">

    <link rel="icon" type="image/png" sizes="96x96" href="favicon/favicon-96x96.png">

    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">

    <link rel="manifest" href="favicon/manifest.json">

    <meta name="msapplication-TileColor" content="#ffffff">

    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">

    <meta name="theme-color" content="#ffffff">

       <meta property="og:title" content="<?= $meta_og->titre ?>"/>

    <meta property="og:description" content="<?= $meta_og->resume ?>" />

    <meta property="og:type" content="article" />

    <meta property="og:url" content="<?= $json->url ?>"/>

    <meta property="og:image" content="<?= $meta_og->image ?>" />

    <meta property="og:image:width" content="<?= $meta_og->image_info->width ?>" />

    <meta property="og:image:height" content="<?= $meta_og->image_info->height ?>" />

	<?php require_once('assets/fonts/fonts.html');?>

    <?php require_once('css/style.html');?>



    <style type="text/css">

        .loader{

            width: 100%;

            height: 100vh;

            position: fixed;

            top: 0;

            left: 0;

            z-index: 9999;

            background-color: #2b3b4c;

            display: flex;

            align-items: center;

            justify-content: center;

        }

        .loader img{

            width: 500px;

        }

        .byqaZe a{

            font-size: 13px;



        }

    </style>

</head>



<body class="actif">

   

    <!-- Google Tag Manager (noscript) -->

     <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-W7SXMQV"

    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> 

    <!-- End Google Tag Manager (noscript) -->



    <div class="loader">

        <?php $time = time(); ?>

        <img src="images/loader.gif?ts=$time" alt="logo edelis">

    </div>

   

    <?php include_once ('lib/cookies.php');?>



    <header>

        <div class="logo_container">

            <img src="images/logo.png" alt="logo edelis, immobilier neuf" style="width: 90px;height: 100px;">

        </div>

        

        <nav>

            <a class="item_menu item_menu_fondement" href="#fondements">

                <span>

                <img src="images/01.svg"><br/>

                Notre métier</span>

            </a>

            <a class="item_menu item_menu_programmes" href="#programmes">

                <span>

                <img src="images/02.svg"><br/>

                programmes <br/>

                en cours</span>

            </a>

            <a class="item_menu item_menu_ref" href="#references">

                <span>

                <img src="images/03.svg"><br/>

                nos références</span>

            </a>

            <a class="item_menu item_menu_construction" href="#construction">

                <span>

                <img src="images/04.png"><br/>

                Construction<br/>

                et innovation</span>

            </a>

            <a class="item_menu item_menu_developpement" href="#developpement">

                <span>

                <img src="images/05.svg"><br/>

                Développement<br/>

                durable</span>

            </a>

            <a class="item_menu item_menu_partenariat" href="#partenariat">

                <span>

                <img src="images/06.svg"><br/>

                Partenariats</span>

            </a>

            <a class="item_menu item_menu_carrieres" href="#carrieres">

                <span>

                <img src="images/07.svg"><br/>

                Carrières</span>

            </a>

        </nav>





        <a href="javascript:return false;" class="item_menu_contact open_page"  data-href="#contact">

            <span>

                <img src="images/08.svg"><br/>

                Contact</span>

        </a>



    </header>

