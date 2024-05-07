<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'themedium' );

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
define( 'AUTH_KEY',         '-|Tj:Ul<N]O;63snV_vAa8MDS:Lu*EVC{vA}9NGI1Fh8,+A-5U,Mmg19PJZ*KbsB' );
define( 'SECURE_AUTH_KEY',  'zfEQJ*:p| LDnc],xW>EgOwzM<GUoPijdH@HcjHw|qHr,E#,}Mn=YGk;HB7n_X+a' );
define( 'LOGGED_IN_KEY',    ' ~]a/VxeO/X98N~ZE4(xf!%>_I,kw)P>@.r%CAV^x++h<P*Pt7VF;]$yk/lzx|Nm' );
define( 'NONCE_KEY',        'OQf|Bq8eeU)V:(aTbVcBNiJay?/GF57Bat?I0=)EOc;}Zw?ZW+vC}6L&6N4hRjSR' );
define( 'AUTH_SALT',        'SD(o3;@J@cIg&/D6fs5^A}uXvzTJ<dQ9Z@j$m`I*8xidY6RPL<nO$<Q+,PYebw69' );
define( 'SECURE_AUTH_SALT', 'I[%| @Hem()ZUpTqf%+ZAX6r])e6[qRs[X629IIboMfW2w|9me$w*CLKsuhE[d!W' );
define( 'LOGGED_IN_SALT',   'jPV69HF`bQ-c)gGna,d[P M.sDZmb#EMV+sb]u^,.UR7eF .3i<2&bPsk%cYIC)^' );
define( 'NONCE_SALT',       '@Yb@}c}6]!3PuteQIu8e|@mo|OUL@dz&uV>qWC^zA9pWn_Zxb 8KD/<nr>)W.-<q' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
