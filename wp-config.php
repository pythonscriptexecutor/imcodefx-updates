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
define( 'DB_NAME', 'wordpess' );

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
define( 'AUTH_KEY',         ')~T9>))kK7*ihEXYVs@1|g8uHp5XU*LX=A!R`6PUvufl}a2s0;b`^3+,NE^@>!h!' );
define( 'SECURE_AUTH_KEY',  'Q12i!r`QJp_i/7*4ygWet5Rvj5*}F73$AX6hK:}[qQJy_~,aHNrRN4+fJ^oB4r40' );
define( 'LOGGED_IN_KEY',    'e0OFf;$!(B2=IM6qc((l<vJm.hK*?#zpW0r2)_I ?m)Ih&$[zqJuR03,vGS,[Np5' );
define( 'NONCE_KEY',        ',y,, Iuf7/jI!EZ/Mhd goTpS<SoE[,mZeZ%%4aan|;|#T9p}DfBc*HT#i:,4!=R' );
define( 'AUTH_SALT',        'Ljl(@c%lfE{UDu,C83>Zo.Pv)tc$!tAgd<W,)n(`?S;@5$%S%L66c_W1]bF+q}}>' );
define( 'SECURE_AUTH_SALT', 'Aal(T0VZejZSAsw(6hLR!l/cK!{VbW|RDIdN0gV^L}{=t5ngebaHZBGDyuz&/H#M' );
define( 'LOGGED_IN_SALT',   '>-D5,SK%/7ZN7asEy?8y.{CbIC[YFYx9^pyl+jx^j/[G{^WZ&7D.V&8-eW5f/AtR' );
define( 'NONCE_SALT',       'gbDtxq*r3qqKC[udO-VjfF`2#NCi^WJE$q3Iw@e+Qe86iA$pT:fz9n0W.t-^:5dS' );

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
