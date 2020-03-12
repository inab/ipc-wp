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
 
//define( 'WP_HOME', 'https://portal.ipc-project.bsc.es/dataportal' );

//define( 'WP_SITEURL', 'https://portal.ipc-project.bsc.es/dataportal' );

define( 'WP_HOME', 'https://portal.ipc-project.bsc.es/dataportal' );

define( 'WP_SITEURL', 'https://portal.ipc-project.bsc.es/dataportal' );


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'eucanshare');

/** MySQL database password */
define('DB_PASSWORD', 'eucan2019');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'xr]ij.}$Df_AZ3vj_|S2Ed)J4]p;&J?zD3Z2ts-g3:an~zA]FM~qMg.EVmaz.[]F');
define('SECURE_AUTH_KEY',  'ZT[{8W@Dv<CL]YxE{hkzfq#-}8%$4~1g<kN/2luZKkT/@D}zJGVC~uHJym,nZg>H');
define('LOGGED_IN_KEY',    'I{Z9Frhs9 -7D@>JJ<-a0-]A#_<G|j4|rGq;2rG=IDp9 $MF(fcNbo_aj-V+-wAH');
define('NONCE_KEY',        'BF9;uMwcE?kHw?2L2O5sdPBK8jF[~}zD^%[|OxxsU+)hjg7.| @8U^oaG+qcTrK!');
define('AUTH_SALT',        'E-qf5FibvcDlH4/6Y9$>YD)hk&mL0e|>%pEkO9#VU>q?{85p_]Y@e]R^k3S^4!OY');
define('SECURE_AUTH_SALT', 'MU#bP|39+[-1?E6`<-@KnkS4c*3_1tc7Dnl,,hS`/ym%[2y+GzQ-Blxq= scMA]d');
define('LOGGED_IN_SALT',   'J}xE9Zp[duz.V1lEM|HewF%HAf4NL>P@P3ux|Kjc=7Qp+8,b2E9oFygoe|stF;d9');
define('NONCE_SALT',       ',GJNQ..`pCGF],?F2j?*x+0P]mUGiLPS[pb]aE8mqv5[8m{#c@z^3/Pe|!=2qYWm');
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


/* revisioni disabilitate */
define('WP_POST_REVISIONS', false );

//define('RELOCATE',true);

// MANUALLY ADDED
//define('FORCE_SSL_ADMIN', true);
