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
define( 'DB_NAME', 'demoheebum_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'wjdgmlqja1' );

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
define( 'AUTH_KEY',         '&j0[s@m 7uzF2I6V;8i,Nh~SH/4Gk#+8@rmCB#0$[gCp/Vdn[fZ cZ1`7/?JVrI$' );
define( 'SECURE_AUTH_KEY',  '#S}U#8oJdH>RQLh+A~rW9ESEI[=pu&u,i0WCaK~-uT>OY-O~|-nf z@!Dzd$~[Np' );
define( 'LOGGED_IN_KEY',    'i&;m%$dGB@5047ID#AGQx$^ V[?f)F4w!9`9}^(CPwBl$=Iw>-NY{7HyLun}(3[X' );
define( 'NONCE_KEY',        'X/^RaN.Y=ZsJ-Ge/?$|N-uCu.[e;t1LbC_~-W6x9=$f?|1?du~-^!Ks}`|9)=Y`t' );
define( 'AUTH_SALT',        'MVZft%Q],2f~v%T$ >=l0CDk{h3(E(;ak73X:D>5,z10In)y74;uzKqv6w9+Sn-i' );
define( 'SECURE_AUTH_SALT', '8^;Mg0@pHkYHr%79a2< 3R>3X,z^j_K5<].=Pw:7UN7I2b*[%!yi=`vr!Z[z*uJ>' );
define( 'LOGGED_IN_SALT',   'KF$?fL?W} 1At75r:9L]5L,<;^N[zr%N!m;3,#)= z_?M^u9BQTV:0.{zMg]LD]0' );
define( 'NONCE_SALT',       'tam[JUtm%I&5{&6wTz`JyXE]lA^Ocd|=L^Vcya`w^;IwSmrN8x7GhdO_[5;~Cdgx' );

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
