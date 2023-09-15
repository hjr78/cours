
<script type="text/javascript">
    /** This section is only needed once per page if manually copying **/
    if (typeof MauticSDKLoaded == 'undefined') {
        var MauticSDKLoaded = true;
        var head            = document.getElementsByTagName('head')[0];
        var script          = document.createElement('script');
        script.type         = 'text/javascript';
        script.src          = 'https://edelis.automation.webmecanik.com/media/js/mautic-form.js';
        script.onload       = function() {
            MauticSDK.onLoad();
        };
        head.appendChild(script);
        var MauticDomain = 'https://edelis.automation.webmecanik.com';
        var MauticLang   = {
            'submittingMessage': "Merci de patienter..."
        }
    }
</script>
<script type="text/javascript">
    function verifyCallback( response ) {
        document.getElementById("mauticform_input_formulairecontactgeneriqueedeliscorporate_recaptch").value = response;
    }
</script>
<script src="https://www.google.com/recaptcha/api.js"></script>
 



<section class="page_slide" id="contact">

	

	<div class="part center part_form">

		<div class="title_container">

			<h1 class="cyan">Nous contacter</h1>

		</div>

		<div class="form_container">

			<form autocomplete="false" role="form" method="post" action="https://edelis.automation.webmecanik.com/form/submit?formId=24" id="form1" data-mautic-form="formulairecontactgeneriquesitecorporateedeliscoms" enctype="multipart/form-data">

   			 <input id="mauticform_input_formulairecontactgeneriquesitecorporateedeliscom_date_acquisition" name="mauticform[date_acquisition]" value="<?php echo date("H:i d/m/Y");  ?>" class="mauticform-hidden" type="hidden">

            <div id="mauticform_formulairecontactgeneriquesitecorporateedeliscom_civilite" class="mauticform-row mauticform-radiogrp mauticform-field-2">



					<div class="form_line_1 form_line">

						<div class="select_style">

							<select name="mauticform[civilite]" class="select_civ">

								<option style="font-size:16px;" value="">Civ.*</option>

								<option style="font-size:16px;" value="M.">M.</option>

								<option style="font-size:16px;" value="Mme">Mme</option>

							</select>

						</div>

						

						<input type="text" name="mauticform[nom]" placeholder="Nom*" class="input_nom">

						<input type="text" name="mauticform[prenom]" placeholder="Prénom*" class="input_prenom">

					</div>





					<div class="form_line_3 form_line">

						<input type="tel" name="mauticform[code_postal]" placeholder="Code postal*" class="input_code_postal">

						<input type="text" name="mauticform[ville]" placeholder="Ville*" class="input_ville">

					</div>

					<div class="form_line_2 form_line">

						<input type="email" name="mauticform[email]" id="email" placeholder="Email*" class="input_email">

						<input type="tel" name="mauticform[mobile]" placeholder="Téléphone*" class="input_tel">

           			<input type="email" id="email2" name="email2" class="hidden" style="visibility:hidden; position:absolute;">



					</div>

					<div class="select_style select_objet_container">

						<select name="mauticform[objet_de_la_demande]" class="select_objet">

							<option style="font-size:16px;" value="">Objet.*</option>

							<option style="font-size:16px;" value="recherche-bien-neuf">Je recherche un bien</option>

							<option style="font-size:16px;" value="client-edelis">Je suis client Edelis</option>

							<option style="font-size:16px;" value="vente-maison-ou-terrain">Je vends une maison ou un terrain</option>

							<option style="font-size:16px;" value="demande-partenariat">Je souhaite devenir partenaire</option>

							<option style="font-size:16px;" value="candidature-spontanee">Je souhaite rejoindre Edelis</option>

							<option style="font-size:16px;" value="autre">Autre</option>

						</select>

					</div>

					<div class="form_line_4 choix_form choix_a">

						<select name="mauticform[departement_de_recherche][]" id="deptList" multiple="multiple">

						    <option style="font-size:16px;" value="01">01 - Ain </option>

						    <option style="font-size:16px;" value="02">02 - Aisne </option>

						    <option style="font-size:16px;" value="03">03 - Allier </option>

						    <option style="font-size:16px;" value="04">04 - Alpes de Haute Provence </option>

						    <option style="font-size:16px;" value="05">05 - Hautes Alpes </option>

						    <option style="font-size:16px;" value="06">06 - Alpes Maritimes </option>

						    <option style="font-size:16px;" value="07">07 - Ardèche </option>

						    <option style="font-size:16px;" value="08">08 - Ardennes </option>

						    <option style="font-size:16px;" value="09">09 - Ariège </option>

						    <option style="font-size:16px;" value="10">10 - Aube </option>

						    <option style="font-size:16px;" value="11">11 - Aude </option>

						    <option style="font-size:16px;" value="12">12 - Aveyron </option>

						    <option style="font-size:16px;" value="13">13 - Bouches du Rhône </option>

						    <option style="font-size:16px;" value="14">14 - Calvados </option>

						    <option style="font-size:16px;" value="15">15 - Cantal </option>

						    <option style="font-size:16px;" value="16">16 - Charente </option>

						    <option style="font-size:16px;" value="17">17 - Charente Maritime </option>

						    <option style="font-size:16px;" value="18">18 - Cher </option>

						    <option style="font-size:16px;" value="19">19 - Corrèze </option>

						    <option style="font-size:16px;" value="2A">2A - Corse du Sud </option>

						    <option style="font-size:16px;" value="2B">2B - Haute-Corse </option>

						    <option style="font-size:16px;" value="21">21 - Côte d'Or </option>

						    <option style="font-size:16px;" value="22">22 - Côtes d'Armor </option>

						    <option style="font-size:16px;" value="23">23 - Creuse </option>

						    <option style="font-size:16px;" value="24">24 - Dordogne </option>

						    <option style="font-size:16px;" value="25">25 - Doubs </option>

						    <option style="font-size:16px;" value="26">26 - Drôme </option>

						    <option style="font-size:16px;" value="27">27 - Eure </option>

						    <option style="font-size:16px;" value="28">28 - Eure et Loir </option>

						    <option style="font-size:16px;" value="29">29 - Finistère </option>

						    <option style="font-size:16px;" value="30">30 - Gard </option>

						    <option style="font-size:16px;" value="31">31 - Haute Garonne </option>

						    <option style="font-size:16px;" value="32">32 - Gers </option>

						    <option style="font-size:16px;" value="33">33 - Gironde </option>

						    <option style="font-size:16px;" value="34">34 - Hérault </option>

						    <option style="font-size:16px;" value="35">35 - Ille et Vilaine </option>

						    <option style="font-size:16px;" value="36">36 - Indre </option>

						    <option style="font-size:16px;" value="37">37 - Indre et Loire </option>

						    <option style="font-size:16px;" value="38">38 - Isère </option>

						    <option style="font-size:16px;" value="39">39 - Jura </option>

						    <option style="font-size:16px;" value="40">40 - Landes </option>

						    <option style="font-size:16px;" value="41">41 - Loir et Cher </option>

						    <option style="font-size:16px;" value="42">42 - Loire </option>

						    <option style="font-size:16px;" value="43">43 - Haute Loire </option>

						    <option style="font-size:16px;" value="44">44 - Loire Atlantique </option>

						    <option style="font-size:16px;" value="45">45 - Loiret </option>

						    <option style="font-size:16px;" value="46">46 - Lot </option>

						    <option style="font-size:16px;" value="47">47 - Lot et Garonne </option>

						    <option style="font-size:16px;" value="48">48 - Lozère </option>

						    <option style="font-size:16px;" value="49">49 - Maine et Loire </option>

						    <option style="font-size:16px;" value="50">50 - Manche </option>

						    <option style="font-size:16px;" value="51">51 - Marne </option>

						    <option style="font-size:16px;" value="52">52 - Haute Marne </option>

						    <option style="font-size:16px;" value="53">53 - Mayenne </option>

						    <option style="font-size:16px;" value="54">54 - Meurthe et Moselle </option>

						    <option style="font-size:16px;" value="55">55 - Meuse </option>

						    <option style="font-size:16px;" value="56">56 - Morbihan </option>

						    <option style="font-size:16px;" value="57">57 - Moselle </option>

						    <option style="font-size:16px;" value="58">58 - Nièvre </option>

						    <option style="font-size:16px;" value="59">59 - Nord </option>

						    <option style="font-size:16px;" value="60">60 - Oise </option>

						    <option style="font-size:16px;" value="61">61 - Orne </option>

						    <option style="font-size:16px;" value="62">62 - Pas de Calais </option>

						    <option style="font-size:16px;" value="63">63 - Puy de Dôme </option>

						    <option style="font-size:16px;" value="64">64 - Pyrénées Atlantiques </option>

						    <option style="font-size:16px;" value="65">65 - Hautes Pyrénées </option>

						    <option style="font-size:16px;" value="66">66 - Pyrénées Orientales </option>

						    <option style="font-size:16px;" value="67">67 - Bas Rhin </option>

						    <option style="font-size:16px;" value="68">68 - Haut Rhin </option>

						    <option style="font-size:16px;" value="69">69 - Rhône </option>

						    <option style="font-size:16px;" value="70">70 - Haute Saône </option>

						    <option style="font-size:16px;" value="71">71 - Saône et Loire </option>

						    <option style="font-size:16px;" value="72">72 - Sarthe </option>

						    <option style="font-size:16px;" value="73">73 - Savoie </option>

						    <option style="font-size:16px;" value="74">74 - Haute Savoie </option>

						    <option style="font-size:16px;" value="75">75 - Paris </option>

						    <option style="font-size:16px;" value="76">76 - Seine Maritime </option>

						    <option style="font-size:16px;" value="77">77 - Seine et Marne </option>

						    <option style="font-size:16px;" value="78">78 - Yvelines </option>

						    <option style="font-size:16px;" value="79">79 - Deux Sèvres </option>

						    <option style="font-size:16px;" value="80">80 - Somme </option>

						    <option style="font-size:16px;" value="81">81 - Tarn </option>

						    <option style="font-size:16px;" value="82">82 - Tarn et Garonne </option>

						    <option style="font-size:16px;" value="83">83 - Var </option>

						    <option style="font-size:16px;" value="84">84 - Vaucluse </option>

						    <option style="font-size:16px;" value="85">85 - Vendée </option>

						    <option style="font-size:16px;" value="86">86 - Vienne </option>

						    <option style="font-size:16px;" value="87">87 - Haute Vienne </option>

						    <option style="font-size:16px;" value="88">88 - Vosges </option>

						    <option style="font-size:16px;" value="89">89 - Yonne </option>

						    <option style="font-size:16px;" value="90">90 - Territoire de Belfort </option>

						    <option style="font-size:16px;" value="91">91 - Essonne </option>

						    <option style="font-size:16px;" value="92">92 - Hauts de Seine </option>

						    <option style="font-size:16px;" value="93">93 - Seine Saint Denis </option>

						    <option style="font-size:16px;" value="94">94 - Val de Marne </option>

						    <option style="font-size:16px;" value="95">95 - Val d'Oise </option>

						    <option style="font-size:16px;" value="971">971 - Guadeloupe </option>

						    <option style="font-size:16px;" value="972">972 - Martinique </option>

						    <option style="font-size:16px;" value="973">973 - Guyane </option>

						    <option style="font-size:16px;" value="974">974 - Réunion </option>

						    <option style="font-size:16px;" value="975">975 - Saint Pierre et Miquelon </option>

						    <option style="font-size:16px;" value="976">976 - Mayotte </option>

						</select>

					</div>

					<div class="form_line_4 choix_form choix_a">

						<div class="select_style select_objet_container">

							<select name="mauticform[projet]">

								<option style="font-size:16px;" value="">Votre projet*</option>

								<option style="font-size:16px;" value="habiter">Habiter</option>

								<option style="font-size:16px;" value="investir">Investir</option>

							</select>

						</div>

					</div>

					<div class="form_line form_line_2 choix_form choix_b">

						<input id="mauticform_input_formulairecontactgeneriquesitecorporateedeliscom_residencelieunumappt" name="mauticform[residencelieunumappt]" placeholder="Nom et Lieu de résidence - Num appt" value="" class="mauticform-input" type="text"> 

					</div>

					<div class="form_line form_line_2 choix_form choix_e">

						<input type="text" name="mauticform[poste_recherche]" placeholder="Poste recherché*" style="margin-right:0;">

					</div>

					<div class="form_line form_line_2 choix_form choix_e uploaders">

						<div class="input_container">

						<p class="label">CV*</p>

		                <input id="mauticform_input_formulairerecrutementedelisimmo_cv" name="mauticform[cv]" value="" class="mauticform-input" type="file">

						<label id="mauticform_label_formulairerecrutementedelisimmo_cv" for="mauticform_input_formulairerecrutementedelisimmo_cv" class="mauticform-label">CV</label>

						<p class="t11 italic pt5">Format autorisé : PDF. Poids maximum : 5 Mo.</p>

					</div>

					<div class="input_container">

						<p class="label">Lettre de motivation*</p>

		                <input id="mauticform_input_formulairerecrutementedelisimmo_lettre_de_motivation" name="mauticform[lettre_de_motivation]" value="" class="mauticform-input" type="file">

						<label id="mauticform_label_formulairerecrutementedelisimmo_lettre_de_motivation" for="mauticform_input_formulairerecrutementedelisimmo_lettre_de_motivation" class="mauticform-label">Lettre de Motivation</label>

						<p class="t11 italic pt5">Format autorisé : PDF. Poids maximum : 5 Mo.</p>

					</div>

					</div>

					

					<textarea placeholder="Message" name="mauticform[f_message]"></textarea>
