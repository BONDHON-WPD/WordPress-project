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
define( 'DB_NAME', 'zelle' );

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
define( 'AUTH_KEY',         'Hf4u`Pf>eR:)/UrIqCSyj]ApvNtQ{,Ktge<8q5SA}={7f5vRpO%N@zJ{.kfM[O;7' );
define( 'SECURE_AUTH_KEY',  'B: ;Z3YvP0mhs_Y#WK&2}ADh{AE+o9<TQ%VX.yS8[$AAGEenFd23)O*`u%>s]L(p' );
define( 'LOGGED_IN_KEY',    ']tQ-7m_(%&_X*S.xcJDra6B2`.8[,H# E,Wt34[>y..A6rd90%`QFmqUU=en~[*U' );
define( 'NONCE_KEY',        'MK-vb=39Eh^0f<}W!^$Ky0g?7]sy5e0h80IhsJ*0oF].=^rQwd$H$Pit`J sSl3O' );
define( 'AUTH_SALT',        '8N)x>uki~Ie4@||[q=8&SkvJO@K#d`UX`I6L9i-xTZ pLGB]_ze1Vh|.1tpxw[x4' );
define( 'SECURE_AUTH_SALT', '>GgXB_M|EnH]4n`=jc^`@)@b.0JA72)rJ$Hb]qvyp*E-P~7jbiud,55(r?5!Ho)e' );
define( 'LOGGED_IN_SALT',   '|TI`7]#Kq_ldIL;dDP9:<A}]w>]^:IOccm>g<)PNWgg=ucE[Z3M`_hP_<0N_PtvH' );
define( 'NONCE_SALT',       '?_;ej^0r#b*GILmVWo|cIp,W|=6^}(5uZOY*3D9D MN4>*X2=&8@%jA*=} Q}_kV' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'zl_';

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
