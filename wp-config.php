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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'teletrak_db' );

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
define( 'AUTH_KEY',         '8HyB^wAIKsS-pcQZ2.p{g=Ug}0y`L /{|OitWW~pK>`%jT@$S&S96Jkz!2$-SG,@' );
define( 'SECURE_AUTH_KEY',  'S](7m@:$jb?&Ltd.B2)u}8)a5l*S4pKH.%qO<&qQ#e,D`w&!C=s*D_ gxo~|r7>K' );
define( 'LOGGED_IN_KEY',    ';+!))31 |~CLS4-F]b1{ap/KIGrnw*xHJ6kjY{nulG[4[TVnZf`WuX|><3w0o$[q' );
define( 'NONCE_KEY',        'LJ6p}P([g-/WGL;>`D*PU--+<h,B50IsQN!n2NP5_$@@:D{BoD4r|rn@Z5Br0Ff&' );
define( 'AUTH_SALT',        'Us2)ptokbT@P$bkWj_0oR;#R1TZ8MbWu7odrn?_U#y4=ch$X*$am$,+,zHqB1v*)' );
define( 'SECURE_AUTH_SALT', 'K;-QIQ3 JhYX!A=;))Ww$lkgR1)whh8N;EOE4;g3XmQSN2%uL4{>MzUX&q=}arD7' );
define( 'LOGGED_IN_SALT',   'p&I(*+-}|y|~Yq&}3tXMp9Q<{1%@-#-$mi82|Ti1bf4Qw6?p6:[@PN1A1B hk(e.' );
define( 'NONCE_SALT',       '_OAu[JzHc1$PQ7)V]nHgm.S]+b*$n3Z#_7_v1KR9*6`rdve +%Js#[w7vV?ydaOh' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
