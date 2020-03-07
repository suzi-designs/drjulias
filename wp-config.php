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
define( 'DB_NAME', 'drjulia' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '7REn@7-6:RArbh.L1mQBMAv>KhJt(AQR]0+^S/?<K:6Sy~!:tfOdw% pT]]MkF$`' );
define( 'SECURE_AUTH_KEY',  'L P+t qF=q+ZOG)q]IZ;d^W19(:}ND7s-C#ra]DLZ:s,md=@1.w?vE($mq53G=@%' );
define( 'LOGGED_IN_KEY',    '[oH!8hVnD<<z%rCWNry_bb?w@u?+)nrJg;D=L`66Ztyc}ZN_vCv0Vt9#5rU,=.S#' );
define( 'NONCE_KEY',        'xV=In4c/,DeC?^|D;>.[!`Ra1mlMAs&o(T7(y+39;|-jB_>:3C(~xl29DukL=fAa' );
define( 'AUTH_SALT',        '2Hz$-V}w9Fgs263eyxh4eHb+5)JD1K#}icvFI)^fZ-eTGZcN*H?JH*Pr;RT^:P*;' );
define( 'SECURE_AUTH_SALT', 'Ie#4vV{fk%D|5ktv4SNx.}iZK)0 9G=,=Wo`;aGT:QC=v5{@N.ZMjXx_7A^ 6HI.' );
define( 'LOGGED_IN_SALT',   'r0g]f4a(8=ckE7?2MLwJVXf0g2{B=oQ7KixQ|(&dl`~WZ}vJ~2nufE%HLAA7)1d@' );
define( 'NONCE_SALT',       ']&-{!v*T-)lD]]6se9532S=sHPHH~^Aq4%`fyHq&WApEL=kY2uzOn>^4*Oi%lIO7' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'drj_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
