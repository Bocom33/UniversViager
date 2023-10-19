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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'universViager' );

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
define( 'AUTH_KEY',         '`>d~N`]XtmmTs`W`Gn[2}#%d57#PV!ORX]nrkV+gAEB8SsCUg9Ro+G/O<%|7u54p' );
define( 'SECURE_AUTH_KEY',  'L.Slf%+r2.^G^9&XAF:W^p4&{2<Gc}1HI>g68CVH8#>8{3b7@@/_(RSE1rqy5?K$' );
define( 'LOGGED_IN_KEY',    '+f>mL>EAUp)Q8WFtPG1hukN27X/<I4~[<K#rMtJK#H 3{h*7W7)N}t?7i-^j(_$F' );
define( 'NONCE_KEY',        '& tf ?qL;KrS0,Yr]`TK{jh|{CKGe5 #B`N8|: K>lMpu3JC0hx%Fb(BPvupu&~|' );
define( 'AUTH_SALT',        '%#c5^ ehiKb-1<4]XgX=1O_BUa.xvaYg#uU1l5^Q79o#E~p`%Xtlw{]lFJn.6)yR' );
define( 'SECURE_AUTH_SALT', 'HmoadY!1wM[0vPq7E -46YJ puy#9}.2o;CdO|EKCn}Y!<U#<as!/#uFU2<>$oJz' );
define( 'LOGGED_IN_SALT',   '9v5SN5IZA@1<scSu$rLj|)ee6{c=fp-E#gOfg |V:;:NZ(Lk{[<vds3XVqKS%Zv%' );
define( 'NONCE_SALT',       '_+KH%qF$x;knVQS;VSNllj@QjK>J=z]].Fvl1f)`mgxtU[XI=}%@S(.!si)n`f!&' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
