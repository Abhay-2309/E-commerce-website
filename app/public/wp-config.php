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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'LnMsT2Y~<py_98E71AY&8u@YtMDpxn6CH)xqGZD.u3@[/Tg~GKjmM^N5xD=l^L40' );
define( 'SECURE_AUTH_KEY',   'a)1ePQgGz6O%QWz<?U(bb2RYO?oS1D5bTqQ@IOIj2qTQN>IJ^T{^Zw>DqMK`7e-E' );
define( 'LOGGED_IN_KEY',     'cPEy@X_P[da-|no;v0ROj]W5j dDjx*B0Q Dbxsyl=lw8V}1cq;S_<+LDkJ4J=% ' );
define( 'NONCE_KEY',         ' eHtt`Dv%;h$a/L`?oqh_8sLrd9C%A3Q??$Jv]qX@>f<owZ*W_Bh>{F;5N|DV/)A' );
define( 'AUTH_SALT',         'Z[mNEoK7tgLn>HoHsJTyy& Ey=84}AA+rxbtzp8hBl|@&<#_M21lJTLZ4o[N)NUK' );
define( 'SECURE_AUTH_SALT',  'If^l8&L~mC(N_#J `YKI(J%cY<z5zxemnpeq.D;i3[[ 4md.QFa|1>G^(?TlN/<~' );
define( 'LOGGED_IN_SALT',    'IRz@dV7Yvq-6uZv/|b[p_WOr4%*=MS!=Lt@$evVWLjds`:`n}8gPM8%(%HhM)C?D' );
define( 'NONCE_SALT',        '^s^fbqCm_-B(!O>piCvvYAFNL]8c 4| _IMc>SdQ;F1lKOI||k9`gFf$_(-B;R f' );
define( 'WP_CACHE_KEY_SALT', 'h3Sv-Iuij^VG4z.@`~Bnh2gkPmu.{2pO(.6[~n}0;(0L[y5YA6t &Z~c2K#1.ie&' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
