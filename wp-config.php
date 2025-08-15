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
define( 'DB_NAME', 'pbd' );

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
define( 'AUTH_KEY',         '/%|Nm^~> <BkJyEZ+b!`s.6XQ}g9?pq^Z,5A@Q0-D5KTvD %yUZSyv`}bLSU8tO{' );
define( 'SECURE_AUTH_KEY',  '}6_Ih]LS$5o>!Haok*_{$X`/$,;pD$-`)4FvgunN|`IJ;IAAs@yHds$Yo8M@`wAJ' );
define( 'LOGGED_IN_KEY',    't Rq;U?aA6=!Y$`B?l(g7&eDe5JJ~wV0Ygw~4rC-27oVdr}Z:p!oj0Pow.r1a~)H' );
define( 'NONCE_KEY',        'muMs5%y44=^3<Nwnnx6}_lx<;^4;,*i]i/1pA):^]csBrfS3&XbM(<YVTygxTQ9b' );
define( 'AUTH_SALT',        'pc3_:8y*^dL44Ttlva3Z42?YIXs!R.pxsSKs~su%&^DrA]Y!5E]cj}TGA8jvI:B,' );
define( 'SECURE_AUTH_SALT', 'Nw3x:9~30.hDJq<!T$Mo8;6~c,@^!1.9r8(&}<CV!UctgNE[DK`*<92U#JJq6aE<' );
define( 'LOGGED_IN_SALT',   '3#a0vVYeH&M.RP+}#XpB{;[J0*R_6wSg/f7z_vtKR+5g23S)2hvwyDsv9SATUJ_D' );
define( 'NONCE_SALT',       'IxIQejGx]E}~`t#.<MXiy :,u|>JZ ULZ]ffJ03ByUjb=8%w?#<`/d?+7(sH|mnM' );

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
$table_prefix = 'pbd_';

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
