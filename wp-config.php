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
define( 'DB_NAME', 'aakriti' );

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
define( 'AUTH_KEY',         '1l?`o.Gu/I*6(T.Cd?+%n ;f<|-0d.C1wPX9c|b2Kvvg4FwUnPbe?$hU>>Zv%NIj' );
define( 'SECURE_AUTH_KEY',  'dg*dENA*Rw^CLvF5LTmIpV0v9<</;4Wh0S}FO_b x-QZT^VwtE-4n?}<ABXJ/KWr' );
define( 'LOGGED_IN_KEY',    '4:4{2ur;yX,5#+0v%5ZEbRo%CLbVS9darKBfCmS`L%b&]j%cBnh+rb{mxdL0e 5:' );
define( 'NONCE_KEY',        'Pgys#BD;EW!s4z17XmyZ=*p^,Y`;8Q4[^tct}W{_A[rI>AL;GOJD#FU@C|z(*c&Z' );
define( 'AUTH_SALT',        '*F;PU`sVvXkPY0S(4>!k)}-p}It-@:a[[BQ9%.17X?d!m 8xiT s$[>j]}i ;y,t' );
define( 'SECURE_AUTH_SALT', 'BfBIdSP0Z5p:rQ-/C[0hnQj,b96 }9c1]xrM6E,C[xPJT3Dvmx_?Qa}zwN,[VMa]' );
define( 'LOGGED_IN_SALT',   '>e0-0Lf5+2tB|YFpACi&EVX_,mHY!2q^Y3crDrW*_xFCk+gB/;KkuA,w%}TCT[L>' );
define( 'NONCE_SALT',       'E9Z!MO!4R[]L=LhyaM4HH8=V~wM=iXn^F:EfFp?w$gQ:1%7Sq)XHF20c6h$;yeFV' );

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
