<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'projet' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'hLr+(ZC/N4;_BiE3>1=s1>*R*y2 r`),1uVg)M#A81M]>;Q$LXX`_-(L176.v*9N' );
define( 'SECURE_AUTH_KEY',  'yeV%7IwcQp5WF(vI`$3|zUEnzQ=[,c33V!Mp/qyGUx]N?2$B#y9uMlZ`N4[a3ct?' );
define( 'LOGGED_IN_KEY',    'QOAqM!~By,Ixycj~_Ert9V3rY%2XJfRAesw*UCEL*R*dR9%m5=w.YP* lrApzC2H' );
define( 'NONCE_KEY',        'n5sTm/U* }2vy/uZK&xzHWsUJ7]XmL7`O:tup<}t2l9y)GV|gi^FuJ #::U5 s#9' );
define( 'AUTH_SALT',        'PPJ/$?/IvwOfKynCP`f!fc#q-AY]J=mRn~vvQAzOc20=j,y11VwJUXQLh191J)6@' );
define( 'SECURE_AUTH_SALT', 'bY%Z@>;dg.w8Kt6qB;yWM0fH|:lj6J+>5x#n5D*qWounp9`B`1k>VJn{wFu~P]c*' );
define( 'LOGGED_IN_SALT',   'cSMjB]h|)Q}]{/mA4L+IL0!7Y~=Zip Xu7F,$EoNk*5}-:GuX7/.fKI<$%TF%U0H' );
define( 'NONCE_SALT',       '0bA:C0HD$I~KBpj1Lt^lc?~xo)|&i!D-vv,R`O{nAE|&M28.#Il&w[rO~[mF>q1L' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
