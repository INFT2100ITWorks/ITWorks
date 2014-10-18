<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'database');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'vrjybpcghrkazij6uxm1aeqroy1s3jpzmxxqxlpg6xdfvdrkr2ommjnvspqyupq0');
define('SECURE_AUTH_KEY',  'votiehhdzj1l4nqzj7jkp69o6prlvffj0bzkzcpvkcqsp850wyigshem2ajkyeke');
define('LOGGED_IN_KEY',    'ipj4autsrstm8yue5wenx4jzreci258zojo5t1lnzwghs9gcqsxacxsze2xm2sda');
define('NONCE_KEY',        'f4nst1uyvufddn0a0cakytppkd1fnwsehxctivcnpapowuup6mxybtrpnepnxikf');
define('AUTH_SALT',        'htsydyqlrtgcmi8xqlz08jd8y3vmwb9ruus67zdcwjxivga5wgqfeu5rkjbmzxdt');
define('SECURE_AUTH_SALT', '4qvjqxitxdjunqjusba3pijfhqnptojobuegeyyhcnzcz6bdizhglsvcy6l0u7w0');
define('LOGGED_IN_SALT',   'aexo1bueppwckqocr2yoqswg0fan6a4dqkrziobg8nhsxxqhmy4hfxgmgz9tprw7');
define('NONCE_SALT',       '1mfyi0zprdd7n7cactos3ekrpnzgpctu4hp4lbe3bpz315m5wwrptkcnnpcgjshu');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
