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
define( 'DB_NAME', 'dbproyecto' );

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
define( 'AUTH_KEY',         'v^<(2Ybz]g1SJA2%50v&4?^S;PtP{eU1c?/E2Q-F9SXD_8o$&/qVfoU/V[kXhBtZ' );
define( 'SECURE_AUTH_KEY',  'j-#_Nf[1jjYvLs66&i>1(;wr@7|o;4^9G=7@0R8~7)y:k=0a%-RBitSn.nEG%qhH' );
define( 'LOGGED_IN_KEY',    '>c:i-e?T[7N2Oo0]SwvJ<a4:W>b14`oeG~}8N7=fW{p]-hoA_U)jLCgvt5k/LJx3' );
define( 'NONCE_KEY',        'qYU${7fL|c04,ad9Z9u]qJF57w)T8WWX3,ExjR6x:cWg-Aeo0;H MI9h=Nc5|#S7' );
define( 'AUTH_SALT',        'wEM]8uvdXW}:wp2QG`RXtfyR<1(c~{Zxv$Zq8l]?(HWY3`.~{Nuq?37,0mf(>PjF' );
define( 'SECURE_AUTH_SALT', 'BJF~e3]2rJMrKqe`Cx6Kktv~4EaPp@)nrrSNQDud}@6s *tM%=rs#k21_K^ue<RK' );
define( 'LOGGED_IN_SALT',   '+leoi4xAvmH{zbJKP2M)=B{em`Xq4M(6%,.tdPaB@Mu~X!8ZSMm|%bzO](dI*gF5' );
define( 'NONCE_SALT',       '{:Bldu@dY$5MBI5d@99!!pZJzfXU=w7%Nt:mLn]&Ztf_G??M$#%6at_m(S-KgjMW' );

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
