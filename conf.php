<?php
global $wpdb;

$current_user = wp_get_current_user();
define('PEC_USER_ID', $current_user->ID);
define('PREFIX',$wpdb->prefix);


define('PEC_PATH_LOCAL','/'); //=== When in live
$dir = str_replace('\\','/',dirname(__FILE__));
$host = $_SERVER['DOCUMENT_ROOT'];
$plug_dir = str_replace($host,'',$dir);
define('PEC_PATH', $plug_dir);
define('PEC_WP_ROOT',str_replace('\\','/',ABSPATH));
$pec_wp_root_strlen = strlen(PEC_WP_ROOT);
define('PEC_PLUGIN_DIR',substr($dir, $pec_wp_root_strlen));
define('PEC_PLUGIN_ROOT_DIR',$dir);

if(function_exists('get_site_url')) {
    define('WP_SITE_URL', get_site_url().'/');
}
else {
    define('WP_SITE_URL','http://'.$_SERVER['HTTP_HOST'].PEC_PATH_LOCAL);
}

define('WP_PEC_PLUGIN_SITE_URL',WP_SITE_URL.PEC_PLUGIN_DIR);
//============Generatl Settings


/******** DO NOT MODIFY ***********/
require_once('pec.php');
/**********************************/
?>
