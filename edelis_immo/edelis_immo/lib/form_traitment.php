<?php

require_once('var.php');
require_once("functions.php");

$mobile = '';
$phone = '';
// print_r($_FILES);
// die();
parse_str($_POST, $form);

if (!empty($form)) {
    $file = "./logs/logs_" . date('Ymd') . ".txt";
    $log = implode('|', array('form',date('d-m-Y H:i:s'),json_encode($_POST)))."\n"."\n";
    file_put_contents($file, $log, FILE_APPEND);

    if (!empty($form['mauticform']['email']) && !empty($form['mauticform']['tel'])) {

        if ($_FILES['mauticform']['cv']['type'] == 'application/pdf') {
            move_uploaded_file($_FILES['mauticform']['cv']['tmp_name'], '../cv/'.$timestamp.'-'.$_FILES['mauticform']['cv']['name']);
            $form['mauticform']['cv'] = htmlspecialchars($timestamp.'-'.$_FILES['mauticform']['cv']['name']);
        }
        if ($_FILES['cv']['type'] == 'application/pdf') {
            move_uploaded_file($_FILES['mauticform']['lettre_de_motivation']['tmp_name'], '../lm/'.$timestamp.'-'.$_FILES['mauticform']['lettre_de_motivation']['name']);
            $form['mauticform']['lettre_de_motivation'] = htmlspecialchars($timestamp.'-'.$_FILES['mauticform']['lettre_de_motivation']['name']);
        }
        
        if (!empty($form['email2']) || !empty($form['nom2'])) {
            die();
        }

        $type_form;
        $url_envoi;

        $tranches = '';
        if ($form['mauticform']['tranche_horaire']) {
            foreach ($form['mauticform']['tranche_horaire'] as $tranche) {
                $tranches .= $tranche.', ';
            }
        }
        $departement = '';

        foreach ($form['mauticform']['departement'] as $dept) {
            $departement .= $dept.', ';
        }

        $form['mauticform']['tel'] = str_replace(' ', '', $form['mauticform']['tel']);
        $mobile=""; $phone="";
        if ((substr($form['mauticform']['tel'], 0, 2) == 06) || (substr($form['mauticform']['tel'], 0, 2) == 07)) {
            $mobile = $form['mauticform']['tel'];
        } else {
            $phone = $form['mauticform']['tel'];
        }

        $events = array();

        $event_info = array(
            "Origine_events" => $programme,
            "ReferenceProg" => $form['mauticform']['nom_programme1'],
            "label" => "Informations programme brochure",
            "type"=>"INFO",
            "date"=>date("Y/m/d H:i:s"),
            "url" => $url,
            "CP_logement" => $cp_logement,
            "Programme" => $form['mauticform']['code_programme'],
            "type_immo" => "info",
            "idimmolead" => $idimmolead,
            "immolead" => $idimmolead,
            "idproduit" => $idimmolead,
            "boolean1" => $studio,
            "boolean2" => $p2,
            "boolean3" => $p3,
            "boolean4" => $p4,
            "boolean5" => $p5,
            "texte_6" => $tranches,
            "texte_7" =>  $type_form,
            "text5" => $form['mauticform']['optin'][],
            "useragent" => $form['useragent'],
            "utm_campaign" => $form['mauticform']['utm_campaign'],
            "utm_content" => $form['mauticform']['utm_content'],
            "utm_medium" => $form['mauticform']['utm_medium'],
            "utm_source" => $form['mauticform']['utm_source'],
            "utm_term" => $form['mauticform']['utm_act']
        );


        
            array_push($events,$event_info);

     // var_dump($events);
        // Envoi dans Immolead la demande d'info
        for ($i = 0; $i < count($events); $i++) {
            $params = array(
                "contact" => array(
                    "civ" => $form['mauticform']['civilite'],
                    "email" => $form['mauticform']['email'],
                    "nom" => $form['mauticform']['nom'],
                    "prenom" => $form['mauticform']['prenom'],
                    "telephone" => $phone,
                    "mobile" => $mobile,
                    "adresse" => $form['address'],
                    "codepostal" => $form['mauticform']['code_postal'],
                    "ville" => $form['mauticform']['ville'],
                    "origine" => "7" /*personnalisation par client*/
                ),
                "event" => array(
                    "idproduit" => $idimmolead,
                    "type" => $events[$i]['type_immo'],
                    "origine" => "Landing page", /*cas par cas [Site web , Landing page, ...]*/
                    "source" => $form['mauticform']['utm_source'],
                    "content" => $form['utm_content'],
                    "medium" => $form['mauticform']['utm_medium'],
                    "campagne" => $form['mauticform']['utm_campaign'],
                    "motcle" => $form['utm_term'],
                    "useragent" => $form['useragent'],
                    "commentaire"=> $form['commentaire']
                ),
                "recherche" => array(
                    "studio" => $studio,
                    "deuxp" => $p2,
                    "troisp" => $p3,
                    "quatrep" => $p4,
                    "cinqp" => $p5,
                    "budget" => $form['budget'],
                    "habiter" => $habiter,
                    "investir" => $investir,
                    "idproduit" => $idimmolead
                )
            );

            // Affichage du résultat
            // print_r($params);
            // exit;

        }

        switch ($form['mauticform']['objet']) {
            case 'a':
               $objet = 'recherche-bien-neuf';
                break;
            case 'b':
               $objet = 'client-edelis';
                break;
            case 'c':
               $objet = 'vente-maison-ou-terrain';
                break;
            case 'd':
               $objet = 'demande-partenariat';
                break;
            case 'f':
               $objet = 'autre';
                break;
            default:
                break;
        }

        
        $urlApi = "http://apineolane.immolink.fr/api-mki.php?apikey=mki-220777-Pui88ance";

        $data = array(
            "contact"=>array(
                "language" => 'fr_FR',
                "salutation" => $form['mauticform']['civilite'],
                "email" => $form['mauticform']['email'],
                "lastName" => $form['mauticform']['nom'],
                "firstName" => $form['mauticform']['prenom'],
                "idimmolead" => $res['contactid']
            ),
            "location"=>array(
                "zipCode" => $form['mauticform']['code_postal'],
                "city" => $form['mauticform']['ville']
            ),
            "events"=>$events,
            "partition"=>'163960632',
            "scenario"=>'',
            "champrec"=>"email"
        );

        // Affichage du résultat
      // print_r($data);
      //   exit;

        if (!empty($phone)) {
            $data['contact']["phone"] = $phone;
        }

        if (!empty($mobile)) {
            $data['contact']["mobilePhone"] = $mobile;
        }
        $today = date('d/m/Y');
        $lieu = $form['mauticform']['nom_residence'].', '.$form['mauticform']['lieu_residence'].', '.$form['mauticform']['numero_appartement'];

        $mkt_data = array(
            'date_acquisition' => $today,
            'civilite' => $form['mauticform']['civilite'],
            'prenom' => $form['mauticform']['prenom'],
            'nom' => $form['mauticform']['nom'],
            'email' => $form['mauticform']['email'],
            'mobile' => $form['mauticform']['tel'],
            'code_postal' => $form['mauticform']['code_postal'],
            'ville' => $form['mauticform']['ville'],
            'projet' => $form['mauticform']['projet'],
            'objet_de_la_demande' => $objet,
            'optin' => $form['mauticform']['optin'],
            'f_message' => $form['mauticform']['commentaire'],
            'departement_de_recherche' => $departement,
            'residencelieunumappt' => $lieu,
            'poste_recherche' => $form['mauticform']['poste_recherche'],
            'utm_source' => $form['mauticform']['utm_source'],
            'utm_campaign' => $form['mauticform']['utm_campaign'],
            'utm_content' => $form['mauticform']['utm_content'],
            'mauticform' => $form['mauticform']['utm_term'],
            'url_cv' => 'https://www.edelis.immo/cv/'.$form['mauticform']['cv'],
            'url_lettre_motivation' => 'https://www.edelis.immo/cv/'.$form['mauticform']['lettre_motivation'],
            'utm_medium' => $form['mauticform']['utm_medium'],
            'utm_act' => $form['mauticform']['utm_act']);
 

       
        $ajout = sendjson(array("params"=>$data,"url"=>$urlApi));

        $add = pushMauticForm($mkt_data, $form['mauticform']['formId']);

        if ($ajout) {
            echo "ok";

        } else {
            echo "no";
        }
    }

}
