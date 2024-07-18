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
define( 'DB_NAME', 'Mysite' );

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
define( 'AUTH_KEY',         'wliWo|#m/n4HNpS[oBfs&>^aBjVzgnlX`$1#:K6`00M$V MT-y)hh<z:W)DGP Wz' );
define( 'SECURE_AUTH_KEY',  'RY+*Y6fOp?Iez5*C4u7Q)4oP-_v&Y!zkwJ1^t~MCvVU/sjx(p(g#QD=R[Cf:L:5^' );
define( 'LOGGED_IN_KEY',    ';u:x)}+(r@*GvAXUgKR%!0jSCiwGzleKk55[r~U,ommm@tr9$@<Er 2sffz7%u/+' );
define( 'NONCE_KEY',        '#g2:QemVcmr JWX< rs@PiDjG}#Kr0Cz%dHN>+<l?q(q|fE-NW9`{(Tb0EYb{IwQ' );
define( 'AUTH_SALT',        ':|#3T[hhl(X0v7t=_w`>Y[!Q=Tpu:{vWjhT?fpG9hFH$F>Vy#Dd1BfD3EmNIU!M}' );
define( 'SECURE_AUTH_SALT', 'YNO!;bRwpe<K2 Dh#~a1wM)qSuE0y*;YVbII|%ZKONQE.)pb/:76 CB/?jqDAM3|' );
define( 'LOGGED_IN_SALT',   'kN* &~,gghb]zE^D96<C&N`nI`d7aCNPqBsy@vqB[u?sd 1JoPMm&#c@3Eom]Wvi' );
define( 'NONCE_SALT',       'qI`QJkZG,j+S/ZJ*`VN=cF^]-a&APPo=.,J=g{p1uBgi.+R9oP2 }0bR?t!p:h](' );

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
