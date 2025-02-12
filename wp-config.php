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
define( 'DB_NAME', 'irs-tax-attorneys' );

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
define( 'AUTH_KEY',         'Ad96w^n<s>}[%n_0As55oh.NHuZmzw&l e;2k|0oBe6}86{(xU9J0^dO]{KPZ&9y' );
define( 'SECURE_AUTH_KEY',  'G#<^W}[cIW$ZQ}O0TRcB OOo]5HaD/]fUIis/*Eyq%WgAraoJY~ :{Cd_7F*azvB' );
define( 'LOGGED_IN_KEY',    'fL-z=Av|E*Oa5)i:r<f,:z5Uw|`!-k+X06(~hf:ySO#Bfp.v8Xdbp+[g?-y&9~vJ' );
define( 'NONCE_KEY',        'km]v&;q|GCCg_k_$,U@(3oCu}(|7}dAl)V-?`P5C,%-i~#d|#I*HBar, )wr9cYW' );
define( 'AUTH_SALT',        'U!m+-1@Dw;IbJs_zM~|5s!LWk*n M15-g#*hs#*MH2`@)e>9x?%rEakP(MsDx,t`' );
define( 'SECURE_AUTH_SALT', 'GLCt,TH$NtuuP_-h~a@MJ3r$})LsxD`;~2OQNJ~f*`E5(lqpusUSwPA[ m3~9b}s' );
define( 'LOGGED_IN_SALT',   'iN]s`$XwwA^%0$p8KP9l1#;dxZy_P09_7*3`opTK|4w?+kI{ 5&fHw@0|70-KQyt' );
define( 'NONCE_SALT',       'imEXYzsP7q6;%GoJwUe?gv$vs[~OrU0)mZ/pSz=jsL..y9k{ gHq&_*/+0}bV0WR' );

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
