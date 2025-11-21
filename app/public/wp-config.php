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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '$I?7Xt#{SifaCyOb6{}c~]w|dLyTL$:^f0}]Wb_[%Ujn-xf`g[+Df*vZXaFS:49x' );
define( 'SECURE_AUTH_KEY',   'XF_W#pFpQ<5|4lxW.wyo*wK<uv/j>$=];g# o;B/Dv@{7PXidxptT@.r%cv-@tdm' );
define( 'LOGGED_IN_KEY',     'F,l[ug80/n@omdo *d`OH8zPAj.E/q6fmCg`Lre^O+vP2KILEbhN k)1-04M9u]U' );
define( 'NONCE_KEY',         '9;W1%k4k%2@q@CuWNi2Nw<y{bqBe:GvVk$PGvZ<iUj@z4FS5&WqM#1{-6ZiVk!L3' );
define( 'AUTH_SALT',         '{*SrHjLhYIj]o}{FJgS.5{ONo.qGd,4:)k!=P<7 `Bsv7ytjsh/V[SJ31T=}f3+d' );
define( 'SECURE_AUTH_SALT',  'kp67+|+_eqF9S}x<+9^s`:;rKX9L8~8b$-SdHcly@1ewbGCm*J}8}<l1!14NM `+' );
define( 'LOGGED_IN_SALT',    ')OD=]$,aQ8Q/nAgr+4i8,R|i5g9ro=F,xDHFebZD4]![n8QHI(-q%VwR!@zh`%Fw' );
define( 'NONCE_SALT',        '1I^BG+b[:{<]a,wa%t><>H4PZtegt2k4v)PEdtx;$Bdl_L~P+HKtI;q #{Tbs#K:' );
define( 'WP_CACHE_KEY_SALT', 'uX0eOWxk,1ZYBN(J?r2d,G#;[R%;bw.yz%W4Rf@Bq7n=>yydSz<Kk5CJ]%z;5x%S' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
