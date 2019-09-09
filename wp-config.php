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
define( 'DB_NAME', 'Carlo_test' );

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
define( 'AUTH_KEY',         'L?zDxiJx>.#H.R$LHApT4?TwNq_v#I=;>s=9lD^C=X!)gBC?Y}nw!~yB)F#j?R#,' );
define( 'SECURE_AUTH_KEY',  'Uw7 #HiR@2tMFgBIYF~H:JIMdvlp[y6@R~F`@l{8yEDh/[{z}M.l>Kvc6K657Hl*' );
define( 'LOGGED_IN_KEY',    'MnNHxjCDfkUH?trezCft%q{rY;&%J#;WFxBPKOXbCLmS-)L=z&FPSXeRSN$bbIiM' );
define( 'NONCE_KEY',        'Pl4qB%!WT:VBfLb)KHI+nI7X(SWhl %emNN*:,k4q*A:bKH}G5N6hW}:1~~c{-`5' );
define( 'AUTH_SALT',        'l[`*Yk(@QrLH|yLW<kI2^zQZF=[2YRf?x!5@t4uQO%lh#ytTy^Gt-`6pV5<EG_D%' );
define( 'SECURE_AUTH_SALT', 'm$PQQZ|yf0AKq+^lOk,*MRQNE0$aXhD tQhx2>C>,s6%W|]SG$bEe_9:{p]oVa2/' );
define( 'LOGGED_IN_SALT',   'b;~hakKgnG09Dg#2Pny2_/myyJKV^C~&0|&&$ACp=Ac)NoUnMU%<{{tyiHgeup8i' );
define( 'NONCE_SALT',       'F?Xxleh[Xp{ebivW~,1*|F^OV7yb24U }u;uTSuo:T96p{e5LVm$f4!g+Y?c/cG]' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpcc_';

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
