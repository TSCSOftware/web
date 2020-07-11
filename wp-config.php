<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp243' );

/** MySQL database username */
define( 'DB_USER', 'wp243' );

/** MySQL database password */
define( 'DB_PASSWORD', '.Sp3M22cw-' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'yhpvcjydo1sdgsvgclvveyvlm1r30yjlunoibwedxgw838ee5ynzwfiuyanhoxdl' );
define( 'SECURE_AUTH_KEY',  '5g2wblv4lwts2e47vtnxmupurbw9gcoaxklw1tcmkucpigefnwyyuqfmvbpydmmh' );
define( 'LOGGED_IN_KEY',    'yypml0qnents0cfizkaiaxdyb6hfmtuptp1gdpbrlbret7vxfhlm0sv0fx3x6hm8' );
define( 'NONCE_KEY',        'niegt4lmxxvg3szimud6qwympbviwgdkaweuqhd0jjqnweeqaxnd7csaegnw9rfs' );
define( 'AUTH_SALT',        'skbmpx7gi0wdq91daooqzfvwqqaddri2hb7tbdcgji0lea5et7finlukpln2kwcc' );
define( 'SECURE_AUTH_SALT', 'pby9e0goje89kjltb293yqbwjxklywzsdimfvplgwtgwqrlpxpimf795vvtfgwwo' );
define( 'LOGGED_IN_SALT',   'ecnterkgqvcfrjs9aoornatpx5trxrwvbj47nhwxctyjci9bs1phqdxgycdovdmt' );
define( 'NONCE_SALT',       'vz4ayiccngkplofnlo9jcw2lbh4n9azvrxwlhxf6qwsdzlowznwinrljmnx8dudh' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpna_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
