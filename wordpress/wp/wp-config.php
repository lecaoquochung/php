<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'php');

/** MySQL database username */
define('DB_USER', 'lehung');

/** MySQL database password */
define('DB_PASSWORD', 'lecaoquochung@gmail.com');

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
define('AUTH_KEY',         '7vW.Z*5j|{jF-zF a|{Q%E~aINsA[8G-?RKfXAL]p9X6yegBFB@aOM)z1|cpcSkl');
define('SECURE_AUTH_KEY',  'iM{]>tG4;&NOY:[2in}s)5vVCHW>u})J3Cp+Ytea}A.W4Dgs`UM2Y]`h0&05(@8K');
define('LOGGED_IN_KEY',    'm-/,J{QcG.>Ss^Bo|;:o:l(6,s}FgOB17-1ab${G.&yE!MaG_^%U J: jm`7/z-,');
define('NONCE_KEY',        '8yC/hb+ryp+N1Jd!0%KT7mo,0dkO+R DJ~MCj``Tr)L:y6>X]hY/kkBSt-zES)6;');
define('AUTH_SALT',        '(?-%v[mA};/;q$p~lR}I&%$a<!++XfQf&N$`GCK2Z_~Ce|Dk75L:q0nR?lgY~$/4');
define('SECURE_AUTH_SALT', 'VX6M7RW<t9,2J^mQFu~)`^^O66I)r@||N44b_ba-pv73!M3fd.fBWHuT@{C@/<E,');
define('LOGGED_IN_SALT',   'I0Mrw~2C`-Fx+rX:wtEw7MGKyb1(fCDc<:A7L!+eJ:u|(*8 DucI|jgLjt`X~}|w');
define('NONCE_SALT',       'Hni%ZZJG(hTBV2ll0s$.VP!).9Bvk[9?[lOmIo /A;%V;l)97x{~sS*5R8$e|s:9');

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

