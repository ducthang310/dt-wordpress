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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'shi_root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Odin2019' );

/** MySQL hostname */
define( 'DB_HOST', 'shirds.c2qq0omo02du.ap-southeast-1.rds.amazonaws.com' );

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
define( 'AUTH_KEY',         'R0>5Jt`PuDexW#ZXv}3.- 85,NU@x& hrK~5-hn1wp-_~[[PrwQn7WHy4F#d+P~P' );
define( 'SECURE_AUTH_KEY',  'mA:Ttp,Wo}-?j0xW9lJw=$5,QN*a7|vw7.X+,&QM7$56}b:gTD|k=x}M>?!%Ruv.' );
define( 'LOGGED_IN_KEY',    '||eSvKec}Ozj.I_X>1m&76cowjQVc?5TmTua?b`l4s8:zqbtUR:4igW!t|4300)U' );
define( 'NONCE_KEY',        'c$u~Wo<MU^>d.YiGe!f^CV.Tpg<k@>qUN 0`eSP!vC4AiQ*bqve!>b,Yy0:xTh/x' );
define( 'AUTH_SALT',        '|?te*g#eiV{mTYLLC3g!|GW}E4I*9t1..Ady5IU.-:XN/;6vqJ_]ow`<yvb{L[~#' );
define( 'SECURE_AUTH_SALT', 'z{&F+ :yNf?lM`4TLWk.%IY+E]:i!H=9/T?Tk$yN6427.injN=|bf._^@fB^5:7p' );
define( 'LOGGED_IN_SALT',   '>J0%aXck (wE_B#5H>jn@m^J `q1]}t>&5SK5pq8lug25AZSqIi<Rr]-V RV(pl9' );
define( 'NONCE_SALT',       'Jij/L7O67%,ODTTqj=z+)#.:li,# {P-ol5e4)5Gy`t0a@*g_|&2T5k2tIo=.tRF' );

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
