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
define( 'DB_NAME', 'planner_db' );

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
define( 'AUTH_KEY',         'p*pw=6&yeN}S[Nja6_7h<PNo)9_$Q*uj!O sgWc(^s#dgW^E0+JW)f8}q%6$5qQy' );
define( 'SECURE_AUTH_KEY',  'wen`LxLa2m=RJeukvJw1=oH%`QK@x/9#-b=*UfJs`Mec8H%[F(;u @UM/(NbTi@=' );
define( 'LOGGED_IN_KEY',    'YTRoF$!c{Z(AP&E;xk#~<cP.$Fmu vlo?r]W<m1W$#b}7o-H#?A.6KURE<3=W_rc' );
define( 'NONCE_KEY',        'c_/N G538Y?Im*;baV,x3<rzf(x!aRP[;t:g&iQ(?Oi=c2Q6=r4oI+g)N:REdbEI' );
define( 'AUTH_SALT',        'r0w32!4U+5>X[j!O-Rx6wB(.U$fO)u~S5RMa08Rjl|#dY!$0 MhF,!W#QN&,dmQ8' );
define( 'SECURE_AUTH_SALT', 't8jZMRB>$d5g_)m<5c]G1yNq)(LR:&O!Fq6Vs-@]Fhi{HW^DqVed/d-&=PD-aVV[' );
define( 'LOGGED_IN_SALT',   ']!Oj4tcM_xux!y;=`!&!n@&afkn{y:~.FwYNXa[pP}()qxTxI%>_7Ou%(H:(^HM}' );
define( 'NONCE_SALT',       'v=7rM8(9cB:;3~kEB&.A0=*v|_n3L~C|]fKjzf5f%KX}~dm*TU~*dWn9ioI:_nfX' );

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
