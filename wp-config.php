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
define( 'DB_NAME', 'wp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         '7+hf&sAOk/Fx{(#qCo(oE%$~_lBPz<?}5W &=@vt=QKw|iMjiNkt,+w!yPOKDP]0' );
define( 'SECURE_AUTH_KEY',  '<Bb314Q7KPas.H-|6G%2LB>PVWL!(KwLK^@z42~H_f***iT[U7=Pe$KuMwlT A{b' );
define( 'LOGGED_IN_KEY',    'aRq*L+,(#U~i;S9)1sh#Z|P8-#NiQ.a?m8i~0O1p2%.qN8^m3]eXMI(`jeC9q23)' );
define( 'NONCE_KEY',        '_fu4Jlj7d:P)?$},WQJR&A nf]Hdll3FXAFL`bJ,4W+i$m:8be;Z[3*,yXzv`+,;' );
define( 'AUTH_SALT',        ',oZ@`}M{~G#|hIC;U|y$q!Kp:U4FYL|?-?te!AMuLqYMGC/A];Ns1.+_fi/G ^5W' );
define( 'SECURE_AUTH_SALT', 'xz$Tv:|>MIiSoRo@V9j;BmEfn1/XBJ-=ph9vfaL+$J7oL8f1zA;PEe*$lF:.m2>b' );
define( 'LOGGED_IN_SALT',   'uwmVL;_&#LGp;a%&#nx z8^Xc{<em)OQXoGlYF6BrJzIYgP0<0aAC1pk&!9l#P(=' );
define( 'NONCE_SALT',       '.^FL`nSk}{Df)sCA<7aou{mWA!ni!T1*nF6b:WgX-Hzo/Vw{0kgwHyJV]%xP2r@N' );

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
