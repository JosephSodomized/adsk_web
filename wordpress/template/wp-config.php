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
define('DB_NAME', 'db_base');

/** MySQL database username */
define('DB_USER', 'dm');

/** MySQL database password */
define('DB_PASSWORD', '666');

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
define('AUTH_KEY',         'd59+>mLb43&=j<Mg1e7kUm`n&=J.9I$rg,#hKQbm%?R+!XgBdI0+i<PFixYP*Z+=');
define('SECURE_AUTH_KEY',  '&r!yrt.zvmv&>off3OJM$hPz+my#Uq6CB3O~^|7I^:.zSpFnUR|/G .v2~!WO/]|');
define('LOGGED_IN_KEY',    '#56MfpkgNU#09CLr7-fKEs$`EPqqnF4d3m}{`%8lvTQ/nL=,?9u#<17X4Fq^La$h');
define('NONCE_KEY',        ' Ywa/8a;!FXo+nA%rS!cBC~O@OZW:D~4CN/F`=-]wdxmhxZ5GGxK`<Tx,@|++~aW');
define('AUTH_SALT',        ',,tbR!k(vO>1-UV}R6n):;3cLsPE!~sY=k<[=056@p#!(_DhJra;pk,^gUf)34hA');
define('SECURE_AUTH_SALT', 'lKuh~+Hzs0P|%K+V}RYJ|3]&S@QR:H$)Z5G%nKd%`bRg,q6jzuAB$ fF|uHFtYY8');
define('LOGGED_IN_SALT',   'lo<>|XDk|>xcSUP=rtbsVO6q`81V-.VX1w84l[+Wmyw7;T[h|xSZEsy~#Oc%QJvR');
define('NONCE_SALT',       '5LLSpD=KW+jiYl``?|p-Vg/*J8&-@XWtg!jWIpgfN~cEzF;2%f-gUvp.X])A)_J.');

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
