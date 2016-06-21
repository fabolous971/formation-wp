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
define('DB_NAME', 'formation');

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
define('AUTH_KEY',         ')rZu45XV|a;[)UK&38ua1?y;ME<7K-?zNcD2RVG]@;h1]-/JE$aT< XVXOlCj|dy');
define('SECURE_AUTH_KEY',  '(Gur(-_Epy!+JX$KAlr;2BFy&}j|z#jDQ@xJ=>rlH]l0(MG7eHl29Mc!*MqOvXBN');
define('LOGGED_IN_KEY',    '<eMZ]xU|_g3;0{hfez-K2!r3pyMX*t-8GuP 3l:G&g}e2_%;EO-@gboQBHXe{;~k');
define('NONCE_KEY',        '4!tmxw(n8!f^T7(O2oP1={#:=H*w H-Dme6;^fr/7r5$u1DvihcwY!YGD,Z&clwd');
define('AUTH_SALT',        'X%QZ3#%~lyw3qS34 |u3z@^e]M4b^6 ;S==)<s4 `8AhE,;NYo!-F!X)76D4_}SS');
define('SECURE_AUTH_SALT', '2XO1Jm2sf:J%:u88p6k44c!>XWaV#ARaLfLj$CFhs;?[?f2e)@d+u1+0P_->rhFU');
define('LOGGED_IN_SALT',   '/Z? 6+w@bvl[U0C`YxgE=c0 ,X0I>l$rxqv $tV9d5T/hnPKvp Jpd]rH4./4-jp');
define('NONCE_SALT',       'NVRzB`fSsrJ[=hE?Cnja-wOF{H/%#PvLRh+Vb;P_Dbs.0m51]A9kdS=#vEFSmOr-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fm_';

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
