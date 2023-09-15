<?php
error_reporting(0);

/**
 * Tracking
 * @param $nomcampagne
 * @param $campagne
 * @param $medium
 * @param $source
 * @param $content
 * @return array
 */
function tracking($nomcampagne, $campagne, $medium, $source, $content, $term){
	
	if(empty($campagne)){

		$urlref = $_SERVER['HTTP_REFERER'];
		$url2 = parse_url($urlref);
		$refrerer = $url2['host'];
		
		if(!empty($refrerer)){
			$chckgoo = substr_compare($refrerer, "google", 4, 6);
		}
		 
		if($chckgoo=='0'){
			// En provenance SEO
			$query_string = parse_url($_SERVER["HTTP_REFERER"], PHP_URL_QUERY);
			parse_str($query_string, $vars);
			$term = $vars['q'];
			
			$campagne = $nomcampagne;
			$medium = "seo";
			$source = "search";
			$content = "";
			$term = "$term";
			
			$selection = array("campagne"=>$campagne,"medium"=>$medium,"source"=>$source,"content"=>$content,"term"=>$term);
			
		}elseif(!empty($urlref)){
			// provenance referer
			$campagne = $nomcampagne;
			$medium = "referer";
			$source = "$refrerer";
			$content = "";
			$selection = array("campagne"=>$campagne,"medium"=>$medium,"source"=>$source,"content"=>$content);
		}else{
			// direct
			$campagne = $nomcampagne;
			$medium = "direct";
			$source = "direct";
			$content = "";
			$selection = array("campagne"=>$campagne,"medium"=>$medium,"source"=>$source,"content"=>$content);
		}
	}elseif($medium=='cpc'){
		$query_string = parse_url($_SERVER["HTTP_REFERER"], PHP_URL_QUERY);
		parse_str($query_string, $vars);
		$term = $vars['q'];
		$term = "$term";
		$selection = array("campagne"=>$campagne,"medium"=>$medium,"source"=>$source,"content"=>$content,"term"=>$term);
	}else{
		$selection = array("campagne"=>$campagne,"medium"=>$medium,"source"=>$source,"content"=>$content, "term"=>$term);
	}
	
	return $selection;
}

/**
 * Get href with parameters get
 * @param $name_file
 * @param $track
 * @return string
 */
function href_keep_get($name_file, $track) {
    $href = $name_file;

    $q = 0;
    if (!empty($track['campagne']) || !empty($track['medium']) || !empty($track['source']) || !empty($track['content']) || !empty($track['term'])){
        if (substr_count($href, '?') > 0){ $query = "&"; }else{ $query = "?"; }
        if (!empty($track['campagne'])){ $query .= 'utm_campaign='.$track['campagne']; $q++; }

        if (!empty($track['medium'])){ if ($q > 0){ $query .= '&'; } $query .= 'utm_medium='.$track['medium']; $q++; }

        if (!empty($track['source'])){ if ($q > 0){ $query .= '&'; } $query .= 'utm_source='.$track['source']; $q++; }

        if (!empty($track['content'])){ if ($q > 0){ $query .= '&'; } $query .= 'utm_content='.$track['content']; $q++; }

        if (!empty($track['term'])){ if ($q > 0){ $query .= '&'; } $query .= 'utm_term='.$track['term']; $q++; }
        $href .= $query;
    }

    return $href;
}

/**
 * Ajout dans Immolead
 * @param $data
 * @return bool
 */
function AddImmolead($data){

	global $url_immolead;

	$data['recherche']['budget'] = str_replace('.', '', $data['recherche']['budget']);
	$data['recherche']['budget'] = str_replace(',', '', $data['recherche']['budget']);
	$data['recherche']['budget'] = str_replace(' ', '', $data['recherche']['budget']);

	$params = array(
			"contact"=>array(
					"civilite"=>$data['contact']['civ'],
					"email"=>$data['contact']['email'],
					"prenom"=>$data['contact']['prenom'],
					"nom"=>$data['contact']['nom'],
					"codepostal"=>$data['contact']['codepostal'],
					"ville"=>$data['contact']['ville'],
					"telephone"=>$data['contact']['telephone'],
					"mobile"=>$data['contact']['mobile'],
					"origine" => $data['contact']['origine']
			),
			"event"=>array(
					"idproduit"=>$data['event']['idproduit'],
					"libelle"=>$data['event']['libelle'],
					"objet"=>$data['event']['objet'],
					"type"=>$data['event']['type'],
					"origine"=>$data['event']['origine'],
					"source"=>$data['event']['source'],
					"content"=>$data['event']['content'],
					"medium"=>$data['event']['medium'],
					"campagne"=>$data['event']['campagne'],
					"motcle"=>$data['event']['motcle'],
					"useragent"=>$data['event']['useragent'],
					"commentaire"=>$data['event']['commentaire']
			),
			"recherche"=>array(
					"datesearch"=>$data['recherche']['datesearch'],
					"studio"=>$data['recherche']['studio'],
					"deuxp"=>$data['recherche']['deuxp'],
					"troisp"=>$data['recherche']['troisp'],
					"quatrep"=>$data['recherche']['quatrep'],
					"cinqp"=>$data['recherche']['cinqp'],
					"sixp"=>$data['recherche']['sixp'],
					"budget"=>$data['recherche']['budget'],
					"habiter"=>$data['recherche']['habiter'],
					"investir"=>$data['recherche']['investir'],
					"idproduit"=>$data['recherche']['idproduit']
			)
	);

	$bodyData = json_encode($params);

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url_immolead);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
	'Content-Type: application/x-www-form-urlencoded',
	  'Content-Length: '.strlen($bodyData)
	));
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $bodyData);

	$result = curl_exec($ch);

	return $result;
}

/**
 * Ajout dans neolane via API
 * @param $data
 * @return mixed
 */
function sendjson($data){
    $bodyData = json_encode($data['params']);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $data['url']);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/x-www-form-urlencoded',
        'Content-Length: '.strlen($bodyData)
    ));
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $bodyData);
    $result = curl_exec($ch);
    return $result;
}

function pushMauticForm($data, $ip = null, $id)
{
    // Get IP from $_SERVER
    if (!$ip) {
        $ipHolders = array(
            'HTTP_CLIENT_IP',
            'HTTP_X_FORWARDED_FOR',
            'HTTP_X_FORWARDED',
            'HTTP_X_CLUSTER_CLIENT_IP',
            'HTTP_FORWARDED_FOR',
            'HTTP_FORWARDED',
            'REMOTE_ADDR'
        );
        foreach ($ipHolders as $key) {
            if (!empty($_SERVER[$key])) {
                $ip = $_SERVER[$key];
                if (strpos($ip, ',') !== false) {
                    // Multiple IPs are present so use the last IP which should be the most reliable IP that last connected to the proxy
                    $ips = explode(',', $ip);
                    array_walk($ips, create_function('&$val', '$val = trim($val);'));
                    $ip = end($ips);
                }
                $ip = trim($ip);
                break;
            }
        }
    }
    
    $data['formId'] = 24;
    // return has to be part of the form data array
    if (!isset($data['return'])) {
       $data['return'] = '';
    }
    $data = array('mauticform' => $data);
    // Change [path-to-mautic] to URL where your Mautic is
    $formUrl =  'https://edelis.automation.webmecanik.com/form/submit?formId='.$id;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $formUrl);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-Forwarded-For: $ip"));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}