<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="form_col_right">
                <form id="form" method="post" action="lib/form_traitment.php">

                    <div class="visible-xs visible-sm mt15 center_sm">
                        <p class="semibold t15 maj">vous souhaitez obtenir <br class="hidden-sm">
                            <span class="bold maj raleway t50 pt10">+d'infos ?</span>
                        </p>
                        <p class="light maj t11 text-center pt5 pl5 pr5 pb5">Complétez le formulaire ci-dessous</p>
                    </div>
                    <fieldset>
                        <legend>Vous souhaitez*</legend>

                        <div class="checkboxes">
                            <div class="illus_check hidden-xs">
                                <img src="images/book_vignette.png" alt="Brochure Noyer Royal" class="img-responsive">
                            </div>
                            <input type="checkbox" name="brochure" id="brochure" value="1" class="css-checkbox" />
                            <label for="brochure" class="css-label"><span class="label_relatif">télécharger <span class="bold">la brochure</span></span></label>
                        </div>

                        <div class="checkboxes">
                            <div class="illus_check hidden-xs">
                                <img src="images/contact_vignette.png" alt="Prendre rendez-vous Noyer Royal" class="img-responsive">
                            </div>
                            <input type="checkbox" name="rdv" id="rdv" value="1" class="css-checkbox" />
                            <label for="rdv" class="css-label"><span class="label_relatif">Prendre<span class="bold"> rendez-vous</span></span></label>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Vos coordonnées</legend>
                        <section class="form-group">
                            <div class="select-style">
                                <select name="civility" id="civility" class="form-control input_xs form_contact">
                                    <option value="">Civ*</option>
                                    <option value="Madame">Mme</option>
                                    <option value="Monsieur">M.</option>
                                </select>
                            </div>

                            <input type="text" placeholder="Nom*" name="lastname" id="lastname" class="form-control input_xl form_contact">
                            <input type="text" placeholder="Prénom*" name="firstname" id="firstname" class="form-control input_xl form_contact">
                        </section>

                        <section class="form-group">
                            <input type="text" placeholder="Code Postal*" name="cp" id="cp" class="form-control input_lg form_contact">
                            <input type="tel" placeholder="Téléphone*" name="phone" id="phone" class="form-control input_lg form_contact">
                            <input type="email" placeholder="Email*" name="email" id="email" class="form-control input_xl form_contact">
			    <div style="display:none;">
                              <input type="text" id="email2" name="email2">
                            </div>
			</section>
                    </fieldset>
                    <fieldset class="form-inline">
                        <legend>Votre recherche</legend>
                        <section class="form-group mr10">
                            <label for="typologie" class="control-label">Typologie recherchée</label>
                            <select id="typologie" name="typologie[]" multiple>
                                <option value="2p">2 Pièces</option>
                                <option value="3p">3 Pièces</option>
                                <option value="4p">4 Pièces</option>
                            </select>
                        </section>
                        <section class="form-group mr10">
                            <label for="projet" class="control-label">Votre projet*</label>
                            <select id="projet" name="projet[]" multiple class="input_lg">
                                <option value="habiter">Habiter</option>
                                <option value="investir">Investir</option>
                            </select>
                        </section>
                        <section class="form-group">
                            <div class="form-inline mt25">
                                <div class="input-group">
                                    <input type="number" placeholder="Budget" name="budget" id="budget" class="form-control input_xl form_contact">
                                    <div class="input-group-addon">€</div>
                                </div>
                            </div>
                        </section>
                    </fieldset>
                    <div id="summary"></div>

                    <fieldset>
                        <div class="checkbox_little">
                            <input type="checkbox" name="optin" value="1" id="option" class="css-checkbox-inline" />
                            <label for="option" class="css-label-inline">Je souhaite recevoir de <strong>Grand Paris Promotion</strong> par voie électronique (email, SMS) des sollicitations commerciales sur ses produits et services</label>
                        </div>
                        <input type="button" value="Valider la demande" name="valider" class="btn btn-pink mt15" id="valider" for="">
                    </fieldset>
                    <p class="legend_info">*champs requis</p>

                    <div class="form-group">
                        <input name="useragent" type="hidden" value="<?php echo htmlspecialchars($_SERVER['HTTP_USER_AGENT']); ?>">
                        <input name="utm_campaign" type="hidden" value="<?php echo htmlspecialchars($track['campagne']); ?>">
                        <input name="utm_content" type="hidden" value="<?php echo htmlspecialchars($track['content']); ?>">
                        <input name="utm_medium" type="hidden" value="<?php echo htmlspecialchars($track['medium']); ?>">
                        <input name="utm_source" type="hidden" value="<?php echo htmlspecialchars($track['source']); ?>">
                        <input name="utm_term" type="hidden" value="<?php echo htmlspecialchars($track['term']); ?>">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
