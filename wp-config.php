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
define('DB_NAME', 'mariasalazar');

/** MySQL database username */
define('DB_USER', 'maria');

/** MySQL database password */
define('DB_PASSWORD', 'Ba3BPzJeKaLsJpnA');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'ISFL?qUU~wOCY:#uTzCv kgwD?N@Ll@!T>Pz-+C`1y1:.c2E{&;^gVM)#JnGoS;)');
define('SECURE_AUTH_KEY',  '1!YFIkDj*eeDFlZYV]wl~#fO~juG.[6xayVTY})MJU-C0%HX#`<;ZB U=R8-bvXB');
define('LOGGED_IN_KEY',    'U@S+*l.|~|TP?O/hgr,?|y1E+M[d:$a41@7T2KHCpq7v8(U^LL?2m.]+ft-:0;QW');
define('NONCE_KEY',        'fCA|&?+1|Fb!F,kT/m7:VjH|[&#y!sbKhwa4irI= g]R;<S9uH|NRfpoO/QZBb)y');
define('AUTH_SALT',        '`azycI+6LZdQD:AqX- ,N;!f#`9jdVL1?IFkEYA^|gy.!k}w<8(`UrQ4a|[ M/4g');
define('SECURE_AUTH_SALT', ' 1q@c;V%*7AXKlqx!ty9(j6tB!#:8ume.Ef5I e|3qCw,iOmb;a|2AJK9!Wt1yj0');
define('LOGGED_IN_SALT',   '~4L:pOu4r;[Oag(bpo}:qXJ~y|*A55jr,v4pga=E4~>:h)2K-c:~_Q dR8k//!-}');
define('NONCE_SALT',       '(nxsB.2Gc<Ua5b;[ZJ(xqu%L?:kuZ%Sj`-8|>Nz)ux[##4f-P@rn/e{nDK}}3uRI');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbms_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
