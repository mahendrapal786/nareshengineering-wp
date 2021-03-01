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
define( 'DB_NAME', 'nareshengineering' );

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
define( 'AUTH_KEY',         ',}qCY~8iIN*J]Jk>C<zy}K:v0b`JGgI$<}Q0_<ZCxYY,E&R&(G<MQBBf9 (Da+YF' );
define( 'SECURE_AUTH_KEY',  'j|G?Y[gzfp]DIS;j:M~h$}1M&$RxkPZv%/>6fw~~F{X%5DWzGF%R3G$t^CeJrhXr' );
define( 'LOGGED_IN_KEY',    'd^@8{ _3f|M?! ]YJ,ZnHb4mE(juv~fsU7:c;5.S$N/IZcO55<=7[c&@$y{3Q$w<' );
define( 'NONCE_KEY',        'G&9;[}gYUK0X-T86>N&BW-_L#fk)!fjId*Q|tZ-j3@7_$ByVJt(qX=Aee5YqO]Fx' );
define( 'AUTH_SALT',        'r(1[<5Nx}@:uxRIQXRxU[VcOIUaFxk9t+]@BkXAcUIj83Dhv3|oLQ|y1&)jn*;j@' );
define( 'SECURE_AUTH_SALT', '%0d$>Vc&5j+A}XfI<HtVnTg)~h~T`)q wuxHGYT2uZkh`Gf-RqsPww>IL(A_4CZm' );
define( 'LOGGED_IN_SALT',   'Gh~B)uroUHmQv84~+a<=p(|Rn8Ae?97fkWn)kz_wbx{b3pj6P0`E-jq~q3eA5m|m' );
define( 'NONCE_SALT',       'BbP^b&Sh&AcYt3qf~=C@L0gHMLecSj8t%s2OMdl-,]+GbJDr&{{^l]$Bgdcon_$~' );

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
