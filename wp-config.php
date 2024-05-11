<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '.(M79eOg6TpJ{zUw#ax5hj!(%v%wtq?c]5qg!bjdGBj|`&zZuv6$htnd@vW.A~Kx' );
define( 'SECURE_AUTH_KEY',  'h9j[KoQYAX-G~w2KT6{3b51H/iX!.O558=`5Un1V$c8g6/wpV^zw{^lE8o[w84rb' );
define( 'LOGGED_IN_KEY',    'I{ox/(CNO(zp/PDZmRwSqR0F}-]zT.EFMG#NG*>m1~aP&6BH5[veHIE,m$U,-U7U' );
define( 'NONCE_KEY',        'L=-/uDmB`KH#X|~9f1/nA8I#s4;.L&a^G mZbklx=?)~7D`]}906F5[:OW&M_MY0' );
define( 'AUTH_SALT',        '405bBeaM0`k}vv1&hj@JcG$>#/W0T2q#1#~2rz2Q/;Mu@<t$hGZ =%[Y~&g%.eb2' );
define( 'SECURE_AUTH_SALT', 'ob/Y^9#}RLQr7I(lH=NKXr(4EoNAc3lbr3kq]Op,hY/z`rRT0h4-9VawZpn:FkdS' );
define( 'LOGGED_IN_SALT',   'n4k4S=IBU-Pk0QZx6mn=&`).?[Rk8#_yIZz#N{,]gm-+Ee{wC:^uG-2M%eiSFg o' );
define( 'NONCE_SALT',       'y`~VxPAi%Xug_Lq^hltiwrUvL93NS.<{iOo7ImWjX&=-PPYbY$z<+i$YC8a{Vs8a' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
