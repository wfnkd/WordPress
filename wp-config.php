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
define( 'DB_NAME', 'wpsamplesite' );

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
define( 'AUTH_KEY',         'TqA>.VU7v)341/04m/]Rf{dPB@W<1?8^K8ZvxC9:0&bqrGvwoU ^Qa<r9UBIt{5U' );
define( 'SECURE_AUTH_KEY',  ',I?X77w3~U=t8`dZP-wzylw*n1e5Dl_ReKl-jBc~N7kBhi1-.o?X1<>/m902UlU2' );
define( 'LOGGED_IN_KEY',    'VRq<Vo5IXRB/vAbO5<!7l.oC$I?/@]o1C0=bXi[VjGh(pm%>`p?S(lyAxf3k^s5W' );
define( 'NONCE_KEY',        'F~rn{XgT$.$v#-pAvI/U`T?X[L/fk/XQnHW:~lG~FE 0,nDeI;~$lKtL*4<~N}P4' );
define( 'AUTH_SALT',        'be#ISRG{u6$L!~!YYOuq^N3`d<!pgYXsXgOTTc!udB1u@UC#]o]SZ^71g]i2A8Gq' );
define( 'SECURE_AUTH_SALT', 'agPdR(1f@4sbD5vmFoLb h6_W9Jn/}YV}D}Xs.:ndk#.68sG`JFm@7!%c(DMzAB>' );
define( 'LOGGED_IN_SALT',   'lu0xa1bb]DL>8?nE!2,dX1*MWBJr$f*y!Xl =E<1!eI$rmvql-8c,Z5UF5snP-kX' );
define( 'NONCE_SALT',       'kNl[Z?@(s?o[xGSY0f?vvTup;T;O1$qUDja%>`}:uFl/Tj:aQy1Zu3zX#_]UjAS)' );

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
