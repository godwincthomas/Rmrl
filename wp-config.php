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
define( 'DB_NAME', 'rmrl' );

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
define( 'AUTH_KEY',         'o]>aSg.KZ[,_c R*{VT@^Q@FLCw.d`m;}$JByWebP|DjPf@-qSr_Xs=FIY&:Q-,:' );
define( 'SECURE_AUTH_KEY',  'cIB<LH+Mded3WNn(*e3EY(`v7JQ/&Crra^9cPS#Hf s?rX*})@aayT<x_xohj(lV' );
define( 'LOGGED_IN_KEY',    '{9pLM0d!{JT!G5SAN#M$+{ (l|U6c5O]t4D.!u9Ri7SO}unjLldHQtiJm~sE~Ul3' );
define( 'NONCE_KEY',        'qcKYT.nL9ACC<Xa4!](n!N2-W.Yx`)=^X^ZSee9NUXx>fBYSSbFKcyR+FipQpm]F' );
define( 'AUTH_SALT',        'L<?p$#5doYfwTviZZ[0B},6].OQgdF!pc#6E!$$qAp3xr^U&! gi&1wGA3(Y%>u:' );
define( 'SECURE_AUTH_SALT', '-^:2_xyE@$50-+E,+(:U3q94M)l)BtW<GgKLSy{F7<IkfJ%hTVVRv|NnaV2Nh;k]' );
define( 'LOGGED_IN_SALT',   'Z^r<WMe:BVx{byX2-xkHX/>mGS.;6&BA{sM:c}:MEu<f&1+5Y.u%APv1uWKn=jo.' );
define( 'NONCE_SALT',       '}-_AD]!yzCX}YmRMG8hlF+7G`|e<GGTKk0aX}i9m_cZtaGzXc~Cf.4ETj08[oWl>' );

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
