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
define('DB_NAME', 'wplarn');

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

define('WP_HOME', 'http://wplarn.dev/');

define('WP_SITEURL', 'http://wplarn.dev/');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#0P-CwR o}_2oW3fF,epB?L_(N%S@+CX.rHX:eN[>buu;vr,Gx<|{)al]VuQi)m5');
define('SECURE_AUTH_KEY',  'LeeYB+wz#aX#;uagMiby9T6qUA$Do~0Se }YU`{/Fyeckz|-6st31k/>5)|J%sNP');
define('LOGGED_IN_KEY',    '.St[`<MZ:~*3R_^2!guBvdf~O=BP=-C5u:9<9C`Kb<iC8$gK)t-0GQY-@>v_ !-#');
define('NONCE_KEY',        'zE}>7L`J (fJeN54j==x&`h: 595v.Rk<WcKrU>We2tC$x>?b2+q/)E+:P7I~pxu');
define('AUTH_SALT',        'E;:+F8&6r7;w1;(VWcBSd|D#q%TzbiuHNnhDn8p%=2gfk{@FbEn*7g$V3M8*.$7U');
define('SECURE_AUTH_SALT', ' D&_V@!uD>t+J$o!bq-`:G}g8Y~EGDiPlo(Stu[^5)T`ryDWA2cST|BEQ+La,sE)');
define('LOGGED_IN_SALT',   '3AomNS=1H)Ai <n0SF1FjG98oI1i],xf*4fs&cE-9V][p7/(KLrz;{yWSw#ftrm2');
define('NONCE_SALT',       'Bs>!%96m$@=Tga;nhiW3XzvY}djvhxvidO<s#{G2i[^nq=[#g]ThU8(89b -XJ~?');

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
