<?php require_once('lib/article.php'); ?>


<!-- Start Column 1 -->
                <?php  foreach ($articles as $artSingle){?>
					<div class="col-12 col-md-4 col-lg-3 mb-5">
						<a class="product-item" href="single_article.php?idarticle=<?php echo $artSingle['id_article']; ?>">
							<img src="images/<?php echo $artSingle['image'];?>" class="img-fluid product-thumbnail">
							<h3 class="product-title"><?php echo $artSingle['title'];?></h3>
							<strong class="product-price"><?php echo $artSingle['price'];?>€</strong>

							<span class="icon-cross">
								<img src="images/cross.svg" class="img-fluid">
							</span>
						</a>
					</div> 
					<!-- End Column 1 -->

                    <?php } ?>