    <footer>
		<div class="container">
			<div class="section_footer">
				<div class="item_footer">
					<img src="images/logo.png" alt="edelis">
				</div>
				<div class="item_footer">
					<p style="font-size:11px;">Envie d’en savoir plus ?</p>
					<a style="font-size:19.6px;" class="bold" href="tel:0970828827">0 970 828 827</a>
					<p style="font-size:7px;">Appel gratuit depuis un poste fixe</p>
				</div>
				<div class="item_footer">
					<p style="text-transform: uppercase; font-size:11px;">suivez-nous</p>
					<div class="rs">
						<a target="_blank" href="https://www.facebook.com/edelisimmo/" class="item_rs fb"></a>
						<a target="_blank" href="https://twitter.com/edelisimmo" class="item_rs twitter"></a>
						<a target="_blank" href="https://www.linkedin.com/company/18377751/" class="item_rs in"></a>
						<a target="_blank" href="https://www.pinterest.fr/edelisfrance/" class="item_rs pinterest"></a>
						<a target="_blank" href="https://www.instagram.com/edelisimmo/" class="item_rs instagram"></a>
						<a target="_blank" href="https://www.youtube.com/channel/UCWeQLunSbpDIQGT0kte7GRg" class="item_rs youtube"></a>
					</div>
				</div>
			</div>
			<nav class="section_footer">
				<a href="javascript:return false;" data-href="#contact" class="item_menu_footer open_page">Contacts</a>
				<a href="#mentionslegales" data-href="#mentions_legales" class="item_menu_footer open_page">Mentions légales</a>
				<a href="javascript:return false;" data-href="#credits" class="item_menu_footer open_page">Crédits</a>
				<a href="#donneespersonnelles" data-href="#donnees" class="item_menu_footer open_page">Données personnelles</a>
				<p class="item_menu_footer">Edelis © 2017</p>
			</nav>
			<nav class="section_footer">
				<strong class="item_menu_footer">Nos autres sites :</strong>
				<a href="http://edelis.com/" class="item_menu_footer" target="_blank">Site commercial</a>
				<a href="https://edelis-partenaires.com/" class="item_menu_footer" target="_blank">Site partenaires</a>
			</nav>
		</div>
    </footer>

<?php include_once('js/script.html') ?>
<script type="text/javascript">
	
	window.onload = function() {
		var url = document.location.href;
		var myImg = new Image(1,1);
		myImg.src = 'http://tag.immolink.fr/tag.php?url='+encodeURIComponent(url);
		document.body.appendChild(myImg);
	}
	document.getElementById("form1").onsubmit = function() {
		var url = document.location.href;
		var email = document.getElementById("email").value;
		var myImg = new Image(1,1);
		myImg.src =

		'http://tag.immolink.fr/tag.php?url='+encodeURIComponent(url)+'&email='+encodeURIComponent(
		email);

		document.body.appendChild(myImg);
	}
	
	<?php if($_GET['mauticMessage']){ ?>
		toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": true,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": true,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "50000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
        toastr.success('Merci pour votre demande');
        toastr.options.onHidden = function() { window.location.href = "./"; }
	<?php } ?>	
</script>

</body>

</html>
