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
define('DB_NAME', 'db653618794');

/** MySQL database username */
define('DB_USER', 'dbo653618794');

/** MySQL database password */
define('DB_PASSWORD', '2IjcTzqqz');

/** MySQL hostname */
define('DB_HOST', 'db653618794.db.1and1.com');

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
 define('AUTH_KEY',         'N*xR}st^J[?CS -;-Ow34p|H}5G~|+ XW++Ds+c|2Rbso..;%D(bB=y,>eQo,7IM');
 define('SECURE_AUTH_KEY',  ',Kl)t@N5G^LG}i-LdN4vCKJ$yhCx>@:O1rA8,nK?z1&_!`%w5-b!Qu|ojKJkU@_U');
 define('LOGGED_IN_KEY',    'O*-Zfmu4:/5o:X.O&b$A6=G26y<(l+lzp1R*3UwN9iu.[a1NAE!;wZBn3zQ3|U31');
 define('NONCE_KEY',        'G~}evhDpDwn0m@N)rxD&hCD.tZ&gVSr-hAz_<:QW1j:{!. ldYjCzBjOmG&/g{ZF');
 define('AUTH_SALT',        '89K}.{T#5KrJ?56>J4h+7Mr~TFxqGMgM-}u gDqcNW&eyHG!aXtLW~<r5lKmixcz');
 define('SECURE_AUTH_SALT', '~.eoPv0E|cFU2c/+>O-${K>^(}A?*0hzUy7h5ArOUO0%H|@P~:rEo?z;o%mBO#Y+');
 define('LOGGED_IN_SALT',   '2x3)yJ|QNKb%3]33Sec r,Ds+4c;T{uK36$yk+)-TC6maf5Y|,Xu=3h/#KLJ}g{a');
 define('NONCE_SALT',       'U9uU9]QAm:9~q& &cAw|=E/busI5PlB^0gVQ!OnVrqg?p4DME!Hq2ybH[y/gjWn2');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
