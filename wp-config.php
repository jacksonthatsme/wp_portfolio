<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_portfolio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ',z^:W=D`cHrakJWV0b34s[aX|_a#$yU]]N2.|N {W(cX55-8L?O;{&Ny:rqIMLqv');
define('SECURE_AUTH_KEY',  ';v|rH ;?++xTuCfJfh ]x$b7?S6.noN_D;R,ZZ8!|?[>9|%Qr,}8l5qo^~B=eK8u');
define('LOGGED_IN_KEY',    'QGG>jux~3e9xH9Xd$(_g9_[nU<+Tz%kh63AowW%u9kin-:kT*O+)M5.v/Z4gj+Qo');
define('NONCE_KEY',        '1?;ZXCBBec;A|6~C8`aaCJY9j*_oAPBrIj:5`m_-eC--Fo].1z9?T9CUgle|y9E8');
define('AUTH_SALT',        '^-0j.< *@}8:=+%!=`3!kfb4C%.uws6UF8{eIr4)+WqKNBN+h^Q[+utYh?3j_KK+');
define('SECURE_AUTH_SALT', '8GDVY!wCL`6t9SiKr(9f|)*H`>D1<ec+|<B(Qp W>0l1Xr-ESvK]:se+`v%:kA V');
define('LOGGED_IN_SALT',   '%tbH2OQQW(V0a8L3y6ImYL-%zby>BI^}Ojm/3F]v2 4U#b)PHf,ZM6JaKQJ>n[am');
define('NONCE_SALT',       'yRp6<T9Qoa55!EE[@tN[x!d`B)3PP+ic3?z.W~LvYE(fkp19y!o,!^&z}aWw5dnI');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpWPP_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
