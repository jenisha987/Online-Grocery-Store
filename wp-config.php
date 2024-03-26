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
define( 'DB_NAME', 'grocerry' );

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
define( 'AUTH_KEY',         'WX$Jq+>+v.Nqlw=bt!e78~J7g2R +4F&4PM-.P`o[gCwX}#[ jtBO& <UzO2m9Xx' );
define( 'SECURE_AUTH_KEY',  'u+@3.AP8)cFngWCv6RyMCy[(8X-P%J%agNXQ|i}cpG#Tm3QZA6Go7(P*vn}7ge>S' );
define( 'LOGGED_IN_KEY',    '_Fjw;<xW57&`I8>HF~Sy)cj?DQOt.BE-BQ]TgJr>e=z3#5xV^F)7s<uif8&hL3&8' );
define( 'NONCE_KEY',        'R<#]+*(6n/0NtS8?,`^hP!PpMu=2Xh=IciiL.BnyW5KgYu<W^y>SkA>3tA&d<${F' );
define( 'AUTH_SALT',        '^$s(<%r<gBMz$oNwR/X3yCd|6(},%dS)%kzcx$E*Jg4~(3Jx3*}eAKgV`| JDlrS' );
define( 'SECURE_AUTH_SALT', '6CKs+xOS1Vv;6}PZ|181P!VZ#uqNt@rqvZHD1.F.>%G9(>#UB!t,@wNTKR_|Rhl-' );
define( 'LOGGED_IN_SALT',   'AUqOv^%2uEO:&nqhE{+9+<)j-a{jP1Nxr=bf<9r-a8c5*&Zs[q__YC2hO^0@eV{c' );
define( 'NONCE_SALT',       '-m@llMIADeZ: O$^ic~$O-gNLi^sT{zRI&|P9]{TajdZSPX5w|3lo<*N3r=C/X|A' );

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
