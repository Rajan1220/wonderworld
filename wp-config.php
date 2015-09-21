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
define('DB_NAME', 'rajan_wpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin123');

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
define('AUTH_KEY',         'SZpi/]LTeem{E7}E<[Ur,z|&g+S+IrURZ9ol=;c&yR^uxA+8(CM>c-{6WLPF*zJQ');
define('SECURE_AUTH_KEY',  '--w1lH4tI&dZS&wM.}Bk/_6q;-YQ=7=5mig .2Wm@eMI4-`/#puPBi9&UbKV=+dh');
define('LOGGED_IN_KEY',    ']D6+/.l~?]s?<fu_62Y<)%m9{MKs^+ViUs3*h6+; w|;P:0KnC1).K#.9I(f/BO~');
define('NONCE_KEY',        'Idw2S=-O/Lt}@1L<XYnZz%t|*Zx}3dMrGHs-gA%z#k)JCrm97n^%h=|qN+%.g u6');
define('AUTH_SALT',        '0_{|y7}<2SGij7EYMwUQ(+f-[6&z(tA_dM`s9/B+vf$M8~wtLmd>wF.}]M@,6!~t');
define('SECURE_AUTH_SALT', ',NR}xGakmVor+xUgPs@Yo`V)Z[O,:K^pi1AP`K{?)by`XP*u-Fl7_$?c L<@|)0x');
define('LOGGED_IN_SALT',   'KeVN[7jnXq:q=l+LowJUN=2b:(FsP3iH.bCQ;z ^3fsT1Mrm$uWh=<=)):8^mFo3');
define('NONCE_SALT',       '~ixk1OBhNt{Bf<-^]03602uQykQrFNz-:u2--cO,L]C*U:_G5JOOA-u|nUlN1>nw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_test';

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

