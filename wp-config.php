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
define( 'DB_NAME', 'db_blogchiase' );

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
define( 'AUTH_KEY',         '_zjSAB%sK8t}!{;`RG!k6;zM.[mp#5N,zoJ{T EGE}(Z~!L9Pff_5+h.15+$JkDP' );
define( 'SECURE_AUTH_KEY',  'z80jbrl/Ix0 /Wz[j,gia1Qr>0w)(+Wm~*#u|QbOwXu,u^Fpm:B<l>b$lx^q~*&q' );
define( 'LOGGED_IN_KEY',    'v*BopvUz+YN/Xc-{aooasMH>k#~7/Q<?,X(NaD$W2/6Ug*V^d ;/j=/Y9l.#lQ5h' );
define( 'NONCE_KEY',        ']@QybRc|<(R/*y[rq;ry+Rdeqd.Sb1,G}PZc/y}uW#xye5)Dw:WLQ&CPo1Anh_fb' );
define( 'AUTH_SALT',        '~-l{*3A43quQNvebzPan0hdP>mt+Fhf4m_,BL^{iWb+n#4+%D0@*0e^bq,^zS8YK' );
define( 'SECURE_AUTH_SALT', 'admF?T^{I<|)_5AiYW8tnc{FzBCg{W]U,t~pBIP]Q%lk&k ;RPBVslD=FZ.92dPd' );
define( 'LOGGED_IN_SALT',   'O3/6AB=`EBOzu$pbh6a}7D(Vw%G~qlhv<7TGHhd0|GIgYkADr4lOSZ>QdfX6s]&a' );
define( 'NONCE_SALT',       'mIS@p|z,ag2()_8L[]y%&oC[&W0C IuIAk!*fXi0y^t4bG^X8$Bml?ob-FKfM`KW' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tb_';

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
