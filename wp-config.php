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
define('DB_NAME', 'wp_wpsite');

/** MySQL database username */
define('DB_USER', 'wpadmin');

/** MySQL database password */
define('DB_PASSWORD', '8144194798');

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
 *
 * Created following salts on 12_30_15
 *
 */
 
define('AUTH_KEY',         'Cns-)BBH1%|%@t:/hCDv5VQdI)Gl=nox!5JHpb|.)4X[zGY|!2,4!NP4hm~kC;N=');
define('SECURE_AUTH_KEY',  'jLO~@Ll(;I-7h`rhL=$?5LS5d+7rvJXJuLe1;[Xx?d4hR-fuK||MTbD*Bsmvbksw');
define('LOGGED_IN_KEY',    'cQsgp4}_f|d.|hL1$j `$Db L9Eq]kEn2][jf(Fz`{|]xS%~|+y481Yz#`abLu-T');
define('NONCE_KEY',        'Wo2,-=y:g+=I<E|}nr[o-l.S<6;D<z9g8F0.Q .D+Ywf35tH!<c1fukqC(}DlQ>H');
define('AUTH_SALT',        'y5#b:!pKB;{[W9Xg8-j(qF+EAUsSx<AP#o=wo3J/{h+5a#=uFcf~tXo9ka<%i*r/');
define('SECURE_AUTH_SALT', '?4nMp@-UnPShm`s9:|4YXe~|%LZ*{9@~AfZEb$0RUM!jV*$dGD U-(ZVkTzb~z43');
define('LOGGED_IN_SALT',   '2MzR?+MzW1&W[5N7QoD{HOm]S2*j?fC.visOCo[hP,N,i;9.H_sBjw{&MycH[6:V');
define('NONCE_SALT',       'F !N=v;R^Kh6_Mt9?E3m W$-x>O`M~<v5.vCk(nmyww3r-[f37M6B|_-?NAXpe(j');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
