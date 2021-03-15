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
define( 'DB_NAME', 'gustyworkout_db' );

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
define( 'AUTH_KEY',         'r=HT&*#s&(=$fMC/or&bZ;-BrM%a-43tQ#)@dAvZ`a2DS7)X}~3cmic=Af4d9#,I' );
define( 'SECURE_AUTH_KEY',  'PPN,#2x{?%^+>s@o$~;m7v}n? tR0[|nS]!`|*Z77{D(?R?f0cX96F]o$|fJb`Z7' );
define( 'LOGGED_IN_KEY',    'Fo7OivE_C:?#!9D4B*M}Hfx=jIbl1ND*Kq=rG!udB9K<`db8NAPNKsPbU`yJ44ki' );
define( 'NONCE_KEY',        'n}M4WHc>5.1Y;ZNbALQXn:$-/MF1g]>u>k}kfk`}/+K1F4ZHD1kv>@1_X GrCa7A' );
define( 'AUTH_SALT',        'fn~|Rkp0El@L)TF~1o55pDW{NZSw<OC~ff[fJ1n: ;]7M`LDTIpgyQfcjIIfgcMP' );
define( 'SECURE_AUTH_SALT', 'F)dO1#cM2kE]e!6I:xyFT&1Faf02UFU@u(4v_pRD;H+,m=gcO]%dJ5xO%:$(;}++' );
define( 'LOGGED_IN_SALT',   'JeZEqqOXtVP+6Ih3O!e3q`C5XV*kb}2Ii{S{? t*LYzg:4e9dOg 2|@Dl#*|i?/l' );
define( 'NONCE_SALT',       '17J F}TF~1e3y$Mb?JOS&xJgJM,BD&8<_tnc f3-J.-+9[^lp0OPe9.w9MYq;2xY' );

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
