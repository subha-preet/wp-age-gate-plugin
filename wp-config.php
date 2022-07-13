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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressTest' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '7&t4c(48einfk7$-Cu.2.S]JM6+Z>MU7n.7# aRb`wUN~L_g&JhoO/tK+96$bo/D' );
define( 'SECURE_AUTH_KEY',  'P}J::Aj<ztC|F(I!1>CI~)sWeU9I,5d;`&%F6O0FSSk4N4<3j):tlvQ[0()a-{:k' );
define( 'LOGGED_IN_KEY',    'b$%CjI66Ccx3u&&/)}KzW2{7>qo.g*saUBqj3V);Nm|^]J2qn(s!p+!19/44q4HL' );
define( 'NONCE_KEY',        'CCNP3j!E7L?@%f&l/D5&m9=X%BCG]`2WB7F<WQ7+!_xdCdg5XVyR7|Y]muW-9OB!' );
define( 'AUTH_SALT',        't8wJiC%e$xC0*8cEG@6Q|!E!@UKD/V!q/ $^N~V?rdfy6NBTdl3h(wqEChsO~Ndz' );
define( 'SECURE_AUTH_SALT', '^&ylYSQl<uMbh)g~QJpim]/:`3L+jYb;VMgd^6?Ik)=1A+G}^8d.ptZqmvy>eIue' );
define( 'LOGGED_IN_SALT',   'We;O5{dOo~03)hA~ BgDTZ?Dz(-3^8{h[h6E1Rvwg6>LCCHK1T2@Ow#{|2v=jd`#' );
define( 'NONCE_SALT',       '~Eu<6}o7sU5B(7q?>bsG8fE/Ili ;QJuK)FOm4ltjO2[4ap9NV<%gv<dN>[+Gv[ ' );

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
