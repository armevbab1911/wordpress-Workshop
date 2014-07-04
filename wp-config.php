<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ',auzY@uB<x)8y9f4_E*yZ<T(9Ra}(0V~i*kE0JC|0yw#kDZp/V-oO5lgyj{ b-f>');
define('SECURE_AUTH_KEY',  'KRpPIK}*jJ1+QY GOZXvJs;MO|DU-nt|*V4a<Yq/V3Qg$xFX^OaJ0m(@}+yFGiyU');
define('LOGGED_IN_KEY',    'R`l9h,I},wxn-9lN0oDmq9xF}&+20Lpp6kez`-l@Kp;btu1TFZ-O58O-Ud7:#(i>');
define('NONCE_KEY',        'Nzy0N%S[H]P:3?+/yLuIwAr]di-Wr]XCvL`j+}N(WuVRwSE>QAwik;x3]C#XcW+}');
define('AUTH_SALT',        'dpih>9d8B]Hq2>wxhO9Sm6sUo`/vc4!%K?=EbafFTo<@-6pMk`mVNR3WR.CCAvUF');
define('SECURE_AUTH_SALT', ';lVvhu%]*,4xz5 <Ml}I(:H#hl<-|?U#B!V&9Z,I&*7OrBGge8s<E}8IkrzQY2w`');
define('LOGGED_IN_SALT',   'bsK7lr]8BUM6?A|2(_3-wt ]DeGh^zfc99eb^RgK:Kf0FILI193]D:L}TSVb2|j5');
define('NONCE_SALT',       'h4U ^t>:f/=0mE=nm-~yyZ!Iqt0>zp1{d?gRR5a6(^ax+[5l2owzYkj,7w?Le#<Z');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
