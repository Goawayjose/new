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
define('DB_NAME', 'sunnies');

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
 define('AUTH_KEY',         '|k6OB.T$Fi_M+/oZ|NRnX@,w}TMVT{v| (rOs>!cUDF)mC5cWX1P-Whw<W.`. FQ');
 define('SECURE_AUTH_KEY',  '7Zi.=`&Eg03x-a`L-JRt_k!ug1G^kC&caMHPi&V=&(ZlTb?jo6[2&lTh|~l;[kTL');
 define('LOGGED_IN_KEY',    '^?R0#=f)acj-E}@(]gU8|2AqsOjsZ ^Zv5Tid>,/tHO70Q`$lH? IC:V:f9hN:)4');
 define('NONCE_KEY',        ' ;?=p+uRJ<fZahvqn-k2$V?9JAJ4C6k*z|$~?nlthNjrZ~#+E+ZTi,Og0QTseEH6');
 define('AUTH_SALT',        'Ykn FFd@Y#V<*Y-9a|JiO>p2-ER8RTF i]2d{|L}Aw?GR_#@O1>H8]6Oq{]r6P>4');
 define('SECURE_AUTH_SALT', '+Q}S;%qJMUA>$@aLSI$d[Z_^/Ve~Pb5cCl-Q],&kS{F)Gf8+9O293s-s|]-Xv]dU');
 define('LOGGED_IN_SALT',   '+D%1J:X%D3PpGu|3VOB(:oUJ0k(]W]r+llI!G>V#C,e#JKUP;uDl1~C}>w,|@P6E');
 define('NONCE_SALT',       '#D~S b-u&O;BKm<u-gf3vkOJU}Yom26+0)$+M|P%[(MN92sT,XI[p@!;v/}C]X?!');
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
