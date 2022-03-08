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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
if(file_exists('settings.php')) {
require 'settings.php';
} else {
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'grok' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'manager' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

}
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
define( 'AUTH_KEY',         'wa/`8BwOw,U3bDv=MIBj0oN/Ih*d_SRa3#kobvlCxRS:f<9iaDC!UC1{= w^5>N`' );
define( 'SECURE_AUTH_KEY',  'In;1:z(tkHMB$A!j4yy!9NssoheF_<1_%q7ZhlQ?T5&mS(1K,P#cmmfW`=T}v6;d' );
define( 'LOGGED_IN_KEY',    'i~0F&iPQC%ntW0-;d0MQkJc`Rys>P@rIP2#.]ZfNX4wI(u+%acnc0ft0osrP}}eh' );
define( 'NONCE_KEY',        '[D*^9v_}v?093{6V|EO0?~1@}d.S FV4JB%[j}_;-RM?SZPXY`8p2OS62om>WuY/' );
define( 'AUTH_SALT',        '/^|T#*[J*pUNG~KS4.`]2/N&j](K>xKEE+@Kq<}SK>me#hsC;]?IIW>XczYs+Ky_' );
define( 'SECURE_AUTH_SALT', 'icU{$s#4Vfo sHi&5=Vhu`q*G?jEMrfAd#/A=l4-8RNaFF6 j=d:-Q$~lY`aS?TN' );
define( 'LOGGED_IN_SALT',   '$Gzj>HWl%g*%T/T?w:QiZqr>eeq9.c:uHngl;[:sEfF,l`MwRzF,omM35`;0J^K#' );
define( 'NONCE_SALT',       'Kh-[_ G){4[Z0f)4%S)[!gv YGo%jC$fNw^V1A=EP$;&+sUrYQjgC.Vk$y;?-!P+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'capcom_';

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
