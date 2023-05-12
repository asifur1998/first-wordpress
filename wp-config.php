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
define( 'DB_NAME', 'rokon' );

/** Database username */
define( 'DB_USER', 'ridoy' );

/** Database password */
define( 'DB_PASSWORD', '!X/Fu]D0Gq[RyK[Z' );

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
define( 'AUTH_KEY',         '0y$<7e/^r5SlcWJCZpG+68`KWr*%sp|eT--/c_h{)[Y#!U+q=}t1ETJo,!Pq]DBj' );
define( 'SECURE_AUTH_KEY',  'mk7f4/v[+Qc10P92YiK!21*=7:NO88-.i^+&8W3$~q_6~@g|e8(9{WfZGtA^!L%{' );
define( 'LOGGED_IN_KEY',    ')qFpNt&Y-()x)eNGhn[4`H|DI2xp(&%fYLe$hOiv8;>Xgl:=^>qB(q/{D3Y*zty^' );
define( 'NONCE_KEY',        '$f:}}bDTQ_oJI?;Vx!P,_NQGV]:0L2j5fTrB<;x=qvzmSzP0J=q~;Lg*ed>vI/YG' );
define( 'AUTH_SALT',        'Wmnr3k3]S]lv+pLYU`wLRQpQ^(+:=3W]r>aHWW<i_4=BSY<~b$PwmrUb]@P+aC>5' );
define( 'SECURE_AUTH_SALT', '^c1&_y1**d<DNER.0+>9q#zRJ&N}u{GL(,Zp`^1hs<Cd#F-S}Uy]>Vzv;kH=DDL8' );
define( 'LOGGED_IN_SALT',   '{++^ 5!uA*Pu}huNBj$/ZbNqD00a;It.=VC6I0{a$4[jHQvZtn$5(v#tAe}?Q$UA' );
define( 'NONCE_SALT',       'J^2|B-OCy#9N*zta.l=nNE2?CahVEz->V6evp<5Q;OEG]LE_nzd;zhr:VxL[Y=J~' );

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
