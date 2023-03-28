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
define( 'DB_NAME', 'WordPress' );

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
define( 'AUTH_KEY',         'DnB]/D+r!FQE=?GF*:p^KORzlT}[4s?~ tLWw:?By8W<=e@YAO! 5)B8KCx*?3J;' );
define( 'SECURE_AUTH_KEY',  'bjlm5s=;I+}ade8Z-`JLO~dH#Ks01*3|>8@W-tI2kHq`w7P+B8nBRR2iRu[kb!%@' );
define( 'LOGGED_IN_KEY',    '+*614W2O3nt}$l46a{7M*bL=%M3Bo.2j~!dtUr*-&=#qlGP<cV7}5wXkX*[MwxFH' );
define( 'NONCE_KEY',        'ZcDb`%lUEYz,1:R}D(?mo=N.QJ4al}SDpazYSB~MRIu1*j=qK&MsFnxj3P>>3wNa' );
define( 'AUTH_SALT',        '/CMi6Cv 5NKE@1{CN^^,mFE=Jc,-g^s9C)_3$i-SHC373<9,u`IOcto|CtO`kf,}' );
define( 'SECURE_AUTH_SALT', 'd5iiduy{ZL)wvDR2_ }M9|;Pb&qMS}k`5c*C$/Lww0%Up3xzN~qHc&YXQ%DwoS8U' );
define( 'LOGGED_IN_SALT',   'ta>ud5.REy7fbr^nxK6uaIo{Lh._$ kv2~)Tb[f+*HKBU/LuQl~T|_0Kh>^beK(Y' );
define( 'NONCE_SALT',       'u`^^`0|a&edTvY4lB730Q;S*jeJHJx6Ih}hx}_(+0`F-N.}|nq.T=n;EQ::^[([#' );

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
