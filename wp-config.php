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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'c1P!Z-1+6/BNFgppw</oaA]gb4@J2d1dyI/Q0X0%:2&w%/l[&U*rT q_;S&m8R!%' );
define( 'SECURE_AUTH_KEY',   '#PdNu_D_nV=Qk|;;cl54Y^1R[$KrGVh&BYFrO/cPz%suv8=Rj**8]0FWy{GoTzvV' );
define( 'LOGGED_IN_KEY',     '9igVxLq1 k%K?[gv1FJ##J`Wx{_BIS2DL&; )>QALgnE3~;ZepPf7$FJ$E|$B  i' );
define( 'NONCE_KEY',         '4exi@`m^)_ A..[U<~B~A|kfKa%WwVH<iz3GY$/JNnhajXgC2.Bn:C{?MT;-{f$q' );
define( 'AUTH_SALT',         '1vX?R]^^)!;nn!^@$7Y7&Q% C?HzK`/[Su3M2+:N@ADp1XFc- ^/=:Ay5Rowoi<(' );
define( 'SECURE_AUTH_SALT',  'HY:@NOC!`e^mgz],`M0TENQ1;WZ&4;BXi8}ZFg}pb<^4BYf*!Er]#.FH@!d[^*U>' );
define( 'LOGGED_IN_SALT',    '/T|Db/;ICFA8R^iJL-}.$:SDYnA&F6ahGNX[H@v,1c/)Y)9z/0C4,g/kQja5=}#w' );
define( 'NONCE_SALT',        'j%BH5@tR]tG#|kXT>,bUG!9L,r<LQ.z-@n-L+i0@YMS?6xNcQ!y*6.hXL(t7F&ZU' );
define( 'WP_CACHE_KEY_SALT', '?Gl$wyw8s6MPa4-(NU@o8{NCPe#%[9o[X(;Tkp^J>~B{=$lGtSh#4]6-`KC;`<31' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
