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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'XdPwbdeFCD#$:I>tt>FA.C@Nh;REaME`X7hKEWXQw?^#.#rZas,vkdq7)&udXhTk' );
define( 'SECURE_AUTH_KEY',  'Rf.ZFWK_bTVCJgmcBQo[O><w$:Zd`./h23%L>TBdwT{bWE`uhpubFht1mk*f=~)<' );
define( 'LOGGED_IN_KEY',    'gNk0OOA^2m*ixcKANdS4E7hf+_C/LQ5y]+[~51{jCm,;HYQJ#$h&`nU*c[tj7aeH' );
define( 'NONCE_KEY',        '5&*g{@6V )<hG}`5@j8A;#BT>~us>}!38.EUHA$blx5,v3{t/N`d*Mw9hckz5nTY' );
define( 'AUTH_SALT',        '%(RV~z&G+x}[WK7|A-TW+fj?&8|y5A0k@>nTckv=@)![I%Zq]FxeY(<yoXj~8]e~' );
define( 'SECURE_AUTH_SALT', 'gZ6?OR8o)^|Ar|*;lY<=,`Rayy+g>@y}T#eP&8#P7)6iCs88}7m.Ha$ZmEw[&dL5' );
define( 'LOGGED_IN_SALT',   'wPPdE@#{ldWeF#5]bxAvcphFyE+]T74ea~x|wkzPM+T4Cwa:1jO-r6/om+^;X;`.' );
define( 'NONCE_SALT',       'CBF>I22<LFdD=rS*+[o%,Xv2XOnj$)(Hxn>Q-c10)hx<^%oRv5G[K04s4=q+}%*S' );

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
