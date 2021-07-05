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
define( 'DB_NAME', 'wordpressdb' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'e0jwhPy-k}]UG&v&Z*FV^u8yXt1SxOMQ=9?_h(8QbKWw^Hg[m=Gg~pe?wkw_fB^S' );
define( 'SECURE_AUTH_KEY',  'RW+k=leFrGkl2qkmb247,_9nf|+RkQQ}8._ccz0f@0~&!k!Y:hX |h.]ua@L^2d^' );
define( 'LOGGED_IN_KEY',    ')KfAFv0/$,3lp9[$hT0*YG6n (|PxQVt0*UqgC5)Tl|DY=3O=+Vy d*B`p,kRA.$' );
define( 'NONCE_KEY',        'agS3BW)n/#!Y&S[[@x>Xeqv<AAdJs-t%DqXjNUgl6`u^C.eE5Tf2HRJUgMvw`(>$' );
define( 'AUTH_SALT',        'NtK*mww/Qut?if}H#y/3qm|*Im;J 2CUCi]oRlm^W5KT-bPIm0nW$J^mv!YPtU:&' );
define( 'SECURE_AUTH_SALT', 'w6PPz@P#)]nC]FaC@H`Ww:s.H.b5(U~I=7:=gh_1xqtpmGsrGv/5uHpOZ^`E?h 0' );
define( 'LOGGED_IN_SALT',   'VDz++wlr1?2|v~oNv|lc=?ii]A8|P@z[Krj2AKZC~rUR~wa:/s3VGw-dQG?d#fG%' );
define( 'NONCE_SALT',       '4g9`yghlcnkAsl}f[C<%X9PG<o&X%.b|Z^hmc6fjD$_h!O<5%Qg0J;,V.EVw)7Q#' );

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
