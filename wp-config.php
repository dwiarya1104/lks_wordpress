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
define( 'DB_NAME', 'lks_web' );

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
define( 'AUTH_KEY',         'bPLW^YIIe&KMi=AH:[DX,Q>LEb3xBR{Vj:S,|8B=WL;%dmSkaRB``r) t93Qh_UN' );
define( 'SECURE_AUTH_KEY',  'i{B2f{jJxW5J{y9.1qF~!.A#5OMpMzO.QaLmVj}<P&D!z~LUe]gWn&maR]-Z8u{6' );
define( 'LOGGED_IN_KEY',    'D6$!7p:cu.LQAK]nIN5]fO#P`ml#`]jvT]Pgx!fOqesQNAg/pL[N{ZPNjzqBj.h#' );
define( 'NONCE_KEY',        '<,T}csMB|5*<SB,]->VUu>6&J/wxjSbf*|gKpKa`heg2Tc92 UTjctO*k.U&]FQK' );
define( 'AUTH_SALT',        '1#?I-foy$?d2z[x^.8$O3BDX,V4Z>BqNZJFa%95#3`-dt=?dP}MD*{:9>oGsM8Kg' );
define( 'SECURE_AUTH_SALT', ',N)/*6x2)$AR@&RyI>xim0L@9j)s=N$L?9IJ!qokUt8uH^P9,dUij<mvjCYm)EhT' );
define( 'LOGGED_IN_SALT',   'X=oH!--s#>Ijwq_F;=8Bj8y^DhS_D-s=$J,1~0jH.o5unzM_5+,PSX{uQ-R/k[(4' );
define( 'NONCE_SALT',       'mNtFxZ*t,$HbB+`g:iN`8l={.ua/X%axye8g aT+^~dXZdFEy][,BFM8<uis 6YB' );

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
