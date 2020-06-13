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
define( 'DB_NAME', 'sukumaland_db' );

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
define( 'AUTH_KEY',         'G:EOoug78iJ;[XfiRR-.q=-`ON+>}p:7kEiB-8Pip>2Y1 X;9yv>g1+HxFYsN,m-' );
define( 'SECURE_AUTH_KEY',  'UA<jA2GLf5Jy0G#VWa+aA2-jfXT5sTR$J_0qzyx96tQRCt]5wE=~-{l|`gP0KpL*' );
define( 'LOGGED_IN_KEY',    '%QXLmXzM#:V:UN98SQK=<8)~{2s8>9cnV$S2n~+@<O^(dR.{HFCj:n3Qw4@Z%kd8' );
define( 'NONCE_KEY',        'IuwPWiuk|a{4L!?LU!wPwzaz>Eq8oLH$mTvFXsGEH;PoPk5_`l`JLNmyF;z![N&4' );
define( 'AUTH_SALT',        '&Ovf8GbNzGOJ?KB)uWx+ukv0>)A#M|Swd&6Mfv5>$f{_yjQp@daksAq%5mR5B1`-' );
define( 'SECURE_AUTH_SALT', 'F{%No~ ubKy/s`4C9{)b#ov9B9g(d(-rXO%V_8_{F3Gz!{{Ta{T`fgB0x%/PP9W@' );
define( 'LOGGED_IN_SALT',   'MxqUEToGs_j&RLO2,r!;*)=C5%R)UYa]MnzG7W%%*WFs_8CT5fzH3EY8;l?/WiaA' );
define( 'NONCE_SALT',       '$;@~i~npyG`3C/l_~-bge[>Wdu5![R$bK*}CZ$PyevQ[~1c7<m%=pE^?G/4.]?XM' );

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
