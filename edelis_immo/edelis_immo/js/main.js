var timeStampInMs = Math.round(new Date().getTime()/1000)

/* FUNCTIONS BASE JS */
function goTo(element) {
	$('html, body').animate({scrollTop: $(element).offset().top}, 500, function(){});
}

$(function() {


	/*jquery validate*/
	$('#form1').validate({
		errorPlacement: function(error, element) {},
		rules: {
			'mauticform[nom]':{
				required : true
			},
			'mauticform[prenom]':{
				required : true
			},
			'mauticform[civilite]':{
				required : true
			},
			'mauticform[email]':{
				required : true,
				email : true
			},
			'mauticform[mobile]':{
				required : true,
				digits : true,
				minlength: 8
			},
			'mauticform[ville]':{
				required : true,
			},
			'mauticform[code_postal]':{
				required : true,
			},
			'mauticform[cv]':{
				required : true,
			},
			'mauticform[lettre_de_motivation]':{
				required : true,
			},
			'mauticform[objet]':{
				required : true
			},
			'mauticform[optin]':{
				required : true
			}
		},
		submitHandler: function(form) {
			$('input[type=submit]').attr('disabled', 'disabled');
			$('input[type=submit]').addClass('on_load');
			/*$.ajax({
				method: 'POST',
				data:  {form : $("#form1").serialize()},
				url: "lib/form_traitment.php",
				success : function( response )
				{
					if (response == 'ok') {
						var para = '<p>Votre demande a bien été enregistrée, nous vous remercions de l’intérêt que vous témoignez à EDELIS.</p>'+
						'<p/>Votre interlocuteur reviendra vers vous dans les plus brefs délais.</p>';
						
						$('.form_container').html(para);
						var stateObj = 'confirmation';
						history.pushState(stateObj, "", "confirmation");
					}else{
						alert('une erreur est survenue');
					}
					
				}
			});*/

			form.submit();
			//return false;
		}
	});
	$('#mauticform_formulairerecrutementedelisimmo').validate({
		errorPlacement: function(error, element) {},
		rules: {
			'mauticform[nom]':{
				required : true
			},
			'mauticform[prenom]':{
				required : true
			},
			'mauticform[civilite]':{
				required : true
			},
			'mauticform[email]':{
				required : true,
				email : true
			},
			'mauticform[mobile]':{
				required : true,
				digits : true,
				minlength: 8
			},
			'mauticform[ville]':{
				required : true,
			},
			'mauticform[code_postal]':{
				required : true,
			},
			'mauticform[poste_recherche]':{
				required : true,
			},
			'mauticform[cv]':{
				required : true,
			},
			'mauticform[lettre_de_motivation]':{
				required : true,
			},
			'mauticform[objet]':{
				required : true
			},
			'mauticform[optin]':{
				required : true
			}
		},
		submitHandler: function(form) {
			$('input[type=submit]').attr('disabled', 'disabled');
			$('input[type=submit]').addClass('on_load');
			$.ajax({
				method: 'POST',
				data:  {form : $("#mauticform_formulairerecrutementedelisimmo").serialize()},
				url: "lib/form_traitment.php",
				success : function( response )
				{
					if (response == 'ok') {
						var para = '<p>Votre demande a bien été enregistrée, nous vous remercions de l’intérêt que vous témoignez à EDELIS.</p>'+
							'<p/>Votre interlocuteur reviendra vers vous dans les plus brefs délais.</p>';

						$('.form_container').html(para);
						var stateObj = 'confirmation';
						history.pushState(stateObj, "", "confirmation");
					}else{
						alert('une erreur est survenue');
					}

				}
			});
			form.submit();
			//return false;
		}
	});
});
/*
$('.input_code_postal').change(function(){
	var valeur_cp = $('.input_code_postal').val();
	if (valeur_cp != null) {
		$(this).removeClass('error');
	}
});
*/

