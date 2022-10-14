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
define( 'DB_NAME', 'th1410' );

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
define( 'AUTH_KEY',         '1[o}t!jm,Fs,Mf*%qc09)umPg+apqTSTiNrXE9YQoC)1y3OWFRx/SJ[f[NE!GE^>' );
define( 'SECURE_AUTH_KEY',  '7}gg~VC@VVl>=g(EfOiowl,vtD_U6Oj}`l_@jUq&RLaOS< S9SKG9*|(6C<],R%2' );
define( 'LOGGED_IN_KEY',    'T/KtU0_GyxI.Op!@?R+Nc&%yFqti`SIaH0?CiI};e5f@{KVF6d$y@7Wm:ILR]?JO' );
define( 'NONCE_KEY',        'HYUl!sP)j~RTOV)[:v3&+68-)PX! c&uJBz!5Cu7w8#Ao`[X?+*S)QV[ TgKu8xz' );
define( 'AUTH_SALT',        '<9kS6B&O[s{#~gW+0rH_%/mO27!94uRV08%y$)U`F-R~1m+DdY^tZJ(SbI`{^BL3' );
define( 'SECURE_AUTH_SALT', '8WFb0Z%LuXD_1T@.!y`u~Jr-z7`p]f/& 5Cg}?%sj^LGx1~7~.NsR^d{]r5W-<M ' );
define( 'LOGGED_IN_SALT',   'jfn]qsVO2N4)G&WxL4>|1:$o^#|mUY9.AVY(&:VL`ri8G48!%qb7*RYtS.h7Qa:f' );
define( 'NONCE_SALT',       'Ih@ Y;>_]>Y*[8:+iBdaO%irnuP2%2},UNwnlAj(NV;C4sfwlwl&yh7~vd-I7Z=&' );

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

define( 'MULTISITE', true );
define( 'SUBDOMAIN_INSTALL', false );
define( 'DOMAIN_CURRENT_SITE', 'localhost' );
define( 'PATH_CURRENT_SITE', '/TH14-10/' );
define( 'SITE_ID_CURRENT_SITE', 1 );
define( 'BLOG_ID_CURRENT_SITE', 1 );

/* That's all, stop editing! Happy publishing. */

/* Multisite */ 

define( 'WP_ALLOW_MULTISITE', true );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
