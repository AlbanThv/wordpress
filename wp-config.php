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
define( 'DB_HOST', 'localhost/phpmyadmin/' );

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
define( 'AUTH_KEY',         'B[&(G*^)O<V@=G{|8CvMObQ^!f3Yt}]RJp@`3L kz#i6q4jOhc`J}!E<BB[9`~wB' );
define( 'SECURE_AUTH_KEY',  'EAMwU$d#QYaA8,o$ho xf/=#,u;&6c&LsI}ulnQ)ua^|ks=;f^Yn|Y<dKd,h@cuL' );
define( 'LOGGED_IN_KEY',    'm`?7`$-?[Jhm>D?;./VEh:t`MA*54@_r-]R{P(N|7[A{|8_HpWq~tBqg;4M#mk1<' );
define( 'NONCE_KEY',        '; )JR58gK[+M/OW@r;ZGm#5#eBZcUK3u2]GDc!.uJLrF|n4M=mC(<Nja#OBB)w^*' );
define( 'AUTH_SALT',        '(#@_9X<mQ]R%JA&SO1Jyg~R%QU93uysA)by<97_.yPM_P}sMeXMy7Z/dNC&nsz1J' );
define( 'SECURE_AUTH_SALT', 'ny{},@ou}t3z.7B}?vr?u ;,u$k&#4UD=oW#jD`&C(#7-jncc?}55KM8@[,6V#+8' );
define( 'LOGGED_IN_SALT',   '!rwsxlhXA,bpc,EiZ{FpcjCmXb-?O?%BXQhu_q:M[($x-G 1x<a|jkp{]1tLF*9{' );
define( 'NONCE_SALT',       ' mFmH*rU+YG<9Ss<3h)prT-}/N2|RB<8_(Yv,sDvB+G-c3A;%TO@.7r85G:108)M' );
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
 * Il est fortemment recommandé que les développeurs d’extensions et
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
