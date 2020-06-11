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
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'cxCCZF.j S<!`F)C_Zxk iQ Tl] yTTo&SX-M}^kXAt0&+Y(nZ/w1Y7HjUg6$s+8' );
define( 'SECURE_AUTH_KEY',  'QiH{We?;`=0lqb6;-l{S8ZLWI4{]Ul4.ri-?8y8g5{?Z+=;^1K!>XpR&|K,S8-{f');
define( 'LOGGED_IN_KEY',    'v8 &7V.NpCQ3Lseh@CC=7X(}Ni&-c+o/r2yLdo,].saw`:vPU?K|#Q3?s^lo?29l');
define( 'NONCE_KEY',         'Rx1OScT*$=tzEIi`|fm_|h8^(`F<5.<g*4SHAjdNu:ZZ)1o#@Fy-o</2<QO.8~Dg');
define( 'AUTH_SALT',        'MS8t&0umqM(4/Jl[xyz=|ro/%Vc-?z7Jcu,}uB+o4G.&vX,-F$QP ?M/^UW),ur&');
define( 'SECURE_AUTH_SALT', 'D^Dk*)0LGS-*4f07-l5!mr5Lh5x3Q$-t&rA|=Y.H|>+9S%doKF.Gf3f+2K_dc)34');
define( 'LOGGED_IN_SALT',    'p#<Qrt xKBnfIhf^c;BSabs(oaX:L}=Aj;?c~|T0OW+J}y4YSM&[Jp}=:cai_; t');
define( 'NONCE_SALT',       'ZFDcz8|[oMapj`M$pLj#xCGxrjGIqM{4l<[MBvUkK<ecxazk+E_Y6fqes|JMiQKP');

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
