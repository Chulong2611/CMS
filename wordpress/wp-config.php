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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '_m<zx3-=%$.pp=df(Y=#gYgz*[#$k^F/A!_Bd:%7U7TXW&K.}xeBR=rs?[6b7B.P' );
define( 'SECURE_AUTH_KEY',  'Iie0)^oUT1@W7Z?y[qq.EoA55R=spQ.u.froTj#+ tR_kmbbI<s|V8s&x90FHg?+' );
define( 'LOGGED_IN_KEY',    'xeG><*44a>6Y(:3rPF]p{e4~j&I2b=N#mpVPXG9pr~e!G-h1A(Si?u.746C6(AVt' );
define( 'NONCE_KEY',        'ItCIpy<BB[b9#L]2P?T*wI%vks/F^p9=n=GIi#0qf]/0T#3czq2V_zk9II|2&0Eb' );
define( 'AUTH_SALT',        '-v%_sM(_kI4}_6S==-<~`yTX}T~<$5V@d5%dEO>~,sz#1g)tT=?KqB M-nK,#.Lg' );
define( 'SECURE_AUTH_SALT', 'ty*R1Ots9wkXYOz$,)pfRWhjXj@F:^[gY9lbF{Wp:)dbmXp-ZW-#9Jj/92f)Q8wy' );
define( 'LOGGED_IN_SALT',   'W6SoC~LTO7@chcl&$At?IwT197k[Yl{cvs/2k@ZR&5N7@XKzlOEn_0v*G<;1IGX9' );
define( 'NONCE_SALT',       ',Yvd=~Y{|_Ofp={U>L*-W ^2paA.SuXD4!lW7BOpj:G--$zaMK~eM_p6J^]0DQEH' );

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
