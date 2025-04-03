<?php
/** Enable W3 Total Cache */


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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'McaC!@XQ/XqY[2A-R`M|IQfmf|^L7?6*do!]GQ2YuEq.}L{S?AFO,=*MdP4pMLHW' );
define( 'SECURE_AUTH_KEY',   'QJJVd<JtjauF#YGttMeruAhnm+L4/np-~&i0~qGqEi=+{8nX]hofg:.nE;^&xMj2' );
define( 'LOGGED_IN_KEY',     '}a?9n}O@m&TT=jnm?X.ns9Vk48zlnd*MTiY5R#JvvW+7O6;W+O++>Oo/fh@##F9u' );
define( 'NONCE_KEY',         '/i0*<k^k}TVf!EOi!b<w|FB?CP9bB?e {d-rwZPL/eJ1aC)Y}h2zUB%/DDG_u>fF' );
define( 'AUTH_SALT',         'V6)@Z4Rh1I{>8q]5lQ_67vt YF5KX?G%|},5RVkU!$AzpHr}((#SekAZM1J>#.eg' );
define( 'SECURE_AUTH_SALT',  '_{@y7%@Qe5pawV27]^yApXi_EH1h^4>l>PTsS`Z$Z+L{ .-z9cwWQWfkF>oj#1!3' );
define( 'LOGGED_IN_SALT',    'r{L~6JeP#5>v}i1ZL^Om4oU.0X| @{AKH-WF_c*.KPq#YDd*)^rY6!{s7Y1AE?8o' );
define( 'NONCE_SALT',        'WnJ9TE;:t0q=D]L_dJ1wiyut<`_N~8Y]7]V8z`(J~{]VE<(.N2Glw:j&bjt956OB' );
define( 'WP_CACHE_KEY_SALT', '{)e4+zScBC6S7G %+b`s$q-!YA$Dg$@zoTNCMNTMLdH.aQ[:K95v]CoZpw+544Ja' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';



define('DB_SOCKET', '/Users/philipschmitz/Library/Application Support/Local/run/lhXpJ1log/mysql/mysqld.sock');





define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


//define( 'WP_HOME', 'http://azureskies.000webhostapp.com/' );
//define( 'WP_SITEURL', 'http://azureskies.000webhostapp.com/' );

