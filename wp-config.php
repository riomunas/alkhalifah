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
define('DB_NAME', 'alkhalifah');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         '4k;zoc_KZ+|ph .,u+Dc12ui>oclh;4W&zG/$s&rx.#d]l?zy7OE0=py(5P|oEP ');
define('SECURE_AUTH_KEY',  'm>L$%+K*aa-R?{ xx6vfg0NUde0!f>%_qNp?(z)em@w`l,x(%s&H;W$)#VZWy3gY');
define('LOGGED_IN_KEY',    'C#.J`-^%;.<]aBl@~Job@xkfb=bHkRqQjE4w#GT+!]$~>@J2^jQJs?&Htw;!tssb');
define('NONCE_KEY',        '*N$#3<;>wrS_ _3+ 2 )>;_y|%0mD+U52eH-!.*v#_4AcA&jo ,[sbs|TNRH49r/');
define('AUTH_SALT',        ')V,/xaI7/Y-r<|qZ++@G<]r<]YH=!1fJ#uK`sI9.4X.sdvCg!X0=9MVP`YHo&Y!?');
define('SECURE_AUTH_SALT', 'B><~uV:oX4t ;P^QN5 }Z,{3{.4aI$_EK-Gl#%tb7Fj-BE:;TSR)t(9t-}l;T^[c');
define('LOGGED_IN_SALT',   'cIx=S-?{u>(HtD}~4g1mUmDtFwKi6Pr4sDyP>z_E,Pg12>AAgCZN`aI[}5Ox?WjC');
define('NONCE_SALT',       '6Q}-a?ec}=,eaz0rHR7Omep<d+i`#[-y}^JH_^|i[<ptzEN5{;#!DDCd~!9L09FK');

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
define('FS_METHOD', 'direct');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

