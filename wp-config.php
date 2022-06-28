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
define( 'DB_NAME', 'database' );

/** Database username */
define( 'DB_USER', 'kylarae' );

/** Database password */
define( 'DB_PASSWORD', 'dramalover527' );

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
define( 'AUTH_KEY',         'Nrb;Q LLBD-9O{6)MNt`4]9t)HP<Bg >$IU%;{G79e!HwJB4$7So@X|6TY0/Q_Vi' );
define( 'SECURE_AUTH_KEY',  'M V00RHH&Hy|)+]<=i*x^#nM/.YG3 2Z+.h<,%=FK(@Th]i5oQ8iy_qwI.P:PAzQ' );
define( 'LOGGED_IN_KEY',    '9H3G}5;=#Nmeo%&dSp9>@a9-/^y0}nmBnQ4@r{o4]RG|wbz|58bXhj~r.A)r:&sm' );
define( 'NONCE_KEY',        '4j4k@>/~CWAZb{g(gR:9HFb;aoR.wvUEE$c@CniC3_5}v&m$VnC^,+,A^#Gn2[`#' );
define( 'AUTH_SALT',        'nPoPu@M22o.z?oC6DrS8aT|Q~<x(N;h~k0R/Wd*M.Ito%r L:O)k<}rKY2O3u<Lo' );
define( 'SECURE_AUTH_SALT', 'SBy>L)]d^8;N@RF;5E6=qOd)?^P7!BL5:L]O>?p/4c[_RFpL<=rsV3+a<z$c`IJ>' );
define( 'LOGGED_IN_SALT',   '!g;xfvNq,Zu#Qu(B ?mztfiVJd?UMS(_$7#vd]@&},;` |l]#xN>au%a8C[srT<V' );
define( 'NONCE_SALT',       '%dPGpwc-5nrldKL4Hxj%,UHkQ.fRv#q;&K>:$S[Z3WM%>mmqIlDd%F5w1q.z./g ' );

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
