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
define( 'DB_NAME', 'covid-19' );

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
define( 'AUTH_KEY',         'ITDicDBc;EhCHfz,6P^8UAN5|[Y~$8HYcl%n,HdJYLbD:G#Cm8C=YKrA@ZA{C%o<' );
define( 'SECURE_AUTH_KEY',  'hI.g(nfh!,{T/{pZ;0n!u$G#.5r?n9[0{pHB*9ek__906Es?wCwT@$b(Qf4Fc-UC' );
define( 'LOGGED_IN_KEY',    '}pO_R@_*/TSae&0FQA(XWE3tv*38J(i6d(R,d4#dkLgRZJ;8E(]TuK=~+k4J%W_y' );
define( 'NONCE_KEY',        'z@> &i70vAbc5#!-3=*4RURSg}}l0;jk%codnsn|5biR6S2$48G;m0LHJ3Jz`iA)' );
define( 'AUTH_SALT',        'y%q7SE5DKqrU{]w+COzHnhV>u5?}21l97Q*GT.d;.vJ<6P ~D|F0=WKYB{FLXAZ,' );
define( 'SECURE_AUTH_SALT', ',kIlP2WFYjlNMkLgfXcA!k*nb`iod5#%80e)0w+d)rwRt8Je^8ij`[W4.5;{vG][' );
define( 'LOGGED_IN_SALT',   '49Cr.W`Jy$]pG&qXq-ror|LF]}9A|QK#J&FWC!gAm%6E( E*~^+/Ja.6_b!m+5K3' );
define( 'NONCE_SALT',       'jj*wi/{cknc?4|4-u6UDWl1ap]MO:/`2mjyqljxi--+D(D !56GOphy/Ah3IUw>X' );

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
