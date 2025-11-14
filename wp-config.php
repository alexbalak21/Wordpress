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
define('DB_NAME', 'wordpress');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'Ivf>E{+VWpH2/jEJi1 &43!?=y>//T^ILa24g>+6]3yaEs9OTYZDDa|eq|{ i)z<');
define('SECURE_AUTH_KEY',  'eNM*T!t1,sQ2N}Omufe^?Iy`qC)(J8g,,}1Jy6aXQ,}zCl#UMF9VTbzX$4X$D12)');
define('LOGGED_IN_KEY',    'ql3 2)r8TOy>SE9JCH>Uaie0cDd7%`-F+1 wTN8Y.ovAarvZJ3~R=>n-wVE4 ^G9');
define('NONCE_KEY',        'nzXo(,~4c2d@E;5^gUgVlB{P^2{7;]qb2<F7r)B2QVbh/nYoRU^2fIqG`:MwTURg');
define('AUTH_SALT',        'kV9t[8GZzKv~gW%Nq&Sm5cliT?OP;zl$1F+7PFkh!!(eS,lNrx39v2]sHo|2Q}@z');
define('SECURE_AUTH_SALT', 'F4<mm+aPPOu1UMv-t.0zc$U@Upx84n)4lG:Bd_e%KZ,VCBQ- }^r>>TVrb#GxR/g');
define('LOGGED_IN_SALT',   'rvFdB,;ly*&9h&6xO%/`MnGf2O&|@qkLyd->X>+D35slX`)=U30c1a:*&/MF|4FX');
define('NONCE_SALT',       'rOWzR`^rS`]>@E((#W>hHb<.FeX!P,79GGjuf@-OEUom6,!Z5bZv~BP9kbAm!2nl');

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
