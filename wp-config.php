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
define( 'AUTH_KEY',         'zv|ta^e0@g~GICavBwtIknLKP2:AZYNNJ_j+$Rs{|rU]HO@7(kJsxNY3@TcB{z4!' );
define( 'SECURE_AUTH_KEY',  'vsGZkdh<lU/CR/hCjGB)@Omrw1d#~0-PK5]j)4p!EVn3|KX{3R=C=l(+mi;Vvp$B' );
define( 'LOGGED_IN_KEY',    'n8`NL^&;%s24ArXyD[@Ohyd/GXCzllPxa.HF{hk=UyuIH>Wgf$8Wh,[717>.pZk-' );
define( 'NONCE_KEY',        ':U`%;81HS:F(s`3M]ZW7{*I<j0MKEe_PRX8x/iq+izUV8*cios33A0~HY`=dNU,a' );
define( 'AUTH_SALT',        'Tz2ro5|e.!@Z*i&W[=_?|`5g]su/y^m,r*z$#Go*D:Qrfl;G)p`:td*c:@2QCLuO' );
define( 'SECURE_AUTH_SALT', ' w[1(ukihGK41Lr=s,xD_pEFKlg0,,OLEKnFf8>Q?hV}XfN1`:|?*X&&QW+So1u9' );
define( 'LOGGED_IN_SALT',   'U^/R.<2JFn/G+gF;1rJ8cnHD^Hzm[NOTOcO7c5_8~H2&|PzxM)B:sC~s:kU=(5l7' );
define( 'NONCE_SALT',       '*w>E&{>wXu)|W~Gr55Q1v|CR/,,LA{^k#MXKerCF*nQ J(ZhtGim}WHzJJ<OBD`5' );

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
