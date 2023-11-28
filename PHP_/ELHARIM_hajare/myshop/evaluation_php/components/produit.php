<?php
require_once('lib/product.php');
require_once('lib/db.php');


$produit = new Produit($db);
$produits = $produit->selectAll();
$produits = $produit->selectLimit(15);
?>




<?php if (!empty($produits)) { ?>
    <?php foreach ($produits as $prodSingle) { ?>
        <div class="col mb-5">
            <div class="card h-100">

                <!-- <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">reserver</div> -->

                <img src="images/<?php echo $prodSingle['image']; ?>" class="card-img-top" />

                <div class="card-body p-4">
                    <div class="text-center">
                        <h5 class="fw-bolder"><?php echo $prodSingle['title']; ?></h5>
                        <?php echo $prodSingle['price']; ?>€
                        <p><?php echo $prodSingle['description']; ?></p>
                        <p><?php echo $prodSingle['reservation_text']; ?></p>
                        <p><?php echo $prodSingle['city']; ?></p>
                    </div>
                </div>
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="single_produit.php?idproduit=<?php echo $prodSingle['id_produit']; ?>">Voir produit</a></div>
                </div>
            </div>
        </div>


    <?php } ?>

<?php } else {
    echo "Aucun produit n'est disponible actuellement.";
}
?>