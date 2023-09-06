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
define( 'DB_NAME', 'wp101' );

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
define( 'AUTH_KEY',         'v !9!x#|fwwzw{U#*y:Fl]m8;Nb71qkqp}HOY(}.SJY&Y411(3q&_<K?!#TZ,<44' );
define( 'SECURE_AUTH_KEY',  't-aJefKdE-F`ls}=$LIqvIoA`_,zI0W`GY?-oxGt]`S|HuBf7d&p1Sv3RhIYD_AP' );
define( 'LOGGED_IN_KEY',    'VzwU&K$l6LGS.YS~9|ehk/0DjQv~;gaS2U]<#|:O~z}B9{;}y(=L& i~v[5!#I=z' );
define( 'NONCE_KEY',        '>]sb7Eg:G6n>u}BH8D3(=[J*g}}s.y6u|CK$R/JWiEcdj1m[ssZkMTd&D&iRl.lr' );
define( 'AUTH_SALT',        '+h72d_g`Tm_G1,3xM9BZlEB*,94E53kH5*mY:c`2olqn$9/u#x&iS}4?([St[cTm' );
define( 'SECURE_AUTH_SALT', ']_)mZ6)}3:1XNl3EHs-[#l<po+gkBsD1a|+8lU7Q@$e[]giK=rh0bj4Zf_zuB <D' );
define( 'LOGGED_IN_SALT',   ' cDg~PGg&@$~s|;,h6UswBK|.ty@WX_MbJgsGjG1cH%UjQFV!Lo2-KfH<apmNgFQ' );
define( 'NONCE_SALT',       'yh+vqz-)A} hI^1z:[_+ZQ-ND9S|zT:T7Wb$XOuERqRS7PE,psBiWxJ:{PT2ieY4' );

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
