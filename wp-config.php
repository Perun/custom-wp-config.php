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
 * * individual/custom code: Take the code you need. You can comment out or delete the rest. 
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'database_name_here');

/** MySQL database username */
define('DB_USER', 'username_here');

/** MySQL database password */
define('DB_PASSWORD', 'password_here');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/*
----------------------------------------------------------------
Take the code you need. You can comment out or delete the rest.
----------------------------------------------------------------
*/

// Enables the cache. Required by some cache plugins
define('WP_CACHE', true);

// Empty the trash after 21 days. You can adjust the number of days manually.
define('EMPTY_TRASH_DAYS', 21 );

// Disable trash
define('EMPTY_TRASH_DAYS', 0 );

// Number of revisions
define('WP_POST_REVISIONS', 5);

// Disable revisions
define('WP_POST_REVISIONS', false );

// Autosave after 2 minutes (120 seconds). You can adjust the number of seconds manually.
define('AUTOSAVE_INTERVAL', 120 );

// Activate database repair and optimize
define('WP_ALLOW_REPAIR', true);

// Increase memory limit
define('WP_MEMORY_LIMIT', '96M');

// You can hardcode the url of your website and the instalaltion. Saves database queris
define('WP_SITEURL', 'https://www.your-website.xyz');
define('WP_HOME', 'https://www.your-website.xyz');

// Cleanup image edits
define( 'IMAGE_EDIT_OVERWRITE', true );

// Disable the Plugin and Theme Editor
define( 'DISALLOW_FILE_EDIT', true );

/*
----------------------------------------------------------------
The End
----------------------------------------------------------------
*/

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
