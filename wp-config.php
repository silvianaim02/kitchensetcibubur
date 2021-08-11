<?php
//define(‘FS_METHOD’ , ‘direct’);
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
define( 'DB_NAME', 'website' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7@0|ooPA}n9xZ_=6ZFKS?,V7#/[t0-6N,EL `MH>.QZ(0?GcOTX9A[u=oXl(<Vl?' );
define( 'SECURE_AUTH_KEY',  'J8N!lD}LgN2!!tW]{k?+}J4{@Zd}7hMnJ1Nd!VD+_KcWEu;7Kpb8/SeUv,ULm(zM' );
define( 'LOGGED_IN_KEY',    '4=sT88RVxSe FZWLB wLwi9x`U8EL[<+g*977&`R4xokHNumoS0vAr9^+ #qX]&?' );
define( 'NONCE_KEY',        '~t{5K6d ]t)G`-XL8BGGGK`4n+Rm{&#?@J1]bwU~O{9)7YWkmXCV)D,y16K6k5T&' );
define( 'AUTH_SALT',        '0y/HdRf-1ig+r!>H]*@w9J.|0&P[/b|r)4%2UF6J:})4.|6LXg#Z|_$DtF1nAvb<' );
define( 'SECURE_AUTH_SALT', 'A;B2N>e[CZS=dst?fo2YULYjsTR]~tnP3h IRpbM+qA8(Bt&G;oAO|N?{yP1X8CQ' );
define( 'LOGGED_IN_SALT',   'qkSL96Y#xkzoy;,g?=-<`X[a^j&Qw|bkq]WPBzs9CJZ{@*O-]>HEh<?wn3&tMR2~' );
define( 'NONCE_SALT',       'QFcBW&7$jh:Pd|:CGJoaSvU1-0Xt^*,cgKK&>9bi>~F&W[^ZSY.vBq4_u{?=8g4+' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
