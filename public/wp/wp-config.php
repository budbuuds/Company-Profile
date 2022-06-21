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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ptwellwi_ak3uwellwinnusantara' );

/** MySQL database username */
define( 'DB_USER', 'ptwellwi' );

/** MySQL database password */
define( 'DB_PASSWORD', '5TWu)8*M6git5R' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'GeKz)|_U=(>(uPS.yFS&k=0AdPnQ:|-%tan=5QjX!~]rY>-odJUKdSL+)-tgiISZ' );
define( 'SECURE_AUTH_KEY',  'mv>X+~p~9LTt?nkdhm6f[ywpirLDDae:p-~h,?;F|uubrZvM2j6d-[PUA9ogDTb&' );
define( 'LOGGED_IN_KEY',    'o*+Ikc)@g1K)7_YCO#l)KNx&LTTSsWkgIK[<u )e<_H] e;6aK.v#e,;Lr&2,#&j' );
define( 'NONCE_KEY',        '>5<Z!}BJPD/:jcB<tG/Q B695}4J;O@;?Re#bC3@x@UH2X9>`h yA(G$-:R~Mp#:' );
define( 'AUTH_SALT',        '^iOib{uOGXcZ&<$PsIc-b?_PJqPvGLR%7)EsdshA?8i9=Z+Ilt<xoH6.>}3|b9mW' );
define( 'SECURE_AUTH_SALT', 'kwvaV~y[1Zjx?/C2>BG0XL)cSQmx0RlY`?ZHo6abk(y{<3%v+f=RV<{dd~`Cfp+)' );
define( 'LOGGED_IN_SALT',   'fjo;Q^p|+A}^y >QGny.qe{2r4E8~4+EY@KZ+@e.qT59ZE[c >%Ej6d,Un&9Q5br' );
define( 'NONCE_SALT',       'ZkpVF_E_$u2Z}JbyZ*Zx-Y3w,*q[6}S[~aZca{bB`R]i3a@AL(d`uxgC7gt6S1&s' );

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
