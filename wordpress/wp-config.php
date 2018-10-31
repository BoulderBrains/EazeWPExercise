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
define('DB_NAME', 'EazeWordpressExercise');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'QKwY&3#3fyM+h|/-L6ku@@$eB`_~%*vpE2fq0!r(t#]JtZ_Zu(P@A%h,;1GSizit');
define('SECURE_AUTH_KEY',  'd#F+k=S~^U?5@Mzu{J)lh}@BSw50?+{hzUD4bfla3iN)$L+~#v8izeT>z=3*nF!#');
define('LOGGED_IN_KEY',    '(KuDw%bEj^bClw![?s^+{v#i@E:2)Wmrajy]J7VD+jBq>%;wl//zT^C BOT5/x?*');
define('NONCE_KEY',        '`neXkK3Rl<Hu)O@@=)AFbdSfvM r=:l3[Za5APUID@[NX@x5?rXFtj$%XFcP?B ;');
define('AUTH_SALT',        'sEzo)4V+Q_y9d3fTDC&37Ww9x^#<Lw@oyU8abp/!mfX -(G?@v?^e8+^Vu~bLIl;');
define('SECURE_AUTH_SALT', '-VvaEmy%AzqF.`F>NaJ*PEpM[xkSTjexL`[Hr`B@k86O]hvZ`Z]2rn957=LQ},Vu');
define('LOGGED_IN_SALT',   ',=TT.)rAv{[[cdcS$ipZ1HuodZk2P$]@9YTUtC?,}Rapn?FTDYB&PzZ75A<:s1J2');
define('NONCE_SALT',       '9XvT68P;^g_0B-Sr,E,fW%vuge~PQ_IMAkOH,hmwgP7k5`5XRP+<9Ib7Lt36(<?S');

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
