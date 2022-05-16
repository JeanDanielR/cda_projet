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
define( 'DB_NAME', 'cda_projet' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'End^3p}DyKku?TI1Kb{JI?4Bn@Wr,79$*Jv]UO,6]+JC*3qaDf>3IDPohYsaZMdQ' );
define( 'SECURE_AUTH_KEY',  '5`nqNR(l|4_PTUKm!<-!qrEczR{uXA#aFnn{e8w6(U( id2[l_eHJ9uS<hX.P@Kr' );
define( 'LOGGED_IN_KEY',    'QmgK]{3?xM6:;twst0vR~| 34k1c?aHR/DdWE[HMkKSt^@is0RnrlvycYHb]oVz$' );
define( 'NONCE_KEY',        'O$>GdqCW29D7~VP4l#4RKALtLm uQ9F_Y#NFQ*;XfvTg>P@H]T):O;~EDJ*^%vh,' );
define( 'AUTH_SALT',        '~O@v|3i/VU+P,)6>7vHROTk@#yR`i++XylyQLHtnqgliym73Sy3RAxAg6jDiXPnA' );
define( 'SECURE_AUTH_SALT', ')}V2SR<C1$MsM^)0Fsn4id`wN}J9Kem[Ju?P*<v=@lGpb&a3=nr7vvW7rFb/W$RY' );
define( 'LOGGED_IN_SALT',   ';pM!WF#GzRg<zLN`S6h(;4q.7LOs0?{~syv^Xr*W>M6I9-[l:@O_pb=e5@`F6:rj' );
define( 'NONCE_SALT',       '<42W%JVc~,ARM8/m{X,uZYEv;5h6!<YZ6-8-nqJ/$.K|AFTKjQ}`vD~E]<V6}(nU' );

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
