<?php
define( 'ABS_PATH', dirname(__FILE__) . '/' );
error_reporting(E_ERROR | E_WARNING | E_PARSE);
date_default_timezone_set( 'UTC' );

require_once('./include/class.hg-userpermission.php');


/*if(file_exists(ABS_PATH . 'hg-config.php')) {
	require_once( ABS_PATH . 'wp-config.php' );
}else{
	
}*/

$mongo_client = new MongoClient("mongodb://localhost:27017");
$mongo_db = $mongo_client->selectDB("testing");
$mongo_db->authenticate("test","113003z");
?>