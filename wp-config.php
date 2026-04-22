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
define( 'DB_NAME', '2204' );

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
define( 'AUTH_KEY',         'Y$JN8Q-e|:`YWwEC^6~?SUrAt<4A4h=dz3f8L`JBQdPYg*(tQ[J0ENjhb3whaP>u' );
define( 'SECURE_AUTH_KEY',  'RX%f8ym0dS`rj7[f`e7}o6sC(KyG30u/gR|hbaP3<G 52M8/DV5wXtAT[IhA1.6:' );
define( 'LOGGED_IN_KEY',    '8ORa;Q00~9+c$`51UE;J-*X+w0R:tqhjp;&PVG.%aRj~ ,L, qr|h5Q/pHR;Z$R}' );
define( 'NONCE_KEY',        'NI~G(48N!r17cWK9.:GzzSixsl0Ox0NT]>13e+DZvc?H4gf-H:bZ/J*vb*#ZEjlW' );
define( 'AUTH_SALT',        '(9a1QU0dqvJ8wE`XGdj[K{wP:yrs}[15~rtja^H$W.( 7i|T+Z7bGW6D`#)0+7{R' );
define( 'SECURE_AUTH_SALT', '[!W<&k:s38u%z|}Pw]~&c!!mzCda!FFB5!tb4~j9;eYa`W;US3QOe@Dr3X)N4iS_' );
define( 'LOGGED_IN_SALT',   '2{(.a]PYW}@xPcz>2&w=[4S<Lc{{tx42E[b<gsak,S]+#{8*cz&T06O2T]?GK,$w' );
define( 'NONCE_SALT',       'vZV})@D; 96s9sObT);r$Qf0c;T7-.MJE*ASoEN`1kLsD_S_yjkX}pFJ>ko/oxQE' );

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
