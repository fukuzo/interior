<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_NAME', 'sddb0040063366');

/** MySQL database username */
define('DB_USER', 'sd_dba_LTc0OTQw');

/** MySQL database password */
define('DB_PASSWORD', 'o07b$re4');

/** MySQL hostname */
define('DB_HOST', 'sddb0040063366.cgidb');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '7WHH3,>ZyAfcW73%n3fkWBd:zc:fLWIH8s([MGXn~6*R*jE_fRa^#.VJkx3cj`&G');
define('SECURE_AUTH_KEY', 'nTx+<8{AMKh9@=CgPbH xsM*iKY!AS4KZ+D$P=15wAiAe;NP+:E{<#WBQz8 ()-k');
define('LOGGED_IN_KEY', '9wa@ufofRuPFG!wGv<M&Du]FCXYf9.!%$<uEyE+Ke-5.j3fQI16pNgUxfm2MPf:I');
define('NONCE_KEY', 'C:~Wyh!P/C)[I&WNQ!xKN;ud?0+&][l;6B8:{,j}<Ix){7H,GUL#<(hh?@O=Amh|');
define('AUTH_SALT', 'IaV ^?A.FvN>i?x=,_J;mNu%`l|p:d|M0XRRv2=)/X<DjINS5wKcpUmcKt ?Fa4>');
define('SECURE_AUTH_SALT', 'm;L0<|8gk>9la?LPR`$YM36>0^Z*p}1upySi{s/gw1l&$vzF&U6ICy[.#5RrkOb(');
define('LOGGED_IN_SALT', '`B) _[*A`!%E9MzAB}^LIL?B7]=3B,*Y2oy2de}<+1]86~4D4BdCUHpSMX`* m<?');
define('NONCE_SALT', '.R`/fB|WtcDt:,|J1;a>5H.fs1+];3M@^nkK/MFu!:^0RmV6a[:7$#]<2Q^ToI?A');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
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

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
