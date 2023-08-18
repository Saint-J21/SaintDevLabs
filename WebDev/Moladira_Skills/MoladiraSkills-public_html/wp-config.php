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
define( 'DB_NAME', 'moladiraskillsco_6' );

/** Database username */
define( 'DB_USER', 'moladiraskillsco_6' );

/** Database password */
define( 'DB_PASSWORD', '1pSj1G].l4' );

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
define( 'AUTH_KEY',         'xmodvc2wespvvfajz3doph4fzsrgzxgffnu8fzxje33r19iudl8ao31qx0rcrkwk' );
define( 'SECURE_AUTH_KEY',  'qwbbmugxco8d2wqpgrh61p4pccc9qpnc8ymtcadw4jno1e3r0dou6zfrelklaarz' );
define( 'LOGGED_IN_KEY',    'mdpsqdpb2x9uhdwfagyiq7oir06wzqucnevstzvsk7epdwwygxcldcxfbijraur8' );
define( 'NONCE_KEY',        'gmqyjncohcjun8z9npfot6lrbapm88g2wyiyeqedidmdcx1at3xaqardnthteokl' );
define( 'AUTH_SALT',        'qsny5vhwh67wqmnoiysejfnxdep1jsqbwqdcxxshzds1n79t1eemg1pg6nxmatav' );
define( 'SECURE_AUTH_SALT', 'nzaedidzfpsntudvhbvhwd1tm5795wg0jrculumafzoryztkucguacajutyq3uy0' );
define( 'LOGGED_IN_SALT',   'lcdtgtngutul950qxrqg6u8rvhhevxvheaumueewjidqheautmay6suhqjiftval' );
define( 'NONCE_SALT',       'e2rb9kn4ddqugcb4klbq46iso4s8aek3euqdd2tx1arvahtitlkhuhfqwd4t9dps' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp1y_';

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
