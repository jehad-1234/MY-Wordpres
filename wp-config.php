<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'word' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Mq4R%5Kps@aI?q0y9M]I}3@19IN!bK=BaU&[QN$yaY)}4|V[>m2Zy|->S$EdysCE' );
define( 'SECURE_AUTH_KEY',  '5dQ:H7@|r+lb&54Pf_?=_*`v1||3!#khO&zKio<EZ!$F:mYtY_KZE8VTJDXMzXP`' );
define( 'LOGGED_IN_KEY',    '&ExFjb6i$3@Uey>A;Z@$6tC*h@qy60A3/Pg0pkjDAqa;cpN[jYwYJ!Zc&p:^~)R3' );
define( 'NONCE_KEY',        '[S0MY1}AEE_<M9hMDF@tkpYF4S{W;k& T?&<`6pu3crOzPQW#zH2sd[]HjrS9GuW' );
define( 'AUTH_SALT',        'i/amL<)gE{IZ}Rk^r#!W2)kLjIFyNJc*uLofQo2fX=}hLwF%_1gl un(O-Rh)*_j' );
define( 'SECURE_AUTH_SALT', '> O%2]Wm}W@o>I4o^/`rSJ@y$k4+Zf1B&4,hWpg6[D=J[d0C{<=rYF &232+Z%w|' );
define( 'LOGGED_IN_SALT',   'o^USICRx_?KHxYXmV~DEY7Gy~Dq;%ACMr,E.q)Rwg(IeP-]kDH|#wn3zR0d*O!sJ' );
define( 'NONCE_SALT',       'o&*f&wx$AAc|)`|2Y5JCfC{E{eg$Iwy|o5=<qAJV0YYi+/2=QaZ7&Wie K&*6$+[' );

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
