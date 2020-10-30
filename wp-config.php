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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'AB6,yVGYD&2oB Gvd,z)M8C&R3MPrr5M]S Xe+=GLCpLI-24JmQ1A`2KlI=0XM;O' );
define( 'SECURE_AUTH_KEY',  '4!RN)tg@^xD)T^=_1Jn$M8U 7[]@> c2=Mhn}m;,N;+0>*?H/Z<#XX,d(#Vt>;wZ' );
define( 'LOGGED_IN_KEY',    'zv3tfFPGJ-$CX#WNjCQY%y}Y)?3Ja~ywYXcPmdXd_&1A ;Hcn:5qfaAhUi}$WU[X' );
define( 'NONCE_KEY',        'F]vM _Pg07$~z`h-&S[VEwVNq@EAuKzm88SKeEs!(>uYn@LTfao/g@Fx|qYsiPO>' );
define( 'AUTH_SALT',        '?%/wg/Hv&x_a9:^KXLJG.3KpQ1WyQgl5fu S&~]VaFU)@kJ~hySdoIJoK4CjAXHR' );
define( 'SECURE_AUTH_SALT', '{XYC>iWEzI>Cd=AA}hR85C=]}<wleGH1_4*r/KG{d!i[dO0f_65K5A0gqh;;s`E:' );
define( 'LOGGED_IN_SALT',   'uFmkm[owo7N`Fmb]wt!UxFY-65@s[&DpkB$+g4:*ar,T*mGNnyb$neRb:wt9W:pk' );
define( 'NONCE_SALT',       ']p# qUFG+a;^i1@E-.z@=K<ZWha174&zsNAqtp~ a<FA;BY.aU)#0=#[|0N4z/+`' );

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
