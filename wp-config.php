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
define( 'DB_NAME', 'comptoire_des_montres' );

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
define( 'AUTH_KEY',         'SI@5dmS/6?hlV>CiC,z>Glk*ulmyhPr7>+jD::.t># <qmNBbeOAL+D8[,!3K6YB' );
define( 'SECURE_AUTH_KEY',  'K?s@+5lu73Bl.)Ngp<jPq~QIr9;K)@q:e}nZo9w7323zK(M5s+c5|#>]m}<pnJw:' );
define( 'LOGGED_IN_KEY',    '5Vx4e@CcD8!c|0I@;@mkwraiyf1JM;3HHNqRFq ~G%7U_jo?NQ!o($[L9Q6l}xbS' );
define( 'NONCE_KEY',        '_1HFu19RIB3p87 D0250w2?X ?sF+A8:O$hZw~#^<f3wF6pqih<C.w;gbps-rbN4' );
define( 'AUTH_SALT',        '|fdI{CWq.qY{ebM; nfmz^K*FFA1C=aDxvERGQ?7su/#UM7YhJ&Hpk->k!}Hls^L' );
define( 'SECURE_AUTH_SALT', '[MADHh%qHqo:i8`6PVpAqOWnB AQhrFL6}@tj>Y}I0V{|g2c)=GA1%szNiEP>?_ ' );
define( 'LOGGED_IN_SALT',   'X,[P^pn4Q# gRn]yAz&s(C,];E[NcQ-ZY{?/:a~]r?UtSz1j=U#gdsS2)Y:J,c8M' );
define( 'NONCE_SALT',       'D8Q82?ajUj/nqA7QQR eQFun;c}wpOUZb niAlSFq(poQE&1?xn$1;yM*rlHIH:f' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'CDM_55822692_';

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
