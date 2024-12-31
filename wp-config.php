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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'work_wordpress' );

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
define( 'AUTH_KEY',         '~vEG*3ToWvJ-uxo*<TRcMb{[&%i/6QTdsjv[2j(=FpFJ6;Z|`09(/{ozp_)amJQ0' );
define( 'SECURE_AUTH_KEY',  '9c20vhx+np!=GrDJ)hC-(1tf$5~3K2$=9erm]l~6A5( #U(~{^1_s((<.|MgrfOf' );
define( 'LOGGED_IN_KEY',    '5y+p`@j_P:<SQg*T%,DtqRXds/EgNJf,:kk,Y*n(sy2X$b*LB=TG)Q]o1Fr>?>^v' );
define( 'NONCE_KEY',        '>rZ4%Ulcs]YH9/T(+}2/<rf+-E@Q%&NEQ,^l{7+zyxxYc$`-PuAg^RvL4*.V)#Jh' );
define( 'AUTH_SALT',        'ugDR2KP, ZxlWxiq?Q0G71ibZ$#F&=(G<$6D?Xe?U//hSB15%0!gWVO`,.f7PAa>' );
define( 'SECURE_AUTH_SALT', '8q8>T=X[69qHAak[TWB!C;}tcQJH=+eCFL_m!@ZO.M+*hJBf`4Ve28cbt6|<#o%h' );
define( 'LOGGED_IN_SALT',   '0MsSc6%|.=Pixsg +J@~o;{T=cMkT/<,x$5RtH;Vx0p^pebPJT9+jBaRkD=Q%|A-' );
define( 'NONCE_SALT',       'H^9CJ.-1i{VJ_BNt.!3a?yuCES2mZS?^@9b$,vJ+}!7~anh[T{2>n@_U7?VX>Qhm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
