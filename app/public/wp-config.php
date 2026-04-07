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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'f7i5cN/;%-&N|,(_g/DcP}^u?]sUVrfWjHv&~v.0]#_+x>y8fvro@pmNG*Jj<cT_' );
define( 'SECURE_AUTH_KEY',   '>o<}t4GHp(yd2jPjoVwUa_I+l82/N.OdI}S>tHt{{CjuD&>?C8WiYADt8x0nn#vZ' );
define( 'LOGGED_IN_KEY',     '6MQ#BF1}5D+XJV%L[>}Q:(P^I||2I]6TRP.Ey5Z#K6!;UfQ8x.8Nm%2nG&1*.kY3' );
define( 'NONCE_KEY',         'BvV`aHsW,~EQs|KdJDlGGwuBo3~pR3g^F >h9-RkPHA]:* n8J3Nm7/zV]Fd:SV9' );
define( 'AUTH_SALT',         'MhP|/0FYwrWk-yW3I1i_j{S}c!]^:<xtZR0~{%*P[-0-+#W)yVZgXh.:Y{9z*OP=' );
define( 'SECURE_AUTH_SALT',  '$5<Q{=w{h2o]KRG&FYc355=&?aAx,Bd%<c4%N?1G^dxx .V6T^oc1-LP?}h8WfPo' );
define( 'LOGGED_IN_SALT',    'k:xGqIgmW(U3.B0u|YC_)b,mZX84A:LAZTQ-KLqJ.dWeSHQWLTSw3^|~7uC:7DWj' );
define( 'NONCE_SALT',        'CpBI:gmi)D{758a5/M:(t.=:Ji}q)Q`}dTxy`YUf8;C%DskYq@vANJ)0sRn#nu_(' );
define( 'WP_CACHE_KEY_SALT', ';F)Z7V7(Myw9XM-+|n>aEuvE43xWx]nE2-TY-$YlymtuF-::Q5> -L(U6jx>am*v' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
