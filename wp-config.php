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
define( 'DB_NAME', 'ats' );

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
define( 'AUTH_KEY',         'zS-6U?r(D@<s{f]KY*]Di`a~}b!mGG#Hs^OBJy`.o9pGM-3y~$D&1?1ay{Ef74sA' );
define( 'SECURE_AUTH_KEY',  'eakfd0N7S8ZJjGeuf$FXF$@^{C:qdFoGtLAob@}AFi=nXb?jPIy8Pw.[D4>Jd#xE' );
define( 'LOGGED_IN_KEY',    'v%g,*cBZ)ozA.4cb1XcFMh/56`@]l+rqL}=5nE&hVtrhqFyCE}+mG]v</s6 5)eV' );
define( 'NONCE_KEY',        'H8=EjP!@y;096Tv{=GVquUp^hT5O)GlQ=8BgeY8|6>3reH44>%A)ZunTr(UOccL$' );
define( 'AUTH_SALT',        'DX[t{Vmw#}vQhCqh;)$]`zkDuPB_%]zBn#0E{nY9*$mf>001t{J4pWDi@DuCm|Up' );
define( 'SECURE_AUTH_SALT', 't3ni^YH5sI<W^8Af<7gP!MWG;QRM[:OCol;MMm3:JC[y)?xYP)3^u6AuO|KaLTn{' );
define( 'LOGGED_IN_SALT',   '8#<I;WLk9Y-#:M8Qq#o)H riT9n`>8%.+IH)@Zp<dwiEzl(I*9)m1j*&rF1gA.J2' );
define( 'NONCE_SALT',       'K;pXt(#|b:c:$X>xN9kt|PnsG|e~3<ju/_B4mdo0%0_Dw[cV+,s_pZn&_M%#ug2r' );

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
