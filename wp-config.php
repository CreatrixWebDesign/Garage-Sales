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
define('DB_NAME', 'garage_sales');

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
define('AUTH_KEY',         'NCgMuLR_sqEv-Qw8%M>=8V7~-S]Xr39w(|O!3]6@eWv=;r7W>t%FX|0y<2`?bz73');
define('SECURE_AUTH_KEY',  'KP63q#TK+XmvWHLt-sswFduZDbN0#;6wU06Q{s>(t*g8;@!UFG/ cm|lX+GU5Ph5');
define('LOGGED_IN_KEY',    '5NH{UqsWYyhKXS9_L+SOqR1Sd+f=?N&BnJ9zG^%93fNr6Bq/|j3a~LyiXtf GI(&');
define('NONCE_KEY',        '`R|Fn^T9VHlhS/K4h|+9-qFbgM0>nB-Dc>S9-f=(VRq+7*o~fq0aYx$7e(EuP~R ');
define('AUTH_SALT',        'i`vmkey5HE9**+06ve#<1uvqd/xf$aA*)Z)uYp_{_#*3VeWWA)4UGBC]d>bwj&Q?');
define('SECURE_AUTH_SALT', 'Cl3.ex_~g}@FMjn5P A+uK-++Ze{yg-^Q?Nl5)sGfV}7is,$0PR1OJOvb-ZW:Jn{');
define('LOGGED_IN_SALT',   '3&vagf1=Tza{KVAwU5hKNN@hJB6Ag|,NW~[PA8Rs=*?5w_TF+[5y=ZPk&5;j{CCU');
define('NONCE_SALT',       'u [#}Gnx7*lMjYpe`f`[,{.3`n,G;+.yJ7SK* 5%m??,5yDaQ%E/l9o&pI*NKf;)');

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
