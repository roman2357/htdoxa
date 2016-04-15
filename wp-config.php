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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Dg:ZMfH#iv^3H>G|m6qZ!aYG <BreGB@t*c;|>5o(&+x>A5ax7N3`xR|=I$fq,>x');
define('SECURE_AUTH_KEY',  'a5d2IH0{%KZu,0Q}0/w1Px?lP?~Nf<,1xHB)[$L-E@#A1@^K|- 2Z/r$ODG 1dYz');
define('LOGGED_IN_KEY',    '2F&<4,[EMd0KCGE@yn@[lOB|8C:^+~=&Q#VE?;O~!w!$T+K_,9IX6hVI=Q4HD-Pn');
define('NONCE_KEY',        '`+eE|PzZ]V_%o1l%g:.N~,RzF@2,%C|J=y,`sJYp}vF){q{nVV}MzhBg;!&)z}7G');
define('AUTH_SALT',        'uQJ--}WwVR(f1m~63x+bU|}>NpR=m#vFr8F.!ib6ze2!3%09h[n#(q]-~|9|%1Qn');
define('SECURE_AUTH_SALT', '!OD=A]}z6F+7z]-2<@^^5E9(V~XyM</0(AF4MJZir!rHX/oWPoq|vLCezCDo#{nr');
define('LOGGED_IN_SALT',   'yfk++*oQ|~-cRng<v|D&*OS1cPY!|9 pb@7f,8R?aAg*&%,Y@YW/PS[3SlFzM|Ru');
define('NONCE_SALT',       '8HZQ=ek+S.OfOordUmMnzlKNo-7{QwMfN=oQdOzLajS=,1g5YYyLcX00ph|3[}O`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp17_';

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
