<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'UltraCode' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'd{HEX^wR][ 80Nhn}>C5vH|o-j*p~)C.`ZiTx7T(dU3Y>GJv+Y(ml&IppjKomecv' );
define( 'SECURE_AUTH_KEY',  '/Qp.db[GsFX?mTpxQ+P-DFLv:~4oUMG.-<ll2pQ7:F0!MwrtRCzOVc<t*]Bj}t ,' );
define( 'LOGGED_IN_KEY',    '-H_w}f}p.XqXN]:m-UQ-u@>Qv]:U<^*jH{;@NeR0>e<rUA$0>>dM^B[DSjh Cz^B' );
define( 'NONCE_KEY',        'Q{#+.Ri$<Cx!6.BQ,iQO9oDH~:+&<`?onBu0fST}-G9}%KQ5> l7hUjW0RXcP?gf' );
define( 'AUTH_SALT',        '`[[=,yMVmog8/$i9+](h 1o8Dy|8!4(*mFa#Ehoj`1fZKxL1Q2svy/ci)Y4x0LUJ' );
define( 'SECURE_AUTH_SALT', '?9KvDD1Q7q}EgI0Tt%#%%jDN$Sm-ZJG42:C5..f7^Sj5A|AOsTa[$gar7UYVEX9-' );
define( 'LOGGED_IN_SALT',   'K4?@G!b.Q#i1LDzm$A9lE?#,+B?egG~juFtHeB|=@bJCh^wax{M,XF83t5`Q{PmT' );
define( 'NONCE_SALT',       'OCi-HC7^R7aFL-gtdF*)%y$ttjiVM]s~g %1FIk,gW~Vp|Azr{s(u.<%]o9xe&bx' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
