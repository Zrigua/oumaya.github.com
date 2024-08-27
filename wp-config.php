<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'oumaya_site' );

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
define( 'AUTH_KEY',         't]/5O&*XsHX);vc,)%5b)?o*am_J:g;uuWOZ)xv%>T6jR>5P(u:OaNbkxtnny{xg' );
define( 'SECURE_AUTH_KEY',  'elZ%oB)wq<_4anyEQHQc>XjVSG(VhxPu{o]znr*cU1v(yvvD{GAI}U TDiheT#@}' );
define( 'LOGGED_IN_KEY',    'KyrC}JW/=(MLG=v;h8kC_Y;|7dfx?d --lK:75Lib5J?}5M2|t/-(tN=~Fu3ZVn)' );
define( 'NONCE_KEY',        'axTd.3AQp=~L[ FNsj= }M4N)I]r[G4UP:r9W]sH46Cwz2XQn3q@Zi8C=pT5B]y ' );
define( 'AUTH_SALT',        'h!oNvLp<E+)zF3hL) W/UKRL I`Cx01{2k,Pf ?wWKT.xBMkg5C5S6Fu(&3eE-8~' );
define( 'SECURE_AUTH_SALT', '@^Niq:fWTGxB/V4K3%lu:h]XxH_Fz6n1N&)8;A/vCoUk-7%fPy0]&[*s==Oh=LKj' );
define( 'LOGGED_IN_SALT',   '8Q{KSx=3C7&%DA~iif8EP(geGF9er. jD$;f][_CY55k$#kdNVNMl_@aJ0LIVEQw' );
define( 'NONCE_SALT',       'al6-GRij^Ej|#;ZN_-bCrl+n7o,V#+]BLjc18Rj~RM~H,h@pk>>/T%8p?0Jr5jzs' );

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
