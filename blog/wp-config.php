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
define( 'DB_NAME', 'blog-go2ways' );

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
define( 'AUTH_KEY',         '8@7.V aHRMSi@CTzK)$Epuv{)O]k[{; xtFLm9jPSY*xqI^N^legZI:2=u<&^Mjp' );
define( 'SECURE_AUTH_KEY',  'n7^]5ly3;Y1VH|QrOG`*25lQFMvnI;@T+v!GS6c%B(-MvrguT?T5@G`$J@.f,?wt' );
define( 'LOGGED_IN_KEY',    'NqLO=DRlX{p3PWfF3)g9390H<Z75rG*g55cObhFP{ONZS9FXNX*foN3 2REU}O99' );
define( 'NONCE_KEY',        '`nTdf/,RtL&&diXP,gOMNp8`&_}0U^q4[k[^Ox-n!uvn=o!}&#dT~@y6@{!(w<xd' );
define( 'AUTH_SALT',        'KL2}:JAXq 9e_fq!M=adA$z:qpRNi?6KiC@GAE_Lwe?sefP+O]dY21d.pd>SAP+A' );
define( 'SECURE_AUTH_SALT', ')Z#Q-8IE~4ie7-j x1,s$dl Vx /We[HpZG5I8-6rFT/L,~K5( Z7jyk3fU (W[n' );
define( 'LOGGED_IN_SALT',   '>=8d8(/1> __)I6 c[Lx)Jnnx1V.D&-=e|)H&O~B}pISR{DL,lF<s@(O!SM=u-!y' );
define( 'NONCE_SALT',       'J2xUc#?F1K_po;JE,,G7MI]7bUk|U&9pBO`IT&L?bf8=N3!sL~VAZ,EV1aC^{0ew' );

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
