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
define( 'DB_NAME', 'wordpressdb' );

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
define( 'AUTH_KEY',         ')pzoBG7;- Aio,7fg&P*]o{d$N:|r.:(9KzwK8Ei1ZPTfLPwadpQZ0<~e`X5)X]^' );
define( 'SECURE_AUTH_KEY',  '_ 3}%#Ibaou0&n`6NKD/)_NsZ;Eq+Ql9%[]27EDk2*AUNh}SR/F5:+-!B`D>3jv7' );
define( 'LOGGED_IN_KEY',    'vyb^K5N1Tvne!8?0Np_EC=#d+/Qfx|%DM666*w9[-zmnbnm9s+7KVaq^[/aKUju[' );
define( 'NONCE_KEY',        'Ab:Y_vTSKgN0Pa|RZM~uLp;^=~-?Mc+v(8Q@nK}l)A4UWMEeyb ,U$:3uW3H|y`D' );
define( 'AUTH_SALT',        'rDDQ=!,/8r_JUme$H+#6zkb:Kj5}:)Y23//-L4J%hUDAHAH(F(%|s=HrPt uqeXG' );
define( 'SECURE_AUTH_SALT', 't{Q{J89UGDWs&n&,]Q]ML8Bqju!|K]BB|V0+hmBN9LT6q6*.;[2Ol&:TQ(ogd~w?' );
define( 'LOGGED_IN_SALT',   'Gg9L1=4XC|JQ*~D)F.*_OP`jO(DXOE*3CrjO#tsAOB8L[HMp51HU/KPF?r(uyW.I' );
define( 'NONCE_SALT',       '|-,%PVckn?}@SI:uQb}S}HAFUO{%@Xk.252BZkH3i:97p*<v~9bZ{VzfMG|0KX|z' );

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
