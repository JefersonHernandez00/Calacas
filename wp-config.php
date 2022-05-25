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
define( 'DB_NAME', 'calacas' );

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
define( 'AUTH_KEY',         'Vjhay3a#ws_tX~Vuo8o8TVIuc~l%tU;ZrDku`dOP5Wjp--YjXomxM^`@+Oh[9DP|' );
define( 'SECURE_AUTH_KEY',  'D<ZK$<S;*^ksnx5t[$Q= 3F#u1RHj`a&lb7FR:-g_qzd?]mm0]-zi6c*c2;i%74o' );
define( 'LOGGED_IN_KEY',    'pvbj/ |VexYzJMSwv,-?`@v,+7LfqCT<E;*~6%{-D~X5y;{=:3hi9fv/1#i01mQs' );
define( 'NONCE_KEY',        'Q5+v}u>a)tF#B)VZsa0f1_V*%URNL]rHdl>lB|@H7&:>4zEIPiWr%:F!b{4e!5#@' );
define( 'AUTH_SALT',        'xvf#oXod~hfZtq;)P!>.v`zgP+ZnGG,Klz.1_kyE3Y<yH,]poY2a]1bfx@nw#o,5' );
define( 'SECURE_AUTH_SALT', 'T^Ub9XzYu[s5 S><AiFOzq|j3eZ7^;> 5qb4C[Nt^7,c=pU6`B1uTI^IQ*TXSL[.' );
define( 'LOGGED_IN_SALT',   '#:uj&JJ?YRNNiy=IqvW>Rc}g[FOgmJeU XG+g>9cK$|ep=GN#d{D?_<3:G$_,jvN' );
define( 'NONCE_SALT',       'OTk63Wgtb[0EN;WB[4%B]h|U^@52_L@3WMnIWCz/L;?:7SsH}N8WozqZ/mI^$:9I' );

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
