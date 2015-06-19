<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'commentv_prod');

/** MySQL database username */
define('DB_USER', 'commentv_prod');

/** MySQL database password */
define('DB_PASSWORD', '61SLvywcNn0');

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
define('AUTH_KEY',         'fx%&|Pd}+T|J.o[sQ~iK.nWCL?x6Ddm%;.8L/`_9z)f^?W@Hmw +? q)u7hbN|h}');
define('SECURE_AUTH_KEY',  'aeH@70  }{(jW+L|yi3S,t1~J/Zt >uEKJuymyB!|_sg= M< ANGiM?L$c,~.[b>');
define('LOGGED_IN_KEY',    '11j-k7s.@*D%|K7b,?StGR-(SsoN:t7sBiCcY8M4&QryZSJtDeATQpY!<OJ:+Lh;');
define('NONCE_KEY',        '+%Bx`8x_mWT:PfsZ;Pw#eA5lGo&^w.BR%ego+Ssq^B!_bQtVY%yu-+S>zl8w/}ps');
define('AUTH_SALT',        'oA1Jw2*K|`-+/]/|9*Q7+LD-4;`T#lh,k<gh.SN6u`s%V(t`r)wJ!X w0<=Ay1Pv');
define('SECURE_AUTH_SALT', ')D|KYg.i3&37$^J0j(g-*_7;+RfwE-G;B:1IdTEiadEy_9#hn4uTO+LiS{%4;WC9');
define('LOGGED_IN_SALT',   '>[voxQIqVa}>ASfqP%Uk:{mq<N>=Q<(+:G/IsL|!I*_o1oyuxT?FY||XH[nNc#SF');
define('NONCE_SALT',       'K?Fwn@HHP|>,>W?Ndc@0<:Q2zbIIQO{e704i-Sjj:2%W]L?)%2,-]+wf%+s2<O4#');

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
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
