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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'RDSDB' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Madhu007' );

/** MySQL hostname */
define( 'DB_HOST', 'database-1.cdtfl06gn6hi.us-east-1.rds.amazonaws.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1?Bajx+p5XdEzIo)04f;ODb!E)b;kXJF&Pg]xmu0JOs[smky,nM<B.Ub+UR=(ama' );
define( 'SECURE_AUTH_KEY',  ']4}XfR/W1z %-F]zG^h&6`!k,0$0(sX%R~nCE/[`Z<-0-.$7n__Ec-r$:Y42N%4q' );
define( 'LOGGED_IN_KEY',    'f]G6[[V0ru>/;5RiYhY:B]I5LP2s)+Gyno2bSj)N8W-z1fL6raf{,=mQS$`jrNWK' );
define( 'NONCE_KEY',        '0*v}jMGk>v=~G@m[jdI;8+G3>B{taMp(~cuw:MBEs-!#([WQ:_#1;c{X`42ySVeo' );
define( 'AUTH_SALT',        '$cAV<@$+A<gG2nuXawl%gCok;x(0f9N{T_dm,h?-Q{js]bJ]*<rf6/k/FNx|p6r|' );
define( 'SECURE_AUTH_SALT', 'k9t,&Cc>)]EW!GlX1.^` :4G3x9f}krp6t8!rgB.f(385-R]x|3q=wTv&>I+,~Q3' );
define( 'LOGGED_IN_SALT',   'k{pR~&&O%]Kfk-2|URdCmD!W8kuGVh-)SMinH%.$BK{nw2a1(XhKxM/mb*DQF[cL' );
define( 'NONCE_SALT',       '3{N@A`j:pIzcRu<ZD;#w)?J2 YwB@psWB49r`NOE#Aqk.%=$cVT@sP2hY4|i,s<`' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

