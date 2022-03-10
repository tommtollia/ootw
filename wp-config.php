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
define( 'DB_NAME', 'ootw' );

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
define( 'AUTH_KEY',         'Hl[)J2&YY2@kU-,lx(T6d?Xvr: 2U#gN%b.}~B~Ts+b|^?[`CE]a-pLZ]g-^ 9gH' );
define( 'SECURE_AUTH_KEY',  'wRWu@3v!Uhg[y4cN(mXFUz<U+}he4<Lr3Fs/aD9s8t`4_ ;%q4?J*k.OKVWp*Bh1' );
define( 'LOGGED_IN_KEY',    'osbPmbEYnOrtZ~QBsuu_}c!zyi#Hl>W_5^y<PL&;yMZ75ub]s<z@$U8%Se%E+^5s' );
define( 'NONCE_KEY',        'P?Mulsnw]*WTtuG:_~z[3xy<(U)*G8&doE|#,w+0x{!B:hLWKl[_fhTH?R,COb5O' );
define( 'AUTH_SALT',        '8%%}U$cef~Z0Ia$I#UnK7rf}g4ZYpP;(-mz1)T|O0p&!aXoji>GkFSKCb!WVgzAN' );
define( 'SECURE_AUTH_SALT', 'x~ hU&XN!X>>0zXtQqZMHL8{`w-~o#>R6 i4RlbS!Y#DUaX0U`yB72Ms.0]-l:]$' );
define( 'LOGGED_IN_SALT',   'SK[)CByNh?5B#$gJ0<DpdwIF3{u<ihVm=8bKc)5<4BEXjL^l!W2HB>.?M[h|#FG5' );
define( 'NONCE_SALT',       '$6+=]N&U?HxV}3ECOKn/:-uW{*%~gRP=1g/=29]XnpL8p#$feR,+MYEqhy~ 1u5v' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ootw';

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
