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
define('DB_NAME', 'reksti');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Dk>x1<oh%a46mvKc %lb92r~7|^P`d{=}b?3GL>hoqW6c;U,@qB)&e0)R;(KgYrJ');
define('SECURE_AUTH_KEY',  '<wR,UQDz d~+}6.#TUm[]W@.R ET!{MO3+7z+t`Kex_:N5g4h*nB`V$= FhcN,D&');
define('LOGGED_IN_KEY',    'BH<T9IfdLFu$G]z$[iH&8)|(J=,P,f1[Z|_e_6|&s~3;;x*;;Rf$.z|wKl3>>3=i');
define('NONCE_KEY',        '6:ud.g<lWgDCdvR!x76yJ>k@Nl:g;s.Avhpmr[M;f2o1ND1)^,U]mO.$Cj3ytR&v');
define('AUTH_SALT',        'uz|^;{kt5[o{+B%%7$JIL{/l~uk)8-Uz&C4XbJIx60/er,9(P<l=O[%sZf[$)&u^');
define('SECURE_AUTH_SALT', '31WtGddkv7,whl9^TF(MSY4w-CAQt85<u1?RO9MH#?mVcR$,[)6N/l?LC x}C#s#');
define('LOGGED_IN_SALT',   'H:aJ5r7SA2r%w3n6?|_8}Z>`RZ PM%#r;YC1D?Gi+rY?)6rJ|]^-duz=>Vt,Uk=[');
define('NONCE_SALT',       'A0c; NNm}S,yeWmrC:L?:pnJmxFg*E9}2]*nAj$N87UE3!W8-[C&+kgsU+&>i&3!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'reksti_';

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
