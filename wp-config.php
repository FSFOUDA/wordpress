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
define( 'DB_NAME', 'wordpress_local' );

/** Database username */
define( 'DB_USER', 'dafou' );

/** Database password */
define( 'DB_PASSWORD', 'tq&MI^e&hpEWS*YTi6Hivs4E' );

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
define( 'AUTH_KEY',         '+DWI_9-s0oe_N81$xv^uM>;N`A{mr}-=@AzS%40IvK@I]y;(X)G;(Uf%_v+:!TA&' );
define( 'SECURE_AUTH_KEY',  '2-0uc%q?>(% 5)R~hpsHjh{/Qe`(cHfs&#UxKQW}=,Uh#$)^*O;4$yb]4L jN>aK' );
define( 'LOGGED_IN_KEY',    'Kdbved @?JsU4;F+C{c^U4FskiX)fsn37e2HQ.<(rd/AAdIQ7%BFoJofq[?-n@[t' );
define( 'NONCE_KEY',        'Z/Y9ATlG!t?FWN.nrG2[;j(=HzYB7C0K;Jtx#8,XN-|T$MtlJ[[<oG)X=h$vBF^,' );
define( 'AUTH_SALT',        '{p++BUTkOM.E&ZbAD<5+2/W=pyye2Xj!E4_Ph4j6uP -+4ycfPY94+_UG9QdHgL(' );
define( 'SECURE_AUTH_SALT', 'j%QmoQM`]RMAwcB%0&+shwj6#@?$4o(]0s4MLBxclU:BZkPR/W= Q+d1a~eFr8{|' );
define( 'LOGGED_IN_SALT',   '@wnHGmZbDfTvyNr4^ :zLqVFazWI8q,)5=dXus~Mg8I7r%Dniq]Dd?E4Y3H$uz^5' );
define( 'NONCE_SALT',       'A:qIX{C!l3`wfqH/Hw<l.ra,Q*mDqAT7Pj=/31^N(8(3>(EGQ!&F@X^:M]c6h:}.' );

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
