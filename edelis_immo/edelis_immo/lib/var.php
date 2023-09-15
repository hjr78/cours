<?php
/**
 *Variables pour les différentes fonctions d'envoi d'infos type neolane / immolead
 *
 **/

$url = 'https://edelis.immo';

/*campagne OG*/
$apikeyOG='$2y$10$FNgz6u7HJHOn06X5oydn';
$customerkeyOG='$2y$10$HakIGQWzM/cMqrX';

$url_campagneog = 'http://campagneog.immolink.fr/social_api?apikey='.$apikeyOG.'&customerkey='.$customerkeyOG.'&url='.$url;

$json= json_decode(file_get_contents($url_campagneog, true));
$meta_og = json_decode($json->meta_og); 
$facebook = json_decode($json->facebook);
$google = json_decode($json->googleplus);
$twitter = json_decode($json->twitter);
$linkedin = json_decode($json->linkedin);
$viadeo = json_decode($json->viadeo);
/*var neolane & immolead*/
$origine = "Landing Page";

http://campagneog.immolink.fr/social_api?apikey=$2y$10$FNgz6u7HJHOn06X5oydn&customerkey=$2y$10$HakIGQWzM/cMqrX&url=https://edelis.immo/;