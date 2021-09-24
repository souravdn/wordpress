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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'KXC3srzK|rP(NX7;&Gt4,`r~TwdFk0v3Gtaf$bL Il~d@Zv!d(5-Rw^FAs5WWB9F' );
define( 'SECURE_AUTH_KEY',  '~zv<<4?[NQMr+*903TP>,Uv24s{R0yhoBQn*]4B>37Oqi7Z~B]+6PDPgHbL/%we3' );
define( 'LOGGED_IN_KEY',    'nZ-RZ(OTvn7,9He3zhUQ$=T[VnV8(NnOJ#p3IzKT7*nb*-Co`bR2(h,Er~>va/5]' );
define( 'NONCE_KEY',        ',;EUF2QO?hiId(m|6VBD+Y3~{3.X%&#XROU(B(]A~8#jgQ!;(vL%Wm<~E) 7#;Eu' );
define( 'AUTH_SALT',        'DE6Li.CfQK$LgZRaCI5pbsjReOAk$:=]6 8@)wQin8:j0wO`~JXPr Blf3 5nPjT' );
define( 'SECURE_AUTH_SALT', '$O9A%7#t8nUiL`1XNrn*sZTtUNJ|bx*j^`3N>Xf4zvZ.I1wq&,^qs[uNN3.P#Sad' );
define( 'LOGGED_IN_SALT',   'QKjRy;2L0o+S5 pPk|!c?vY#XL!s-3Nd|FevV^E7;h;<GF{Kz.p]/T!Z}3<(v36`' );
define( 'NONCE_SALT',       '~(6<b2/x4Ol!r,zj(HZFc#u3`IzfW<5&G@7]d3FUf.&$29~z?.w$/$[dP}=!fr(/' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
