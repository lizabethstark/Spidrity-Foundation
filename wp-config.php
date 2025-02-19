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
define( 'DB_NAME', 'spidrity' );

/** Database username */
define( 'DB_USER', 'Spidrity' );

/** Database password */
define( 'DB_PASSWORD', 'foundation' );

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
define( 'AUTH_KEY',         's>zQeK)TL<h80zmnj{rt7!3h3YU3}n>]58BoD`9W{0#p|i=iboTwGxKD];B?DPb4' );
define( 'SECURE_AUTH_KEY',  '-WPNM-S%` 81;OI3pKx{]{?]$KwAGRY<r*Q!Wa{vf5T47U#~PPA@2 )b@nx%v.v3' );
define( 'LOGGED_IN_KEY',    'T//?|7X-i9(jEhSEs_x8r(L_<wgT68{3jEi<e>xoWTwj;CHVPT la&=99HeM2fl:' );
define( 'NONCE_KEY',        ']6|h=k&WEmY7znHl.cSuBhwUQHx*GEcF+A4 hbUa=:WOs=lI1aJ&|gQW2gzF9}Nq' );
define( 'AUTH_SALT',        '?fta$^D}]hjqpdtvkdUBq},ITa/Ng:5k[-qh-Bv%dK3E9B:xlrK.wp{~<n>,wH&(' );
define( 'SECURE_AUTH_SALT', 'MSO@bj/n$cQJyO54a&C*v[fQ.A<|yP&o^%%1T,HZ&=C+{A!8UvmP*I|g]^3{9z#Z' );
define( 'LOGGED_IN_SALT',   'CCh6ED=]D>7Q@J7]&BQuCB]_t-B:G+{!DsCVm@ldf< ZT_99Gyd=XfAW~@9Zcl?C' );
define( 'NONCE_SALT',       '}&~RYPg#DO[YriJDwU-ulrJ8053m~bqI wsR[hPKsV2PM/-VZoX5cG$hQM+ma%oA' );

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
