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
define( 'DB_NAME', 'snapnest_2021' );

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
define( 'AUTH_KEY',         '|I+W+aKi54=Sfun2XMj!A)UFV,f]!=(t53E@Ma7k,Zkq}(<mKPW8oz!D%1:b4i8H' );
define( 'SECURE_AUTH_KEY',  'xBmi.$:^8!qR+X7@hS:*keS>{N9$(ipKKRtmsGqWP7j_`at{g:513-B@I<EeOIRr' );
define( 'LOGGED_IN_KEY',    'y3$!,xJp6.EvioEmB^#[t?rq.B,:J!e(1t[C`&*5^OcUrTPmYH4UYchz<18WlXsJ' );
define( 'NONCE_KEY',        '@gs+oZ#o/yvs@1VW.KVcA:l|49~f#ErRtR_%nas=F(/?}}w^ Ws+[ZXsY!,Y=o0*' );
define( 'AUTH_SALT',        'D(|K,FGL&vVV|EV2~,-arkz>KF_BH&nNhByjZ;i(e6&[8=&%i/= /U~vK<D8:)^ ' );
define( 'SECURE_AUTH_SALT', 'Tj^m8#/&wAMNtEI0~H,i)HfBL4}* 59ve`&b03CBq9MAtlFG1$ICyQZeaDeCa)D-' );
define( 'LOGGED_IN_SALT',   '0{_F2uM2ivwrNm&-jLD53?H[z3K& AGTwF w<M3lu|)/(]CxK k]hYF55P.vq*#;' );
define( 'NONCE_SALT',       ']qVyjgQ6l_P5s_:5J:d0r~,K,.<r4}@#m)#;>0gI>UtUdTk(CGA!q4<lqVWFDy2?' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

// define('WP_HOME', 'https://snapnestphotography.com');
// define('WP_SITEURL', 'https://snapnestphotography.com');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
