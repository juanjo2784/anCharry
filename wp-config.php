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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ancharry' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'uUj}JK{t%xUY@xV<|7xbLnj?:PXcY6_jkj4f^cmR9)gjTQcBPe^3kH4&SPV%#wqG' );
define( 'SECURE_AUTH_KEY',  'qZo^xK+nV|QMw4x;R==.8U_]@t_9u)zY%rAAo*!tx[,W&nV?qoR:d_crAq%+KB*x' );
define( 'LOGGED_IN_KEY',    '`/-2EsS[-M>DKE&p^NZ#$ZDo@4`LGx;RlB.YipCi>z//8C8^<^s0?dXfuH;5SK3c' );
define( 'NONCE_KEY',        'N)skD>P1tX-P}IxD4XaTD0|]fg&qC]$w%nkEzIa*6D.!$%YJH@MP>@t55!(x9me)' );
define( 'AUTH_SALT',        'PS3tmMoxiHsL}$}*oNmC3YnaO*2>-j#60R?asG7 jQTl]!M]wGR]]m2`C:a-=K)V' );
define( 'SECURE_AUTH_SALT', '|MFU7l=-e-MJSfLC?PzW{:}Z~D5kE<-QSp.W:lJK_D^4os#N$h^|X`9 PZN]i,1P' );
define( 'LOGGED_IN_SALT',   '_<8-w_MZkX5sW-WuiFDehwo@pF,`4KfFbEOM,%~37H2sbk8B!jxSM_KVjiu:X5D|' );
define( 'NONCE_SALT',       '?,hZ3KI-75OC2SbpaU%4:u6naB*sp6HW+,Q>p1~*z*A,:7%_9ZII!8;; r_TDKBx' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
