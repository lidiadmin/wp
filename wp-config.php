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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ']bd .E4681)oW+a<oOOET/8h2~B#Ls7}rl6PJ}pFvN >[ecBe#OQkKfo#Z#lYdY.' );
define( 'SECURE_AUTH_KEY',  'PaXf{j 0t+APk$2*,8>..2VN%}-F*g6$TCkHbz(_83V#iF^v:7}MV70r2k#Aw)9E' );
define( 'LOGGED_IN_KEY',    's+/b?l4E]Znr}O+Q8sFI<OxqVYE:dIm*)Vrv=9x R:Yvf`S@1KWM}$gkut=k{&jE' );
define( 'NONCE_KEY',        'g1m0-a3o2s2x$X`N 7/f*D`cnQldV~%|5e*fW$;:6vVk~14gusGvwRKco5T61MKk' );
define( 'AUTH_SALT',        '^-/P6JO]~.xaHVaizx6s<[_@8)O Kc,>2TtSTM4,;S@MWB;LYtQI-5/_*Wz` JjQ' );
define( 'SECURE_AUTH_SALT', '2]!d=g#Bia`Mhl!U/Io<$+Ndc@wy:hUs9u[u->nN48aV|u$JxEI,gPvz}XJ2MsxC' );
define( 'LOGGED_IN_SALT',   '4{N8|,^Pf7bcHR*#QIQaZc[|4VW^gG/2%K4sYJ:Ln.oLb$dS82AQZ;]}-{;V[f^/' );
define( 'NONCE_SALT',       'GbCyc$=:dYsLyVhf_-ZL7`4G5/52B(Vv~OBI`=SfU pIi6ci`X_z7qPLR8uaV>n8' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
