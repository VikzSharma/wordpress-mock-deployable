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
define('DB_NAME', 'sandbox');

/** MySQL database username */
define('DB_USER', 'sandbox');

/** MySQL database password */
define('DB_PASSWORD', 'Go9jaib8Eivah2ein');

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
define('AUTH_KEY',         'eR=&xN|6v%W&Q/pvv0Ml!+ezY.2z.sJ.NlGM#dZMDH1h^_Zo@lGM 2fRY),M0CpY');
define('SECURE_AUTH_KEY',  '+E@K-IX`RgLTM&^a!(pphsoF[vRWCUtx0>=WC|&W<!:Q3%e4Q9p{28d1lo|z:&_L');
define('LOGGED_IN_KEY',    'w^/]_3TB)h]k6*%ba#8{=%!I#XseGGAQ@X~wzC</]p@@At&=PK];kag;:x5@req5');
define('NONCE_KEY',        '@||>pa2evF|f9;l1D;Dsg]Uc(.g>Z-&Cys/,;Z]w3VS{5@54R~pWv EJ-~/iT~/i');
define('AUTH_SALT',        'y`tbyi~[:Ek1xXh+3StaV5DT_yMfT5|+eWY.wrLG~7s}R!&pw>m.3wA%BZ;W_s,W');
define('SECURE_AUTH_SALT', 'm02f>;>.D[f0?-075ybR@CFB0k?`2i9nl2~5pzp<2-dyR|GRmz8W;c?p_ ~l+[pw');
define('LOGGED_IN_SALT',   '&QS@@* ~|8=z,U_*?MT@NJ@QD*N^(+c48+b~E/+=g:&zd+j#o<^bgYF&`dO+btWc');
define('NONCE_SALT',       'C6E<Ly`q)aySC%I{[F.b1>5gk8R2GGwLPN&U$fW8ChcQJbvQh`p|#oRttMyH/-gY');

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
