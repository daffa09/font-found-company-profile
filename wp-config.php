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
define( 'DB_NAME', 'testing' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'bYv@)1`m2BWOKBSU=G$f=|o`,/QE</2O^`DZsa*,TSudv2x^*7~Flb49l%$` P]V' );
define( 'SECURE_AUTH_KEY',  ')r6Xqt_r8OJqQD6?^s9Ex1%=37oE_.pja<a@- w^&Prnf6nzL`tpUqiWt_/KVQN^' );
define( 'LOGGED_IN_KEY',    'is6R;f)uTaYO{^~FF8L^:;78!dIE8sDJ&.r/5Q!$;x-6azQ%K9=b<7NZzBs!tnDu' );
define( 'NONCE_KEY',        'Y#t)/c}K^W].tG#fn/10mwCtFfd%um$-X>(/;V&CS9O^%y,zj=[o[iu21D $ X@x' );
define( 'AUTH_SALT',        'ZOa06S<$ }kw!u5He?^Jfg}RaGTH2@`>jC<OG[VI$5.Fuleso.<k|>e[2W}U?yIT' );
define( 'SECURE_AUTH_SALT', 'euMtQg[+-1N&WOp(m&{msKL=]|KP`qJ h:K?PRE6E;-BjiN7th)e},Eg2)aPzK9[' );
define( 'LOGGED_IN_SALT',   '2pUkab&=qXBjH)9-%gr1jPS(;Gqt+N@K7V@u9XFp2pY4tKxP)+e{yz&q#*5XJmRl' );
define( 'NONCE_SALT',       'EIyq]Skd`;eMTTrpzI^NeR.*n)~r{%gG^gv|JMjm0&,TL:6&KNmG9g[b6FdN$[oc' );

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
