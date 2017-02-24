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
define('DB_NAME', 'raja-art');

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
define('AUTH_KEY',         ' +np:Xquf}:{nu~}!4,:ky;4~$Mh9fn&lt7EL$u(?$};6cZM)9c65*s8&rT5t}id');
define('SECURE_AUTH_KEY',  'Z&Qox9G -l!J5%TYW$aW|[kX<M-a=W]hypg}P_,P3ACQ<OA;68,g@di.sVz1RV`n');
define('LOGGED_IN_KEY',    '{?qaUHd~QnYbi_/2Q:2rWda0b=,Z$Ko]CsOgFlEZ|)Equ/60|o^i|2is3UArAgl6');
define('NONCE_KEY',        '~u$7$a+1Xy^H(x/ fc$| 0=?8ae p();dD?T-<HH=$F|!-mfK%N>Y$8Dx4z1l|O@');
define('AUTH_SALT',        'X]o#!vL8Yq+h%9`=||w&=IcNCzi)+4j@XB]bx_L)jn/qca5A#17)r2;=LK70=0|;');
define('SECURE_AUTH_SALT', '44]=<mVX;81{Jh{O_U+I.$o~,8@sS:Z5_A}(P9.A*4!Vhi2u~(5PF2AhXVMr#Fds');
define('LOGGED_IN_SALT',   'Ik`cY;gLg8+A35K03}fGdOb1bG!-N%U5M/Er}ew)ru %!>i*#<fD^-~Avoh}^Ex3');
define('NONCE_SALT',       'jxC?H)M*i,/:B:#g^cMf-EbE]Bc.G/DBFTC9`|CR=],x0z]DZ 72@Cxed=YhbqvT');
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
