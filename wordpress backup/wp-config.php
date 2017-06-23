<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mikemork_wo4332');

/** MySQL database username */
define('DB_USER', 'mikemork_wo4332');

/** MySQL database password */
define('DB_PASSWORD', 'ANwlvdqh8tJ2');

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
define('AUTH_KEY', 'tpMQ!F)Hu)U;juf@u__vPE&<^sGcC?ly?EFa?_d}q*-Y$/X)}ngdbiPW<&H)|bL[DbH]HNWMFRhRJ}{c/PhbLR/GgU<T)ayoNT}Qyh<*E)T?VWpfzjv%?By]jm)%_qW%');
define('SECURE_AUTH_KEY', '}vw)GmrDb!zKurTKSw%QlZcx-oUdZPIWkX^CZjpSCOoS|(;TQvCXCKm}!ALboAEteAcRWZLDX@@_^@;eU(p_dvXkH;KoazvHML[jQmmrfPovDVLx@hVV<Q]l}j<jk)-H');
define('LOGGED_IN_KEY', 'oIv^MmPVtc}fqvxieVB!OF?p!u=ig)D!)T^ObAlzR-|GpY/BQW{pZDQ[<Slrj|_<H])%esxj$hPG_=lyoSvN@r>[eXQs&YAiwGtOXDaP(!!q)zRB/OBK^^f@+re%?glU');
define('NONCE_KEY', '^pF+ukvH%xteRQ_k&@glSIXonfa+&m=>HPkSRGoTOJVVylheMzRuS]&noZ;PwKEx&^v%!ed^TUF[EubnK%hUsTkn+g{?z+yaSoB|rD@>gUUmwosALngUoPtY<@F^sV*|');
define('AUTH_SALT', 'ik=FrNuy$*j]F^[-fbZLS$eTbY(PfkNC^-Fs$!p>p)tcEq[T/rQssys%SrNYcGDpBuDo_^+pnBtZ^SldXRUhw]KSUuul%ZJYswk|Vn=]eYjAoRrv$Eybb|tEekTRBwNQ');
define('SECURE_AUTH_SALT', 'GXBGAd]r}iV%Ch|swd}g}DI+BBiEAfOA_@E+K)d+G}YnxlW(vC*n;KBn^H<BRW>?Hb+ej=Jpx)xiQ[)MLm;*mC)EO]wf=apfZ&U%tB$H]NhOywNIhiK[!VjBiIW(mzsC');
define('LOGGED_IN_SALT', 'jsTE<sQaI/@dQ/OScX;!Xj><YR|@-jv;ijRTiM(T-K+XJbeNV?[gcI]LoRRiIWSy_q&+RvNaNh$I}zP&-gJbW@v]YYO_OR|JR)!|FNubiQ{sKdNuP(_BJ$NZV!IHy<O_');
define('NONCE_SALT', 'EWX;P_O(WngKY(hfu=b%(jLN)Y];KDGyc)i}CSvo$bQ!pGi&OdrsE@>%d?O*)!dM{K)O!>?hT[YOOxv?u%;D}Cxgaf|U-z_S/p{Uo;N-tWwt]r@vsrcXWZ_E)XNzLeR]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_yhnr_';

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

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
