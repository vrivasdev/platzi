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
define('DB_NAME', 'platzi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '17800228');

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
define('AUTH_KEY',         ';H(^SK3<4G@usi!d]OrAPOT:fb $%*+6Ow%=VYaHBHMxR-M,/z@gh$*hVr9[C*mE');
define('SECURE_AUTH_KEY',  '*0;WzJx%H_o,|`CaeQAxouG^9B]g6Ln+i{~:cB)+>o];/y`dge}3DGz0)JP`)4Uz');
define('LOGGED_IN_KEY',    'r0$k0h(0];i7bJ)laXv)!I:Q<iKH uG<6%|p;o0x=%To`Wk)/QPG:0nuylj0)@rx');
define('NONCE_KEY',        '.8D+>V{h]#9UG:;z=QIt2nQ)vr$wX-Fy%h!2*.aROSF|MGERFer}>n sx1]f.loo');
define('AUTH_SALT',        'ETX)Wdps]nfD[|@ +reTh(?EQspfnovBK[b>&s`L11i7im6p^/:.{^E6^Ht;hzaT');
define('SECURE_AUTH_SALT', ':=GW9?ZJQ:N({dT$;8q4He`,_SP;bMz6xjDfio>8sqVH[^fR-]j_T4%%`<ssxQmz');
define('LOGGED_IN_SALT',   'v27z4c/ 5)i#lr*HD9[HM Z-[9PWLcM%7!JGwMxs|w1/{9_Y88|1`>*c$Z{(KV}r');
define('NONCE_SALT',       '8Rq-fYUFKK]=nD:|cf~3V[;xG557dynqo]0~m1x/:!V)-6IgG4i&Yiw6[Qxv.3b&');

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
