<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ZLL>7V9pkJuplY@4]+QEJkovtrtPlL&7(C>6`XWuKZk:hK7b^ 0P,d]J/DL[HjvB' );
define( 'SECURE_AUTH_KEY',  'cMk1jMZbsyrcZ 4.F_=:;]LVOIJ`aj)rKUg<6~^e]-G_m(SxBh/e&),5GRk%3RjX' );
define( 'LOGGED_IN_KEY',    'i0HOk}uC^:0hY.#+Jze Uo7a_5G^-?<Yi#H<i{{9%Th Z#7R{qVJMO_Y+Aj(&6NJ' );
define( 'NONCE_KEY',        's>(hHU^5+[AeiRIj)2YA38.xFC;}cpu,/j7`F#4rFuAVgx;K6LF>@BN+/Qq`Sfj;' );
define( 'AUTH_SALT',        'b|b=}L,)G]Z4Y;8.#|`u4,qJD&K=keZ??k/BW4KZ;19nX*L44F|Kso}N0)xsT:?E' );
define( 'SECURE_AUTH_SALT', 'b`onax!Rni?.YqFDg8%>PT~&0`1m=>hOTco!?vwvNejR4d=8QjYMXS@5rh%.3%&}' );
define( 'LOGGED_IN_SALT',   'fa0([;.UdfT4Jf2HS1Q $uF8Ss &_+oB3-3>AAq=i6{{<U}o6d,mDBF*G?Ig ?[{' );
define( 'NONCE_SALT',       '8]7Wz1MhbkgLN[WgVWzU+v@S%6U,iZ6+*R@%;QWP} C/kvq1{iS*M0`7*GZ)6_P%' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
