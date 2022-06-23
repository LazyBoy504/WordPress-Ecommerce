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
define( 'DB_NAME', 'Ecommerce' );

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
define( 'AUTH_KEY',         'dMn0$M(iq<Mm=:I^25WWZ$mc5/(3sbiTT!k:Y;`Hwpy>g5V,3J$0Y>ps8Jpsc8|b' );
define( 'SECURE_AUTH_KEY',  '&c^1M~ebj/YK2q*)O5F_+{%}IZB+#{V1d&FdYldmqMQH+8mjuB!zZ`kO%s#{DO2B' );
define( 'LOGGED_IN_KEY',    ';KI6eX-)Gn#h5qGZS-9F&6EjM:CnGK*bb|8aY.hio@0.+utLkd{Rz*Z28?@aKS:/' );
define( 'NONCE_KEY',        ',t0&Gr*TcxyI] 18kI+iV,X3V@O`rJn0!Y>|71vW(Kl=CQfiel;~2Fx@5*y}J&&M' );
define( 'AUTH_SALT',        '2:fa}]_zo;Zh#-n2>5_8yi(Q8iu+2&11HZ#{0~ TeF:V2jo0OF3NrSL-aJ-$b 7V' );
define( 'SECURE_AUTH_SALT', 'kI!@LCkS&2Vp[uzhV9z.EyCRJ$S8oa=pg_>prc*R3FKpCJ`$Z?T64}vIO5$[<1RL' );
define( 'LOGGED_IN_SALT',   'ujDY5_<3+@Ni34Wq8XlBw:4XG;+[VSRK!St77,~qXxkG*j0ha~.61E36j%,,rqf5' );
define( 'NONCE_SALT',       'jQg469jeUHsj[_zg[:%wu GVq7)3{>K6)K01tmywqWTLkCL-T+P)r(;m4+1mdB?~' );

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
