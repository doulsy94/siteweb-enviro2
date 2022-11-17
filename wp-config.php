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
define('DB_NAME', 'epiz_32975030_w931');

/** Database username */
define('DB_USER', '32975030_3');

/** Database password */
define('DB_PASSWORD', 'e4(9S7pZ3@');

/** Database hostname */
define('DB_HOST', 'sql302.byetcluster.com');

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
define( 'AUTH_KEY',         'ypxvqllff7l0k6m4gpnvlbucwzxgrhfcuahekdk3sw5mejrtwwpauzayjwxyitu3' );
define( 'SECURE_AUTH_KEY',  'njpr0p7e8bfrturc0ttlfrur8lk9xchlrgg82etan6lkx80cnoptxuarf1fc4cca' );
define( 'LOGGED_IN_KEY',    'q9uqpzvf2bj5o46ooimlx80mlc0mhyxcdkvvznbmizjwpcm4xisriu2kasu0bknd' );
define( 'NONCE_KEY',        'pw4htxiwlaegrrzxxfqs9kopzzjm3emsvujgu1yzqz5ozyat3qo6ognpylftxszq' );
define( 'AUTH_SALT',        'naehzjxujexcv24anooypdlgmokzpwvjxmhpjjcr663tdfz1hfnbbvjd0o7gr42a' );
define( 'SECURE_AUTH_SALT', 'gbdxgtxasqwri9ugaqemgpcxpjdsoaw225lqlingm47rcrp0zqlentichuo6mj9h' );
define( 'LOGGED_IN_SALT',   '8e3wnnrg9odgqmi56kgom88hmpaqbh9xx1qg4e1cktr8usvnst5f98c3pfork9mm' );
define( 'NONCE_SALT',       'a4emw9a8yhjxsqdzhf3mtpbddbkznzfpmytrbb3po0n43nve146od9hgllzb5789' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpsq_';

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
