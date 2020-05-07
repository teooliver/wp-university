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
define( 'DB_NAME', 'wordpress_tut' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'tfjhT<_;u#I0my(KBmQRIX24{P]4!d}a_8&+RKw:#[<*_FoC&n:Hk]SVG*J^a4)f' );
define( 'SECURE_AUTH_KEY',  'SQil?U2Mkj8X>e}_+%]vQ|J|4=s;P7Sy;kQm+i, Lpy7ki[)yx~i32k4@0((yBX2' );
define( 'LOGGED_IN_KEY',    '`aDW|D%I4Igol7:n^F-5qriL/U04Xma;X|=$-cZpmYz@oJ;$#iX6J{V6`vR4hz7<' );
define( 'NONCE_KEY',        '6#h[%4_)F$`~8fi>7Lf(KPc|()^1 H2uY5ipNv>2x g-0j=l7V8C}H|{p8U*WW=~' );
define( 'AUTH_SALT',        '9U-eg4?8arV(*_4x]vhTS2;unTC{M%I86J:O}W/tM^kda`.Z~r#V3S5$/i4lk2>X' );
define( 'SECURE_AUTH_SALT', 'HgOr}=kqOcc[8/QD3sJ*d=6Xjiw<W{x5%2g&zudo=c_$ iMu!tEKs!Y4Ay~cwxvU' );
define( 'LOGGED_IN_SALT',   '*gRGR%M6(}5)rudj^3EZRzx6YFrF>fM~J(}0n%M_i@L=hQH~!|G1:7wo3CY/[kYt' );
define( 'NONCE_SALT',       'hX%KYg9J b+H- =nJ(:C.k~(.Ows9#*L[nXZ;q/L:63,3k~KN<=@&!OZnp>m_1]]' );

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
