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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'AtI}opRxOy1Hd!<dR4J~ry9a_H:Q9]Rx,KpA%AuvED8suv,E@<<>Zxo}uyWap|O9' );
define( 'SECURE_AUTH_KEY',  '^+1e7` 5}q^N:bT)%~X?n1dZ5<Zoq~4a^KPEID`m0RFa9=0=@]FIosG#`wp2Bn]#' );
define( 'LOGGED_IN_KEY',    '0]fQf$l3|6PEIO/uub4ONCN~|4^KoMd-Y_#Ag./o:8<b?y?4sPk}^}`$PPFF4&>n' );
define( 'NONCE_KEY',        'vD*:M# 8:aCK1KL|b55Q1PnHUo{jiR@]HYqq7H^X%1KRYCQ1Nz<J4uN@Zc(!Lj]>' );
define( 'AUTH_SALT',        '!R^l{:x.ur_PMh^ )t+s27nF c}HvW.c&0X</)!0[CtXlj@5?@wBIF$||7sK>$kQ' );
define( 'SECURE_AUTH_SALT', 'Ly^&-|Y7#<^{4_EHw29TF~z^c*,(izY]`MUQmVA>Y(#urO4|Vyg36SZo<L3W7G1z' );
define( 'LOGGED_IN_SALT',   'J=nMQJU>y414H;545Sr^bT;<8AqYBiG 9J|ifF|)L4H}$*uoML_6=U6w[}dU6dvY' );
define( 'NONCE_SALT',       'DgrN+Kv!/PK$lLeNIDw8xb>^J8w?p.^&Rj|V/tv@_VU]j^pGclY?)RF(xD(c7sP_' );

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
