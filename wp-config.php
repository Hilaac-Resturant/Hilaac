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
define( 'DB_NAME', 'Testweb' );

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
define( 'AUTH_KEY',         '7L5Tgjn*{+=&.#RLE2r:PF,g`gF.rjfcIVMfi2r%GR=,PhyJu?,AN*v%~ATx}12I' );
define( 'SECURE_AUTH_KEY',  ']4z$/[oK78Q!js v$x_iENt!4Q7y5cfMLL>#J!`L1KQ{>C4e3p4~A!-0=;^92ESx' );
define( 'LOGGED_IN_KEY',    ' aCw6,<M[7jZ_]Ykjn[nYNbi_,<1WptZ%Fm+52Q6V(sg33VNo~x&3i,*x2nknE2%' );
define( 'NONCE_KEY',        ']]f=/&yl)HzVGg{5^*)x<BZIepDgX5hM6@l]&g:N4=f|Bc !TH.h%QmX/:]]voq}' );
define( 'AUTH_SALT',        'pi++P(s@S8n0@`]uN-|Vk4x{xyi2b5c[iIp:9-$b)RMw paP<gin9~Bnv[7c<)NU' );
define( 'SECURE_AUTH_SALT', 'bN</taZb}dy9OZN1hQ2Ba<LYP@BkiTUA#DszsX(6r;nXjG@@?^op?j0XqYm^QX$y' );
define( 'LOGGED_IN_SALT',   '+(Y{m&[0XcFa__9=Z0N{[sQ^z h^F<zQ$r%d/0aP.jv#CI{Z<3,Si4E4t|TDDNfn' );
define( 'NONCE_SALT',       'fX~K9^JZ5A]P(tsn&&@^e)8:F!# j$!P0GfsE]R!S&#@lwXh`,~#Y4fx^y%o;U)Q' );

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
