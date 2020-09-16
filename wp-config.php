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
define( 'DB_NAME', 'template3' );

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J6,@ma?wD+#2=xudr{]~qrlm$vY/qFwfFavUk;P1hq9De-:0uD$H>OQ+Z8R{=xCk' );
define( 'SECURE_AUTH_KEY',  '/3(k?*Ht%O7:zg;zib_oxUW7@USdm.<~ g0T|][ nr?pE 6YMwj2eqRb,OM:4>o4' );
define( 'LOGGED_IN_KEY',    'Gw+n-ld}jmdk7~5{<~.]Ks$]bCB5moc_ .(2+tkMCY/h;6o^8Czo%EC;4Rg@r?)a' );
define( 'NONCE_KEY',        '/1ze]RFA5bR|uK.y[PzL2] 5S-o*:%WNE=2?}On^e,9k=hdp^UeYY#Brjg-,zio|' );
define( 'AUTH_SALT',        'aA|:o-J;qm}+Onj4c(~?.`wi=E^$gZWj,-0yv9zUu*ePwA!5R!gfDC~Oh=NsT?C[' );
define( 'SECURE_AUTH_SALT', 'LH8T_D{]d3GAwPH/l~}.5ZcZ.dB)5hZbjkUz){IPc<l&Ot*Rq,Bw(S@P{-ay[7S]' );
define( 'LOGGED_IN_SALT',   '_g]Ml68H!=Xu4Z[h)77d]jeaD|RyHAr<^`P?:3SAf~r3S-tBs$zgl2g[X9uz}w!I' );
define( 'NONCE_SALT',       'CP&t}8,D(Q#2P`~%#PES!J{l&p^GR}^<K8%3kPgs$UR1na>5XPY<,U[;PMsxr,9O' );

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
