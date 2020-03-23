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
define( 'DB_NAME', 'jankometka' );

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
define( 'AUTH_KEY',         '4^wx&C1HWLy1x*ga;qa2X$oPlh(Q)ItL+a[F.<E8urF9Ov:H+5M4c Tn4@s5*dL.' );
define( 'SECURE_AUTH_KEY',  '#Kw%fh8HFWD`xI0F+hM4+vm/s(9`ao2;<6QRj:V-HshW-pizS#=A/aV#8-r&P0]z' );
define( 'LOGGED_IN_KEY',    'U`_n~5Y3@UA6UD,A#ZZ6Nx,>2my/k%($][If.v:SXb^~^eG%bcd$Kc0jAaJ8p3U+' );
define( 'NONCE_KEY',        'l01l=LQ)nEvSS7.Y3T.(6Mi/vlyE%g]-Ek;_5j[8ORF51{xv>pWQoQuF@~9~y04S' );
define( 'AUTH_SALT',        'kY;C[}S_TY:m};0cJ1scXyXRtuY4&4P2V+_l~$})5x-lnO97?&MVKoZtQ ^if_j<' );
define( 'SECURE_AUTH_SALT', 'i-H{2Xf:>F]sBj5dkWHlmp^W 4znA}v6)$!y.3/fkOlKgY[E`Hw==+1AbiB; %Ef' );
define( 'LOGGED_IN_SALT',   '-Tkd]3a+?^jAb#De/dwyW;Chs]V+R(y)m 5o[TO~#e>|*xXzEk=s94c}[&]-z|7i' );
define( 'NONCE_SALT',       '.H9RT32I4&y,Q}&4.6:-FM0EC=7Ql9N96%had&JFqE5Cq<`wj76Q<8|Gp1f`|)E}' );

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
