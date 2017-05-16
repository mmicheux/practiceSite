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
define('DB_NAME', 'practiceSite');

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
define('AUTH_KEY',         'q.kl)vYDI!G}A]O?giH3vKxX(5MI[J<T;@S.+FgODL*y{]cz_(lcO@m&OMc>1e(W');
define('SECURE_AUTH_KEY',  ';jU[)/]6l@8@m=3Vp4x&WmG.ZlrmZoEB;7?/3/^VA0xU]UtA]cOODaK4@S*m]T}x');
define('LOGGED_IN_KEY',    'Gr{M-+jEi@oG6k&U%nG^5d}Rplo1beq#n[%!ScM2^gqp#q.pQ6=?P;5{2!3C0^pg');
define('NONCE_KEY',        'TAI)JF`b1Dh3%WEyPrr8[(O;PjDLF.n@*^IA<NevYHF ;6<GE6LJ)Od!0e=s]-m:');
define('AUTH_SALT',        'Fn-k!&LVy$6>8x!)j!d{_e%{)uN?C.MjAP0Ubm8dBxt3IAVWDLeyZZ}r0-biu3DQ');
define('SECURE_AUTH_SALT', '-?+W$rtmLJqTgwQJ:l=6Lb4&tr-ri`PG!8>8<2DuS%t2di4<sf^0J@g<cX=(zBRF');
define('LOGGED_IN_SALT',   '/v@7K~=HNCOQfm[&;PnG{t48AAVHzm6cDUL0NLAsKdiy=7}veFi9&mSAOA? bI;k');
define('NONCE_SALT',       ',S() YUpk&ZpUy,S$w<#w]HGHkHbU:FI47g _)y0%uu6tz|P<49+:!@iS..(-A0v');

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
