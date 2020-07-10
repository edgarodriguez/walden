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
define( 'DB_NAME', 'wp_walden' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         '<lpL}1co5/v~Pfz{<wjF>(Noo|O8mD(?aJmu+p10Ph@(RX{|N,?/_AG-oDu.1hJ:' );
define( 'SECURE_AUTH_KEY',  '(2$tR_{o;bUa}(RtmyqDcK[/ Jt$/Cz:t,@FXi+aM]ix,wkvzXcf1j!A1eJ Z_91' );
define( 'LOGGED_IN_KEY',    'Wvz?`,9)}D|n-0QQ!Peguk}i[(N1oLn)STJuN CxCL!6h%VM{TEXn|C,_cgSo7i^' );
define( 'NONCE_KEY',        'jqngDXmT,Opsi.p740=I&#C>K/Zp,7rR#)Vkbf*nl]1!@? MTNlD60bR*7a&fa>-' );
define( 'AUTH_SALT',        '&y79-^|5dyfZoIw{KaF:Na`nJ922L$kMYyYdZ[TWvC>32^a|!?+IXip1ikIO_CbF' );
define( 'SECURE_AUTH_SALT', 'N,z]^rRDU[n*L^t Mu1Fr.7.Vt!B_]2toSH3Ys~W*2*/#Y6~)ie+-Q8OrR5BkQ|8' );
define( 'LOGGED_IN_SALT',   '{|;%HD.lp(G8/Gqu`jSv?YK=T OrQidg99gCia4WFSpR>YP7v(0DAzFjBrb4m$fh' );
define( 'NONCE_SALT',       'CH%VfgwfIAi[;B#]}(vRbgo>fUA%gDV@YP4^f>%bv-Dl,X:XU4m%1x93!(7R.u:k' );

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
