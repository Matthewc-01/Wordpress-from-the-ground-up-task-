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
define( 'DB_NAME', 'mat' );

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
define( 'AUTH_KEY',         'I@7wIcEq{QShSXl_JY7{[Ra~59~?%HcALvoIZ.1q^m69f0m3`^ym.{!9#zF3x/`M' );
define( 'SECURE_AUTH_KEY',  'eM$Zd{}BQ`kVr&2@}$KAc|}/k^xha+3(Ow+l$3X:hmrk[*}o*U3CtMSQ5~TE?y=c' );
define( 'LOGGED_IN_KEY',    ']9D}J*%*_R=%>++aZaR1F[L>L2X1&b_y8Z!TZU+1GMB&rX,W~=]KK=TP=VYe[,h]' );
define( 'NONCE_KEY',        ' RO{.iQI$j>zGJQD1S`-h^K>>Sm|(og@dOVV(M_8=O _(dzk8R=%bUS?YV%&t^?6' );
define( 'AUTH_SALT',        '?TBC%nr#apPxmZP!z$~_R;?W<DK[Pn_TXdxql$(%J9Dr9+7{]-Pj=dq7`_/*edoK' );
define( 'SECURE_AUTH_SALT', 'OnDW!mm]fh<Ge|DU5T&u>LR_c/ci)y$5If|D|eiLzVG>?4fk+|q]V=T{9f_VH+qI' );
define( 'LOGGED_IN_SALT',   '>f8o7Y!p7*`Av=Lf@]8K *c!ZG^a5bTH57C|Ed84IA#R/E3G+3k1m~4(dyL|aPU0' );
define( 'NONCE_SALT',       'e,+UL0-I>fKAr+9+%zRx*[r|[3#e+R3SAZ4C,*n9<a!>6UVXxGk81}[4X(BtHm:k' );

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
