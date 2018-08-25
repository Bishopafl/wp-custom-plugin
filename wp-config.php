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
define('DB_NAME', 'wpc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Y-bt C2`KVrqd/md06#F3An~3-=m#s&YpS0<#HptkcN^/9 2+Pa^x6xASR|1]4nA');
define('SECURE_AUTH_KEY',  'G.AI{<-Hhsr?q-P$Y,3NT?bjvUB&6,(q,YOt!|[z, R?CfYjnISha(1zJ#VfV}b_');
define('LOGGED_IN_KEY',    '0#rWoP`k-mAFUxPII>j.CKrJ[u9_Vt&w[Y<:WUQZmv?S4*L[yx`kTmYt~yLWd&j;');
define('NONCE_KEY',        'r4-_$1(4P=ID1`DHCk7#pX;M;Y@$ECSv$zhA~@#.}RQvA_N[Wi!CVCNWCb0MNY5|');
define('AUTH_SALT',        '#L,}SZUeRWH4aQS h$}*+A$^Zh?p@#Ffsbd@JPh]wI_.y:>Ea/+Y~>VV=R$ZfSwm');
define('SECURE_AUTH_SALT', 'e]=XQK&$f`),s/@=Boh3/g*?aHIMr@k$>:u|`@0Kuwd,;T@]]!v0sFZYd3)Vmgpk');
define('LOGGED_IN_SALT',   'gl;x4BE y{~NwW8F%-f6uLMsXFR+J_)>f1&?$U?V6!z0D/rv5lv,31@,[fIc@*o@');
define('NONCE_SALT',       '{=-_9:o-$h$EXvJ$CAd;sYRpY[LX+t{SK-;ubs <@@QPfy9`ijMBb_Zmfn0J>aa>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
