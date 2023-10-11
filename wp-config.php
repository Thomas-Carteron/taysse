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
define( 'DB_NAME', 'taysse' );

/** Database username */
define( 'DB_USER', 'thomas' );

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
define( 'AUTH_KEY',         'oI+a595;]H;E6Cm@>&w(*f%[.~}o 66J<h7iE$P#)cR@,*Uztz_&cdtWVtQWP3.K' );
define( 'SECURE_AUTH_KEY',  'on7vAtEg0^c)nZr`SF7@aO|9<F#TK&Z&6<}_hm<5tr>N HGA.:sJ=)f-)7I;=)6X' );
define( 'LOGGED_IN_KEY',    '|#q9?+mFfN %0F!{[tPs| F[sfhq1w[PD_/;=6zzI/_;A4Va}~=zZTi(r[;4=E o' );
define( 'NONCE_KEY',        'WE?l_ax8J@|6P@x<HI=v~<d-Jbq&.xix>8M}ZrvV(q`WwV*}&CP9&Zt7e rE7a0t' );
define( 'AUTH_SALT',        'lVHaMW7iiEO!_&*QJE} lvsO6^mrlgahN)G8`OUp2@ji7bA=F]~4gF0Q<4Vyo-#C' );
define( 'SECURE_AUTH_SALT', 'm}1RpEp0KC~$O%7N;uuC</@+-?OiF0W(9:^is{%^3X#YY1yoW$xE>0!Op%tb*|y*' );
define( 'LOGGED_IN_SALT',   'e>klP{F:1 @xo@XKh<rpT2Tk1zkE2_X5LeuP#cCJDE8cgz @H`_!jS3`#a]p9~U&' );
define( 'NONCE_SALT',       'iZE1>uVl7aWC*gz!xUw)Z7.{:,okBMP@C-IC-qgW2n~HYt^g}C}P)_ZF|ki$6B;Z' );

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
