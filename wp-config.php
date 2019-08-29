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
 * @link https://codex.wordpress.org/Editing_wp-config.php
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
define( 'AUTH_KEY',         'n3[2wOlCUK285BF(:ui.D.xLi)qC?VCa*S{?F;?.mmp,d^@xdylu0uOlJGnvIL`%' );
define( 'SECURE_AUTH_KEY',  'C)K!Or-do.#?$Y%- Rl(X$@z:%X#/Xp22LT1Ovy+KAV~|<<TB{D/D99e8>%ejzY2' );
define( 'LOGGED_IN_KEY',    'b]QGnyq:NsnW6W8c~D[Tu0,G62wGf5e{XWb#jR: 0<G(AVoTUvrk`:#}:e`54ZQM' );
define( 'NONCE_KEY',        '?KmLg627L?RXS=Qe`$}B +m_%%_orieB/$H>n*zM+$ozdhxy=K_#wKzm=](h?^C>' );
define( 'AUTH_SALT',        'jj[CkH44QoA@PGp:o{x}8T[|})8W2Hvq-nG~^[7ULX9`)BM~fo.uRWdJDDj8`k&^' );
define( 'SECURE_AUTH_SALT', 'w|1^hami^`` Hks9%q!L2jM*gBhk<IBQwei6V,vd<xW?U PKvA)7c|@;f`E$.{cn' );
define( 'LOGGED_IN_SALT',   'H0j<A9<.c@ KyHOQxb?~hBGY=<:HZ2)F2)zV>CgbHA}6f>+t+SDs (&s={>T`Ne]' );
define( 'NONCE_SALT',       'jh1b3595]A``wr-ct_Q>hy[1I%fkhAIodcJzC= vn?.pW|2]xP/P)-gxm&o$40pl' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
