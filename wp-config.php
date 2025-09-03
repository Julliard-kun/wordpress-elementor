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
define( 'DB_NAME', 'wordpress_elementor' );

/** Database username */
define( 'DB_USER', 'jmm' );

/** Database password */
define( 'DB_PASSWORD', 'jmm_database0426' );

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
define( 'AUTH_KEY',         'n]iNH?/wIz8r=61:^^]P>uLRufj:.T|rt+yH:0_P:ta@fw*q`sI4aJ/l-k@R:kf]' );
define( 'SECURE_AUTH_KEY',  'ZbJBxW.;E,t;1,Y}H-p=.Nwbx^QR=EyS6i:5OX0ufzBITV51BGfPeEXgs>^):1^t' );
define( 'LOGGED_IN_KEY',    'uW~KHNhfS&uJUi].m)r1L;y&g*Y16uo?V;w7)y07rM`>]`1g2kQ/WITDYqde77(|' );
define( 'NONCE_KEY',        ',lYfP0i?2xJz&5T4mQ:/<quM;v@A@[gZO3aGRS^#*AX0dV$Sr>QUrdrWUc*#=VY9' );
define( 'AUTH_SALT',        'pruUk)6~kz,eMY&FiVPcVK//o&aT:+DK-NPuiI1jrKpz nP5&|/^s. q*Dd2F#fI' );
define( 'SECURE_AUTH_SALT', 'xY,%WV?P].2=k}y$7`bNj4#`qKwNv6$EjV^zY=EdxZFwz`DtGv<7h#&4w0|.gz5s' );
define( 'LOGGED_IN_SALT',   'MbQH+j}/q@dM*^<OEZgnlNDKw#|m^zk8jj]~ =^cV]8rm| Oh|`T2[vnBeCO.JC0' );
define( 'NONCE_SALT',       '!ok>rkJ;T~c?Mm;w,4iZpn@Or#A#_=JJa^%,M(+< y+*}FUDNY*oOg3)B~d:<T$8' );

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
