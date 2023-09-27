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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '!#Xyb@.)cPX~yjIV)%48d()@)o^gRrB6rz:RQ8e20[+VVNpQjC% SNVM;eGKVDvf' );
define( 'SECURE_AUTH_KEY',  '.b~3bqvx84hEBNC!3xMTH5o#O7_>AqnZe0h=F;wuZ4-8ZjgI[oN*x0,!JHRxueK;' );
define( 'LOGGED_IN_KEY',    'A~-Hjaemn&0BZj$^moU=Tb!Q6c$;!@%SBS+OMaB;/xiR=b)P%_&/+{}*?am*~gs_' );
define( 'NONCE_KEY',        'E%9Ne>|7>qJWJ~UCC^v@bd@0RA-k@O9::/9$4os.-W>ZX]]yp(e}Sjzx1Lk$P&T&' );
define( 'AUTH_SALT',        '[VZ4*qY>%X*MeJaO4g~%W>ud3,VX$3h{+#ztW*4,mf,,3|}YJp>l*|7K$aq0(}y^' );
define( 'SECURE_AUTH_SALT', 'v0]pu$_1e[|{ZCXM8-<D}$) 7?M)@L#8{R~$Joz(V^@~tog1EL7H>rm|CbEdh=Pe' );
define( 'LOGGED_IN_SALT',   'X%S)Fg`<lY=5l,|LHgZZ+c-jF+`$W?$f}m?..JfjvLh;1g+YLfpGeFk[K%fWB,%Z' );
define( 'NONCE_SALT',       '2<i3}iw$Z!d+,rZ-!XL^CBjeLQ?d0t3cXpMI^-530VP-yQgNBu_]J70LFl|Ha]~h' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_admin';

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
