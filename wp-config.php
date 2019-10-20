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
define( 'DB_NAME', 'ppd_db' );

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
define( 'AUTH_KEY',         'jaIU~I62Mfi#tVO/);)yz[rr|kRV#0,6@U^Y4-x56 DZ>j-hhlJjNH7x(e6;N-I ' );
define( 'SECURE_AUTH_KEY',  'c!RA-)b%+H26xWVb6S-H=M6bS!V2,; ]$)D4)9s2kX:ZQ(g(XM[.86l|gvlF*^l@' );
define( 'LOGGED_IN_KEY',    'YPQE|wRD9~41Q[8M9N=@;df%:qKHM:ba>9(Y#D|Uy@8Sq=FDzf$UwVS[}M(LLHDo' );
define( 'NONCE_KEY',        'iPp-l,;ia<x<RW(=51-X |P#U:mCJFiBZZ[qT0u!;FKd}h4E<|,x!/6!%G?qWe4~' );
define( 'AUTH_SALT',        '~dS>];X%3-d7Sk~_wWFIKtv(hU1WN?fFYl9b1!x^/2fzi5B%DFA+GDw-F0}k5!Bb' );
define( 'SECURE_AUTH_SALT', '|Q 5R&du%wRFveQfSc[!#/jEk3)pk# rPyl&= (sdU{mEJqeF9eOnIkP]G%@xL5G' );
define( 'LOGGED_IN_SALT',   '{DBK7{bk&Q]{}7`^L{6%fMQ}F/[Qf}F=x^*v<jiurmqx0X+. j1_V6vBMQ7{A7Y2' );
define( 'NONCE_SALT',       'Tp{ae6>1GG@XQ3k8[_n)$Olkc6r^4t _i$#:M%|(*j?A?Y.pJ6:`EeD3 ~]4sdRK' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ppd_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
