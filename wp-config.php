<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'XXXDATABASEXXX' );

/** Database username */
define( 'DB_USER', 'XXXUSERNAMEXXX' );

/** Database password */
define( 'DB_PASSWORD', 'XXXPASSWORDXXX' );

/** Database hostname */
define( 'DB_HOST', 'XXXDBHOSTXXX:XXXDBPORTXXX' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'L&ZCpNN#Rh/:;}<o9b9FxU#I<5@/Rq+:rhgYy=gzYKh?X|wy8j@M]HVt>[X_f69p' );
define( 'SECURE_AUTH_KEY',  '%v(4Ju]Z=:W0L~@aj68}7qvh?pg4waSwM3^onzO3)ZfXck{tV,&T_7fc::$+vUAw' );
define( 'LOGGED_IN_KEY',    'uLBw~&6Wp*DjppZ_Li%*99WvrWuUN*iijy]*-_%m!j5xJesb`1@CK5#?LzK=]3Ir' );
define( 'NONCE_KEY',        'ePUqr-PkdT.+e~rH(S@ kQSg-lC2^WA&ciR_A-D<c!iW|),3Ve{d^5mP`s[pknJB' );
define( 'AUTH_SALT',        '.JE,kQ+`iF,h.b +/tHTC,sL0-Fdq~VoNHjhVf?k;GT}FT(j>1^y&OnA-S*[/X&e' );
define( 'SECURE_AUTH_SALT', '9:h7<=0B7_h(T2<j=L_jk#Wn]Q?7H>9>uY}oh,HL9R7M}w3*hUqqNye*hs^_;1?`' );
define( 'LOGGED_IN_SALT',   '9Ik|UYfIve,2rv7*^-J.q6_z>Fp+3Cs<)Qi7=v:q4*>u`_)m}b2U]I`:YAc{Y L9' );
define( 'NONCE_SALT',       'n2,yNMh%S]@uO^cx@$7Q2>[O:t^g:=^h^t]kbvm5zv;fQ2?$$R_X0|L2#dC=@@]B' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jhdhuf_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
