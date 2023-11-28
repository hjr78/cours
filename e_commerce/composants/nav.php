<?php
    // print_r($_SERVER);
    // echo $_SERVER['REQUEST_URI'];
    $current_page = basename( $_SERVER['REQUEST_URI'] );
    // echo $current_page;
?>
 <!-------- navbar ------------>
            <nav class="navbar navbar-expand-lg p-0 fixed-top">
                <div class="container-fluid d-flex ">
                    <a class="navbar-brand text-dark">E-COMMERCE</a>
                    
                    <div id="navbarNavAltMarkup">
                        <div class="un navbar-nav">
                            <a class="nav-link <?php if( $current_page == "index.php" ){ echo 'active-h'; } ?>" href="index.php">Accueil</a>
                            <a class="nav-link <?php if( $current_page == "new.php" ){ echo 'active-h'; } ?>" href="new.php">Nouveautés</a>
                            <a class="nav-link <?php if( $current_page == "article.php" ){ echo 'active-h'; } ?>" href="article.php">Chouchous</a>
                            <a class="nav-link <?php if( $current_page == "contact.php" ){ echo 'active-h'; } ?>" href="contact.php">Contactez-nous</a>
                        </div>
                        
                    </div>
                    
                    <div class="navbar-nav ">
                            <div class="user">
                                <a class="nav-link" href="#"><i class="fa-solid fa-user"></i></a>
                            </div>
                            <div class="panier">
                                 <a class="nav-link" href="#"><i class="fa-solid fa-cart-shopping"></i></a>
                            </div>                           
                    </div>
                </div>
            </nav>
        <!---------fin navbar----------->