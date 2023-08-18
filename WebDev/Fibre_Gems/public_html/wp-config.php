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
define( 'DB_NAME', 'fibregems_wp988' );

/** Database username */
define( 'DB_USER', 'fibregems_wp988' );

/** Database password */
define( 'DB_PASSWORD', '-T548-up6S' );

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
define( 'AUTH_KEY',         'qtbljxm16ciunsp2ubscajifmwx92r2lpq2ewr0ykx2yb9zyxwruw4jmcu5wdyqh' );
define( 'SECURE_AUTH_KEY',  'riw2zc18gjgejvitcdzhnf1bbawgnfyvus04cmqlkyrviunp0elgulsrgh19uq1h' );
define( 'LOGGED_IN_KEY',    'gaso4zp53evihja0zypxznix7znofxkvjbjevgubzt0kktfhwaq53tg0dfixzaol' );
define( 'NONCE_KEY',        'gd8jcyzfjxswoyxrjgzudhfeivecriz9tnn3dxgseqpm5ppn2mnkz256jxfhtpbx' );
define( 'AUTH_SALT',        'xyqq2ysckioybkyonngqrti8ugchszxphmx6cnwb1ujfunkda2hvmbn1nvw1woue' );
define( 'SECURE_AUTH_SALT', 'k3rezckhakhvfxrx9m6nwyxk9msevfxjyia9rhsaw3qmj3y3xgwelvslvtrgqh3q' );
define( 'LOGGED_IN_SALT',   'szxqrqe7im0jzokwg48bkhz8qvyu7jfkeevjphhwolnj6vmum6tbcpimrd11nb7f' );
define( 'NONCE_SALT',       'gr605nxyffdqpq87oexr6msklxxd2wiengqhat9xbfpibgcskgldrylnfy6ds4zy' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp3x_';

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
