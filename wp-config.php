<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'fairgame');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'adminPwd3TLl');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', ' F4d8r_KyfrpQ');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', '127.2.160.2');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N'y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=)!a6$nk268ay}N-{PBm`1^EZ59EI NhOJr{FG9v<|uF-`|,9:JrU//| [V;&OQ]');
define('SECURE_AUTH_KEY',  '+*,-RdU1SfjHV|HH2GeS5+Ozya{4/IpwY]Uxl(KwTXJ/;J}=:uxc6_rx3+xL;RPE');
define('LOGGED_IN_KEY',    '>0CYh|ar84=OU;-t,h=e<]A3|s(-Q:Q^Jix+dJ]c7996/!U[|/p0n^oX-SamYmqR');
define('NONCE_KEY',        'Wz( --_c:E8%sH+*d=~h^Ogn8*Y.b}<e!?md`/+N1q=F? KG^%f {-e-;$C7vZ[`');
define('AUTH_SALT',        '3G7qN{~mc2@Y;I~6+eqTOd%1sRp-O_ZE YV3Kx@k5UlU--zgo+4|PLNEA 2S*H_+');
define('SECURE_AUTH_SALT', 'PFqXCJ0cO%2n1k6D~~x=8w%Ef||B@-W1cL@Df{}W@!1^zhF~X2y:OT>k$%2%Va{t');
define('LOGGED_IN_SALT',   'rfi1a1,;$>-<-R~yALxr`Ky9LzMPlwT.]OW2i2p=FR6,e.oDH&}-^0Rr^W-h+)3E');
define('NONCE_SALT',       'rZ9ycA+.XR`;(y_`Qh7Evm/qM+qAQ#vmPN72<=D(F{4 xyXiy?/|XE>;Ij-4aB&X');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 */
define('WP_DEBUG', false);

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');