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
define( 'DB_NAME', 'quynhnnph09019-web2033' );

/** MySQL database username */
define( 'DB_USER', 'quynhnnph09019-web2033' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'ljK/94-6i.3)?vcA8T`XDldpG]C#mf>@o6,|Q!$B;`7nEUn{2Hv2G{a>n{S]}a_5' );
define( 'SECURE_AUTH_KEY',  '~{ws>aah`+|~[]9mNEEE~W4pq.7;GHvp@U:of9]%8dt$w!M_A<bU+QZ_BWtJ.l!E' );
define( 'LOGGED_IN_KEY',    '-o{7i+a)j~F0i6*N}l[~,GiN&IR:^+$|t_J%Uw/O#Q;6 NP@v69LXbd@vQ)ooY/Y' );
define( 'NONCE_KEY',        'Unp01U~uB7j&eRM.:|Bfe&QpuITpwqR6[l4jZ:gr/n;G(9o>L@T,cI0fdt}0KrAp' );
define( 'AUTH_SALT',        'li+>jSURoA !,s^?D-sv`IG*:)}6qV.I_[I&S~v%jFDY:|MtFAf B#6Ue|=@k_ H' );
define( 'SECURE_AUTH_SALT', 'tQlS|Gx*T*<c;;B@/vl9d^o,|rml`b,]|#k-*Zs<a`)[8d8%od3k[.e#yPO:w.mw' );
define( 'LOGGED_IN_SALT',   'z64WxT=EnK_s]I=gp#2>[W_>r;/&G(9c27H/D2]avPM+{vHvF[[*H^~V0g0&m/Ey' );
define( 'NONCE_SALT',       'f%oE:lhA60Ad;wogmwvzV?8i-LYs9Vfh?I7xfe{EhD-#};)w7q8e&BJn|xp-^sM}' );

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