<div style="   
    display: block;
    width: 100%;
    max-width: 300px;
    margin: 0 auto;
    margin-top: 30px;
    margin-bottom: 30px;" class="g-recaptcha" data-sitekey="6LdpeMAUAAAAAJBzsznOagB1wHr-4EziFL6KAfvr" data-callback="verifyCallback"></div>
        <input id="mauticform_input_formulairecontactgeneriqueedeliscorporate_recaptch" name="mauticform[recaptch]" value="" class="mauticform-input" type="hidden">
        <span class="mauticform-errormsg" style="display: none;"></span>
    </div>
					<input id="mauticform_input_formulairecontactgeneriquesitecorporateedeliscom_optin1" name="mauticform[optin1]" value="1" class="mauticform-hidden" type="hidden">

                <input id="mauticform_input_formulairerecrutementedeliscorporate_optin1_contact" name="mauticform[optin1]" value="1" class="mauticform-hidden choix_e" type="hidden">

					<div id="mauticform_formulairecontactgeneriquesitecorporateedeliscom_abonnement_newsletter" class="mauticform-row mauticform-radiogrp mauticform-field-15">

                <label style="display: block;" id="yn" class="mauticform-label" for="mauticform_radiogrp_radio_abonnement_newsletter_Non1">Je souhaite recevoir la newsletter mensuelle Edelis (actu immo, architecture, smart city …)</label>

                

                <div style=" width: 6%;display: inline-flex;float: left;margin-top: 10px;" class="mauticform-radiogrp-row">

                    <label class="css-label-inline label n1 uncheckedoptin mauticform-radiogrp-label" style="width: 50px;" id="mauticform_radiogrp_label_abonnement_newsletter_1" for="mauticform_radiogrp_radio_abonnement_newsletter_1">

                        <input  style="position: absolute;left: -9999px;" class="pouf css-checkbox-inline mauticform-radiogrp-radio" name="mauticform[abonnement_newsletter]" id="mauticform_radiogrp_radio_abonnement_newsletter_1" type="radio" value="1">

                        Oui

                    </label>

                </div>

                <div style=" width: 6%;display: inline-flex;float: left;margin-top: 10px;" class="mauticform-radiogrp-row">

                    <label  class="css-label-inline label n2 uncheckedoptin mauticform-radiogrp-label" style="width: 50px; margin-left: 25px;" id="mauticform_radiogrp_label_abonnement_newsletter_0" for="mauticform_radiogrp_radio_abonnement_newsletter_0">

                        <input  style="position: absolute;left: -9999px;" class="pouf css-checkbox-inline mauticform-radiogrp-radio" name="mauticform[abonnement_newsletter]" id="mauticform_radiogrp_radio_abonnement_newsletter_0" type="radio" value="0">

                        Non

                    </label>

                </div>

               

            </div>



						<style type="text/css">

							.error+label{color: red;}

							.mauticform-row a{

								font-size: 15px;

							}

						</style>

				 



	                <input name="form_main" value="1" type="hidden">

					

	                <input name="mauticform[utm_source]" value="" type="hidden">

	                <input name="mauticform[utm_campaign]" value="" type="hidden">

	                <input name="mauticform[utm_medium]" value="" type="hidden">

	                <input name="mauticform[utm_act]" value="" type="hidden">

	                <input name="mauticform[utm_term]" value="" type="hidden">

	                <input name="mauticform[utm_term]" value="" type="hidden">

					<input type="hidden" name="mauticform[formId]" id="mauticform_formulairecontactgeneriquesitecorporateedeliscom_id" value="24">

			        <input type="hidden" name="mauticform[return]" id="mauticform_formulairecontactgeneriquesitecorporateedeliscom_return" value="">

			        <input type="hidden" name="mauticform[formName]" id="mauticform_formulairecontactgeneriquesitecorporateedeliscom_name" value="formulairecontactgeneriquesitecorporateedeliscom">

				 

					<input style="margin-top: 45px;margin-right: 66px;margin-bottom: 35px;" type="submit" name="mauticform[submit]" class="btn" value="valider" for="form1">



				

					<!-- defaut -->

					<label style="text-align: left;color: #707070;    font-size: 12px;" class="css-label def t12 italic white" for="optin"><p>* Champs obligatoires<br>J’accepte qu’Edelis  collecte mes données personnelles aux fins de pouvoir répondre à ma demande de contact et m’adresse des informations commerciales en lien avec ma recherche immobilière. Les informations recueillies par le présent formulaire, par la Société EDELIS, font l’objet d’un traitement automatisé de données à caractère personnel, dont l'utilisation est soumise aux dispositions :  du Règlement (UE) 2016/679 du Parlement européen et du Conseil du 27 avril 2016 relatif à la protection des personnes physiques à l'égard du traitement des données à caractère personnel et à la libre circulation de ces données «  RGPD » ; et de la loi n° 78-17 du 6 janvier 1978 relative à l'Informatique, aux Fichiers et aux Libertés modifiée. Vous disposez, à tout moment, d’un droit d’accès, de modification, de rectification et de suppression des données qui vous concernent. Si vous souhaitez exercer ce droit, il vous suffit de contacter par courriel: donnees@edelis.com ou par courrier : EDELIS - 33-43 avenue Georges Pompidou – CS 23179 – 31131 BALMA CEDEX. Plus d’informations sur <a class="cldp">https://www.edelis.immo/donnees-personnelles</a></p>

					</label>

					<!-- A -->

					<label style="text-align: left;color: #707070;    font-size: 12px;" class="css-label recherche-bien-neuf" for="optin"><p>* Champs obligatoires<br>J’accepte qu’Edelis  collecte mes données personnelles aux fins de pouvoir répondre à ma demande de contact et m’adresse des informations commerciales en lien avec ma recherche immobilière. Les informations recueillies par le présent formulaire, par la Société EDELIS, font l’objet d’un traitement automatisé de données à caractère personnel, dont l'utilisation est soumise aux dispositions :  du Règlement (UE) 2016/679 du Parlement européen et du Conseil du 27 avril 2016 relatif à la protection des personnes physiques à l'égard du traitement des données à caractère personnel et à la libre circulation de ces données «  RGPD » ; et de la loi n° 78-17 du 6 janvier 1978 relative à l'Informatique, aux Fichiers et aux Libertés modifiée. Vous disposez, à tout moment, d’un droit d’accès, de modification, de rectification et de suppression des données qui vous concernent. Si vous souhaitez exercer ce droit, il vous suffit de contacter par courriel: donnees@edelis.com ou par courrier : EDELIS - 33-43 avenue Georges Pompidou – CS 23179 – 31131 BALMA CEDEX. Plus d’informations sur <a class="cldp">https://www.edelis.immo/donnees-personnelles</a></p>

					</label>

					<!-- B -->

					<label style="text-align: left;color: #707070;    font-size: 12px;" class="css-label demande-partenariat" for="optin"><p>* Champs obligatoires<br>J’accepte qu’Edelis  collecte mes données personnelles aux fins de pouvoir répondre à ma demande de contact et m’adresse des informations commerciales en lien avec ma recherche de partenariat. Les informations recueillies par le présent formulaire, par la Société EDELIS, font l’objet d’un traitement automatisé de données à caractère personnel, dont l'utilisation est soumise aux dispositions :  du Règlement (UE) 2016/679 du Parlement européen et du Conseil du 27 avril 2016 relatif à la protection des personnes physiques à l'égard du traitement des données à caractère personnel et à la libre circulation de ces données «  RGPD » ; et de la loi n° 78-17 du 6 janvier 1978 relative à l'Informatique, aux Fichiers et aux Libertés modifiée. Vous disposez, à tout moment, d’un droit d’accès, de modification, de rectification et de suppression des données qui vous concernent. Si vous souhaitez exercer ce droit, il vous suffit de contacter par courriel: donnees@edelis.com ou par courrier : EDELIS - 33-43 avenue Georges Pompidou – CS 23179 – 31131 BALMA CEDEX. Plus d’informations sur <a class="cldp">https://www.edelis.immo/donnees-personnelles</a></p>

					</label>

					<!-- C -->

					<label style="text-align: left;color: #707070;    font-size: 12px;" class="css-label client-edelis" for="optin"><p>* Champs obligatoires<br>J’accepte qu’Edelis  collecte mes données personnelles aux fins de pouvoir répondre à ma demande de contact et m’adresse des informations commerciales en lien avec mon achat. Les informations recueillies par le présent formulaire, par la Société EDELIS, font l’objet d’un traitement automatisé de données à caractère personnel, dont l'utilisation est soumise aux dispositions :  du Règlement (UE) 2016/679 du Parlement européen et du Conseil du 27 avril 2016 relatif à la protection des personnes physiques à l'égard du traitement des données à caractère personnel et à la libre circulation de ces données «  RGPD » ; et de la loi n° 78-17 du 6 janvier 1978 relative à l'Informatique, aux Fichiers et aux Libertés modifiée. Vous disposez, à tout moment, d’un droit d’accès, de modification, de rectification et de suppression des données qui vous concernent. Si vous souhaitez exercer ce droit, il vous suffit de contacter par courriel: donnees@edelis.com ou par courrier : EDELIS - 33-43 avenue Georges Pompidou – CS 23179 – 31131 BALMA CEDEX. Plus d’informations sur <a class="cldp">https://www.edelis.immo/donnees-personnelles</a></p>

					</label>

					<!-- D -->

					<label style="text-align: left;color: #707070;    font-size: 12px;" class="css-label vente-maison-ou-terrain" for="optin"><p>* Champs obligatoires<br>J’accepte qu’Edelis  collecte mes données personnelles aux fins de pouvoir répondre à ma demande de contact et m’adresse des informations commerciales en lien avec ma recherche de vente de mon bien. Les informations recueillies par le présent formulaire, par la Société EDELIS, font l’objet d’un traitement automatisé de données à caractère personnel, dont l'utilisation est soumise aux dispositions :  du Règlement (UE) 2016/679 du Parlement européen et du Conseil du 27 avril 2016 relatif à la protection des personnes physiques à l'égard du traitement des données à caractère personnel et à la libre circulation de ces données «  RGPD » ; et de la loi n° 78-17 du 6 janvier 1978 relative à l'Informatique, aux Fichiers et aux Libertés modifiée. Vous disposez, à tout moment, d’un droit d’accès, de modification, de rectification et de suppression des données qui vous concernent. Si vous souhaitez exercer ce droit, il vous suffit de contacter par courriel: donnees@edelis.com ou par courrier : EDELIS - 33-43 avenue Georges Pompidou – CS 23179 – 31131 BALMA CEDEX. Plus d’informations sur <a class="cldp">https://www.edelis.immo/donnees-personnelles</a></p>

					</label>

					<!-- E -->

					<label style="text-align: left;color: #707070;    font-size: 12px;" class="css-label autre t12 italic white" for="optin"><p>* Champs obligatoires<br>J’accepte qu’Edelis  collecte mes données personnelles aux fins de pouvoir répondre à ma demande de contact et m’adresse des informations commerciales en lien avec ma demande. Les informations recueillies par le présent formulaire, par la Société EDELIS, font l’objet d’un traitement automatisé de données à caractère personnel, dont l'utilisation est soumise aux dispositions :  du Règlement (UE) 2016/679 du Parlement européen et du Conseil du 27 avril 2016 relatif à la protection des personnes physiques à l'égard du traitement des données à caractère personnel et à la libre circulation de ces données «  RGPD » ; et de la loi n° 78-17 du 6 janvier 1978 relative à l'Informatique, aux Fichiers et aux Libertés modifiée. Vous disposez, à tout moment, d’un droit d’accès, de modification, de rectification et de suppression des données qui vous concernent. Si vous souhaitez exercer ce droit, il vous suffit de contacter par courriel: donnees@edelis.com ou par courrier : EDELIS - 33-43 avenue Georges Pompidou – CS 23179 – 31131 BALMA CEDEX. Plus d’informations sur <a class="cldp">https://www.edelis.immo/donnees-personnelles</a></p>

					</label>

					<!-- F -->

					<label style="text-align: left;color: #707070;    font-size: 12px;" class="css-label candidature-spontanee t12 italic white" for="optin"><p>* Champs obligatoires<br>J’accepte qu’Edelis  collecte mes données personnelles aux fins de pouvoir répondre à ma demande de contact et m’adresse des informations commerciales en lien avec ma candidature. Les informations recueillies par le présent formulaire, par la Société EDELIS, font l’objet d’un traitement automatisé de données à caractère personnel, dont l'utilisation est soumise aux dispositions :  du Règlement (UE) 2016/679 du Parlement européen et du Conseil du 27 avril 2016 relatif à la protection des personnes physiques à l'égard du traitement des données à caractère personnel et à la libre circulation de ces données «  RGPD » ; et de la loi n° 78-17 du 6 janvier 1978 relative à l'Informatique, aux Fichiers et aux Libertés modifiée. Vous disposez, à tout moment, d’un droit d’accès, de modification, de rectification et de suppression des données qui vous concernent. Si vous souhaitez exercer ce droit, il vous suffit de contacter par courriel: donnees@edelis.com ou par courrier : EDELIS - 33-43 avenue Georges Pompidou – CS 23179 – 31131 BALMA CEDEX. Plus d’informations sur <a class="cldp">https://www.edelis.immo/donnees-personnelles</a></p>

					</label>





				</form>

		</div>

	</div>

	<div class="part_liste_agence center part">

		<h2 class="cyan" style="padding-top: 60px!important">trouver une agence</h2>

		<p class="sous_titre">Depuis 30 ans, Edelis a développé un réseau d'agences régionales sur toute la France. Où que vous soyez, Edelis est proche de vous, n'hésitez pas à nous contacter ou à nous rendre visite.</p>

		<div class="list_container">

			<div class="item_list item_list8">

				<h4>Agence Île-de-France <br/>Siege Social</h4>

				<p>Adresse: <span>40 rue d’Arcueil<br/>

							94523 Rungis<br/>

							Rungis Cedex</p></span></p>

				<p>Tel: <span>01 41 73 40 04</span></p>

			</div>

			<div class="item_list item_list1">

				<h4>Agence Côte d’Azur</h4>

				<p>Adresse: <span>455 Promenade des Anglais <br/>

							Immeuble Aéropole<br/>

							6200 Nice</span></p>

				<p>Tel: <span>04 93 21 17 17</span></p>

			</div>

			<div class="item_list item_list2">

				<h4>Agence <br/>Provence-Méditerranée</h4>

				<p>Adresse: <span>11 Bd de la Grande THUMINE <br/>

							Parc d’ARIANE Bâtiment C - <br/>

							CS 10459<br/>

							13096 Aix en Provence Cedex 2</span></p>

				<p>Tel: <span>04 42 52 90 40</span></p>

			</div>

			<div class="item_list item_list3">

				<h4>Agence Midi-Pyrénées <br/>Siege Administratif</h4>

				<p>Adresse: <span>A proximité du C.C. Auchan Gramont - <br/>

						(Terminus Métro Ligne A) - <br/>

						33/43 Avenue Georges Pompidou -

						Bâtiment C</span></p>

				<p>Tel: <span>05 61 46 46 46</span></p>

			</div>

			<div class="item_list item_list4">

				<h4>Agence Sud-Ouest</h4>

				<p>Adresse: <span>"Le Kennedy" 21/23 <br/>

							Avenue J.F.Kennedy - Bat. B <br/>

							33700 Mérignac</span></p>

				<p style="    padding-bottom: 60px;">Tel: <span>05 56 00 60 60</span></p>

			</div>

			<div class="item_list item_list5">

				<h4>Agence Ouest</h4>

			 

				<p style="    padding-bottom: 60px;">Tel: <span>09 70 82 88 27</span></p>

			</div>

			<!--<div class="item_list item_list6">

				<h4>Agence Est</h4>

				<p>Adresse: <span>38 rue Saint-Dizier <br/>

					54000 Nancy</span></p>

				<p>Tel: <span>03 83 44 88 91</span></p>

			</div>-->

			<div class="item_list item_list7">

				<h4>Agence Rhône-Alpes</h4>

				<p>Adresse: <span>Espace 50<br>

				50 quai Paul Sédallian<br> 

				69009 LYON</span></p>

				<p>Tel: <span>04 72 91 27 11</span></p>

			</div>



			<div class="item_list item_list9">

				<h4>Agence Nord de France</h4> <br><br>

				<p style="    padding-bottom: 60px;">Tel: <span>09 70 82 88 27</span></p>

			</div>

			<div class="item_list item_list3">

				<h4>Agence Pays Genevois <br/></h4>

				<p>Adresse: <span>49 Boulevard Costa de Beauregard,<br/>

						74600 Seynod - <br/> 

				<p>Tel: <span>04 50 68 30 83</span></p>

			</div>  	

		</div>

	</div>

	

</section>