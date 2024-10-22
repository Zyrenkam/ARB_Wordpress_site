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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u2795231_wp431' );

/** Database username */
define( 'DB_USER', 'u2795231_wp431' );

/** Database password */
define( 'DB_PASSWORD', 'Sv]!p236zy' );

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
define( 'AUTH_KEY',         '1tyrgoos2jxv2tfgqqfdjgmhjwnmbez0f2yqyuhkw3uu6l95ozbbhiyzkrppanoe' );
define( 'SECURE_AUTH_KEY',  '9aepfz9a3k4l2qducucvdw1oiniuv35mkdrorrov0tk83qlstwq9xenl6iuisu3u' );
define( 'LOGGED_IN_KEY',    'ki0indunysov2zfdyik6kucpohx51cbsswcigkn87pz77f6t2dcmswpsqlsuajar' );
define( 'NONCE_KEY',        'p8zfhvq6zrlfpylktnmebtohnafjce0rhjiit8iskd7tjsitlrpztyw9n66t5ych' );
define( 'AUTH_SALT',        'li1eipjvkus9oejyux8ogrsbfpbxj6h0bgogfkcxux50hkpzip6udqw6ulk7kqch' );
define( 'SECURE_AUTH_SALT', 't2hik81fecrsytoptwffxt0ibats0rgup29f6ewlkqt0exgq4ayepsbfh9hklvtr' );
define( 'LOGGED_IN_SALT',   'kxakolxce8ypjl7zckyyqslsoazqjuhktqku4ovqjya1jgldlv6ogulz1llksjeb' );
define( 'NONCE_SALT',       'topoapb2iyxn1w8jidfm4a1s2bhtiosw5h70ifizozokmg0469owsk37yyqt9pwv' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wppx_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
