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
define('DB_NAME', 'larapress');

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
define('AUTH_KEY',         'k9DXF3#yEtHk0Wem,%!A=<RiKOPgv4A43I-#tk}?uG5g}|V_nmjFpv|6zqZw{K$&');
define('SECURE_AUTH_KEY',  '/r%$D[|*8*8`2,AK<}AvomC)qa64N`P`Y3/Sh b*72}afIlVPZduKvdVP*SPC&M6');
define('LOGGED_IN_KEY',    'F;yxgI%xGQNyy3)+v6),vTxYAwTDz3xx{<b/ec>zc SOMi,y9wSg:gGGjC$vvki_');
define('NONCE_KEY',        '+Wx?JR!>y%r4pkE$iM@NAL]1I)uhBA[GriZ YJvv|Q<X6 %gZ@6URoVs0Fy7&#4B');
define('AUTH_SALT',        '=,3<7l0[WQP;sJC7SXUsS}mp2Xd<;h#o[LOE+C.Sot/;=Cu?e3.PFR0i&cXe-k!@');
define('SECURE_AUTH_SALT', '^.[yS!(7b:C$?cZYr+Qw)d54UO=Gq>>; jgAzsa?6fC?eG)&Hy3i x/B67&|iiE&');
define('LOGGED_IN_SALT',   'L/7,[!.dw`2J6c:3zkCloe1fwXkaF>/LLpL7s(D.P{2^?F4qNYgvl{b^jd8?2mS)');
define('NONCE_SALT',       'aw4r2mg[JP:DaLT>Bq,M$H({$W~qP.DmTk?IZh>Un%!Jk7-%N[_8WUTz>4NY!M]A');

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
