<?php
if (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && $_SERVER["HTTP_X_FORWARDED_PROTO"] == "https") $_SERVER["HTTPS"] = "on";
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
define('DB_NAME', 'straikas_sipsap');

/** MySQL database username */
define('DB_USER', 'straikas_admin');

/** MySQL database password */
define('DB_PASSWORD', 'dzgiSkan$$');

/** MySQL hostname */
define('DB_HOST', 'localhost');


/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'G&ut_U)F78tN7]R/-0W6[21k~):8ngd0RE-90O[x,hZ{L&OQ1N$dmB_u5}S?j(yf');
define('SECURE_AUTH_KEY',  'PWXl*Pa5p@ZZf5w8xp5U??;<?A(z5q=:u`5jafrmM@XwcH<)SMPQ:ST6o8WF%z3D');
define('LOGGED_IN_KEY',    'g-0oO]Ro)Xi-4}$g$THghl6hQX|-BK6ZQn}4v6 10R~d8g(:O`|iz;1=O5;64~a>');
define('NONCE_KEY',        'R/)se2k>ufQmU_sX~mdz-/ZfA3CZn-<F(ByN@:&xm(+C}36lC#l3BJ|Z`4-q 5hw');
define('AUTH_SALT',        'x$WT&r>g(dX-@=Ja.9ew6QBY|{qGqYfn7~Jd3HFL<p^vnNvvu6MQZ)Y0ES-l1?^F');
define('SECURE_AUTH_SALT', ';>c;ZYjMbyR$n19i-jWSL9!,2>_vU21,g?(c]e0]LEH-=.Vz3jL!$*<q}{0ae,(3');
define('LOGGED_IN_SALT',   '(k|UBfJjJ[2]z,jWO+wqVV8@uz1^hOt+%s{ ,@* [Iu!,!iE ^F#ueuv2d+oc|9n');
define('NONCE_SALT',       'V;a;&&mp&S7w;N@g^Xhk}&E?/_lV<te||C+V+EYRO4J-G@;| )1MFA^.lBdJBA}I');

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
$_SERVER["HTTP_HOST"] = $_SERVER["SERVER_NAME"];
$_SERVER["HTTP_HOST"] = $_SERVER["SERVER_NAME"];

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
