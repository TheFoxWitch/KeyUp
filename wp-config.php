<?php
/***********************************************************************************/
/* WARNING:                                                                        */
/* The wp-config.php file is automatically generated by Flywheel. You will not be  */
/* able to edit this file yourself. Defines needed for plugins can be added to a   */
/* php file in your wp-content/mu-plugins directory. If you need to add defines    */
/* for core WordPress functionality, please contact Flywheel support at            */
/* help@getflywheel.com.                                                           */
/***********************************************************************************/

define('FLYWHEEL_CONFIG_DIR', dirname(__FILE__) . '/flywheel-config');
define('FLYWHEEL_PLUGIN_DIR', FLYWHEEL_CONFIG_DIR . '/plugins');
define('FLYWHEEL_DEFAULT_PROTOCOL', 'http://');
define('WPMU_PLUGIN_DIR', dirname(__FILE__) . '/wp-content/mu-plugins');
define('WPMU_PLUGIN_URL', '/wp-content/mu-plugins');
define('FS_METHOD', 'direct');
define('WP_POST_REVISIONS',  10);
define('WP_MEMORY_LIMIT', '128M');




/****************************************************************************/
/*                         Database Configuration                           */
/****************************************************************************/
define('DB_NAME', 'db0277392608');
define('DB_USER', 'fw2521722972');
define('DB_PASSWORD', 'yHRd4GNhpC4KxOyjf0ltcgYoptJp92');
define('DB_HOST', '127.0.0.1');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');
$table_prefix  = 'wp_fja801fqar_';


/****************************************************************************/
/*                          Plugin Configuration                            */
/****************************************************************************/




/****************************************************************************/
/*                             WordPress Salts                              */
/****************************************************************************/
define('AUTH_KEY',          'd.OIhJA(/ki{h4Z692W^e,S<x%Or8Jy*%d<|O<TXoF&wa)s*Pdrtz+~+X@K%1#(J');
define('SECURE_AUTH_KEY',   'Awndvs=>aVS$z)H!?MR{0qcum4@$Lq69Db&u.%m%;.adRpjrJBALI-m<%b4B5MKx');
define('LOGGED_IN_KEY',     '!_j1pOuXY)miB&6T%ewAhH,Bc@Y!>+{dGU4}9+kGYJnC|xmr#RqRYx},aUYyOtqQ');
define('NONCE_KEY',         '-l%GVdE!q+47E^E_o`:-qJCYV3tTE]73NE%kCu/kj],AT`wZ.=./XaL2E9TG?=JZ');
define('AUTH_SALT',         'e+,fyP7oM@zDyXs+-V-}ND!=`v$w{iIscnYem#??>!_+$Lj&_mk(OMaOoImS#F7+');
define('SECURE_AUTH_SALT',  'q%NTFT`UfS8ks[tvc]R*{`m<eF6$e%5nRP*18Ye+pwn76O6Z.m|+_%l]~49}[:>f');
define('LOGGED_IN_SALT',    'DbCF-C?sZ.1h$btRtBya,g+DaOb:ZL>K&#.Nobj_&8qo^$9t2+]7$NacXb0M8iiC');
define('NONCE_SALT',        'GXHoc5cFNTxaN3]s^UMG]ZC,Do^qp4%K%|r8lO>4HVf/(v/z5}YI=/%`12ve}}Uz');


/****************************************************************************/
/*                        General WordPress Settings                        */
/****************************************************************************/
define('WPLANG', '');
define('WP_DEBUG', false);
define('WP_CACHE', false);
define('WP_DEBUG_LOG', false);




/****************************************************************************/
/*                     Disable WordPress Auto-updates                       */
/*           http://getflywheel.com/flywheel-wordpress-3-7/                 */
/****************************************************************************/
define('WP_AUTO_UPDATE_CORE', false);


if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

if ( array_key_exists('HTTP_X_FORWARDED_PROTO', $_SERVER) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' )
	$_SERVER['HTTPS']='on';



require_once(ABSPATH . 'wp-settings.php');
