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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Qwerty123$' );

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
define( 'AUTH_KEY',         'CbP49q}9PWum7&|xk2<q-B*<:.482;1?$WC82Jsey6!xST&7D+3w:/zT%uK|DO+)' );
define( 'SECURE_AUTH_KEY',  'GEZ~BExv1n]#:rt@g3ZAVkidyQ9-aw-|`bPCz~/;J%Hs71qgchJ`8ccrl)d.}5nu' );
define( 'LOGGED_IN_KEY',    ']YSKp6% qeO[@mAS!VdAa?fq06ZlfP,e6I+X%m=~wMo_^:A5w(t)vr9@~7FYg:;C' );
define( 'NONCE_KEY',        'PbeYS3u@QL*Ti2AJCPBtufL;|Z]#w>7qx~Kr=1hJU1xKJgL|1-r_*?jCk^h0?Z&J' );
define( 'AUTH_SALT',        '_i$;+`%jj6)Kqy.K5`A[90jQ5HG[^03NV%.D|~+YXq*KoXqx7@nlY*~Q?c6(HG[j' );
define( 'SECURE_AUTH_SALT', 'Ya8w6zks,&4n2fefsr4vK[]-MP%:=C(`>#Ltr_xGgc{6.sVxlVN%a|vZ;t<fxagp' );
define( 'LOGGED_IN_SALT',   '#`!/KVt,o-RbaCH*^teK!?^7eKb&0wnV($/Qsu!JgO[=tzJ1@H6&~e<Prib7?)u*' );
define( 'NONCE_SALT',       '($6>+&^Nr{oj1]7<~:y|/lk8I={&z#8@Hc{h}7sze^A79wOmMBAX$oK}RkQCW-Jb' );

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
