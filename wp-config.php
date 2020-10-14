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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'F_s+x^ Z|V]7|n4P+aW8LO~]DF%$LW=S=J4ZwI6JT7|7Snz3:Lem+[.MC{LWca)F' );
define( 'SECURE_AUTH_KEY',  'fK!msmcl!_o`*$~*/V*N `GZnL*[>_4+B4Lg`d%=`YYfoi^}2ad~n+]:AL jU^hm' );
define( 'LOGGED_IN_KEY',    '?=N@#,Bt[]|1fvS}}Azu_^rCN[w]s[d*9F!-z;9w`q[gVS>N6IG9}azvW[J_P2M]' );
define( 'NONCE_KEY',        'JxSLOg9<YsSJ93AchKLAO@,{6-tQ8aVNyp{2u#St?IU[;@upKDntxQR<uaL/[Cw^' );
define( 'AUTH_SALT',        'W 4Q;i3#wLS/679Vh{0hq)Nlpk19-b](`s|N}141;5lo]NUxaE{Eoy;z#$p:Zxju' );
define( 'SECURE_AUTH_SALT', 'cXB[Y]**M6Sg1?<hoB6ac:z7X<TR-%9[vNm]a8utm}};S(W_S.?msMk!utZ:Z!E5' );
define( 'LOGGED_IN_SALT',   'H~*Mj6gsHqtG4Vt.r!W0h2htg72(^xH9M6].dXa6GM:k]5AAgm>nvcqfb)OAg][+' );
define( 'NONCE_SALT',       'q&F7*BC_:h#o(+ADRS>^ErPT`C_]!+<:dKVC{9-aJCV$dZ)9x$Q=qwcSqe)fVQ9C' );

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
