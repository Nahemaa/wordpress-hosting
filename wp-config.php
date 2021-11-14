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
define( 'DB_NAME', 'wordpress_pos' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '>fMTdO#J&~KK9q^:!Agr>Y[DNtD+N~c5Ltsg3semO%^H@u+y5g g0efH>P/m11EQ' );
define( 'SECURE_AUTH_KEY',  '(qrNxJ2$U53DbrP~1zG!i.$7um0w;zN;%1gWY(Oa^M$p8Z]:%}13T{QVQSGKN1=d' );
define( 'LOGGED_IN_KEY',    ' M]:HCpWC.tWYS]`|2^ed*vYUi*f#p}k,V7$x+PgivDnC%RCN _h.${ocs:nGje%' );
define( 'NONCE_KEY',        'C;=2o:ES:L;!x1*?j(wd^Nlm,~GTsfyegz+|o0g4}w._,[%/0}!Z%e&ISDrVSzEM' );
define( 'AUTH_SALT',        '+^E*Yj4Rqq{SEl*`^u(Dc3iN.GIJ&$%UdmqXlM]:L{!H-*ae1k#Dok8YH{#o=zs2' );
define( 'SECURE_AUTH_SALT', ',r(g+}Aq@q1bH/a(GP-qr-E~(0mtbfna6-rO8{LnO8p{]sg0OzN}:4tX^._Qs:!u' );
define( 'LOGGED_IN_SALT',   '`|yCeMXj[IStC4^!vH{49B nF2axpBWwWe$4M38X)=#[r[yMFj}RJ!c^vzOU=xnG' );
define( 'NONCE_SALT',       '@|7FmNr;yfuCA{g6:O+p1x1Vxt<)fp$=qCadmP~n8BBRyj&gsvi<n1.wou?RE[!6' );

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
