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
define( 'DB_NAME', 'dhl' );

/** Database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         'J(!HJox:D:rBO4Guh9AzW39~ySGHN}T66/Ei,Z t^p?h$bSDBipU@IGRNnQ+Ix!o' );
define( 'SECURE_AUTH_KEY',  '$j/bA*/T:e7rzs..Nj<KLu8m$K=#de?f:y2$!qHlphMqv4YpkCs}@%R.8Lub)vm ' );
define( 'LOGGED_IN_KEY',    'MR=E#7cSwfo#CdX]<]`j^?:ZwA`o+M&dDyE,|z:C!P.YpTv0^bQ,{Cu6iY>C$`R$' );
define( 'NONCE_KEY',        'Up6(=.AFZl5,ENl)PG .N4Xb8f+U50JSD2cDL5}Tk#-b+eXhJNL.B>FUz8ByqHI7' );
define( 'AUTH_SALT',        'sy5Atip_:{S$_w^u+}O]nk0,;deR9MyfC8z9g@K7.l6xkJ9[X4Zuu8i[+w{3x/0,' );
define( 'SECURE_AUTH_SALT', 'ETR:LiW:>yOk{~1IbY4)TwsC;N[~(c1o:w^yehWSxX/aXXx|uB-T{CwY[Wkzsg)7' );
define( 'LOGGED_IN_SALT',   'E*!X*EzejTa]kO}6sOf#[BIHegEa$OBF&Bm^J_0OWw@HbKX1tfSnJYc>y`,-X}uk' );
define( 'NONCE_SALT',       ';66`.Im-uMeYMq,G}e0;(x-W}A}%oD=CP&I)5i_.J9~E>1JCqIzz8NWH^7`~BjzA' );

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
