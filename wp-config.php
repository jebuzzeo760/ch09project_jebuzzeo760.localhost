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
define( 'DB_NAME', 'ch9project' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'Buzz#99s' );

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
define( 'AUTH_KEY',         'f8zumt0c^V X~mN)c&2@2ss+)oYMO<}0cLo4tVAh=[[t6|;b(VpDQv$xRz9nwP[=' );
define( 'SECURE_AUTH_KEY',  ']LfO=,Yaki}fnm%;yf-GXc@ZleH[kdFx5=eG2~}B_T/Ess5W^3)YsdEM+stoHCsA' );
define( 'LOGGED_IN_KEY',    'ggt%,<,_sH(U(|d7YmWhcEM:QWnHVg<,2{yZhEDbuRr&8 C`ig?zMDXgR*W+v<k8' );
define( 'NONCE_KEY',        'hZ$Rrq:;1jxGjSoo?7gSaMZz1n-Ax`pqg.d:*|^]U<^EQ52X9VY>IKYeM]DZOn`-' );
define( 'AUTH_SALT',        'rnFXyqjG#n1:kG=%y<xcS{4k?~#O(ZFDgi%FtS>|?oeGY)wVS0yV*~(i3u_(G~b4' );
define( 'SECURE_AUTH_SALT', 'htMk$RXvO:`;HefcvLqL#C-+7=5qWW$BH?|`Ae{ejC$q&P <X/SJw}m2O./cM5vA' );
define( 'LOGGED_IN_SALT',   'KxMXYzL{0>E>PX&7L^ZiIej-uQPLWy&M~40%US.CWG6M6XJ Tj}N&K.H{Q2&S_q]' );
define( 'NONCE_SALT',       'XR8ocAaj]*) ^{PK#p#r.&0=*IDc$(Xd~<HBk]$&)nhM*=MA6y_ar@*:X2l43,@q' );

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
