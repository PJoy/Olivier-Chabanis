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
define('DB_NAME', 'oliv');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'P8c3WAoymy{wzV-,W<YTj1?-iT,Xe!]*+<82.8&LDLL?-pxUrZP~bR,2d]1%4pd.');
define('SECURE_AUTH_KEY',  'KyOY9K}3vfsa83tCm[Pn/7F]?E0jIxXPTwy(@Hsl.OS@t[q1v0h<1eltDK&W}q){');
define('LOGGED_IN_KEY',    'noLkE2jV6.o* E:e11@~.vA<FY6l.!jU~zAkY{DG?_8Aji`W{jiE3zWebd%G60zT');
define('NONCE_KEY',        '^dz$ORNA`0=#(7QQq%+k+R<y J9EMJJSip8C@>H[ acHG%C j`zbv9Gm~v(gjvi6');
define('AUTH_SALT',        '-)hx{bHqLK=nb+;:SK@fk3_#j8b#U*oqE<)@;`[yCbOvu;g%sv`@ft;YFh#SvvVm');
define('SECURE_AUTH_SALT', 'X4Q,:+&M53Cd!)~v$R(#$>v?,ea6Yx/`NN>)_YTM:(<Fp$aZ!qRdW0.*-[/qKQRh');
define('LOGGED_IN_SALT',   'UFy1sN*[V_nVR.^_o(k7dK~p+1T$D9YHG@!JN*A+bs[& f7NSB~QVthyPK7;rJ,h');
define('NONCE_SALT',       'n-&0.oDy>D5(V=2Quwo{-S4}[$17>6a. xe*U)T;M(Crf^v.js0g$#u/oT?Be;+X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


define('FS_METHOD', 'direct');

