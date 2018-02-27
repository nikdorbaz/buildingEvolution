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
define('DB_NAME', 'wp_building');

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
define('AUTH_KEY',         'VOT8=?Qf{{l%8ni!9O61Cs)7u5sEFvwP^(&7cXCKfe6k>KEOO8M1 g;jLKi--B*|');
define('SECURE_AUTH_KEY',  '3a%=nT~;R2`TN3Xxp.*UZ)?R(!8rsMN+;m:hY=-x/O+]tpr~:wRALE&;4JPW&*vL');
define('LOGGED_IN_KEY',    '$X6F8:i~q(_>KFLun44?V30<,#(1ANx 7](jQh_zLT?%!CAAil1x7ir.Sw?-WZ6*');
define('NONCE_KEY',        '|t04p}i #i`U:*I7IbgIeM)s6,Ib~]xi?0iX)_X-[x9y}0OMt.[u>H1&i$)^>X1R');
define('AUTH_SALT',        '#{4,!MJ?VttJahK-/x^qC}s~Qx smPBpl{R&?:y]6z_M6[wg=bLV#c9%l >dc@rY');
define('SECURE_AUTH_SALT', 'AA;uKkEFOHSf3BNr~zjsuI5Y>=:b*w8Cbl1VUUBUs5h]YB~X*Oi m!Gyy!c]q>6z');
define('LOGGED_IN_SALT',   'm3<vN,.Q{yp?x[S25rwNLx2?jYI)0];+:H:8eZSc9=byv?A`mT[YIEvWHaI`,C{{');
define('NONCE_SALT',       '.;IjNu`j n6J0ndQ+;B+aFNhE=De#2GA#f6} @A/AHHBG%Rr-%Vh&2CX{tIs]^TV');

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
