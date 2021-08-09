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
define( 'DB_NAME', 'adel' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'ck;KiPOS`H}(:SsC4HWSK|5[KAin%MDT^O:.;Sdy`#}OfKlyq}GHMny(qVk`-rwn' );
define( 'SECURE_AUTH_KEY',  '3xtRr{AJ[B23<_)`wc;w%@&cHc.^{l-B(hO`,zB}7f}zFyQ_ Ima $.P 6K.Nb8@' );
define( 'LOGGED_IN_KEY',    'I|LLyLobni[DmQ^^*zINDEZ>`G<zi:GI{[$M ^ZS^{m7@y_yOcCYr#,C_m1h+t0%' );
define( 'NONCE_KEY',        '&oRL(IR}@WQ4){><+KQq*#[ua;sx;0G3jL&.U2UjW,)y+QI!@N|PMqZz0.e:?LZ|' );
define( 'AUTH_SALT',        'tU)cv|L^El2Cba6X#R^Iz !cVETBR_Q9C<[n(wI(eBgi@|_@QK.$[=e io0gH?%V' );
define( 'SECURE_AUTH_SALT', 'WTjbza<I!Ul~uwdJ;cxkl?W{8rLN5s)Q|CZek5FG|bp8gK.RJ~v=(y5oWp$c1n[s' );
define( 'LOGGED_IN_SALT',   '/x%eqK_$oxK<3&$8/g!,q?Gk*(hUd<<}KWj[qB/]]dmZBxgI,KL4OP! wS]gcg$}' );
define( 'NONCE_SALT',       '0LmCPt?iz]dGev%S~Bm2j+q^0;H3TB|m~J3^2m(JiHiO1t5_9ggXl+X-;N(ssm&%' );

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
