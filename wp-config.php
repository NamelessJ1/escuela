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
define( 'DB_NAME', 'examen' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123456789' );

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
define( 'AUTH_KEY',         '/5tn$&(#A7$IL`j-*OUcIUyhv/a&|Rz(mIVoG~?RDZt3wC=U6q[rlh=Fta#&hcZB' );
define( 'SECURE_AUTH_KEY',  ',V|[P)N @!(8ps%k-~%OP8OxO0QdP;[vfekx6_s+P!Yp~ljo&^_CL~9}}r5%rhX*' );
define( 'LOGGED_IN_KEY',    'Pn>.o_JAB4fpi>2R3r:lyG{S{!!&FcO:Si=4g<o:E84X*eil>0H!1.RfHH#mVfF%' );
define( 'NONCE_KEY',        'qd=-Si8IB}$Gej/N[HtD_I=i36wPs8:GzIa>m5g=?,/jV(Asy!CwKu8(;!DS{uG1' );
define( 'AUTH_SALT',        '|b,u$RO$QR{PbJEnU^lxQXD#;wYfCw]{U<DS]wc_DMs(mOZ.h0G@tIznV,Sx?2um' );
define( 'SECURE_AUTH_SALT', 'C,?Ez)Y(h!VCmY=N=<<1ym!e]BmaB1Qy6~jU^Ux@cKVVAo7b]rA`~z]HuDgxTd4 ' );
define( 'LOGGED_IN_SALT',   '47Gm. prOvx.Yy</|0^V&B!3@HN,S? kTloC(;a?:Nhjz}vQ?p=&f%K{x@8r1p/=' );
define( 'NONCE_SALT',       '-~Y<1EvCz,[>Eg0Y+}A[`.Nid$abd=|.u:pkTTud^2s(l0,PIZ=RH7Ju7jPD4/hc' );

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
