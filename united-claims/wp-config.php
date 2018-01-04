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
define('DB_NAME', 'united-claims');

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
define('AUTH_KEY',         'zHe!_e8eio|3oZ`!`b0CC]tsCM|e %-(2@O*zm1kphc)=,AO|~nhA0WX^U--`ik[');
define('SECURE_AUTH_KEY',  'VD`l>Ac?_A%`.T=X/OCO[><0rd%@<=Kk8Ze>Z]nDI]C)WB;ZTfPSv0)&.Ko+qJHx');
define('LOGGED_IN_KEY',    'DA4[[Fvy+D2WFB:_0Etdv[`7X[a{f%QB/k6FKc?mMTM>1^rB*}[Ai[AZ%,hn=Q~U');
define('NONCE_KEY',        '9Y;,|i21]:xS@H fyS(fj<DM6|GL)K;,hk,xUR{T2PC|e2osaVbS^I< ukqqG/$4');
define('AUTH_SALT',        'QIp8CJIQPVUfl!zW.v6;PSp1>I$Ge*e-IoF^Y.U#7dHEWgS/6^r&w~ZZJ0zuyg`}');
define('SECURE_AUTH_SALT', '#~^R9C4C:KW}7S^tOBUw>Y~H?I?o0Y&AH!5L)/eh XX*MT,|9WoU$ai72NgEId}I');
define('LOGGED_IN_SALT',   't{TAm%til8y$NUVd{N:2|&gXmS-[phn6 OIfvQI^xBzW]wENVY97_{0!O>vmR?eo');
define('NONCE_SALT',       'hnl`Y?#G4/I}DsZ#z4S7LWEg2]}knOpw{[}a4l>*4|@n+u44_#tBQv_AkRVbRvcb');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'uc_';

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
