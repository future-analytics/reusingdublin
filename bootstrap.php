<?php
namespace ReusingDublin;
use ReusingDublin;
/**
 * @package ReusingDublin
 * @author daithi coombes <webeire@gmail.com>
 */


// debug?
if(defined(REUSINGDUBLIN_DEBUG) && REUSINGDUBLIN_DEBUG==1){
	ini_set('display_errors', 'on');
	error_reporting(E_ALL);
}// end debug



/**
 * Autoloader.
 * @param string $class The class name including namespace
 */
spl_autoload_register(function($class){

	$file = REUSINGDUBLIN_DIR . '/lib/' . str_replace("ReusingDublin\\", "", $class) . '.php';
	if(is_readable($file))
		require_once($file);
});
