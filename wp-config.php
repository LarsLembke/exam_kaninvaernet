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
define( 'DB_NAME', 'lembkesi_wp1' );

/** Database username */
define( 'DB_USER', 'lembkesi_wp1' );

/** Database password */
define( 'DB_PASSWORD', 'R.Dao2dAXiMMW4h9HlP10' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'TyGaOrbpZKl4z90OudvzGzceTUtD9nToYcGiyR7FV8BscNrvEsimTCXfAy8NPT2P');
define('SECURE_AUTH_KEY',  'bnUmvzdw1G5FH3fEwxlenEypauzM0aOc4qwodR370y4FrHkbjzwbdiMLHg5cQadL');
define('LOGGED_IN_KEY',    'vrOKb5pS2vTgYoqfdxawNfcZIv9Q2dgZFvoHO8qNWEo0ibkcVsJBP1diuEeBiWLv');
define('NONCE_KEY',        'Kq9T5t4hRnf4tJ0cz9sGxPqL6VKX2lZGOSHbFzoZEqpUmZBVbt05JM2fgjog3w3r');
define('AUTH_SALT',        'UBgTHf5VObW0nBOnNMBPDnBsHqBMxqfmsdV9vnaP7mzTcLFoLZlKNC4gZizW9iia');
define('SECURE_AUTH_SALT', 'RK6JcKZFdhjOPL5EXue3moX1zChpqTqIAy0RqFWYuWwGdUSTDSA6vGlT7JM75i4w');
define('LOGGED_IN_SALT',   'tXmQl5RIkNPkGb8KvmiApfAivnlhZNve3bYGs1ie8xBE0pqiJzvjWdbavIoc9LXQ');
define('NONCE_SALT',       'pyDYgROqP8HMrNIfTDWGQ2AoLorjJOqu23qACKhsPWuH8KUn8iQr0w7ShAfUrXfj');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


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
