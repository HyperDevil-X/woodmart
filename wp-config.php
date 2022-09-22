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
define( 'DB_NAME', 'woodmart' );

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
define( 'AUTH_KEY',         'XWrY4r}J#o0[4nKzG}x%UlLKHL?|LU%}t<+Ys4]f,R{9#)DW]SL@IRH5EGmdt@(L' );
define( 'SECURE_AUTH_KEY',  'Ga~H^pNH!VM(XjlM<Zx8(0M)f0rop:jLtJ0/4*6Vvi^PG.hS)=1}(#aNbV/.sRUL' );
define( 'LOGGED_IN_KEY',    'Uzcsr5|)-gafF4c W_h}b{Bo?0`X5,7KNWx!t?o`prf|m@zc9)mE2M.(glE=65+,' );
define( 'NONCE_KEY',        'gp%vs9`M.ljq-}$Be#WaAj1d %?lm|GdzKh-a0aR)QMHLOJEPlE+7TwvK~(+k:te' );
define( 'AUTH_SALT',        'p8UCNf0TX:`H@OT88>Y1-p$6@9Ghu^e)_^Gw-.{e$T3jNj >,~NN?n!EJI(99H;4' );
define( 'SECURE_AUTH_SALT', '3M(-@1)Qh!Fq6NoN^;z=i:!Aa,e0@3e0Z4(rN{D2OP:p% MvM-T$VCJxzp#m}~;(' );
define( 'LOGGED_IN_SALT',   '@7aRDA8VO9J/`Mlrkmi6)J`=Z]3fEn~I.&$kwET[,kXnq9k!D53]3VQZOnxP*,)*' );
define( 'NONCE_SALT',       '1^WC)[b E6r3;GQG%-ZdJw=N=9-5|]Q(DEVK72V&aBm|_`AxIE=d:}$^WiS{VU+,' );

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
