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
define( 'DB_NAME', 'wepracticeme' );

/** Database username */
define( 'DB_USER', 'root' );
define('DISALLOW_FILE_EDIT', true);

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define( 'AUTH_KEY',         'cat@#>0F&(a~!UyC-D7M%6|cl]qu_@&OfN/edJyRau#Wjbm.|>mU$2.[ j|K$ dz' );
define( 'SECURE_AUTH_KEY',  'C}U6OG8;aFn(CI4x(gLiz.s{7:Tk,KJ<?_y?{(YjV!g4WeMM?rN|AqwPZTHx{m*`' );
define( 'LOGGED_IN_KEY',    'fY}f|cC#,Tf{5Ii?%uRJ$[yBs$&#[M`koIg/_o~)xU]gg!x{i0Hxi~a:5_5e>U8g' );
define( 'NONCE_KEY',        'rE=R[&1L8N*+f..6erwKtyZ6JjmvA|`^ErYS]}+mw7mSVzeyH?Nyy;zk*dow:d1r' );
define( 'AUTH_SALT',        't4KGIKy$#v.86}f2M,dMieej%)+l?ID!gZN#j|-5(J=LE:x>MBM]gPz>xx]s6RrM' );
define( 'SECURE_AUTH_SALT', '%Z{>>?p3]a.VlbnTDq2%rCm~ET3o=O<L[VPJ_gg>V(|#Xghk)D?yA7VIh{ldZ1LM' );
define( 'LOGGED_IN_SALT',   'U].:X~X}D7hB(*:3xq5[&-hyFoV4_3RBx YW<]x)fkX~:cX.C^6!i;CJX-7qjZup' );
define( 'NONCE_SALT',       'D*gDq1 }cjml6t%s=,+)tHlP4M%(d&pLf=^z@I,*)ls+aa=JzsvkBpTytWdh2DtE' );

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
