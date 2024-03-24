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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'profile' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '' );

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
define( 'AUTH_KEY',         'kUQ}[$^>np/:uf[#XODpjq=^J!uS*+0L.^[E2@~6Q{?2(U#q`=Yhm-tyT@;)n+ :' );
define( 'SECURE_AUTH_KEY',  'U^Zh)VzXDw<9Geko+fY*.A[j&,`p.3nzzrRC;BL}a<SV/-BD<3JTGbx({4N70*0)' );
define( 'LOGGED_IN_KEY',    '5S4%4w,6%!GM.LDBvr~z=Y8M%`s>-}]CIzA_}mEN-0)NlOtQ5_D}-B9287t/;YDP' );
define( 'NONCE_KEY',        'd7$B<{h4)Q6=qHUr>17/~~j%0Oe0|it+UVlE3,0V&]:Vf?lq6YYS}M1b]g5/gJim' );
define( 'AUTH_SALT',        'ALM%a <F#d9O}Fo%p}%TOOgw~AiLr{J]o;`~zROhA&DtX(IT:V<_5jYhI+U+94T!' );
define( 'SECURE_AUTH_SALT', 'Efasa(xQzW2Rwbkk:6aw9DK^(*g`xEmJY3bWdXhxVkgmoy3pB$td/zuML>u6dM^@' );
define( 'LOGGED_IN_SALT',   '}oNs1 WY94_ yK5Q)Y=kjMTndMb[}hwuFD)>J<;mwveW6@Pd3G6MrfBr3fH48wLD' );
define( 'NONCE_SALT',       '( Z)~4%rmHlnuMW/^5w~0&pIQlj8s8IQve%adkD?7*v*PvPfT:S&h,<q,Cip RNu' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
