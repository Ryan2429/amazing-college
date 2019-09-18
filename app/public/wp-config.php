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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
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
define('AUTH_KEY',         'qBwr9SXFU3CmJOY0uCdkPE2dS/jrirjg0t1aIl8Syfm6AEreI3Q5oHC1dNeVPOu3TZ43m/DRMMjHROlNpMwRxw==');
define('SECURE_AUTH_KEY',  'f0pjjd4XuiVjcysLBeautZmkKDiCmAaUC7T4EEH4LO2Ag2r89CHWZiQgXNieGeMNrq8ovisjWy1dy5frp9jcEA==');
define('LOGGED_IN_KEY',    'ym0+0gl+B6Q8HxOg87zVltQKAYlChMh6Ns+2MgLAM2HZbg8J6/UIY/fd/0VgC/rWObBlBUm/mnLozPs2ZZwsrQ==');
define('NONCE_KEY',        'MRihBM2aWhEwhU8XEDJiA8IEDCZlcESlA9WzESQX6de1iEi0gH2ZdBVEaK5IMiEV1HlgUeHVtJ7eO09vrW7m9w==');
define('AUTH_SALT',        '5ROX+mzIvz2X94aYr9MV5JskJIZPtA0DW9tXc80KjgQuSXcEuRFsxwx8ASimB4/+2CTROsif6DSdQMgvzNGeIw==');
define('SECURE_AUTH_SALT', 'ayOzZzUg5Rhj+jjeXzf/WCJMQvDOjO0oYuFOYZtTOtei1SswNg1p5HOnpuf7iSA/qE140wwvTdfH3IukGHMNOQ==');
define('LOGGED_IN_SALT',   'awjLuQ11CCunq0TaEj6oqu2G8GnwGmVaRIdehDEDWM1y8lhrCfdAQrI97s/R2BpFSXXQ461AspqiHmtmo+ac6w==');
define('NONCE_SALT',       'Z+/fB0p2t5np1OSODBPf610QbVLiEfVkd4NbXXlojmjj7MhXYgimg+52cThBpVOKjEaaRV0TtI8O+0rVgJGkuA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
