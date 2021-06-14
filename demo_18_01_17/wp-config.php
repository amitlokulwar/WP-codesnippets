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
define('DB_NAME', 'w_demo');

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
define('AUTH_KEY',         'B2oe(;SRE^c~prR2ag5_b^(M8INKg8jP9dx3/1^T5y^%HA2z^xVpnd eg#G<]a>r');
define('SECURE_AUTH_KEY',  'uIBz76j.~<,%I}G WOu1F4(,JzSOho0kXuQw{VMqeatXl0_2[p(}M#*tHMPbm<WQ');
define('LOGGED_IN_KEY',    '%jNCrv^p/)9 * K;E%BIf=_Is`qjuK^%l}gdR}[m+5.Fr[R5+5pVwz],L0pf36Mt');
define('NONCE_KEY',        'P5`*lH)ma3~R!Nxw5xY`lvX8Sm@C>u:sX8+e??+IZ&dlm~(-O{8{U>d#dM;Y^u@U');
define('AUTH_SALT',        ')ggp}52rito*`3#I,NlQM6zc(4|1WlLQ.N7mL1u8=t&eTmMx~<|TA;H@ozR|jJ<>');
define('SECURE_AUTH_SALT', 'R+u^c%ip7E{$ YW7602;b##%J>vPk8,6U4~M([; wqYh`2ukZ_MGjF4~/@9/sJGX');
define('LOGGED_IN_SALT',   '%64wDCrhZYR}J{t$Ga0hU4Cz0Xu?&x [>)C253SCm{Bm^|~qv1J;d;n} oj9!{EC');
define('NONCE_SALT',       'URb~f5Dm/)8x3,eJ=WmXX<hyWS4kK~+Jxx+PwM_F46arE:()Af%jSz/a;#KNw^Cq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_demo_';

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

define('FS_METHOD','direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
