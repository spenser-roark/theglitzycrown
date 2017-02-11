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
define('DB_NAME', 'theglitzycrown');

/** MySQL database username */
define('DB_USER', 'glitzycrown');

/** MySQL database password */
define('DB_PASSWORD', 'glitzycrown');

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
define('AUTH_KEY',         'v2ii$s P8*P|2M0[M5ufcYTq?D|Pu#XgBoe#VV4E?YSUAJ8`A0.1H[#4kPK|,z%k');
define('SECURE_AUTH_KEY',  'oYX^*2z6*OTuxKxIuQ^V+~M);z*oZ7yyOfy!TU;I [o39FoAra>uQr_$1@J5^5R?');
define('LOGGED_IN_KEY',    'JT5yvWeA:-ksAp]4Bc@sBX@|i8D:RJ[ Ec2?! 5^sPIBq$DeT4e}9W0Xc4&T:R~)');
define('NONCE_KEY',        'NetcIFz_>lo@ljmV~P-HYE5ss_%:q>HuX8N-b:`8b`NCyl3mKx|yI[u%@lLY^aHA');
define('AUTH_SALT',        'Q%u9;|(Ey.|x;+1H~o99@D#bfe3:Ey{b62v`lk}M{Eq-FdMrNY0m L:$*1RSg~? ');
define('SECURE_AUTH_SALT', 'NkfSy|F-1znQ#Y+jxeNp#OFYT[+~OM#y>ay_n<nRhI?lhHYw@,*D^{aF-|5AUU_j');
define('LOGGED_IN_SALT',   '%W{|-*TYTlE[<P_-.g>~&97R,Q)VH!AleCx%u,7u00NZToAtlv3/$j(NM%.N~li)');
define('NONCE_SALT',       'IcZ)d%}WfsY5CS(>H;YE[-c)HDdL06b@!.9a:o^$xYg,Q!,L[d=eM*z+f--HQ{cq');

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

if(is_admin()) {
  add_filter('filesystem_method', create_function('$a', 'return "direct";' ));
  define( 'FS_CHMOD_DIR', 0751 );
}