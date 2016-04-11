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
define('DB_NAME', 'sparkle');

/** MySQL database username */
define('DB_USER', 'sparkle');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'aQX~q5GC$9M}y~j8ad9/<@^f11>nNjR*#m|<*A``9{W(LHK*(?445c#9bS)P>yNA');
define('SECURE_AUTH_KEY',  'Yc=$3Yg$[|J)42tM/|?aco{+RPyawtUF<t-a-#`f}SNxE+*$Kduy,PW;~epmQu6*');
define('LOGGED_IN_KEY',    '9O{[(Re[tA|U%Q#5VAe;M+-_+U9koJ$m(^ rK0e7Qf|1R2keI} /-i>W^pQeeNNN');
define('NONCE_KEY',        'eI|NSo}WBmM|q&+c~u5S`1|eKHr|ih#m*MldBTww~z,Q;c5 wlCb=PzG_4sve-o_');
define('AUTH_SALT',        '8[4uy{wx<6+KE<P{=P4[yef;z>,Hg3r62};}!S$st)nk-c7=/z+fsb1jD:/7|$S`');
define('SECURE_AUTH_SALT', '9j-v%0$L~!ae^vyT3]W[RriGTl&oe#)`GS[i0E6kgJ+)T,P[)+*[`QcGyU?>3P:W');
define('LOGGED_IN_SALT',   'fx_U63F;b+hOteGj(^Pj1]sB8orL[J#;+HD< kZ(6+gNP|Rl.3zJ6(3Lt),T2I~5');
define('NONCE_SALT',       'tD53=.,9h};T4946y?r%Ua$NAg[{%Z!)>}7!K??2+y~+h}}6st#c|8-%nT/<fK5*');

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
