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
define('DB_NAME', 'natureo');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '_dH^06OFY(m$kjhOLKE5rK!DB7A2mZ}j~{a9A9+8=ew~fCl[vo80mSU)+/e`4j<u');
define('SECURE_AUTH_KEY',  '1Q)7+U{(U&+<+GlV0?  o/e.0N %ujK.]mA+4Wy FbvVnC6Xdr1Iunk[-9]LeN:m');
define('LOGGED_IN_KEY',    'NKu[(1KyTqq73l/K|=~E_[e5zbgC^Mvo2gH7`>!}]@+G_]/ |:h@8A`:v1re[u9S');
define('NONCE_KEY',        '&qGkQd/TBXTJ  Gl(-.nT]PGD>R,w+^X~%,h6YX 7XI+?Z=SSY*/8v1y?T6HKUl&');
define('AUTH_SALT',        '-h3i2+:M.`K[%WmpLu&NFTp&p-YM|zwHxJ=k|%@G$ICne!ye,,`:QKu1+~:-4<V<');
define('SECURE_AUTH_SALT', '5mg[=/@Tiz&J5$4hc>Sih3Q xG9(]i;2<I](U?LA;D~@)U]h$7@jnbCf)uJ.kS O');
define('LOGGED_IN_SALT',   'b7?E<}!)G<P0OiF1WN|I)!~KBj|*$Z1For]=++>nE7,N1LQPaMI:~g_3xcD5Nj5c');
define('NONCE_SALT',       '< =X$18O{{z&d:q_c7FgOe#@5QjzqnImf1r/Y.o@DmzoZt?gcg0tdbi]VOJ=5s@`');
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