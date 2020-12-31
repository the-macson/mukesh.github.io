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
define( 'DB_NAME', 'wp931' );

/** MySQL database username */
define( 'DB_USER', 'wp931' );

/** MySQL database password */
define( 'DB_PASSWORD', 'SG324-p2)9' );

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
define( 'AUTH_KEY',         'ef7bccqcqqxbiyhblt22glbmhkpsh8zhsncog5stokcbh6ey18yvwepoqq52lout' );
define( 'SECURE_AUTH_KEY',  'occu4m2bjjt2wwaprgmwvd6oecz5fnqird8gfkfymn1mzspdgezjv3vsasv7agyo' );
define( 'LOGGED_IN_KEY',    '7vtp1bo8ehi3uu9b3b6fkzqmdtmdcmduc5g0ikll1waqqisgy0bz9bjl8zkb9l6j' );
define( 'NONCE_KEY',        'tsp9ys9axlpy35c7dusiqbuspfaqt1yhbbywaorzua4rfmthjs2m282rb62xs7iq' );
define( 'AUTH_SALT',        '8bweccsyi0yexs8wawcqn54efy3rgn9oesnillm1k3wkdzrer6i8ghhvkx2zjzre' );
define( 'SECURE_AUTH_SALT', 'm5mgot98rsnd4vokmkhvyk1lrbseqx25kuvdhsnjlndtqbvxdainak2tz2jrxslx' );
define( 'LOGGED_IN_SALT',   'nwanflqka6sudb2mnrdie2k2xoeul4ptb1ekochrbzxhdeic39sw251vll9fl0q8' );
define( 'NONCE_SALT',       'yjjuhbecrkry3ciwbyysx36kaqqbp2biukb0fzyogrmqpd6h7d6jfpulsukzf0r2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpip_';

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
