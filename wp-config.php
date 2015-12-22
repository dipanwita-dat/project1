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
define('DB_NAME', 'excelion');

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
define('AUTH_KEY',         '}R55g((+&0Ptv<;G{G^zo8C|6((MM:^>)cAO++cE_p yIX)nOV}quA?b!beb_3oE');
define('SECURE_AUTH_KEY',  '<sW,D:Nk,TwwU/hj#ZJ)&]7~Y#ut]cvP=gffPAs4<&o|@zcq,ob<LEH|4P{[EpP6');
define('LOGGED_IN_KEY',    'S|K^Rp7n+O-SM)rm?8g-dj?4_9N==-LDQpOtynYy>)0eF>l~l? 67aa_[Usf?i-y');
define('NONCE_KEY',        'm1oh/#25uUk-CUk:@_r8~MYp*[mYXLvb%A7Q~_BE=^b|vq@5,><?L` hRpE)a%9 ');
define('AUTH_SALT',        ')KssonD]n8JBV$IgWFkV-Od|7t|wL;ddYbt>lr/e=9<D8fI!gyQO`/JOe^]~_lY-');
define('SECURE_AUTH_SALT', '}I/[zHV[%:dj%vS&mDQ-7/RW^1:-S(;B`sU!-6Dn|N{0Y!rl-T]YCz28Z95dq2a5');
define('LOGGED_IN_SALT',   'j~WEw5tD7Z~knTG[,-as`!2)UOhKjTLFLJx*T_1v0w,)P&wK,FG,R+xfXxyk_2z ');
define('NONCE_SALT',       'd7|`x0bql>YFLMxE-)7(9x)Mli7JY}&Y9g!zA!nV{mTnavAW& !/n}LC?K5hiQk^');

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
