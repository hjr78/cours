<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo ucfirst($_SESSION['firstname'])." ".strtoupper($_SESSION['lastname']) ?></span>
    
        <?php if( !empty( $_SESSION['user_image'])){ ?>

        <img class="img-profile rounded-circle"  src="./img/avatar/<?php echo $_SESSION['user_image']; ?>">
                                        
        <?php } else { ?>
                               
        <img class="img-profile rounded-circle"  src="img/undraw_profile.svg">

        <?php } ?>

 </a>