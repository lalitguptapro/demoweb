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
define( 'DB_NAME', 'demoweb_db' );

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
define( 'AUTH_KEY',         'tpuT0Yb[R;~KT4Baw2+}B=#8dH(Fny2&Nb.e/Emm}Rd$B=<`D-K_RKpytZt:PK_P' );
define( 'SECURE_AUTH_KEY',  'KGc*h3j66S$4gFa9/1_T9GpURo+xA!4;n7Sa|p8|Om~Q&gck>_v(*>+w l<]{:FE' );
define( 'LOGGED_IN_KEY',    '/D=1]fwTI^@m >:/7vJiFK$$$gj@0~m6s}A1xt7Rh.W38$a10/I$UX`G-UGDP:b#' );
define( 'NONCE_KEY',        'r)9k`z(Q;5/-_L}Ew(95CKIuFOBkL4($tlKLAOF|HY3yZH06;z6w{z2){vb8(mH?' );
define( 'AUTH_SALT',        '#OYS[q~t5LQzbtDX0qF40#)h173v`ea+VAeHMs~(G;?S)Nf#jy{IGX;nt,U)H5AY' );
define( 'SECURE_AUTH_SALT', 'g=CT.=M1|fLa,Ut>y;tqHl,=r$I1+1=:Hdl-4Hy2D><+c]@1;D?<:X(Y}S7&[Ca9' );
define( 'LOGGED_IN_SALT',   'aRhT/kZm~}ta0O`~]Hv~-cu5+&N!+Gz3B^*;1&;{0a8[o(}:%z]s2,>}Cws$ivR?' );
define( 'NONCE_SALT',       '~H1Sbm;A,ZK4cI28_} / q^or2C!/@^p%)2yZy-MnsbRyzM$e`z$r}Z|JT/NT5F|' );

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
