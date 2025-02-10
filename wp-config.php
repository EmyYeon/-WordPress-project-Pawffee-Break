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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'O_1:LLHj+={4*|bZN7qq])G&y#UDN#Roo2*Ku!6u>:q1lfDC4QC.0G#<H(a#IB9!' );
define( 'SECURE_AUTH_KEY',  'wn]2t.EfK2Yb|g>Ri! XL>jFg!i;Pa+E~?pNc8>C~o*WoGc0H3!#_^[IblU;!_kz' );
define( 'LOGGED_IN_KEY',    '%+iCNxmh`~})VG@)R1z4iq5m6cl9:fGD`-N2;:bsc1sM!_1fA|P~kWdM e1lS;9M' );
define( 'NONCE_KEY',        'dYxKK?.7|Q8&QbPj;}3&?jLe<.yl&phu;03T>b8Q97`NSMw%7iEK:t?h,R.d[Zjo' );
define( 'AUTH_SALT',        'L@>I9g+<f3yp<nDfEh_d(4lmV$%Q`m,|4h3b29N]j+FUdX]m&YD<wx3T@Q*d4Qo*' );
define( 'SECURE_AUTH_SALT', 'NfvN E<$e!Yr^}N<U~l[_85jFG^6B)H[v[v^nHL(SW6a2Px[@!#TP[o]XiAcz_Ew' );
define( 'LOGGED_IN_SALT',   'A9fwAu?wF$!ce}EqrTFk-:(CTu@GU{1kxDl.J:,WlYPg$&P~H+m]|_Ykt3h^r&^p' );
define( 'NONCE_SALT',       '+c@L=[C4yq?d,sO*_ c<#.Mh=ZA0`,)W#NQk2:.faj({}7H@;H)VZt[TU%vhw=7N' );

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
