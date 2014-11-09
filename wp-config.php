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
define('DB_NAME', 'i425437_wp1');

/** MySQL database username */
define('DB_USER', 'i425437_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'I^oyOYwUlx31*~8');

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
define('AUTH_KEY',         'L7y6IMWyKQk3lToSsPF1fSWNZhO4IiqPge1iHxNWCBWNBZz2m7daXgpejLWxgNmD');
define('SECURE_AUTH_KEY',  '8DL6U7pOLsrRV1xkYt2lBRQwwjKWDRBZJ0ofl6CPUU4BjWwNfmaA5ZJDLT7E2ZbZ');
define('LOGGED_IN_KEY',    'xcbnekP75g2QVtYxC1nNzE9zcL0aSuqzz8kNgKCGlRNikXRBup28bwktD7nZVFe3');
define('NONCE_KEY',        'ga80vKhL8KMgV7xnsmeLP41KXP5CGFicUeHTxstbxjFqgwdN8JMH0EexHEeKwsOA');
define('AUTH_SALT',        'wrQqwPbREAL4vApOFMPhZgtLdDplJvabZ666AH6tGG7SZcXhhlRFq11kulXJrhZo');
define('SECURE_AUTH_SALT', 'ToF41dWA3n1qKPVrSTVNIbZPP7cLE1qn4bQbHJFAhnYuk1OwHUjrO5b48rMLrq3H');
define('LOGGED_IN_SALT',   '2TBgor5MoJOlTy043h997uZXLih6nsssq8wkPOAC1b59JXNVB4UrZPUNSVjF8WCT');
define('NONCE_SALT',       'a83gbWTEH9R996Pg4LJxpZHTkUQ1aJ9yK1GhH9VKpBavnDFHKtcaCngYew74fa9U');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
