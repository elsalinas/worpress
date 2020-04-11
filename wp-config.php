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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'fv/oLMtU9mhsFzk5Wjp2sDVgUMPMzY05SmyZ+fYbjMFynJXtzoFJPY5WEHHlO+XI4kLgUhFk5njulBElmHBUZA==');
define('SECURE_AUTH_KEY',  'xa23LYdo8WSpe6boX/6fxaXw8mmXNsVC/SmveYaPaR3sqTD94yFc1gYYILSaPx2PpmJh7icDmBKauT04iWkUgA==');
define('LOGGED_IN_KEY',    'piFbIQ4c95IZfVV+08B5M1XCNRo8rW7qLwwy62P7wpmJF0AjGguvuilgp+YayOlIZ8UrCSQeQ1fFwaQc/+f3Bw==');
define('NONCE_KEY',        '0DVuEzIawkEiH0Yb444PkamNqo2oF6T+FYIZvPxTfMiXqj91IssFGuXLRYwrhGiphT0W2dA9J508hPfzKkqIZA==');
define('AUTH_SALT',        'MU/5oBosQkbV+Wjq4OkfeclbTJUOIDbrtFRfon/ECnF8ISdTnsW7hQ5hy3pns2Mk6i46mQjwniAmUb/Yo/d5rg==');
define('SECURE_AUTH_SALT', 'Lw/dS7Zzj/KqUGJE7A+vX4rpFy2R1rtaQnUM3EcjoMXX92fDwAzz1yrLneunykZ0Ue2lEspbyJcRACkmzW9aDA==');
define('LOGGED_IN_SALT',   'rKaLlYm1LZZ9llJBfOBNQyoFe4nhXQJB5E3doVQDo3qfFh4kdA3lDF8d67HR3HfjKC3bC9XXwEeJncdWMan9eA==');
define('NONCE_SALT',       'zVWRSBGo05apyLlZpuH21KirYrZGvUtpweNWDccsEBYIc28OUcjpbWRoUGdyt0/f3nlyRFnNGZi5gH0EK+TYzg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
