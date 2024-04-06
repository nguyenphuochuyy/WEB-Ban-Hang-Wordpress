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
define( 'DB_NAME', 'pcstore' );

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
define( 'AUTH_KEY',         '+3/5hGg.&RZ.rc;e)kBXUKKf@@EG-,Ly1|.D@HrNhA*#(,}$Hkr+M(~:2jvO?W,}' );
define( 'SECURE_AUTH_KEY',  'EBmR#1-EBMHAF`89?q~< --Y)*Eyj0zUv;ZLI5gL=SQUx.~4nPht2DuQq/uw^2s+' );
define( 'LOGGED_IN_KEY',    'hwM736ta~Jh}[*jRGYI~HQZbNSrZq8:hCscnpG7A)hsU2-?RS83Gh(#8Z0c=b|SE' );
define( 'NONCE_KEY',        'fgp9[6Neb]WEK,9,N/Y>]=CIsj9}+$Qf*rRAWC9qDeL@h @JabEX#W:3-HP6>^~s' );
define( 'AUTH_SALT',        'sWB-<:;EdR:l J<HK/*jg*0-70}.61<T/(8x$5`)ikPs+GmqKpA4m*y1O:NyZ]TV' );
define( 'SECURE_AUTH_SALT', '8gfum`<V8dpg@lN&f<B9^G^q)>A1W {rn08L2x4M[{FS[_Loxmf{VRwO 1h1yEzj' );
define( 'LOGGED_IN_SALT',   'p,1Ru2k?`l`/(4pkkne_[XQF>^]*sj|66$uW^7[=P|<fK=3c+tYY*fa<M*VI>$]J' );
define( 'NONCE_SALT',       '2A,oH5C?3r>rP[zI5H)uBrlC|Sn&.O|0Aic$l0<m1kw>Yvqule!_jPYh$*qa-Y.>' );

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