$(window).on('load', function(){
	//$('#modal').iziModal('open');
	/*$('#modal').addClass('go');
	$(function() {

		var iframe = document.getElementById('video10');
		var player = new Vimeo.Player(iframe);

		player.on('ended', function() {
		   $('#modal').fadeOut();
		});
		
		$('#modal').click(function(){
			$(this).fadeOut();
			player.pause();
			
		});
		$('iframe').click(function(e){
			e.preventDefault();
		})
		
	});*/

	resizing();
	$(window).resize(function(){
		resizing();
	});

	function resizing(){
		var window_w = $(window).width();
		var window_h = $(window).height();
		if ((window_w/window_h)>1.8) {
			$('#video3').css('width', '100%');
		}else{
			$('#video3').css('width', 'calc(100vh*1.8)');
		}
	}

	var scroll = $(window).scrollTop();
	$('.slider').slick({
		infinite: true,
		slidesToShow: 2,
		//centerMode: true,
		speed: 300,
		variableWidth: true
	});
	$('.part .slider_container').slick({
		infinite: true
	});
	$('.part .slider_container').on('beforeChange', function(event, slick, currentSlide, nextSlide){
		$('.ref_text').removeClass('actif');
		$('.reference_'+nextSlide).addClass('actif');
	});
	$('.frise_slider').slick({
		slidesToShow: 4,
		variableWidth: true,
		centerMode: true,
		autoplay: true,
		infinite: true,
		cssEase:'linear',
		speed:5000,
		autoplaySpeed: 200,
	});

	$(".slider").lightGallery({
		selector: '.has_ref'
	});


	$('.part .mouseDown').click(function(){
		var next_part = $(this).parents('.part').next();
		$(this).parents('.page_slide ').animate({scrollTop: $(next_part).offset().top}, 500, function(){});

	})
	$('.bloc .mouseDown').click(function(){
		var next_part = $(this).parents('.bloc').next();
		goTo(next_part);
	});
	$('.nous_rejoindre').click(function(){
		var next_part = $(this).parents('.page_slide').find('#carriere');
		//goTo(next_part);

		$(this).parents('.page_slide').animate({scrollTop: $(next_part).offset().top}, 500, function(){});
	});
	if (window.matchMedia("(max-width: 400px)").matches) {
		$('header .logo_container img').attr('src', 'images/logo_mobile.png');
		$('header .logo_container img').height('32px');
		$('footer .item_footer img').width('150px');
	}
	if (window.matchMedia("(min-width: 768px)").matches) {
		if (scroll > $(window).height()-250) {
			$('header').addClass('actif');
		}else if(!($('header').hasClass('clicked'))){
			$('header').removeClass('actif');
		}
	}
	$('.clml').click(function(){
		// alert('test');
		$('#donnees').removeClass('actif');
		$('#mentions_legales').addClass('actif');
	});


	// Gestion de l'apparition du menu

	$(window).scroll(function(){
		scroll = $(window).scrollTop();

		if (window.matchMedia("(min-width: 768px)").matches) {
			if (scroll > $(window).height()-250) {
				$('header').addClass('actif');
			}else if(!($('header').hasClass('clicked'))){
				$('header').removeClass('actif');
			}
		}

		if (window.matchMedia("(min-width: 1600px)").matches) {
			$('.item_prg1').css('top', 750 -scroll/3);
			$('.item_prg2').css('bottom', 550 - scroll/4);
			$('.con_shadow').css('top', +1300 - scroll/4);
		}

		// Gestion de

		var bloc_intro_height = $('.bloc_intro').height();
		var bloc_fondement_height = $('.bloc_fondement').height() + bloc_intro_height;
		var bloc_programme_height = $('.bloc_programme').height() + bloc_fondement_height;
		var bloc_reference_height = $('.bloc_reference').height() + bloc_programme_height;
		var bloc_construction_height = $('.bloc_construction').height() + bloc_reference_height;
		var bloc_developpement_height = $('.bloc_developpement').height() + bloc_construction_height;
		var bloc_partenariat_height = $('.bloc_partenariat').height() + bloc_developpement_height;
		var bloc_carriere_height = $('.bloc_carriere').height() + bloc_partenariat_height;

		if (scroll < bloc_intro_height) {
			$('.item_menu').removeClass('active');
		}
		if (scroll > bloc_intro_height && scroll < bloc_fondement_height) {
			$('.item_menu').removeClass('active');
			$('.item_menu_fondement').addClass('active');
		}
		if (scroll > bloc_fondement_height && scroll < bloc_programme_height) {
			$('.item_menu').removeClass('active');
			$('.item_menu_programmes').addClass('active');
		}
		if (scroll > bloc_programme_height && scroll < bloc_reference_height) {
			$('.item_menu').removeClass('active');
			$('.item_menu_ref').addClass('active');
		}
		if (scroll > bloc_reference_height && scroll < bloc_construction_height) {
			$('.item_menu').removeClass('active');
			$('.item_menu_construction').addClass('active');
		}
		if (scroll > bloc_construction_height && scroll < bloc_developpement_height) {
			$('.item_menu').removeClass('active');
			$('.item_menu_developpement').addClass('active');
		}
		if (scroll > bloc_developpement_height && scroll < bloc_partenariat_height) {
			$('.item_menu').removeClass('active');
			$('.item_menu_partenariat').addClass('active');
		}
		if (scroll > bloc_partenariat_height) {
			$('.item_menu').removeClass('active');
			$('.item_menu_carrieres').addClass('active');
		}
	});

	$('.burger').click(function(){

		if (!($('header').hasClass('actif'))) {
			$('header').addClass('actif');
			$('header').addClass('clicked');
		}else{
			$('header').removeClass('actif');
			$('header').removeClass('clicked');

		}
	});
	if (window.matchMedia("(max-width: 767px)").matches) {
		$('header').click(function(){
			$(this).removeClass('actif');
			$(this).removeClass('clicked');
		});
	}

	$('.item_menu').click(function(){
		var href = $(this).attr('href');
		goTo(href);
	});

	$('.btn_plus').click(function(){
		if (!($(this).hasClass('moins'))) {
			$('.expanded').removeClass('expanded');
			$(this).parents('.gouvernance_item').addClass('expanded');
			$(this).addClass('moins');
		}else{
			$('.expanded').removeClass('expanded');
			$('.btn_plus').removeClass('moins');
		}
	});


	var zindex = 110;
	$('.gouvernance_item').each(function(){
		var height = $(this).find('.content').innerHeight();
		$(this).css('height', height);
		$(this).css('z-index', zindex);
		zindex--;
	});


	$('.darken').click(close);
	$('.btn_closes').click(close);

	function close(){
		$('.darken').removeClass('actif');
		$('body').removeClass('actif')
		$('.page_slide').removeClass('actif');
		processAjaxData(document, "http://edelis.immo/");
	};

	$('.btn_map').click(function(){
		var region = $(this).data('region');
		$('.btn_map').removeClass('actif');
		$(this).addClass('actif');
		$('.adresse_item').removeClass('actif');
		$('.adresse_'+region).addClass('actif');

	});


	function processAjaxData(response, urlPath){
		//window.history.pushState({"html":response.html,"pageTitle":response.pageTitle},"", urlPath);
		//window.location.href='';
	}

	function open_page(href){
		$(href).addClass('actif');
		$('.darken').addClass('actif');
		$('body').addClass('actif');

		var ret = href.replace('#','');
		$('#'+ret).find('.has_blur').each(function(){
			var image = $( this ).css( "background-image" );
			var image_ret = image.replace('flou','net');

			$(this).css('background-image', image_ret);
		});
		processAjaxData(document, "http://edelis.immo/"+ret);
	}


	$('.select_vendre_terrain').click(function(){
		$('.select_objet>option[value="vente-maison-ou-terrain"]').prop('selected', 'selected');
	});

	var hash = window.location.hash.substr(1);
	if (hash == 'notre_metier' || hash == "constructions_innovantes" || hash == "developpement_durable" || hash == "nos_partenariats" ||hash == "contact") {
		open_page('#'+hash);
	}

	$('.open_page').click(function(){
		var href = $(this).attr('data-href');
		open_page(href);
	});

	$('h2>span.row1').viewportChecker({
		classToAdd: 'appeared',
		offset: 50,
		callbackFunction: function(elem, action){
			setTimeout(function(){ $(elem).siblings('.row2').addClass('appeared'); }, 400);
			setTimeout(function(){ $(elem).siblings('.row3').addClass('appeared'); }, 600);


		}
	});
	$('.img_logo').viewportChecker({
		classToAdd: 'appeared',
		offset: 30
	});
	$('.bande_content').viewportChecker({
		classToAdd: 'appeared',
		offset: 30
	});
	$('.bande_building img').viewportChecker({
		classToAdd: 'appeared',
		offset: 30
	});

	$('.recherche-bien-neuf').hide();
	$('.client-edelis').hide();
	$('.vente-maison-ou-terrain').hide();
	$('.demande-partenariat').hide();
	$('.candidature-spontanee').hide();
	$('.autre').hide();


	$('.select_objet').change(function(){
		var value = $(this).val();
		var values;
		if (value == "recherche-bien-neuf") {
			values = "a";
		}
		if (value == "client-edelis") {
			values = "b";
		}
		if (value == "vente-maison-ou-terrain") {
			values = "c";
		}
		if (value == "demande-partenariat") {
			values = "d";
		}
		if (value == "candidature-spontanee") {
			values = "e";
		}
		if (value == "autre") {
			values = "f";
		}
		$('.choix_form').hide();
		$('.choix_'+values).show();

		$('.css-label').hide();
		if(value != ""){
			$('.'+value).show();
		}
		else{
			$('.def').show();
		}
	});

	// Gestion du play des videos

	$('.part_construction .text_container').mouseover(function(){
		$(this).addClass('hover');
		var videoid = $(this).data('video');
		var video = document.getElementById("video"+videoid);
		playVid(video);
	})
	$('.part_construction .text_container').mouseout(function(){
		$(this).removeClass('hover');
		var videoid = $(this).data('video');
		var video = document.getElementById("video"+videoid);
		pauseVid(video);
	})

	function playVid(video) {
		video.play();
	}
	function pauseVid(video) {
		video.pause();
	}


	//processAjaxData(document, "http://localhost:7880/edelis/nos_fondement");


	// Gestion du loader
	// var timeStampInMs_loader = Math.round(new Date().getTime()/1000);
	// var load_time = timeStampInMs_loader - timeStampInMs;x²
	//if (load_time < 3) {
	//	setTimeout(function(){ 
	//		$('.loader').fadeOut(); 
	//		$('body').removeClass('actif');
	//	}, 3500 - load_time*1000);
	//}else{
		// $('.loader').fadeOut();
		// $('body').removeClass('actif');
	//}
$('.loader').fadeOut();
		$('body').removeClass('actif');
	// var timeStampInMs_loader = 2200;
	// var load_time = timeStampInMs_loader;
	// 	setTimeout(function(){ 
	// 		$('.loader').fadeOut(); 
	// 		$('body').removeClass('actif');
	// 	}, 2200 );
	
	$('#deptList').multipleSelect({
		placeholder: "Choisir un/des département(s)",
		selectAll: false,
	});
	$('.choix_form').hide();



	// PAGE CARRIERE

	$('.name_container').slick({
		slidesToShow: 3,
		dots: true,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 1,
				}
			}
		]
	});
	$('.rencontre_content').slick({
		dots: true
	});
	$('.part_slider_video iframe').css('height', $('.part_slider_video iframe').width()*0.57);

	$('.name_container').on('beforeChange', function(event, slick, currentSlide, nextSlide){
		var dots_list = $('.rencontre_content .slick-dots li');
		$(dots_list[nextSlide]).trigger('click');
	});
	$('.name_rencontre').click(function(){
		var dots_list = $('.name_container .slick-dots li');
		$(dots_list[$(this).data('n_slide')]).trigger('click');
	});

	$(document).on('change', 'input[type=file]', function(){
		var file_name = $(this).val().split('\\').pop();
		var extension = file_name.split('.')[1];
		var testext = $(this).val();
		testext2 = testext.substr(testext.length - 3);
		if (testext2 != 'pdf') {
			$('input[type=file]+label').val('');
			alert('Merci d\'insérer un fichier PDF');
			$(this).addClass('error');
			$(this).val('');
		} else if (GetFileSize($(this).attr('id')) > 2000) {
			$('input[type=file]+label').val('');
			alert('Vous avez dépassé le poids maximum.');
		} else {
			$(this).next().text(file_name);
		}
	});
	function GetFileSize(id) {
		var fi = document.getElementById(id).files[0]; // GET THE FILE INPUT.
		var fsize = fi.size;      // THE SIZE OF THE FILE.
		var poids = Math.round((fsize / 1024));
		return poids;
	}
	if ($(window).width() < 768) {
		$('.btn_closes').attr('src', 'images/btn_close_dark.png');
		$('.offre_list_container').slick();
	}

	$('.n1').click(function(){
		$(this).addClass('checkedoptin').removeClass('uncheckedoptin');
		$('.n2').addClass('uncheckedoptin').removeClass('checkedoptin');
		$(this).siblings('.pouf').attr('checked', true);
		$('.n2').siblings('.pouf').attr('checked', false);

	})

	$('.n2').click(function(){
		$(this).addClass('checkedoptin').removeClass('uncheckedoptin');
		$('.n1').addClass('uncheckedoptin').removeClass('checkedoptin');
		$(this).siblings('.pouf').attr('checked', true);
		$('.n1').siblings('.pouf').attr('checked', false);
	})
});


if(window.location.hash == "#donneespersonnelles") {
	$('#contact').removeClass('actif');
	$('#donnees').addClass('actif');
	$('.darken').addClass('actif');
}

if(window.location.hash == "#mentionslegales") {
	$('#donnees').removeClass('actif');
	$('#mentions_legales').addClass('actif');
	$('.darken').addClass('actif');
}



$('.cldp').click(function(){
	$('#contact').removeClass('actif');
	$('#donnees').addClass('actif');
})

$('.ctaredi').click(function(){

	$('#carriere').removeClass('actif');
	$('#contact').addClass('actif'); 
	$('.select_objet').val('candidature-spontanee');
	$('.choix_e').show();
})

$('.Elements__PolicyLink-xuz5b0-1 a').css('font-size','15px');