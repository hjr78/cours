<?php header("HTTP/1.0 404 Not Found"); ?>
	
<?php require_once ('../header.php'); ?>
	
	<div class="container">
		<div class="container404">
			<br /><br /><br /><br />
			<h1>Page introuvable</h1>
			<br /><br />
			<a href="<?php echo get_url(); ?>" title="Revenir à la page d'accueil">
				Revenir à la page d'accueil
			</a>
			<br /><br />
		</div>
	</div>
	
<?php require_once ('../footer.php'); ?>