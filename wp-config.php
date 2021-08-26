<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
define( 'DB_NAME', '247patrol' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '241995jmSK' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '-vfi$0hP=<;<sYFK6yZ1yY!ob}Ufr1>)6[ .pCZonU:f)dXg;(>X6>IQr@5f1dVr' );
define( 'SECURE_AUTH_KEY',  'k1+1BKhH6sjg9ITynM(<|tpSL?@4U67&CIM|`;dT<*%av_p@1/bH$|J+%192StH+' );
define( 'LOGGED_IN_KEY',    'sLO}-9Ldq1.]/gz*hbw117fTcxhhsUuZqT9/k.,_P]VOFm*^{/[c&.mA&Ei}E|Nh' );
define( 'NONCE_KEY',        ':Zl.@( 6Uem:$=eL$EMg,iak(39^+nr;r|;(eNtlv)i(4VrRQ SYWW%EqL)tJ[(y' );
define( 'AUTH_SALT',        ' S$bxMwx0Lyr?rq03~tB=k P=IsL+oS|Xr88F-t2)P*S4tB !ucvl3Go47(G5SoJ' );
define( 'SECURE_AUTH_SALT', 'dm1!V-V/2f{9Q>l986&-#zdP#[O9r&4_|L/R|n~m7b_MmW}2c=i,jWrwp>^TWK_]' );
define( 'LOGGED_IN_SALT',   'znK6GJyG_h_w;{MfOUP5,VHnNaf`- 7!iU(>$%9x{QS~i#2bOxsY5JA6&W[/o#Bw' );
define( 'NONCE_SALT',       'e26$l!Hz%>zx7y7$8HF?!/Y3d42-,yBAl#j&+R`@V#A|IAnDw[dZr@W&h[eD[>M@' );

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
