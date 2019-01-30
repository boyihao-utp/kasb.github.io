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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'g2;xBC~4gZ_=e#.+O Sb[]vEAnZxvUo>iUm`U$B7RPA57PMEs!+o ?2p5a{`,~%g');
define('SECURE_AUTH_KEY',  '2r_qBu+8U587Ihe95{<Kp3W,K.cOxq^!N`+.}}Cc> JZR$E]9V3E`1NSk;*s>F$q');
define('LOGGED_IN_KEY',    'Ro{J*^~ivmI1o$Vg7/W034ypoV9mG7R&I& G 5?S{702Ph0^9a^Q[ju*[dMn@U,=');
define('NONCE_KEY',        'g)6_7inlB42a[&_*+.DiyYX,$LIXCHv*]>R5~!Y2)2puh_abRSg-d!^KY!<`Tt:s');
define('AUTH_SALT',        'EpH9.3P 8UzlFr|Yrd1+gs2x8WPLwH%cQpchlE?r>f=O}[o-[-8qCMS;04>M_T%m');
define('SECURE_AUTH_SALT', 'J?[x0^)s>qw1T6B65NLKkoRev7M>PoGUo7,c~s8[f`ur%+E)Qn8!C:!s{Ma^/CmH');
define('LOGGED_IN_SALT',   'wbs;Z4J_/:bO2gA0C19ygUF_HqF:7JHf(_1f!y+[dO=^U_G&kwBOE >e%A$Bln8S');
define('NONCE_SALT',       '%sa~m&{&c+|8.UvQ7yIx>%KGoumaM[t5Hd|M].J42;jp}vjxZ`W(9*FNzkfVr^cv');

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
