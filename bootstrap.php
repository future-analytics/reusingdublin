<?php
/**
 * @package ReusingDublin
 * @author daithi coombes <webeire@gmail.com>
 */

define('REUSINGDUBLIN_DIR', realpath(dirname(__FILE__)));


spl_autoload_register(function($class){

	$file = REUSINGDUBLIN_DIR . '/lib/' . $class . '.php';
	if(is_readable($file))
		require_once($file);
});

//load configuration
require_once(REUSINGDUBLIN_DIR . '/config.php');
new Config($resuingdublinConfig);

$config = Config::getInstance();