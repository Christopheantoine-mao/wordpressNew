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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         '}/?:||<g+M!:!gI1(fSDh`$qDb{s`rc_k?l{8k:,uCYm>d^2uYFsrp7EN}f7(v[,' );
define( 'SECURE_AUTH_KEY',  '-@N82xz.Ns<0YE^/3dj:=~sVs}gxgev*A)Ti rUe6Y,FxEki8w,Ns;S,a*x3IqEH' );
define( 'LOGGED_IN_KEY',    'ss09L`* ItU?L8ef.DRQ{fm;asMX6CRnc}-xKSegS>#AjZ)fEt`{L#i_Z-lEH9gU' );
define( 'NONCE_KEY',        ',8e=uJ|HQ<M(uZq|S[y8DzPR)f1sEa=IS{y6w0@Bg~tly_P%oJ>|Bm9%(:cF!m[w' );
define( 'AUTH_SALT',        'a3``3}KAC`v{|krd^pS#!i<fbZc<4B-$k7Sk#rG`y.e7nQ,!R3A40|O^!T7$x^>/' );
define( 'SECURE_AUTH_SALT', 'wS,0J #j ;f} ~Vr.<j|{,Z9Okhf||Z_`l>?jEcdTAmdb.}X5024x00}nlU-ITW~' );
define( 'LOGGED_IN_SALT',   'wk?gX4{K[lR#jyTO@tz=$p~;sY?o|=yk[|/df6&C{^7v<DZxW{z?:3TU_xuKo/9D' );
define( 'NONCE_SALT',       '.-?;RL;NSgDm}K9xMV(=.|.NO1[s|Ov)c!$d~HR]OfUM >: 7bB@z}f5dgti1c@l' );

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
