<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'db638694775');

/** MySQL database username */
define('DB_USER', 'dbo638694775');

/** MySQL database password */
define('DB_PASSWORD', 'im@rk123#@');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>H]p-6RZFW86 CSOvhX)JEK7U t+2>S0GUWp%[d9zUx}s=*_u#BST=UTu<;Q>%b_');
define('SECURE_AUTH_KEY',  ' 8*gEjZ/dhcM{4>c47>v{(zk;1KR#GxR[O] %S~@;p~&66>:C:>fN6QC6v7o7Bj*');
define('LOGGED_IN_KEY',    '#~)S4;</:=2*NK^nPKuNIgmSE_=aC~Hey^lhEGedA&N*xw@X&%MRHE~p;ZEVF<Q|');
define('NONCE_KEY',        'f)48qo:>~#B(T,<]:SE1~1+~V##7L9NPp^D<#4fPSao~M.m5Z69ivNAQjQr3u>~X');
define('AUTH_SALT',        '$&%nG?cZ^Ny.zS4G$uv@sEWQaz2>rge(dGGy[3$EK(tP^1Sk %`B=8BK9z_SnnPb');
define('SECURE_AUTH_SALT', 'w.7--<@py~AKPT;>CA&[yp-LO7FKk|26[M=lvwhk9HQ#^L(!FS94^<9@L=7`|$}6');
define('LOGGED_IN_SALT',   'Eae i1`(8`nJ=Naw/|:I@uY/bB,VHs,wg 4A1K47Bcj8k4:7A9Kj9|P&uq.U&c%A');
define('NONCE_SALT',       'm2lV^e=92]HM  <q P)axSF9CWd{K{/kr-g*!2stqQACux7T8r)3XoVoPBQNtWS}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'im_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
