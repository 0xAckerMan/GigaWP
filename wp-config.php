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
define( 'DB_NAME', 'Learning' );

/** Database username */
define( 'DB_USER', 'r00t' );

/** Database password */
define( 'DB_PASSWORD', 'ressilience' );

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
define( 'AUTH_KEY',         '>DwEF%W-gPkShbs_]E5WXJ1dPx>YF%y_B 3?kf88J(ZvI}xLQ[s&?y^w-x,0iF6H' );
define( 'SECURE_AUTH_KEY',  'jx!F?:qm@MP`x[(1iEm@yLC:TKXpQt/m&;BCOnTWu~[R]2ib<8E1~SLgNA}wqkvX' );
define( 'LOGGED_IN_KEY',    '*Jov%m5i/GFz1,1wQ-C+3z-=aOd0<j]PmyhbAf6bI#T8* ;{ADs*xok^u2tVM]+k' );
define( 'NONCE_KEY',        'IA(u7)=N=Q.Bv{d-<tBC^p8VJBF-$o6_XyNYT7J2LJ~;$T^wzHT$Oo)jrJ`wty3E' );
define( 'AUTH_SALT',        'Q*TD=CI3fVY&b4Uzyh[1{%@fLF>$D>*H F<lw(!(9&.~`B*</^%4z=HM6/gBd*r[' );
define( 'SECURE_AUTH_SALT', 'U[e=)ZQRS!L*kdO?A@Re2|6D3XY}0EEn1_i`~l8HeEv_=pp$%m}c|5iBI}U!R)5)' );
define( 'LOGGED_IN_SALT',   'J=&dSko(j.JTh-nh%=bTW7/CNX8Dnjb4G.pP&kYufH &KP7y9?_(}Oc^SJ!@]ejg' );
define( 'NONCE_SALT',       'WvOlEU%PUA-s=^iGsg|l9 t5W6kW!9lhgdyy<uVaFkz7P4Z/rMZ=$(/gH B{GY-O' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'La_';

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

