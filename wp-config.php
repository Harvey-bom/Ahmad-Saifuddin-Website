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
define( 'DB_NAME', 'udin_wordpress' );

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
define( 'AUTH_KEY',         'Bd!2Z%9^](q|mVsXN>}tLkU]YUFw!nl<:,]n!mcWQ|X;eTPgfqR|zj$%hCw*II]&' );
define( 'SECURE_AUTH_KEY',  'T<09GKRW46Q;LI`1q=ge}i%JTY[yUIncDwx`tVF5wrb3UT^g.{)}LJ^DSP08u8f/' );
define( 'LOGGED_IN_KEY',    'wY3pgQ|& I|&xu&Lg%9{(@y8]1|n}vMkMd-j!tGn2erx`%,F]]%/NP{n5+]+yIEq' );
define( 'NONCE_KEY',        'A$*5K<J_LF+O?W%<WAl0){K2 Hzy.NTSi[%E-aXX.:g>PK-5sTVU#E@#~vCIxJ@Z' );
define( 'AUTH_SALT',        ')S4CV7e&._u9sjv&hTB;j:$}s2a*Sw5yaG.z5B/{{P.C`U~Vz)or]^EF8VJK=E`m' );
define( 'SECURE_AUTH_SALT', '0Jz5e{f7T<&XrC3dsGb}rMHydJ;zWe9eBSXU8x.,<M06[-TJD>GP|)dAX.>b*;zf' );
define( 'LOGGED_IN_SALT',   'ju:%5lt4Lsu<j)Onom>;*UhzW?IRz[^74NS#We7?ZVI+.`ptpKz4BmX_`&?1=XBP' );
define( 'NONCE_SALT',       '/.U`>>~-FizQK%x}w#QZhIAgjJ@u=}H1?Mb88/J>y+cR$3C3QY,2m6mnhAlI&QFo' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
