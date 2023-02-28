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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         ']obujB.Q:vI wNqISD,.GppelVm`G)tH?:a/VbeIuL1u.Z{ f/{zf)IF7H~,}~Ba' );
define( 'SECURE_AUTH_KEY',  '~/FA|KBe0xN=5;}~6)q K^hT?D-A}$itP]Dne|tfZa)vJR:.&)y>@HNn=CS5@8B[' );
define( 'LOGGED_IN_KEY',    '}{MC}#4Xz{gb?*f }I)4H0EuBj5+SQNp$nKR@<}.S=&bERnG9~I:[5zkcoGR[9H1' );
define( 'NONCE_KEY',        '7zV_#Hec^0$75Vp]8kiE,?W8}?*e/1j/1T<4SA2u^0S&?N#~5Qe>D@1%u/Z&qsWw' );
define( 'AUTH_SALT',        '8dJS^ZPpBW=WuJPGIm^0efb3h=wpH+TXUQWqVQ-0ud}@s7*Q#WK^I3:dN|&{1[r=' );
define( 'SECURE_AUTH_SALT', 'xbp1wqqm)XdM1L>3!z~c(C^P5Y!/_c=M$?{aHWWGGP7kYr=Ho@1M.EDaMtsu{~JY' );
define( 'LOGGED_IN_SALT',   'N3>BR}0HH~ V-Ub 0G*eAzGy)2,RL]EXYDpNcU@}{uL0!O>Ks(Gn5?2>Ks]j1!!e' );
define( 'NONCE_SALT',       '5:xBt~p%P!}qhz#nbeX59hghv`mLtt+:}ao=s{ BJr&HqT)J!cooRX7r/q |)-ak' );

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
