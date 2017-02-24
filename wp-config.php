<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'raja_art');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '-9fwW6i e>|Dlmnb&S{Va<-$=66RZc*<:pwa)-N~Y_D^Guz>>z+Q=?BIkXEJ}v,b');
define('SECURE_AUTH_KEY',  '/J4[> ,Z`toO!{}VA^cs]#bIBcVbCGhC=uI6>6#JEhg-,a,d]>Z|y:y6y6~v=ig6');
define('LOGGED_IN_KEY',    '[H8>)Y9b&KH<Nu-sObct&%bok=Lvt(ZPt3k+oH /7BA-zU/GMiwyX>3,HkWx[VKi');
define('NONCE_KEY',        'VHK*xRhRsy|3O91F|qZ17{_gUXE+u_2ZOotpB9^Rz~J/<{,%(1guwO*Ahnkqh*&]');
define('AUTH_SALT',        'lV:U4g`gQCzr0qU{3ZP8R/9vxkWv!- R#^ojz9(T:gj= m.Yu%Wy$:4OP!^7ML< ');
define('SECURE_AUTH_SALT', 'bCoY4P)`[h0lw_Awb3&M;;(ep/9:p0RkbD^2}y<v7mt&/JlkXr:Pe(d3DT[ftd5;');
define('LOGGED_IN_SALT',   'jU%qLd4(@$Pk80vci >|{F#y+>dtz=/ =LjUK-lG+.(uxHY=)Sh_<0Ml%TTU(v37');
define('NONCE_SALT',       'FBd.NLWzJqqd))1 G3>8=S|8c@e$e<G9Bk#yAbSXDNk]WMpeB?:7dBKYR2J{ L{d');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');