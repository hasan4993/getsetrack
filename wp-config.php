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
define( 'DB_NAME', 'getsetrack_db' );

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
define( 'AUTH_KEY',         '{Rv!WV`K*=o^#JJ)^T(0O;]~&Rn8vSzLfKwl*6n?S85.k5t]4Z4XoP!E9v_>)X_4' );
define( 'SECURE_AUTH_KEY',  'wAQviPk)*FX(@f>n>BID+0=u7t;v62]5.;7m`g`q~SN}ia]$gE>%k84C9WbDDvPF' );
define( 'LOGGED_IN_KEY',    '~4~v.;Y.7WsF:UF2[cb8{}VRY^S!vQ+TmoGxP5@$t18~Y9PW[G5!F6_&JrW/tei[' );
define( 'NONCE_KEY',        '_#2]{`MZ~i-]i?yvZ;<;#fMIo|s-?^)znAQn,y!$U*fjKpDu]8d-^?O+6WSR{Vl[' );
define( 'AUTH_SALT',        '^Z*RJ?;fsQRJd3Tt.G1UE9wl0`YS$dh`+)DC+_Ku(i+;tISz-^[r8qo%W>,h]@Ih' );
define( 'SECURE_AUTH_SALT', '3mwlOYd V13y%o>gUOtad_@{^)@&y$r &?+)FXXHIM-/}j!<LU1jT)u9:L)d?[pe' );
define( 'LOGGED_IN_SALT',   'b8jAXJ-MJUzkEm7@46Grs2k z6)6!4^Y$7Lh~%:rZ.`Ikh)7PoGz9ZHvS3z_*KY,' );
define( 'NONCE_SALT',       'Y QS1|zbR]j)8{F ]fXD_)rY|rw8:5{U7L3hUET  LXpogb{bs&04=,|:frX9QG!' );

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
