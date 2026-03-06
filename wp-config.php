<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'chuctruong_new' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
$table_prefix = 'wp_';         

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'y1v@%#~E_/`cAz}AZW&xt1(PaH,Pb/i-[RvwMQhAFZY6tsSyQ:B^cDu=U]$99Qy8' );
define( 'SECURE_AUTH_KEY',  ']g!<7PBlmC]9.<YyPGl$(:uFcgVylq8.7#yIbWo%qMc+gX&&7n0/KQN^c]T5uZ6w' );
define( 'LOGGED_IN_KEY',    '_:s`]&Qj7IG:yLWPi|#[d^Zs^!o&%p81^xySIjstWpar]}CoQHwBLTb<|EUQ=F0p' );
define( 'NONCE_KEY',        'JEc6k~jD{&#2LOUMu@~U4qvF[l_hhj:gz35GU1{(L]T`u:Hpke=b|6>BD/_xP|Ew' );
define( 'AUTH_SALT',        'Ej:Eoo|9A,G2},)Zf?cLw8$KR&>7X1Ji:}Dg|@Gh24br.lY,Y{vPT(jJX3}{VgOI' );
define( 'SECURE_AUTH_SALT', '61fM0!@@eDoW&9{AH/(K&bE~Eae1D31Qy)^8KGWxdA,?X^6[Bwm?3Z%Yc7c%h.r+' );
define( 'LOGGED_IN_SALT',   'Ba^K-F`b$]`Lwvp/oIo},qXF[=O.=dE1:oQ<~_Bi8@me#*a3e.e6JdUwgPRqe;`l' );
define( 'NONCE_SALT',       ',b|{}SLE0o<K[ $vs#R,1}hyw;%<m,vxt%oZ}e.iOm)iPEF$1[:ZUV3Ec*3I0F?q' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
